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
            $table->string('name', 100);
            $table->string('cpf', 14)->unique();
            $table->string('data_nasc', 10);
            $table->string('email', 100)->unique();
            $table->string('profile', 10);
            $table->string('sexo', 10);
            $table->string('password', 10);
            $table->string('status_user', 10);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}