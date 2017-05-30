<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ActorsinmoviesTableSeeder::class);
        $this->call(ActorsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(DirectorsTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
        $this->call(VotesTableSeeder::class);
    }
}
