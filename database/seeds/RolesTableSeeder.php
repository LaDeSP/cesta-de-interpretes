<?php

use Illuminate\Database\Seeder;
use App\Role;
use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([[
            'name' => 'owner',
            'display_name' => 'Owner',
            'description' => 'owner of the website',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],    [
            'name' => 'interpreter',
            'display_name' => 'Interpreter',
            'description' => 'user that answer to the requests',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],  [
            'name' => 'partner',
            'display_name' => 'Partner',
            'description' => 'user that create requests',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],  [
            'name' => 'super_admin',
            'display_name' => 'Super Admin',
            'description' => 'user that have all privileges over the website',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]]);
    }
}
