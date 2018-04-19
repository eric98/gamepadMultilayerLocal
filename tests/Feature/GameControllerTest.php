<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GameControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Set up tests.
     */
    public function setUp()
    {
        parent::setUp();
//        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function an_user_can_start_play()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user);

        $response = $this->get('/game');

        $response->assertSuccessful();

        $response->assertViewIs('game');
    }
}
