<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('emmil')->nullable();
            $table->string('phone')->nullable();
            $table->string('msg')->nullable();
            $table->string('attchament')->nullable();
            $table->integer('building_number');
            $table->integer('appartment_number');
            $table->unsignedInteger('user_id');
            $table->timestamps();//created_at updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issues');
    }
}
