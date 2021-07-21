<?php

// Kevianwillie Handoyo
// 05211940000069
// RBPLB Kelompok 1;

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
    public function user_can_edit_role()
    {
        $response = $this->get('/');

        $user = User::factory()->create();

        User::factory()->make([
            'role' => 'Admin',
        ]);

        $this->assertDatabaseHas('users', [
            'role' => 'Admin',
        ]);

        $response->assertStatus(200);
    }
}
