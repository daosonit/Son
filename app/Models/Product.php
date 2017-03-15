<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'code', 'category_id', 'title', 'keyword', 'description', 'detail', 'selling', 'promotion'];
}
