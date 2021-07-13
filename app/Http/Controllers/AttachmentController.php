<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
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
        // $file = $request->file('file')->store('storage/app/public');

        // \App\Models\Attachment::create([
        //     'titleOfAttachment' => $request->get('titleOfAttachment'),
        //     'file' => $file,
        //   ]);

        // return Berhasil;
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
