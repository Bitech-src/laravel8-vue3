<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use DB;

class RoleSeeder extends Seeder
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
                    'pid' => 1,
                    'name' => "一般",
                    'created_at' => date('Y-m-d H:i:s'),
                ]
            ]);
            DB::table('roles')->insert([
                [
                    'pid' => 2,
                    'name' => "管理",
                    'created_at' => date('Y-m-d H:i:s'),
                ]
            ]);
    }
}
