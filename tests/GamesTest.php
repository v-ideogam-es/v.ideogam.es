<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class GamesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGamesIndex()
    {
        $this->visit('/games')
             ->see('Sonic')
             ->see('Super Mario Bros.');
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGamesCreate()
    {
        $this->visit('/games/create')
             ->see('Name')
             ->see('Description')
             ->see('Developer');
    }
}
