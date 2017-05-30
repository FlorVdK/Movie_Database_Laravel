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
        //
        DB::table('users')->insert([
            'name' => 'Flor Van de Kerckhove',
            'email' => 'flor.vandekerckhove@odisee.be',
            'password' => bcrypt('Azerty123')
        ]);
    }
}
