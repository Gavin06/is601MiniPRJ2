<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateUserTest extends TestCase
{
    /**
     * A basic unit test that tests updating a user's email and username in
     * the DB by using the eloquent model insert options.
     *
     * @return void
     */
    public function testUpdateUser()


    {

        $user = User::find(36);
        $user->name = 'Steve Smith';
        $user->save();


        $this->assertTrue($user->save());
    }

}