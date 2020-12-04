<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GZI8PBsVoxadPVH2ydOxfOA9DHWPyv8pFtum2tQZK1rKgo3awwO7q',
                'remember_token' => NULL,
                'created_at' => '2020-12-01 08:11:57',
                'updated_at' => '2020-12-01 08:11:57',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'bunmin',
                'email' => 'feri.suryanata@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GZI8PBsVoxadPVH2ydOxfOA9DHWPyv8pFtum2tQZK1rKgo3awwO7q',
                'remember_token' => NULL,
                'created_at' => '2020-12-04 10:33:37',
                'updated_at' => '2020-12-04 10:33:40',
            ),
        ));


    }
}
