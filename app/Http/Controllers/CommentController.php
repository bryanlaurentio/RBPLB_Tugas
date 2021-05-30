<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiscussionTopic;
use App\Models\Answer;
use App\Models\Comment;

class CommentController extends Controller
{
    public function displayFormCreateComment($codeOfTopic)
    {
        $discussion_topics = \App\Models\DiscussionTopic::find($codeOfTopic);

        return view('halamanBuatKomen', ['discussion_topics' => $discussion_topics]);
    }

    public function createComment(Request $request)
    {
        \App\Models\Comment::create([
            'nameOfCommentator' => $request->get('nameOfCommentator'),
            'filledComment' => $request->get('filledComment'),
            'codeOfTopic' => $request->get('codeOfTopic'),
          ]);

          // Masih bingung untuk return pada bagian ini
          return;
    }

    public function displayBackToDetailDiscussionTopic($codeOfTopic)
    {
        $discussion_topics = \App\Models\DiscussionTopic::find($codeOfTopic);
        $answers = Answer::all()->where('codeOfTopic', $codeOfTopic);
        $comments = Comment::all()->where('codeOfTopic', $codeOfTopic);

        return view('halamanTopikDiskusi', ['discussion_topics' => $discussion_topics, 'answers' => $answers, 'comments' => $comments]);
    }
}
