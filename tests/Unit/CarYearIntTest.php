<?php

namespace Tests\Unit;

use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarYearIntTest extends TestCase
{
    /**
     * A basic unit test to see if the Car year is stored
     * as an integer, it is not in my DB. It is stored as
     * a string.  This test will fail as expected.
     *
     * @return void
     */
    public function testCarYearInteger()

    {
        $car = Cars::inRandomOrder()->first();

        //dd($user);

        $this->assertIsInt($car->year);


    }
}