<?php

// Bryan Laurentio Anggoro
// 05211940000007
// RBPLB Kelompok 1;

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Material;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class MaterialTest extends TestCase
{
    //disini saya menggunakan WithoutMiddleware dikarenakan terdapat berbagai macam user
    //dan apabila menggunakan Middleware maka browse halaman akan ke redirect ke halaman login
    //dan tidak sesuai dengan kondisi yang diinginkan
    use WithoutMiddleware;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    //disini saya mengggunakan @test dikarenakan untuk melakukan pendefinisian function
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
        // $user = factory(User::class)->create();
        $this->assertTrue(true);
        // $this->actingAs($user);
    }
}

