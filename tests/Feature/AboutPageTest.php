<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class aboutPageAccessTest extends TestCase
{
    /**
     * A basic feature test to verify the about page exists.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }
}