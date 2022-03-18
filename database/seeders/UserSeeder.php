<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->delete();

        $users = array(
            array(
                'id' => '1',
                'name' => 'testUser1',
                'email' => 'testUser1@test.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('123456789'),
                'type' => 'user',
                'created_at' => '2022-03-18 09:22:46',
                'updated_at' => '2022-03-18 09:22:46'
            ),
            array(
                'id' => '2',
                'name' => 'admin',
                'email' => 'admin@test.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('123456789'),
                'type' => 'admin',
                'created_at' => '2022-03-18 09:22:46',
                'updated_at' => '2022-03-18 09:22:46'
            ),
        );


        DB::table('users')->insert($users);
    }
}
