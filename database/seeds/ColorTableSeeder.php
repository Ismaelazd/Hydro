<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            
            'color' => 'orginal',
            
        ]);
        DB::table('colors')->insert([
            
            'color' => 'red',
            
        ]);
        DB::table('colors')->insert([
            
            'color' => 'grey',
            
        ]);
        DB::table('colors')->insert([
            
            'color' => 'dusk',
            
        ]);
        DB::table('colors')->insert([
            
            'color' => 'sea',
            
        ]);
        
    }
}
