<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiscussionTopic;
use App\Models\LiveTutor;

class LiveTutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $LiveTutor = LiveTutor::all();

        return view('liveTutor.halamanLiveTutor', ['LiveTutor' => $LiveTutor]);
    }

    public function displayFormCreateLiveTutor ()
    {
        return view('liveTutor.halamanBuatLiveTutor');
    }

    public function createLiveTutor(Request $request)
    {
        $this->validate($request,[
    		'nameOfLiveTutor' => 'required',
            'nameOfTutorInLiveTutor' => 'required',
    		'dateLiveTutor' => 'required',
            'durationLiveTutor' => 'required',
            'statusLiveTutor' => 'required',
            'linkLiveTutor' => 'required'
    	]);

        LiveTutor::create([
    		'nameOfLiveTutor' => $request->nameOfLiveTutor,
            'nameOfTutorInLiveTutor' => $request->nameOfTutorInLiveTutor,
    		'dateLiveTutor' => $request->dateLiveTutor,
            'durationLiveTutor' => $request->durationLiveTutor,
            'statusLiveTutor' => $request->statusLiveTutor,
            'linkLiveTutor' => $request->linkLiveTutor
    	]);

    	return redirect('liveTutor');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
