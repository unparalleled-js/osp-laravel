<?php

namespace Tests\Feature;

use Tests\TestCase;

class AuthProcessTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        // seed and migrate database
        $this->artisan('migrate:refresh');
        $this->artisan('db:seed');
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
}
