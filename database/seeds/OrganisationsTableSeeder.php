<?php

use Illuminate\Database\Seeder;

class OrganisationsTableSeeder extends Seeder
{
    use App\Utilities\Seedable;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $organisations = self::data();

        foreach ($organisations as $organisation) {
            $properties = [];

            foreach ($organisation as $property => $value) {
                $properties[$property] = $value;
            }

            DB::table(self::table())->insert($properties);
        }
    }
}
