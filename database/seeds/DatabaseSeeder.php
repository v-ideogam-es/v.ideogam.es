<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OrganizationsTableSeeder::class);
        $this->call(PlatformsTableSeeder::class);
        $this->call(DevicesTableSeeder::class);
        $this->call(GamesTableSeeder::class);
        $this->call(ReleasesTableSeeder::class);
    }
}
