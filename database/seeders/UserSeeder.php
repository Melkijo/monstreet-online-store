<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


            DB::table('users')->insert([
                'name' => 'Admin',
                'email'=>'admin@admin.com',
               'type'=>0,
               'password'=> bcrypt('admin123'),
            ]);
            DB::table('users')->insert([
                'name' => 'User',
                'email' => 'user@example.com',
                'type' => 1,
                'password' => bcrypt('user123'),
            ]);
    }
}
