<?php

use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;

class TodolistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todolists')->insert([
            [
                'name' => 'Todolist 1',
                'user_id' => 1,
                'uuid' => Uuid::generate(4)
            ],
            [
                'name' => 'Todolist 2',
                'user_id' => 1,
                'uuid' => Uuid::generate(4)
            ]
        ]);
    }
}
