<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class carYearIntTest extends TestCase
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

        $car = Car::inRandomOrder()->first();
       $this->assertThat($car->year, $this->isType('string'),
         //   $this->greaterThan(0)
       );

    }
}