
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBackerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reward');
            $table->string('method_of_pay',30);
            $table->integer('amount');
            $table->integer('funds');
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::create('backer_project', function (Blueprint $table) {

            $table->integer('backer_id')->unsigned()->index();
            $table->foreign('backer_id')->references('id')->on('backers')->onDelete('cascade');

            $table->integer('project_id')->unsigned()->index();
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');

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
        Schema::drop('backers');
    }
}
