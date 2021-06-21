<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function displayHalamanMateri()
    {
        $materials = Material::all();

        return view('materials.halamanDaftarMateri', ['materials' => $materials]);
    }

    public function displayHalamanUploadMateri()
    {
        return view('materials.halamanUploadMateri');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addMaterial(Request $request)
    {

        $this->validate($request,[
    		'titleOfMaterial' => 'required',
            'nameOfTutor' => 'required',
            'linkVideo' => 'required'
    	]);
        Material::create([
    		'titleOfMaterial' => $request->titleOfMaterial,
            'nameOfTutor' => $request->nameOfTutor,
            'linkVideo' => $request->linkVideo,
            'categoryUser' => $request->categoryUser,
            'categoryMaterial' => $request->categoryMaterial
    	]);

        return redirect('material');
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
