<?php

namespace Tests\Unit;

use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarMakeTest extends TestCase
{
    /**
     * A basic unit test to verify that the Car brands are limited to
     * Ford, Honda, or Toyota.
     *
     * @return void
     */
    public function testCarMake()

    {
        $car=Cars::InRandomOrder()->first();


        $carMake=$car->brand;


        $this->assertContains($carMake, ['Honda', 'Ford', 'Toyota']);


    }
}