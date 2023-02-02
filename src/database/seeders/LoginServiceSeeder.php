<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LoginRole;
use DB;

class LoginServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('login_services')->insert([
                [
                    'login_id' => 1,
                    'role_id' => 1,
                    'service_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                ]
            ]);
            DB::table('login_services')->insert([
                [
                    'login_id' => 2,
                    'role_id' => 2,
                    'service_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                ]
            ]);
            DB::table('login_services')->insert([
                [
                    'login_id' => 2,
                    'role_id' => 2,
                    'service_id' => 2,
                    'created_at' => date('Y-m-d H:i:s'),
                ]
            ]);
    }
}
