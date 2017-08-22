<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'cpf', 'data_nasc', 'email', 'profile', 'sexo', 'password', 'status_user'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
