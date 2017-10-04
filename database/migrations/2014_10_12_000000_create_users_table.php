<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',       100)->nullable();
            $table->string('cpf',         14)->unique()->nullable();
            $table->string('data_nasc',   10)->nullable();
            $table->string('email',      100)->unique()->nullable();
            $table->string('profile',     30)->nullable();
            $table->string('sexo',        30)->nullable();
            $table->string('password'       )->nullable();
            $table->string('status_user', 20)->nullable();
            $table->rememberToken()->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}