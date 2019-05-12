<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class carYearUpdateTest extends TestCase
{
    /**
     * A basic unit test that updates a random cars year to 2000
     *
     * @return void
     */
    public function testUpdateCarYear()


    {

        $car = Car::inRandomOrder()->first();
        $car->year = '2000';
        $car->save();


        $this->assertTrue($car->save());
    }
}