<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
         * Requests permissions
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
            // Partners 
            [
            'name' => 'close-request',
            'display_name' => 'Close request',
            'description' => 'closes a request',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
            // Partners
            [
            'name' => 'edit-request',
            'display_name' => 'Edit request',
            'description' => 'edits a request',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ], 
            // Interpreters
            [
            'name' => 'answer-request',
            'display_name' => 'Answer request',
            'description' => 'answers to a request',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ], 
            // Interpreters
            [
            'name' => 'see-open-requests',
            'display_name' => 'See open requests',
            'description' => 'see open requests',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ], 
        ]);
    }
}
