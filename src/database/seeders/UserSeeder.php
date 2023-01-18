<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;

class UserSeeder extends Seeder
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
                    'name' => 'ユーザー１',
                    'email' => 'user@test.com',
                    'password' => Hash::make('12345678'),
                    'created_at' => date('Y-m-d H:i:s'),
                ]
            ]);
            DB::table('users')->insert([
                [
                    'name' => 'ユーザー２',
                    'email' => 'user2@test.com',
                    'password' => Hash::make('12345678'),
                    'created_at' => date('Y-m-d H:i:s'),
                ]
            ]);
            DB::table('users')->insert([
                [
                    'name' => 'ユーザー３',
                    'email' => 'user3@test.com',
                    'password' => Hash::make('12345678'),
                    'created_at' => date('Y-m-d H:i:s'),
                ]
            ]);
    }
}
