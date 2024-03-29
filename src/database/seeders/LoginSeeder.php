<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Login;
use DB;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('logins')->insert([
                [
                    'user_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                ]
            ]);
            DB::table('logins')->insert([
                [
                    'user_id' => 2,
                    'created_at' => date('Y-m-d H:i:s'),
                ]
            ]);
            DB::table('logins')->insert([
                [
                    'user_id' => 3,
                    'created_at' => date('Y-m-d H:i:s'),
                ]
            ]);
    }
}
