<?php

use Illuminate\Database\Seeder;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('actors')->insert([
            'name' => 'Johnny Depp',
            'imageurl' => 'images/Johnny_Depp.jpg'
        ]);
        DB::table('actors')->insert([
            'name' => 'Orlando Bloom',
            'imageurl' => 'images/Orlando_Bloom.jpg'
        ]);
        DB::table('actors')->insert([
            'name' => 'Keira Knightley',
            'imageurl' => 'images/Keira_Knightley.jpg'
        ]);
        DB::table('actors')->insert([
            'name' => 'Chris Pratt',
            'imageurl' => 'images/Chris_Pratt.jpg'
        ]);
        DB::table('actors')->insert([
            'name' => 'Vin Diesel',
            'imageurl' => 'images/Vin_Diesel.jpg'
        ]);
        DB::table('actors')->insert([
            'name' => 'Bradley Cooper',
            'imageurl' => 'images/Bradley_Cooper.jpg'
        ]);
        DB::table('actors')->insert([
            'name' => 'Penélope Cruz',
            'imageurl' => 'images/Penélope_Cruz.jpg'
        ]);
        DB::table('actors')->insert([
            'name' => 'Ian McShane',
            'imageurl' => 'images/Ian_McShane.jpg'
        ]);
        DB::table('actors')->insert([
            'name' => 'Geoffrey Rush',
            'imageurl' => 'images/Geoffrey_Rush.jpg'
        ]);
        DB::table('actors')->insert([
            'name' => 'Javier Bardem',
            'imageurl' => 'images/Javier_Bardem.jpg'
        ]);
    }
}
