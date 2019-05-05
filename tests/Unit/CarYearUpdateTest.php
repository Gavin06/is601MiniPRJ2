<?php

namespace Tests\Unit;

use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarYearUpdateTest extends TestCase
{
    /**
     * A basic unit test that updates a random cars year to 2000
     *
     * @return void
     */
    public function testUpdateCarYear()


    {

        $car = Cars::inRandomOrder()->first();
        $car->year = '2000';
        $car->save();


        $this->assertTrue($car->save());
    }
}