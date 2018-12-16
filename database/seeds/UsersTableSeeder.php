<?php

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('1234567890');
        User::create([
            'name'     => 'admin',
            'email'    => 'daniilborowkow@gmail.com',
            'password' => $password,
        ]);
    }
}
