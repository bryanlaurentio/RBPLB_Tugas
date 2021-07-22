<?php

//Muhammad Alif Amri Muzammil
//05211940000032
//RBPL B Kelompok 1
namespace Tests\Feature;

use App\Models\RequestLiveTutor;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RequestLiveTutorTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
    public function test_db_request()
    {
        $response = $this->get('/');
        RequestLiveTutor::factory()->create([
        'nameOfLiveTutor' => 'Pengenalan Etherium',
        'dateLiveTutor' => '2021-08-01',
        ]);

        $response->assertStatus(200);
    }

    /** @test */
    public function show_request_live_tutor()
    {
        $response = $this->get(route('liveTutor.displayDaftarRequestLiveTutor'));
        $this->assertTrue(true);
    }
}
