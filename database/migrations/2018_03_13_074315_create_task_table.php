<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('project_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('company_id')->unsigned();
            $table->integer('hours')->unsigned();
            $table->integer('days')->unsigned();
            $table->foreign('user_id')->reference('id')->on('users');
            $table->foreign('project_id')->reference('id')->on('projects');
            $table->foreign('company_id')->reference('id')->on('companies');
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
        Schema::dropIfExists('task');
    }
}
