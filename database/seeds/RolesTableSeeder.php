<?php

use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name' => 'User'
            ],
            [
                'name' => 'Administrator'
            ]
        ]);
    }
}
