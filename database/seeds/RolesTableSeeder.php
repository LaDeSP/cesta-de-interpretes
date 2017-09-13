<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owner = new Role;

        $owner->name = 'owner';
        $owner->display_name = 'Owner';
        $owner->description = 'owner of the website';

        $owner->save();

        $interpreter = new Role;

        $interpreter->name = 'interpreter';
        $interpreter->display_name = 'Interpreter';
        $interpreter->description = 'user that answer to requests';

        $interpreter->save();

        $partner = new Role;

        $partner->name = 'partner';
        $partner->display_name = 'Partner';
        $partner->description = 'user that create requests';

        $partner->save();

        $super_admin = new Role;

        $super_admin->name = 'super_admin';
        $super_admin->display_name = 'Super Admin';
        $super_admin->description = 'user that have all privileges over the website';

        $super_admin->save();
    }
}
