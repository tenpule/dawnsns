<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert([
            [
                'id' => '1',
                'username' => 'aaaa',
                'mail' => 'aaaa@aaaa.com',
                'password' => Hash::make('aaaa'),
                'bio' => '',
                'images' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '2',
                'username' => 'bbbb',
                'mail' => 'bbbb@bbbb.com',
                'password' => Hash::make('bbbb'),
                'bio' => '',
                'images' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '3',
                'username' => 'cccc',
                'mail' => 'cccc@cccc.com',
                'password' => Hash::make('cccc'),
                'bio' => '',
                'images' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '4',
                'username' => 'dddd',
                'mail' => 'dddd@dddd.com',
                'password' => Hash::make('dddd'),
                'bio' => '',
                'images' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '5',
                'username' => 'eeee',
                'mail' => 'eeee@eeee.com',
                'password' => Hash::make('eeee'),
                'bio' => '',
                'images' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        //
    }
}
