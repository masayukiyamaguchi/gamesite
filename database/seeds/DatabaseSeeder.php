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
        // $this->call(UserSeeder::class);
        $this->call(ScreenShotsSeeder::class);
        $this->call(BlogsSeeder::class);
        $this->call(Bodygears::class);
        $this->call(Braceletgears::class);
        $this->call(Earringgears::class);
        $this->call(Feetgears::class);
        $this->call(Foods::class);
        $this->call(Geartables::class);
        $this->call(Handgears::class);
        $this->call(Headgears::class);
        $this->call(Jobs::class);
        $this->call(Leggears::class);
        $this->call(Necklacegears::class);
        $this->call(Races::class);
        $this->call(Ringgears::class);
        $this->call(Shields::class);
        $this->call(Waistgears::class);
        $this->call(Weapons::class);
        $this->call(Nulls::class);

    }
}
