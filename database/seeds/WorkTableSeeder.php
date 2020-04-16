<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('works')->insert([
            
            'img' => 'work-image1.jpg',
            'titre' => 'Clean & Minimal',
            'categorie' => 'Product Design',
            
        ]);
    }
}
