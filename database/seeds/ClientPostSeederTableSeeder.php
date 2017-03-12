<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Faker\factory as Faker;

class ClientPostSeederTableSeeder extends Seeder
{
    public function run()
    {

    	$faker = Faker::create();
            for ($i=1; $i < 10; $i++) { 
	        DB::table('client')->insert([
	        	'idclient' => $i,
	        	'nomclient' => 'Testclient' + $i,
	        	'adresseclient' => 'Rue de la rep',
	        	'adresse2client' => 'Autre adresse',
	        	'cpclient' => '76000',
	        	'villeclient' => 'Rouen',
	        	'telclient' => '0205080405',
	        	'mailclient' => 'client@gmail.com',
	        	'created_at' => new DateTime('now'),
	        	'updated_at' => new DateTime('now'),
	        ]);
    	}
    }
}
