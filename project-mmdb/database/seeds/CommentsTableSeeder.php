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
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lorem libero, commodo eu consectetur quis, hendrerit sed nibh. Vestibulum mi nulla, aliquet eget posuere eu, tempor sed velit. Nam dui.',
            'user_id' => '1',
            'movie_id' => '1'
        ]);
        DB::table('comments')->insert([
            'description' => 'Nulla eros ante, malesuada in sem sit amet, ultricies iaculis lacus. Sed eget imperdiet lectus. Pellentesque tristique sit amet urna consectetur semper. Suspendisse aliquet ipsum ac lacus varius venenatis. Sed.',
            'user_id' => '1',
            'movie_id' => '2'
        ]);
        DB::table('comments')->insert([
            'description' => 'Proin euismod a magna eget volutpat. Aliquam egestas semper nulla eget commodo. Sed iaculis porttitor mauris, quis imperdiet purus egestas a. Fusce ac orci tortor. Quisque laoreet pharetra nibh, id.',
            'user_id' => '1',
            'movie_id' => '3'
        ]);
        DB::table('comments')->insert([
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lorem libero, commodo eu consectetur quis, hendrerit sed nibh. Vestibulum mi nulla, aliquet eget posuere eu, tempor sed velit. Nam dui.',
            'user_id' => '2',
            'movie_id' => '1'
        ]);
        DB::table('comments')->insert([
            'description' => 'Nulla eros ante, malesuada in sem sit amet, ultricies iaculis lacus. Sed eget imperdiet lectus. Pellentesque tristique sit amet urna consectetur semper. Suspendisse aliquet ipsum ac lacus varius venenatis. Sed.',
            'user_id' => '3',
            'movie_id' => '2'
        ]);
        DB::table('comments')->insert([
            'description' => 'Proin euismod a magna eget volutpat. Aliquam egestas semper nulla eget commodo. Sed iaculis porttitor mauris, quis imperdiet purus egestas a. Fusce ac orci tortor. Quisque laoreet pharetra nibh, id.',
            'user_id' => '1',
            'movie_id' => '3'
        ]);
    }
}
