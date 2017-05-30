<?php

use Illuminate\Database\Seeder;

class ActorsinmoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Actorsinmovies')->insert([
            'actor_id' => '1',
            'movie_id' => '1'
        ]);
        DB::table('Actorsinmovies')->insert([
            'actor_id' => '2',
            'movie_id' => '1'
        ]);
        DB::table('Actorsinmovies')->insert([
            'actor_id' => '3',
            'movie_id' => '1'
        ]);
        DB::table('Actorsinmovies')->insert([
            'actor_id' => '4',
            'movie_id' => '2'
        ]);
        DB::table('Actorsinmovies')->insert([
            'actor_id' => '5',
            'movie_id' => '2'
        ]);
        DB::table('Actorsinmovies')->insert([
            'actor_id' => '6',
            'movie_id' => '2'
        ]);
        DB::table('Actorsinmovies')->insert([
            'actor_id' => '1',
            'movie_id' => '3'
        ]);
        DB::table('Actorsinmovies')->insert([
            'actor_id' => '2',
            'movie_id' => '3'
        ]);
        DB::table('Actorsinmovies')->insert([
            'actor_id' => '3',
            'movie_id' => '3'
        ]);
        DB::table('Actorsinmovies')->insert([
            'actor_id' => '1',
            'movie_id' => '4'
        ]);
        DB::table('Actorsinmovies')->insert([
            'actor_id' => '2',
            'movie_id' => '4'
        ]);
        DB::table('Actorsinmovies')->insert([
            'actor_id' => '3',
            'movie_id' => '4'
        ]);
        DB::table('Actorsinmovies')->insert([
            'actor_id' => '1',
            'movie_id' => '5'
        ]);
        DB::table('Actorsinmovies')->insert([
            'actor_id' => '7',
            'movie_id' => '5'
        ]);
        DB::table('Actorsinmovies')->insert([
            'actor_id' => '8',
            'movie_id' => '5'
        ]);
        DB::table('Actorsinmovies')->insert([
            'actor_id' => '1',
            'movie_id' => '6'
        ]);
        DB::table('Actorsinmovies')->insert([
            'actor_id' => '9',
            'movie_id' => '6'
        ]);
        DB::table('Actorsinmovies')->insert([
            'actor_id' => '10',
            'movie_id' => '6'
        ]);
    }
}
