<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Payment;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function displayHalamanAdmin()
    {
        $users = User::paginate(9);

        return view('admin.halamanAdmin', ['users' => $users]);


    }

    public function displayHalamanMembershipAdmin()
    {

        $payments = Payment::paginate(9);

        return view('admin.halamanMembershipAdmin', ['payments' => $payments]);


    }

    public function displayHalamanDetailPayment($codeOfPayment)
    {
        //
        $payment = \App\Models\Payment::find($codeOfPayment);
        Payment::all()->where('codeOfPayment', $codeOfPayment);
        return view('admin.halamanDetailPayment', ['payment' => $payment]);

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
    public function displayHalamanEditRole($id)
    {
        $users = \App\Models\User::find($id);
        return view('admin.HalamanEditRole', ['users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editRole(Request $request, User $id)
    {
        $request->validate([
            'role' => 'required',
        ]);

        $id->update($request->all());
        $request->session()->flash('alert-success', 'Role Berhasil di Ubah!');
        return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
    }
}
