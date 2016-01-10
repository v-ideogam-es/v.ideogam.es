<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    use App\Utilities\Seedable;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $games = self::data();

        foreach ($games as $game) {
            $properties = [];

            foreach ($game as $property => $value) {
                $properties[$property] = $value;
            }

            DB::table(self::table())->insert($properties);
        }
    }
}
