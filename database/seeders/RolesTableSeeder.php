<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('roles')->delete();

        \DB::table('roles')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'super admin',
                'guard_name' => 'web',
                'created_at' => '2020-12-04 10:27:11',
                'updated_at' => '2020-12-04 10:27:14',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'admin',
                'guard_name' => 'web',
                'created_at' => '2020-12-04 10:27:26',
                'updated_at' => '2020-12-04 10:27:28',
            ),
        ));


    }
}
