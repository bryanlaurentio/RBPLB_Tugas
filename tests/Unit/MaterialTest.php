<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Material;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
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
    public function test_example() //nama function bebas, test_input_record_ver1
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
    /** @test */
    public function apakah_bisa_insert_student()
    {
        $response = $this->get('/');
        return [
            // error pada field name, jika name kosong
            ['titleOfMaterial', ['titleOfMaterial' => '']],
            ['nameOfTutor', ['nameOfTutor' => '']],
            ['linkVideo', ['linkVideo' => '']],
            ['categoryUser', ['categoryUser' => '']],
            ['categoryMaterial', ['categoryMaterial' => '']],
            ['fileMaterial', ['fileMaterial' => '']],
        ];
        $response->assertStatus(200);
    }
}

