<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class carMakeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function testCarMakeEqualsValue() {

        $record = Car::inRandomOrder()->first();

        $this->assertThat(
            $record->make,
            $this->logicalOr(
                $this->equalTo('ford'),
                $this->equalTo('honda'),
                $this->equalTo('toyota')));
    }
}