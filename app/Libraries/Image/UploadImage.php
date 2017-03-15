<?php
namespace App\Libraries\Image;

use Config, Storage, Image;

class UploadImage extends AbstractImage
{
    /**
     * @param array $option
     * @return $this
     */
    public function make($option = array())
    {
        $this->path = array_get($option, 'path', '');
        $this->prefix_size = array_get($option, 'prefix_size', []);
        $this->first_name = array_get($option, 'first_name', '');

        return $this;
    }

    /**
     * @param $request
     */
    public function save($request)
    {
        $this->request = $request;

        $image_origin = Image::make($this->request);

        $path = $this->path($this->path);
        $this->checkFileSize($image_origin);
        $this->file_name = $this->fileName();

        if (!$this->error) {
            foreach ($this->prefix_size as $prefix => $size) {
                $full_path = $path . $prefix . '_' . $this->file_name;

                $width_crop = (isset($size['w'])) ? $size['w'] : 0;
                $height_crop = (isset($size['h'])) ? $size['h'] : 0;

                $crop_size = $this->getSizeCrop($image_origin, $width_crop, $height_crop);

                $image_new = $image_origin;

                $image_new->crop($crop_size['width'], $crop_size['height'], 0, 0)->resize($width_crop, $height_crop);

                Storage::put($full_path, $image_new->stream()->__toString(), 'public');
            }
        }
    }

    /**
     * @return string
     */
    public function fileName()
    {
        if ($this->file_name == '') {
            $this->file_name = $this->createName();
        }

        return $this->file_name;
    }

    /**
     * @return array
     */
    public function error()
    {
        return $this->message_error;
    }

    /**
     * @param $image
     */
    public function delete($image)
    {
        $path = $this->path($this->path);

        foreach ($this->prefix_size as $prefix => $size) {
            $full_path = $path . $prefix . '_' . $image;

            if (Storage::exists($full_path)) {
                Storage::delete($full_path);
            }
        }

    }
}

?>