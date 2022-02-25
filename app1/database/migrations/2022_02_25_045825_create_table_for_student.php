<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableForStudent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()  //migrate
    {
        Schema::create('student', function (Blueprint $table) {
            
            $table->id();
            $table->string('name',191);
            $table->string('email',191)->unique();
            $table->string('mobile',20)->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //migrate:rollback
    {
        Schema::dropIfExists('student');
    }
}
