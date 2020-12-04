<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('permissions')->delete();

        \DB::table('permissions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'access administration area',
                'guard_name' => 'web',
                'created_at' => '2020-12-04 10:29:32',
                'updated_at' => '2020-12-04 10:29:35',
            ),
        ));


    }
}
