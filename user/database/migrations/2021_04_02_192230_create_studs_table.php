<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studs', function (Blueprint $table) {
            $table->id();
            $table->string('first-name'); 
            $table->string('last-name'); 
            $table->string('sex');  
            $table->string('e-mail');        
           $table->string('phone'); 
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
        Schema::dropIfExists('studs');
    }
}
