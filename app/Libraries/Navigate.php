<?php
namespace App\Libraries;

use App\Models\Navigate as Nav;
use App\Models\Category;

class Navigate
{
    /**
     * Danh sách navigation của các hệ thống
     */
    public function getNavigate()
    {
        return array(-1 => 'Chọn hệ thống',
            Nav::NAV_ADMIN => 'Hệ thống admin',
            Nav::NAV_WEBSITE => 'Hệ thống website');
    }

    /**
     * Danh sách select admin
     */
    public function getListsAdmin()
    {

        $list = [];
        foreach ($this->getNavAll() as $key => $value) {
            $list[$value->id] = $value->name;
        }

        return $list;
    }

    /**
     * Danh sách navigation full
     */
    public function getNavAll()
    {
        return Nav::orderBy('order', 'ASC')->get();
    }

    /**
     * Danh sách navigation admin
     */
    public function getNavAdmin()
    {
        return Nav::where('type', Nav::NAV_ADMIN)->orderBy('order', 'ASC')->get();
    }

    /**
     * Danh sách category dành cho select
     */
    public function getSelectCategories()
    {
        $list = [];
        foreach ($this->getCategories() as $keys => $values) {
            $list[$values->id] = $values->name;
        }

        return $list;
    }

    /**
     * Danh sách categories
     */
    public function getCategories()
    {
        return Category::orderBy('order', 'ASC')->get();
    }
}