<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        App\User::create([
			'name' => 'Emmanuel Valenzuela',
			'email' => 'emmanuel@kukulha.com',
			'password' => bcrypt('vapo1908'),
            'body' => 'Hola yo soy Emmanuel y soy desarrollador web, me gusta la comida, los viajes y las peliculas',
		]);

        App\User::create([
            'name' => 'Monica Marquez',
            'email' => 'hola@monicamarquezphotography.com',
            'password' => bcrypt('admin_moni_2019_$'),
            'body' => 'Soy fotógrafa de Recién nacidos, embarazos, familias y niños',
        ]);
    }
}
