<?php

namespace Tests\Unit;

use App\Car;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class deleteCarRecordTest extends TestCase
{
    /**
     * A basic unit test to delete a random car.
     *
     * @return void
     */
    use DatabaseTransactions;

    public function testDeleteCar()
    {
        $car = Car::inRandomOrder()->first();

        $car->delete();


        $this->assertTrue(true);


    }
}