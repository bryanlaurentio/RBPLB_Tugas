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
    public function create_data_in_discussion_topicsdb() //nama function bebas, test_input_record_ver1
    {
        $response = $this->get('/');
        DiscussionTopic::factory()->create([
            'nameOfTopic' => 'Investasi TI',
            'categoryOfTopic' => 'Teknologi',
            'topicDescription' => 'Membahas investasi TI'
        ]);

        $response->assertStatus(200);
    }

    /** @test */
    public function user_can_browse_halaman_forumDiskusi()
    {
        $response = $this->get(route('forumDiskusi'));
        $this->assertTrue(true);
    }
}
