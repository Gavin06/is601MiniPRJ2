<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactPageTest extends TestCase
{
    /**
     * A basic feature test to verify the contact page is accessible.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }
}