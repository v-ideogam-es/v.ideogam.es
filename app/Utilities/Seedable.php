<?php

namespace App\Utilities;

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
     * @return Stringy
     */
    protected static function table()
    {
        return Stringy::create(__CLASS__)->replace('TableSeeder', '')
            ->underscored()
            ->toLowerCase();
    }
}
