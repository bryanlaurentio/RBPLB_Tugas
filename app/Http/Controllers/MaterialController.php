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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function displayHalamanUploadMateri()
    {
        //
        // $materials = DB::table('materials')
        // ->get();

        return view('materials.halamanUploadMateri');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addMaterial(Request $request)
    {
        //
        // $request->validate([
        //     'titleOfMaterial' => 'required',
        //     'nameOfTutor' => 'required',
        //     'linkVideo' => 'required'
        // ]);
        // DB::table('materials')->insert([
        //     'titleOfMaterial' => $request->titleOfMaterial,
        //     'nameOfTutor' => $request->nameOfTutor,
        //     'linkVideo' => $request->linkVideo,
        //     'categoryUser' => $request->categoryUser,
        //     'categoryMaterial' => $request->categoryMaterial
        // ]);

        $request->validate([
            'titleOfMaterial' => 'required',
            'nameOfTutor' => 'required',
            'linkVideo' => 'required'
        ]);

          Material::create($request->all());

          return redirect()->route('materials.halamanDaftarMateri');
        // return redirect('materials.halamanDaftarMateri');

        // Material::create($request->all());

        // /// redirect jika sukses menyimpan data
        // return redirect()->route('materials.materi')


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
