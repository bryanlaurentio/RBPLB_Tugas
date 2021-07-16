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

        $materials = Material::paginate(9);

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
            'linkVideo' => 'required',
            'fileMaterial' => 'required'
    	]);
        $file = $request->file('fileMaterial');

        // nama file
        echo 'File Name: '.$file->getClientOriginalName();
        echo '<br>';

                // ekstensi file
        echo 'File Extension: '.$file->getClientOriginalExtension();
        echo '<br>';

                // real path
        echo 'File Real Path: '.$file->getRealPath();
        echo '<br>';

                // ukuran file
        echo 'File Size: '.$file->getSize();
        echo '<br>';

                // tipe mime
        echo 'File Mime Type: '.$file->getMimeType();

                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';

            // upload file
        $file->move($tujuan_upload,$file->getClientOriginalName());
        Material::create($request->all());
        $request->session()->flash('alert-success', 'Materi Berhasil di Upload!');
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

    public function displayHalamanDetailMateri($codeOfMaterial)
    {
        //
        $material = \App\Models\Material::find($codeOfMaterial);
        return view('materials.HalamanMateri', ['material' => $material]);

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
        $request->session()->flash('alert-success', 'Materi Berhasil di Ubah!');
        return redirect('material');
    }
    public function searchMaterial(Request $request)
	{

		$search = $request->search;


		$materials = DB::table('materials')
		->where('titleOfMaterial','like',"%".$search."%")
        ->orWhere('nameOfTutor', 'like', '%' . $search . '%')
        ->orWhere('categoryMaterial', 'like', '%' . $search . '%')
		->paginate();



		return view('materials.HalamanDaftarMateri',['materials' => $materials]);

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
