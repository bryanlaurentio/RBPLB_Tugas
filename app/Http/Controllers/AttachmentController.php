<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use App\Models\DiscussionTopic;
use Illuminate\Http\Request;

class AttachmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function displayFormCreateAttachment($codeOfTopic)
    {
        $discussion_topics = \App\Models\DiscussionTopic::find($codeOfTopic);

        return view('discussionForum/halamanBuatLampiran', ['discussion_topics' => $discussion_topics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeAttachment(Request $request)
    {
            //Menyimpan file gambar
            $file = $request->file('file');

            $namaFile = time()."_".$file->getClientOriginalName();

            //foto upload
            $file_upload = 'attachments';
            $file->move($file_upload,$namaFile);

            //membuat request dari database
            Attachment::create([
                'codeOfTopic'=>$request->codeOfTopic,
                'file' =>$namaFile,
                'titleOfAttachment'=>$request->titleOfAttachment,
              ]);

            $discussion_topics = DiscussionTopic::paginate(5);

            return redirect()->back();
            //return view('discussionForum.halamanForumDiskusi', ['discussion_topics' => $discussion_topics]);
    }

    public function displayAttachment($codeOfTopic)
    {
        //$attachments = \App\Models\Attachment::find($codeOfTopic);
        $discussion_topics = \App\Models\DiscussionTopic::find($codeOfTopic);
        $attachments = Attachment::all()->where('codeOfTopic', $codeOfTopic);

        return view('discussionForum/halamanLampiran', ['attachments' => $attachments, 'discussion_topics' => $discussion_topics]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
