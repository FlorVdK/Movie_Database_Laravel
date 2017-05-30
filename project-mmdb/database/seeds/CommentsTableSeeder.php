<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('comments')->insert([
            'description' => 'goed',
            'user_id' => '1',
            'movie_id' => '1'
        ]);
        DB::table('comments')->insert([
            'description' => 'slecht',
            'user_id' => '1',
            'movie_id' => '2'
        ]);
        DB::table('comments')->insert([
            'description' => 'meh',
            'user_id' => '1',
            'movie_id' => '3'
        ]);
    }
}
