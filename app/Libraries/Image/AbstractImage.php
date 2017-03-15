<?php
namespace App\Libraries\Image;

use Config, Storage, Image;

abstract class AbstractImage
{
    abstract public function make($option = array());

    abstract public function save($path);

    abstract public function fileName();

    abstract public function error();

    abstract public function delete($image);

    protected $request = null; //Request file
    protected $prefix_size = array();
    protected $first_name = ''; //first name file
    protected $file_name = '';
    protected $message_error = array();
    protected $error = false;
    protected $path = '';
    protected $extension = '';

    /**
     * @param $path
     * @return string
     */
    protected function path($path)
    {
        return str_finish($path, '/');
    }

    /**
     * @return string
     */
    protected function createName()
    {
        if (empty($this->first_name)) {
            return str_random(4) . time() . '.' . $this->request->getClientOriginalExtension();
        } else {
            return $this->first_name . time() . '.' . $this->request->getClientOriginalExtension();
        }
    }

    /**
     * @param $image_origin
     */
    protected function checkFileSize($image_origin)
    {
        $max_size = Config::get('upload_image.maxSize');

        if ($this->request->getClientSize() > $max_size) {
            $this->message_error[] = 'Size ảnh quá lớn.';
            $this->error = true;
        }

        if (!$this->error) {
            $width_img = $image_origin->width();
            $height_img = $image_origin->height();

            foreach ($this->prefix_size as $prefix => $size) {
                if (isset($size['w']) && isset($size['h'])) {
                    if ($width_img < $size['w'] && $height_img < $size['h']) {
                        $this->message_error[] = 'Origin image size is smaller than the crop image.';
                        $this->error = true;
                        break;
                    }
                } else {
                    $this->message_error[] = 'Initialize parameter fail.';
                    $this->error = true;
                    break;
                }
            }
        }
    }

    /**
     * @param $image_origin
     * @param $width_crop
     * @param $height_crop
     * @return array
     */
    protected function getSizeCrop($image_origin, $width_crop, $height_crop)
    {
        $width_img = $image_origin->width();
        $height_img = $image_origin->height();

        $set_size = function ($ratio) use ($width_crop, $height_crop) {
            return array('width' => $width_crop * $ratio,
                'height' => $height_crop * $ratio);
        };

        if (($width_img / $width_crop) > ($height_img / $height_crop)) {
            $ratio = floor($height_img / $height_crop);
            $data_return = $set_size($ratio);
        } elseif (($width_img / $width_crop) < ($height_img / $height_crop)) {
            $ratio = floor($width_img / $width_crop);
            $data_return = $set_size($ratio);
        } else {
            $data_return = array('width' => $width_img,
                'height' => $height_img);
        }

        return $data_return;
    }

}

?>