<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('projectId')->unsigned();
            $table->string('projectName');
            $table->string('upload');
            $table->string('coursename');
            $table->string('courseCode'); 
            $table->string('degree');
            $table->integer('year');
            $table->string('github');
            $table->string('description');
            $table->string('groupMembers');
            $table->rememberToken();
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
        Schema::dropIfExists('projects');
    }
}
