<?php

use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'User',
                'email' => 'user@test.com',
                'password' => bcrypt('TD123456'),
                'role_id' => 1,
                'uuid' => Uuid::generate(4)
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@test.com',
                'password' => bcrypt('TD123456'),
                'role_id' => 2,
                'uuid' => Uuid::generate(4)
            ]
        ]);
    }
}
