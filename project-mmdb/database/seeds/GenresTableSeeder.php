<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('genres')->insert([
            'genre' => 'Action'
        ]);
        DB::table('genres')->insert([
            'genre' => 'Drama'
        ]);
        DB::table('genres')->insert([
            'genre' => 'Adventure'
        ]);
        DB::table('genres')->insert([
            'genre' => 'Comedy'
        ]);
        DB::table('genres')->insert([
            'genre' => 'Documentary'
        ]);
        DB::table('genres')->insert([
            'genre' => 'Romance'
        ]);
        DB::table('genres')->insert([
            'genre' => 'Sci-Fi'
        ]);
    }
}
