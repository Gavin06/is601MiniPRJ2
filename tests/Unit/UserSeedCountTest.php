<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class userSeedCountTest extends TestCase
{
    /**
     * A basic unit test example to verify the user count is 50.
     * the dd($userCount) can be used to verify the count, and the
     * asserts verify the userCount is an integer and the last assert
     * utilizes a less than or equal test condition.
     *
     * @return void
     */
    public function testUserCount()
    {
        $users = User::All();

        $userCount = $users->count();

        //dd($userCount);

        $this->assertIsInt($userCount);
        $this->assertLessThanOrEqual(50,$userCount);
    }
}