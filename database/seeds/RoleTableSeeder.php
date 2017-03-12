<?php

use Illuminate\Database\Seeder;

use Faker\factory as Faker;

class RoleTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        DB::table('role')->insert([
            'idrole' => 1,
            'nomrole' => 'Admin',


        ]);
    }
}
