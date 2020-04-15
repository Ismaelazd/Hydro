<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.',
            'description2' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.',
            'img' => 'about-image.jpg',
            
        ]);
    }
}
