<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeleteUserTest extends TestCase
{
    /**
     * A basic unit test that deletes a user from the database
     *
     *
     * @return void
     *
     *
     */

    use DatabaseTransactions;

    public function testExample()
    {
        $user = User::inRandomOrder()->first();

        $user->delete();


        $this->assertTrue(true);


    }
}