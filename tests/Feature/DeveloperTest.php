<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeveloperTest extends TestCase
{
    /**
     * Test Get All Developers.
     *
     * @return void
     */
    public function testGetAllDevelopers()
    {
        $response = $this->get('/api/developers');

        $response->assertStatus(200);
    }

    /**
     * Test to Create new Developer
     *
     * @return void
     */
    public function testCreateDeveloper()
    {
        $response = $this->json('POST', '/api/developers',
            [
                'Dev_Ref' => uniqid('UnitTest_'),
                'Dev_Name' => "DeveloperTest"
            ]
        );

        $response->assertStatus(201);
    }
}
