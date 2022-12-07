<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AuthTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'user',
            'email'=>'user@gmail.com',
            'password'=>Hash::make(123123)
        ]);
        Admin::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make(123123)
        ]);
    }
}
