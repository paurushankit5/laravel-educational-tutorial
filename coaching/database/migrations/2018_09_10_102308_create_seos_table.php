<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->text('keyword');
            $table->text('description');
            $table->integer('cat_id')->nullable()->unsigned();
            $table->foreign('cat_id')->references('id')->on('categories');
            
            $table->integer('course_id')->nullable()->unsigned();
            $table->foreign('course_id')->references('id')->on('courses');
           
            $table->integer('tag_id')->nullable()->unsigned();
            $table->foreign('tag_id')->references('id')->on('tags');
           
            $table->string('page_name')->nullable();
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
        Schema::dropIfExists('seos');
    }
}
