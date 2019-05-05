<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class NewUserTest extends TestCase
{

    /**
     * A basic unit test that creates a fake user in the database
     * We are wrapping this test in a DB transaction to make sure
     * the database is reset after each test.
     *
     * @return void
     */

    use DatabaseTransactions;


    public function testExample()
    {

        $user = new User();
        $user->name = 'Nobody';
        $user->email='nobody@none.com';
        $user->password='password';

        $this->assertTrue($user->save());
    }
}