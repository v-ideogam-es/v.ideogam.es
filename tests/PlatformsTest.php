<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PlatformsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPlatformsIndex()
    {
        $this->visit('/platforms')
             ->see('Genesis')
             ->see('NES');
    }
}
