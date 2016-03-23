<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('video_link',100);
            $table->string('title',50);
            $table->text('risk');
            $table->date('duration');
            $table->integer('category_id')->unsigned();
            $table->integer('creator_id')->unsigned();
            $table->timestamps();

            $table->foreign('creator_id')->references('id')->on('creators')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projects');
        Schema::drop('backer_project');
    }
}
