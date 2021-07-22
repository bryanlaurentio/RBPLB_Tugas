<?php

namespace Tests\Feature;

use App\Models\Answer;
use App\Models\DiscussionTopic;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AnswerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */


    // Nama : Riki Indramawan
    // NRP  : 05211940000039


    public function answer_database ()
    {
        $answers = Answer::create(["codeOfTopic" => 1,"nameOfAnswer" => "Riki", "filledOfAnswer" => "Setuju"]);
        $this->assertDatabaseHas('answers', [
                'codeOfTopic' => 1,'nameOfAnswer' => "Riki", 'filledOfAnswer' => 'Setuju'
            ]);
    }

}
