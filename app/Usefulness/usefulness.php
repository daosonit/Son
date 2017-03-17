<?php

if (!function_exists('asset_customer')) {
    /**
     * Generate an asset path for the application.
     *
     * @param  string $path
     * @param  bool $secure
     * @return string
     */
    function asset_customer($path, $secure = null)
    {
        return asset('customer/' . $path, $secure);
    }
}

//
if (!function_exists('get_as_route')) {
    function get_as_route($as_route)
    {
        $route = Route::getCurrentRoute()->getAction();

        if (isset($route['as'])) {

            $array_param = explode('.', $route['as']);
            foreach ($array_param as $key => $value) {
                if ($value === $as_route) {
                    return true;
                }
            }
        }
        return false;
    }
}
