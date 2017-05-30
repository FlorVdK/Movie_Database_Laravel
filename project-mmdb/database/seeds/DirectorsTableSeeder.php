<?php

use Illuminate\Database\Seeder;

class DirectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('directors')->insert([
            'name' => 'Gore Verbinski'
        ]);
        DB::table('directors')->insert([
            'name' => 'James Gunn'
        ]);
        DB::table('directors')->insert([
            'name' => 'Rob Marshall'
        ]);
        DB::table('directors')->insert([
            'name' => 'Joachim Rønning'
        ]);
        
    }
}
