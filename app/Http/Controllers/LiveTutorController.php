<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LiveTutor;
use App\Models\RequestLiveTutor;
use Illuminate\Support\Facades\DB;

class LiveTutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function displayHalamanLiveTutor()
    {
        $LiveTutor = LiveTutor::paginate(2);

        return view('liveTutor/halamanLiveTutor', ['LiveTutor' => $LiveTutor]);
    }

    public function displayDaftarRequestLiveTutor()
    {
        $RequestLiveTutor = RequestLiveTutor::paginate(2);

        return view('liveTutor/halamanDaftarRequestLiveTutor', ['RequestLiveTutor' => $RequestLiveTutor]);
    }

    public function displayFormCreateLiveTutor ()
    {
        return view('liveTutor/halamanBuatLiveTutor');
    }

    public function displayFormRequestLiveTutor ()
    {
        return view('liveTutor/halamanRequestLiveTutor');
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

        LiveTutor::create($request->all());
        $request->session()->flash('alert-success', 'Live Tutor Berhasil di Buat!');
    	return redirect('liveTutor');
    }

    public function requestLiveTutor(Request $request)
    {
        $this->validate($request,[
    		'nameOfLiveTutor' => 'required',
    		'dateLiveTutor' => 'required',
    	]);

        RequestLiveTutor::create($request->all());
        $request->session()->flash('alert-success', 'Live Tutor Berhasil di Request!');
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
     * @param  int  $codeLiveTutor
     * @return \Illuminate\Http\Response
     */
    public function displayHalamanEditLiveTutor($codeLiveTutor)
    {
        $LiveTutor = \App\Models\LiveTutor::find($codeLiveTutor);
        return view('liveTutor/HalamanEditLiveTutor', ['LiveTutor' => $LiveTutor]);
    }
    // public function show($codeLiveTutor)
    //{
        //
    //}
    public function displayHalamanDetailLiveTutor($codeLiveTutor)
    {
        $LiveTutor = \App\Models\LiveTutor::find($codeLiveTutor);
        return view('liveTutor/HalamanDetailLiveTutor', ['LiveTutor' => $LiveTutor]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $codeLiveTutor
     * @return \Illuminate\Http\Response
     */
    //public function edit($codeLiveTutor)
    //{
        //
    //}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $codeLiveTutor
     * @return \Illuminate\Http\Response
     */
    public function editLiveTutor(Request $request, LiveTutor $codeLiveTutor)
    {
        $request->validate([
            'nameOfLiveTutor' => 'required',
            'nameOfTutorInLiveTutor' => 'required',
            'dateLiveTutor' => 'required',
            'durationLiveTutor' => 'required',
            'statusLiveTutor' => 'required',
            'linkLiveTutor' => 'required'
        ]);

        $codeLiveTutor->update($request->all());
        $request->session()->flash('alert-success', 'Live Tutor Berhasil di Ubah!');
        return redirect('liveTutor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $codeLiveTutor
     * @return \Illuminate\Http\Response
     */

    public function deleteLiveTutor (LiveTutor $codeLiveTutor)
    {
        //
        $codeLiveTutor->delete();
        return redirect('liveTutor');

    }

    public function deleteRequestLiveTutor (RequestLiveTutor $codeOfLiveTutor)
    {
        //
        $codeOfLiveTutor->delete();
        return redirect('liveTutor/halamanDaftarRequestLiveTutor');

    }
}
