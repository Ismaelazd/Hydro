<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            
            'name' => 'Web Design',
            'nombre' => 85,
            'color' => 'primary'
            
        ]);
        DB::table('skills')->insert([
            
            'name' => 'Photography',
            'nombre' => 90,
            'color' => 'primary'

            
        ]);
        DB::table('skills')->insert([
            
            'name' => 'Content Marketing',
            'nombre' => 75,
            'color' => 'primary'
            
        ]);
        DB::table('skills')->insert([
            
            'name' => 'CMS Admin',
            'nombre' => 70,
            'color' => 'primary'
            
        ]);
    }
}
