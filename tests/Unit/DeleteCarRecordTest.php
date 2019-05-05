<?php

namespace Tests\Unit;

use App\Cars;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeleteCarRecordTest extends TestCase
{
    /**
     * A basic unit test to delete a random car.
     *
     * @return void
     */
    use DatabaseTransactions;

    public function testDeleteCar()
    {
        $car = Cars::inRandomOrder()->first();

        $car->delete();


        $this->assertTrue(true);


    }
}