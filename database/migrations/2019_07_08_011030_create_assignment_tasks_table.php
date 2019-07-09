<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignment_tasks', function (Blueprint $table) {
            $table->engine = ' MyISAM';
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('position_id');
            $table->string('task_name');
            $table->string('task_description');
            $table->string('_token');
            $table->timestamps();

            $table->foreign('position_id')->references('id')->on('position')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assignment_tasks');
    }
}
