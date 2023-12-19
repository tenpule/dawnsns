<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FollowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Follows')->insert([
            [
                'follow' => '1',
                'follower' => '2',
            ],
            [
                'follow' => '2',
                'follower' => '3',
            ],
            [
                'follow' => '3',
                'follower' => '4',
            ],
            [
                'follow' => '4',
                'follower' => '5',
            ],
            [
                'follow' => '5',
                'follower' => '1',
            ],
        ]);
        //
    }
}
