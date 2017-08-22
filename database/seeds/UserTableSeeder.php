<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        //Adicionar usuário por default
    	User::create([
    		'name'        => 'Administrador',
    		'cpf'	      => '000.000.000-00',
    		'data_nasc'   => '00/00/0000',
    		'email'       => 'admin@admin.com',
    		'profile'     => 'admin',
    		'sexo'        => 'masculino',
    		'password'    => bcrypt('123456'),
            'status_user' => 'Ativo'
    	]);
    }
}
