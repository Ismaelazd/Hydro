<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0'); 
        User::truncate();
        DB::table('users')->insert([
            
            'name' => 'Isma',
            'email' => 'leamssi39@gmail.com',
            'password' => Hash::make('azertyuiop'),
            'role_id' => 1,
   
        ]);
    }
}
