<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Navigate extends Model
{
    const NAV_ADMIN = 0; //Hệ thống admin
    const NAV_WEBSITE = 1; //Hệ thống website


    protected $fillable   = ['name', 'type'];
    public    $timestamps = false;

    public function getNavItem()
    {
        return $this->hasMany('App\Models\NavigateItem', 'nav_id', 'id');
    }

    public function scopeFindName($query,$name = ''){
        return $query->where('name','LIKE','%'.$name.'%');
    }

    public function scopeFindType($query, $type = -1){
        return $query->where('type','LIKE',$type);
    }
}
