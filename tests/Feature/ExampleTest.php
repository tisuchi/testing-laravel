<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        /*$response = $this->get('/');

        $response->assertStatus(200);*/

        // 1. Visit the home page
        $response = $this->get('/');
        $response->assertSee('Laravel');

        // 2. Press a "Click me" link
        $response->clickLink('laracasts');
        // 3. See "You have been clicked, punk"
        // 4. Assert that the current url is /feedback
    }
}
