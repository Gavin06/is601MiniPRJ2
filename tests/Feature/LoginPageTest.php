<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class loginPageAccessTest extends TestCase
{
    /**
     * A basic feature test for the login page accessibility.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
}