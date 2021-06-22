<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiscussionTopic;
use App\Models\Answer;
use App\Models\Comment;

class DiscussionTopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discussion_topics = DiscussionTopic::all();

        return view('discussionForum.halamanForumDiskusi', ['discussion_topics' => $discussion_topics]);
    }

    public function displayFormCreateDiscussionTopic ()
    {
        return view('discussionForum.halamanBuatTopikDiskusi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createDiscussionTopic(Request $request)
    {
        $this->validate($request,[
    		'nameOfTopic' => 'required',
    		'categoryOfTopic' => 'required',
            'topicDescription' => 'required'
    	]);
 
        DiscussionTopic::create([
    		'nameOfTopic' => $request->nameOfTopic,
    		'categoryOfTopic' => $request->categoryOfTopic,
            'topicDescription' => $request->topicDescription
    	]);
 
    	return redirect('forumDiskusi');
    }

       /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function displayDetailDiscussionTopic($codeOfTopic)
    {
        $discussion_topics = \App\Models\DiscussionTopic::find($codeOfTopic);
        $answers = Answer::all()->where('codeOfTopic', $codeOfTopic);
        $comments = Comment::all()->where('codeOfTopic', $codeOfTopic);

        return view('discussionForum/halamanDetailTopikDiskusi', ['discussion_topics' => $discussion_topics, 'answers' => $answers, 'comments' => $comments]);
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
