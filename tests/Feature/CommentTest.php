<?php

namespace Tests\Feature;

use App\Models\Comment;
use App\Models\DiscussionTopic;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CommentTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */


    // Nama : Riki Indramawan
    // NRP  : 05211940000039


    public function comment_database ()
    {
        $answers = Comment::create(["codeOfTopic" => 1,"nameOfCommentator" => "Riki", "filledComment" => "sangat menarik"]);
        $this->assertDatabaseHas('comments', [
                'codeOfTopic' => 1,'nameOfCommentator' => "Riki", 'filledComment' => 'sangat menarik'
            ]);
    }

}
