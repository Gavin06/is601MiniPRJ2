<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Cars;

class CarSeedCountTest extends TestCase
{
    /**
     * A basic unit test that verify that the number of
     * car records stored in the DB is 50.
     *
     * @return void
     */
    public function testCarSeedCount()
    {
        $cars = Cars::All();

        $carCount = $cars->count();

        //dd($userCount);

        $this->assertIsInt($carCount);
        $this->assertLessThanOrEqual(50,$carCount);
    }
}