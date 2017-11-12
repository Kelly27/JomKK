<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('image_thumb');
            $table->string('image');
            $table->text('content_en');
            $table->text('content_ch');
            $table->text('content_my');
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
        Schema::dropIfExists('food_posts');
    }
}
