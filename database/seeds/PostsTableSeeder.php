<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Posts')->insert([
            [
                'user_id' => '1',
                'posts' => '初めまして',
                'created_at' => '2023-12-19 16:59:48',
                'updated_at' => '2023-12-19 16:59:48',
            ],
            [
                'user_id' => '2',
                'posts' => 'こんにちは',
                'created_at' => '2023-12-19 16:59:49',
                'updated_at' => '2023-12-19 16:59:49',
            ],
            [
                'user_id' => '3',
                'posts' => 'おはようございます',
                'created_at' => '2023-12-19 16:59:50',
                'updated_at' => '2023-12-19 16:59:50',
            ],
            [
                'user_id' => '4',
                'posts' => 'おやすみなさい',
                'created_at' => '2023-12-19 16:59:51',
                'updated_at' => '2023-12-19 16:59:51',
            ],
            [
                'user_id' => '1',
                'posts' => 'お腹すいた',
                'created_at' => '2023-12-19 16:59:53',
                'updated_at' => '2023-12-19 16:59:53',
            ],
        ]);
        //
    }
}
