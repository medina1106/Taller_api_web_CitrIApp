<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                User::Create([
                    'cedula'=>'1193035243',
                    'name'=>'Juan Carlos',
                    'email'=>'juan.espaa2@misena.edu.co',
                    'celular'=>'3147471829',
                    'password'=>Hash::make('3147471829'),
                    'role'=>'admin',
                    'remember_token' => Str::random(20)
                ])->assignRole('admin');
        
                User::Create([
                    'cedula'=>'1285375034',
                    'name'=>'Julian Medina',
                    'email'=>'julian.medina0@misena.edu.co',
                    'celular'=>'3185917978',
                    'password'=>Hash::make('3147471829'),
                    'remember_token' => Str::random(20)
                ])->assignRole('agricultor');
                
    }
}
