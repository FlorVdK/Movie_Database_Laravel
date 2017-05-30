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
        DB::table('movies')->insert([
            'title' => 'Pirates of the Caribbean: At World&#39;s End',
            'imageurl' => 'images/Pirates_of_the_Caribbean_At_Worlds_End.jpg',
            'description' => 'Captain Barbossa, Will Turner and Elizabeth Swann must sail off the edge of the map, navigate treachery and betrayal, find Jack Sparrow, and make their final alliances for one last decisive battle.',
            'release_date' => '2007',
            'genre_id' => '1',
            'director_id' => '1'
        ]);
        DB::table('movies')->insert([
            'title' => 'Pirates of the Caribbean: On Stranger Tides',
            'imageurl' => 'images/Pirates_of_the_Caribbean_On_Stranger_Tides.jpg',
            'description' => 'Jack Sparrow and Barbossa embark on a quest to find the elusive fountain of youth, only to discover that Blackbeard and his daughter are after it too.',
            'release_date' => '2011',
            'genre_id' => '1',
            'director_id' => '3'
        ]);
        DB::table('movies')->insert([
            'title' => 'Pirates of the Caribbean: Salazar&#39;s Revenge ',
            'imageurl' => 'images/Pirates_of_the_Caribbean_Salazars_Revenge.jpg',
            'description' => 'Captain Jack Sparrow searches for the trident of Poseidon.',
            'release_date' => '2017',
            'genre_id' => '1',
            'director_id' => '4'
        ]);
        DB::table('movies')->insert([
            'title' => 'Guardians of the Galaxy Vol. 2 ',
            'imageurl' => 'images/Guardians_of_the_Galaxy_Vol_2.jpg',
            'description' => 'The Guardians must fight to keep their newfound family together as they unravel the mystery of Peter Quill&#39;s true parentage.',
            'release_date' => '2017',
            'genre_id' => '7',
            'director_id' => '2'
        ]);
        DB::table('movies')->insert([
            'title' => 'Harry Potter and the Sorcerer&#39;s Stone',
            'imageurl' => 'images/Harry_Potter_and_the_Sorcerers_Stone.jpg',
            'description' => 'Rescued from the outrageous neglect of his aunt and uncle, a young boy with a great destiny proves his worth while attending Hogwarts School of Witchcraft and Wizardry.',
            'release_date' => '2001',
            'genre_id' => '8',
            'director_id' => '5'
        ]);
        DB::table('movies')->insert([
            'title' => 'Harry Potter and the Chamber of Secrets',
            'imageurl' => 'images/hp2.jpg',
            'description' => 'Harry ignores warnings not to return to Hogwarts, only to find the school plagued by a series of mysterious attacks and a strange voice haunting him.',
            'release_date' => '2002',
            'genre_id' => '8',
            'director_id' => '5'
        ]);
        DB::table('movies')->insert([
            'title' => 'Harry Potter and the Prisoner of Azkaban',
            'imageurl' => 'images/hp3.jpg',
            'description' => 'It&#39;s Harry&#39;s third year at Hogwarts; not only does he have a new "Defense Against the Dark Arts" teacher, but there is also trouble brewing. Convicted murderer Sirius Black has escaped the Wizards&#39; Prison and is coming after Harry.',
            'release_date' => '2004',
            'genre_id' => '8',
            'director_id' => '5'
        ]);
        DB::table('movies')->insert([
            'title' => 'Harry Potter and the Goblet of Fire ',
            'imageurl' => 'images/hp4.jpg',
            'description' => 'Harry finds himself mysteriously selected as an under-aged competitor in a dangerous tournament between three schools of magic.',
            'release_date' => '2005',
            'genre_id' => '8',
            'director_id' => '5'
        ]);
        DB::table('movies')->insert([
            'title' => 'Harry Potter and the Order of the Phoenix',
            'imageurl' => 'images/hp5.jpg',
            'description' => 'With their warning about Lord Voldemort&#39;s return scoffed at, Harry and Dumbledore are targeted by the Wizard authorities as an authoritarian bureaucrat slowly seizes power at Hogwarts.',
            'release_date' => '2007',
            'genre_id' => '8',
            'director_id' => '5'
        ]);
        DB::table('movies')->insert([
            'title' => 'Harry Potter and the Half-Blood Prince',
            'imageurl' => 'images/hp6.jpg',
            'description' => 'As Harry Potter begins his sixth year at Hogwarts, he discovers an old book marked as "the property of the Half-Blood Prince" and begins to learn more about Lord Voldemort&#39;s dark past.',
            'release_date' => '2009',
            'genre_id' => '8',
            'director_id' => '5'
        ]);
        DB::table('movies')->insert([
            'title' => 'Harry Potter and the Deathly Hallows: Part 1',
            'imageurl' => 'images/hp7.jpg',
            'description' => 'As Harry races against time and evil to destroy the Horcruxes, he uncovers the existence of three most powerful objects in the wizarding world: the Deathly Hallows.',
            'release_date' => '2010',
            'genre_id' => '8',
            'director_id' => '5'
        ]);
        DB::table('movies')->insert([
            'title' => 'Harry Potter and the Deathly Hallows: Part 2 ',
            'imageurl' => 'images/hp8.jpg',
            'description' => 'Harry, Ron and Hermione search for Voldemort&#39;s remaining Horcruxes in their effort to destroy the Dark Lord as the final battle rages on at Hogwarts.',
            'release_date' => '2011',
            'genre_id' => '8',
            'director_id' => '5'
        ]);
        DB::table('movies')->insert([
            'title' => 'Mission: Impossible',
            'imageurl' => 'images/mi1.jpg',
            'description' => 'An American agent, under false suspicion of disloyalty, must discover and expose the real spy without the help of his organization.',
            'release_date' => '1996',
            'genre_id' => '1',
            'director_id' => '6'
        ]);
        DB::table('movies')->insert([
            'title' => 'Mission: Impossible II ',
            'imageurl' => 'images/mi2.jpg',
            'description' => 'A secret agent is sent to Sydney, to find and destroy a genetically modified disease called "Chimera".',
            'release_date' => '2000',
            'genre_id' => '1',
            'director_id' => '6'
        ]);
        DB::table('movies')->insert([
            'title' => 'Mission: Impossible III  ',
            'imageurl' => 'images/mi3.jpg',
            'description' => 'Agent Ethan Hunt comes into conflict with a dangerous and sadistic arms dealer who threatens his life and his fianceé in response .',
            'release_date' => '2006',
            'genre_id' => '1',
            'director_id' => '6'
        ]);
        DB::table('movies')->insert([
            'title' => 'Mission: Impossible - Ghost Protocol',
            'imageurl' => 'images/mi4.jpg',
            'description' => 'The IMF is shut down when it&#39;s implicated in the bombing of the Kremlin, causing Ethan Hunt and his new team to go rogue to clear their organization&#39;s name.',
            'release_date' => '2011',
            'genre_id' => '1',
            'director_id' => '6'
        ]);
        DB::table('movies')->insert([
            'title' => 'Mission: Impossible - Rogue Nation ',
            'imageurl' => 'images/mi5.jpg',
            'description' => 'Ethan and team take on their most impossible mission yet, eradicating the Syndicate - an International rogue organization as highly skilled as they are, committed to destroying the IMF.',
            'release_date' => '2015',
            'genre_id' => '1',
            'director_id' => '6'
        ]);
    }
}
