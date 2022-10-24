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
        Schema::create('checklists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('completed_tasks');
            $table->unsignedBigInteger('total_tasks');
            $table->unsignedBigInteger('id_checklist_group');
            $table->timestamps();
            $table->foreign('id_checklist_group')->references('id')->on('checklist_groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checklists');
    }
};
