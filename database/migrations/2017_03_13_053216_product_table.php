<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->string('image');
            $table->string('title');
            $table->string('keyword');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('category_id')->unsigned();
            $table->text('images');
            $table->string('title');
            $table->string('keyword');
            $table->string('description');
            $table->text('content');
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->integer('category_id')->unsigned();
            $table->string('images');
            $table->string('name');
            $table->string('title');
            $table->string('keyword');
            $table->text('description');
            $table->text('detail');
            $table->tinyInteger('status')->default(1)->comment('Trang thai: 0: NO ACTIVE, 1: ACTIVE');
            $table->tinyInteger('selling')->default(0)->comment('Trang thai: 0: NO ACTIVE, 1: ACTIVE');
            $table->tinyInteger('promotion')->default(0)->comment('Trang thai: 0: NO ACTIVE, 1: ACTIVE');
            $table->timestamps();
        });

        Schema::create('product_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->string('images');
            $table->string('title');
            $table->text('detail');
            $table->tinyInteger('status')->default(1)->comment('Trang thai: 0: NO ACTIVE, 1: ACTIVE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
        Schema::drop('product_images');
        Schema::drop('categories');
        Schema::drop('posts');
    }
}
