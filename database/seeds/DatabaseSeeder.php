<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(SkillTableSeeder::class);
        $this->call(AboutTableSeeder::class);
        $this->call(ColorTableSeeder::class);
        $this->call(BlogTableSeeder::class);
        $this->call(WorkTableSeeder::class);
    }
}
