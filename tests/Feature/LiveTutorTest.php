<?php

//Muhammad Alif Amri Muzammil
//05211940000032
//RBPL B Kelompok 1
namespace Tests\Feature;

use App\Models\LiveTutor;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LiveTutorTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
    public function live_tutor_database()
    {
        $response = $this->get('/');
        LiveTutor::factory()->create([
            'nameOfLiveTutor' => 'Etherium',
            'nameOfTutorInLiveTutor' => 'John Cena',
    		'dateLiveTutor' => '2021-08-30',
            'durationLiveTutor' => '3',
            'statusLiveTutor' => 'Akan datang',
            'linkLiveTutor' => 'zoom.us/1241412123124'
        ]);

        $response->assertStatus(200);
    }

    /** @test */
    public function show_live_tutor_page()
    {
        $response = $this->get(route('liveTutor'));
        $this->assertTrue(true);
    }
}
