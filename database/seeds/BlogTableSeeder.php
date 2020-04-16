<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            
            'img' => 'blog-image1.jpg',
            'titre' => 'How To Find Out Beautiful Workspace.',
            'description' => 'Lorem ipsum dolor sit consectetur adipiscing morbi venenatis.',
            
        ]);
    }
}
