<?php

use App\Role;
use App\User;
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
        //je vide mes tables
        User::truncate();
        DB::table('role_user')->truncate();
        

        //Creer mes utilisateurs(users)
        $admin = User::create(array(
            "name" => "Luciani",
            "email" => "luciani@gmail.com",
            "password" => Hash::make('password')
        ));

        $manager = User::create(array(
            "name" => "Lawson",
            "email" => "lawson@gmail.com",
            "password" => Hash::make('password')
        ));

        //Récupérer le role de l'admin et celui du manager
        $adminRole = Role::where('name', 'admin')->first();
        $managerRole = Role::where('name', 'manager')->first();

        //Je vais affecter ou attacher à chaque utilisateur son role
        $admin->roles()->attach($adminRole);
        $manager->roles()->attach($managerRole);
    }
}
