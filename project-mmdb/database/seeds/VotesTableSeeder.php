<?php

use Illuminate\Database\Seeder;

class VotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('votes')->insert([
            'user_id' => '1',
            'movie_id' => '1',
            'vote'=> '8'
        ]);
        DB::table('votes')->insert([
            'user_id' => '1',
            'movie_id' => '2',
            'vote'=> '6'
        ]);
        DB::table('votes')->insert([
            'user_id' => '1',
            'movie_id' => '3',
            'vote'=> '7'
        ]);
    }
}
