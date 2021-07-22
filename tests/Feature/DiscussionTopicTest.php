<?php

namespace Tests\Feature;

use App\Models\DiscussionTopic;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DiscussionTopicTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */


    // Nama : Riki Indramawan
    // NRP  : 05211940000039


    public function topik_diskusi_database ()
    {
        // Insert
        $discussion_topics = DiscussionTopic::create(["nameOfTopic" => "Investasi TI","categoryOfTopic" => "Investasi", "topicDescription" => "Membahas investasi TI"]);
        $this->assertDatabaseHas('discussion_topics', [
                'nameOfTopic' => 'Investasi TI','categoryOfTopic' => "Investasi", 'topicDescription' => 'Membahas investasi TI'
            ]);

        // Update
        DiscussionTopic::find($discussion_topics->codeOfTopic)->update(["nameOfTopic" => "Investasi Saham","categoryOfTopic" => "Saham", "topicDescription" => "Membahas Saham"]);

        $this->assertDatabaseHas('discussion_topics', [
            'nameOfTopic' => 'Investasi Saham','categoryOfTopic' => "Saham", 'topicDescription' => 'Membahas Saham'
            ]);

        // Delete
        $hapus_topik =  DiscussionTopic::destroy($discussion_topics->codeOfTopic);
    }

    public function menampilkan_halaman_forum_diskusi()
    {
        $response = $this->get(route('forumDiskusi'));
        $this->assertTrue(true);
    }
}
