<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('movies')->insert([
            'title' => 'Pirates of the Caribbean: The Curse of the Black Pearl ',
            'imageurl' => 'images/Pirates_of_the_Caribbean_The_Curse_of_the_Black_Pearl.jpg',
            'description' => 'Blacksmith Will Turner teams up with eccentric pirate "Captain" Jack Sparrow to save his love, the governor&#39;s daughter, from Jack&#39;s former pirate allies, who are now undead.',
            'release_date' => '2003',
            'genre_id' => '1',
            'director_id' => '1'
        ]);
        DB::table('movies')->insert([
            'title' => 'Guardians of the Galaxy',
            'imageurl' => 'images/Guardians_of_the_Galaxy.jpg',
            'description' => 'A group of intergalactic criminals are forced to work together to stop a fanatical warrior from taking control of the universe.',
            'release_date' => '2014',
            'genre_id' => '7',
            'director_id' => '2'
        ]);
        DB::table('movies')->insert([
            'title' => 'Pirates of the Caribbean: Dead Man&#39;s Chest',
            'imageurl' => 'images/Pirates_of_the_Caribbean_Dead_Mans_Chest.jpg',
            'description' => 'Jack Sparrow races to recover the heart of Davy Jones to avoid enslaving his soul to Jones#39; service, as other friends and foes seek the heart for their own agenda as well.',
            'release_date' => '2006',
            'genre_id' => '1',
            'director_id' => '1'
        ]);
    }
}
