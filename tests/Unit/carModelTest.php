<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class carModelTest extends TestCase
{
    /**
     * A basic unit test that verifies the model is a type string.
     *
     * @return void
     */
    public function testCarModel()

    {
        $car = Car::inRandomOrder()->first();


        $this->assertIsString($car->model);

    }
}