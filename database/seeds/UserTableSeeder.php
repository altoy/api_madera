<?php

use Illuminate\Database\Seeder;


use Faker\factory as Faker;

class UserTableSeeder extends Seeder
{
    public function run()
    {

    	$faker = Faker::create();
        DB::table('utilisateur')->insert([
            'idutilisateur' => 0,
            'Nomutilisateur' => 'Admin',
            'prenomutilisateur' => 'Admin',
            'loginutilisateur' => 'admin@maderaGroup.com',
            'passwordutilisateur' => bcrypt('admin'),
            'idrole' => 1,
            'created_at' => new DateTime('now'),
            'updated_at' => new DateTime('now'),
        ]);
    }
}
