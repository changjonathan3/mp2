<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class AboutTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAbout()
    {
        $this->withoutMiddleware();
        $response = $this->get('/about');
        $response->assertStatus(200);
    }
}
