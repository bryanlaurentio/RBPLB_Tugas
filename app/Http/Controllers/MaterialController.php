<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use Illuminate\Support\Facades\DB;

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

        $request->validate([
    		'titleOfMaterial' => 'required',
            'nameOfTutor' => 'required',
            'linkVideo' => 'required'
    	]);

        Material::create($request->all());
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
    public function displayHalamanEditMateri($codeOfMaterial)
    {
        //
        $material = \App\Models\Material::find($codeOfMaterial);
        return view('materials.HalamanEditMateri', ['material' => $material]);

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editMaterial(Request $request, Material $codeOfMaterial)
    {
        $request->validate([
            'titleOfMaterial' => 'required',
            'nameOfTutor' => 'required',
            'linkVideo' => 'required'
        ]);

        $codeOfMaterial->update($request->all());

        return redirect('material');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $codeOfMaterial
     * @return \Illuminate\Http\Response
     */
    public function deleteMaterial(Material $codeOfMaterial)
    {
        //
        $codeOfMaterial->delete();
        return redirect('material');

    }
}
