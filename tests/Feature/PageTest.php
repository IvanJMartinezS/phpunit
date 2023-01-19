<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PageTest extends TestCase
{
    //Test welcome view
    public function testHome()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    //Test about view
    public function testAbout()
    {
        $response = $this->get('about');

        $response->assertStatus(200);
    }
}
