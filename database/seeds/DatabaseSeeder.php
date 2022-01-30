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
        // $this->call(UsersTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(TypeVirusSeeder::class);
        $this->call(ImageSliderSeeder::class);
        $this->call(VirusArticleSeeder::class);
        $this->call(UserSeeder::class);
    }
}
