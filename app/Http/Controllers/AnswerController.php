<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiscussionTopic;
use App\Models\Answer;
use App\Models\Comment;

class AnswerController extends Controller
{

    public function displayFormCreateAnswer($codeOfTopic)
    {
        $discussion_topics = \App\Models\DiscussionTopic::find($codeOfTopic);

        return view('halamanBuatJawaban', ['discussion_topics' => $discussion_topics]);
    }

    public function createAnswer(Request $request)
    {
        \App\Models\Answer::create([
            'nameOfAnswer' => $request->get('nameOfAnswer'),
            'filledOfAnswer' => $request->get('filledOfAnswer'),
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
