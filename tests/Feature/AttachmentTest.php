<?php

namespace Tests\Feature;

use App\Models\Attachment;
use App\Models\DiscussionTopic;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AttachmentTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */


    // Nama : Riki Indramawan
    // NRP  : 05211940000039


    public function attachment_database ()
    {
        $attachments = Attachment::create(["codeOfTopic" => 1,"titleOfAttachment" => "Lampiran metode investasi", "file" => "metode.pdf"]);
        $this->assertDatabaseHas('attachments', [
                'codeOfTopic' => 1,'titleOfAttachment' => "Lampiran metode investasi", 'file' => 'metode.pdf'
            ]);
    }

}
