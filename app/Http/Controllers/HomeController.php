<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\DiscussionTopic;
use App\Models\LiveTutor;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $materials = Material::all()->take(3);
        $discussion_topics = DiscussionTopic::all()->take(3);
        $LiveTutor = LiveTutor::all()->take(3);
        return view('dashboard', ['materials' => $materials,'discussion_topics' => $discussion_topics, 'LiveTutor' => $LiveTutor]);
    }
}
