<?php

namespace Tests\Unit;


use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Cars;
use App\User;

class CreateNewCarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    use DatabaseTransactions;

    public function testAddCar()
    {

        $cars = factory(User::class, 1)
            ->create()
            ->each(function ($u) {
                $u->cars()->save(factory(Cars::class)->make());

                $this->assertTrue($u->save());
            });

    }

}