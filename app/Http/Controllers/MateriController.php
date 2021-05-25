<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materi;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */
    public function index()
    {
        $materis = materi::all();

        return view('viewmateri', ['materis' => $materis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createmateri');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materi = new Materi([
            'titleOfMateri' => $request->get('titleOfMateri'),
            'nameOfTutor' => $request->get('nameOfTutor'),
            'linkVideo' => $request->get('linkVideo'),
            'categoryUser' => $request->get('categoryUser'),
            'categoryMateri' => $request->get('categoryMateri')
            ]);

          $materi-> save();

          $materis = Materi::all();

          return view('/viewmateri', ['materis' => $materis]);
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
