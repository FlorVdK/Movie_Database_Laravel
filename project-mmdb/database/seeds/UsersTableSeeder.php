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
        DB::table('users')->insert([
            'name' => 'Rolf Van de Kerckhove',
            'email' => 'Rolf.vandekerckhove@odisee.be',
            'password' => bcrypt('Azerty123')
        ]);
        DB::table('users')->insert([
            'name' => 'Florence Van de Kerckhove',
            'email' => 'Florence.vandekerckhove@odisee.be',
            'password' => bcrypt('Azerty123')
        ]);
    }
}
