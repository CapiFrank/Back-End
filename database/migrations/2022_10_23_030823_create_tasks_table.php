<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->boolean('my_day');
            $table->boolean('important');
            $table->string('title');
            $table->text('contents');
            $table->date('final_date')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('note_id');
            $table->unsignedBigInteger('label_id');
            $table->unsignedBigInteger('checklist_id');
            $table->timestamps();

           $table->foreign('note_id')->references('id')->on('notes');
          $table->foreign('label_id')->references('id')->on('labels');
          $table->foreign('checklist_id')->references('id')->on('checklists');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
