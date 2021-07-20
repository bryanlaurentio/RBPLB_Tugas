<?php

// Bryan Laurentio Anggoro
// 05211940000007
// RBPLB Kelompok 1;
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Material;

class MaterialTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
    public function create_data_in_materialdb() //nama function bebas, test_input_record_ver1
    {
        $response = $this->get('/');
        Material::factory()->create([
            'titleOfMaterial' => 'Analisa Saham BBCA',
            'nameOfTutor' => 'Bryan Laurentio',
            'linkVideo' => 'intip.in/testingbuatrbpl',
            'categoryUser' => 'Membership',
            'categoryMaterial' => 'Saham',
            'fileMaterial' => 'intip.in/inifiletestrbpl'
        ]);

        $response->assertStatus(200);
    }

    /** @test */
    public function user_can_browse_halaman_material()
    {
        $response = $this->get(route('materials'));
        $this->assertTrue(true);
    }
}
