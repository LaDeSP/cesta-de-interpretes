<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     public function run()
     {
        /**
         * Requests oermissions
         *
         */
        DB::table('permissions')->insert([[
            // Partners
            'name' => 'create-request',
            'display_name' => 'Create request',
            'description' => 'creates a request',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],  
            // Admins, Partners 
            [
            'name' => 'close-request',
            'display_name' => 'Close request',
            'description' => 'closes a request',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
            // Admins, Partners
            [
            'name' => 'edit-request',
            'display_name' => 'Edit request',
            'description' => 'edits a request',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ], 
            // Interpreter
            [
            'name' => 'answer-request',
            'display_name' => 'Answer request',
            'description' => 'answers to a request',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ], 
        ]);
    }
}
