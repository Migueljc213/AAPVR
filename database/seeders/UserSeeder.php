<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'cpf'=>'13231323112',
                'role'=>'admin',
                'status'=>'active',
                'password'=>bcrypt('sk8namao'),
            ]
        ]);
    }
}
