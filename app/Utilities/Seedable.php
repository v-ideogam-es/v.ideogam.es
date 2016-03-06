<?php

namespace App\Utilities;

use Carbon\Carbon;
use DB;
use RadHam\Yaml;
use Stringy\Stringy;


trait Seedable
{
    /**
     * @return mixed
     */
    protected static function data()
    {
        return Yaml::parseFile(database_path() . '/seeds/data/' . self::table() . '.yaml');
    }

    /**
     * @return void
     */
    protected static function seed()
    {
        $seeds = self::data();

        foreach ($seeds as $seed) {
            $properties = [];
            $properties['created_at'] = Carbon::now();

            foreach ($seed as $property => $value) {
                $properties[$property] = $value;
            }

            DB::table(self::table())->insert($properties);
        }
    }

    /**
     * @return Stringy
     */
    protected static function table()
    {
        return Stringy::create(__CLASS__)
            ->replace('TableSeeder', '')
            ->underscored()
            ->toLowerCase();
    }
}
