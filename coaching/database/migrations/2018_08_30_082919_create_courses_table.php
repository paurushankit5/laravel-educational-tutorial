<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_name');
            $table->string('course_slug')->unique();
            $table->string('course_overview');
            $table->string('course_details');
            $table->string('course_requirements');
            $table->integer('course_user_rated_count')->default(0);
            $table->integer('course_star_count')->default(0);
            $table->integer('course_lecture_count');
            $table->string('course_video_length');
            $table->string('course_language');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('courses');
    }
}
