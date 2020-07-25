<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Role::truncate(); // Pour vider la table role
       
       Role::create(array(
           "name" => "admin"
       ));

       Role::create(array(
        "name" => "manager"
    ));
       
    }
}
