<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiscussionTopic;

class DiscussionTopicController extends Controller
{
    public function displayDiscussionTopic()
    {
        $discussion_topics = DiscussionTopic::all();

        return view('halamanForumDiskusi', ['discussion_topics' => $discussion_topics]);
    }

    public function displayFormCreateDiscussionTopic()
    {
        return view('halamanBuatTopikDiskusi');
    }

    public function createDiscussionTopic(Request $request)
    {
        \App\Models\DiscussionTopic::create([
            'nameOfTopic' => $request->get('nameOfTopic'),
            'categoryOfTopic' => $request->get('categoryOfTopic'),
            'topicDescription' => $request->get('topicDescription'),
          ]);

          return redirect('/discussionTopic');
    }

    public function displayFormEditDiscussionTopic($codeOfTopic)
    {
       $discussion_topics = \App\Models\DiscussionTopic::find($codeOfTopic);

        return view('halamanEditTopikDiskusi', ['discussion_topics' => $discussion_topics]);
    }

    public function updateDiscussionTopic(Request $request, $codeOfTopic)
    {
        $discussion_topics = \App\Models\DiscussionTopic::find($codeOfTopic);
        $discussion_topics->nameOfTopic = $request->nameOfTopic;
        $discussion_topics->categoryOfTopic = $request->categoryOfTopic;
        $discussion_topics->topicDescription = $request->topicDescription;
        $discussion_topics->save();

        return redirect('/discussionTopic');
    }

    public function deleteDiscussionTopic($codeOfTopic)
    {
        $discussion_topics = \App\Models\DiscussionTopic::find($codeOfTopic);
        $discussion_topics->delete();

        return redirect('/discussionTopic');
    }

}
