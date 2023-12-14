<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    /**
     * 
     *
     * @return void
     */
    public function testRoutesAccessibility()
    {
        $routes = [
            '/socios',
            '/socios/create',
            '/socios/1', 
            '/socios/1/edit', 
        ];

        foreach ($routes as $route) {
            $response = $this->get($route);
            $response->assertStatus(200); 
        }
    }
}
