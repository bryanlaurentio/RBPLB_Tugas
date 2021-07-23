<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membership;
use App\Models\Payment;
use App\Models\User;


class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function displayHalamanDaftarPaketMembership()
    {
        $Membership = Membership::all();

        return view('membership.show', ['membership' => $Membership]);
    }

    public function checkouta()
    {
        $User = User::all();

        return view('membership.checkout.paketa.view', ['checkouta' => $User]);
    }
    public function bria()
    {
        $User = User::all();

        return view('membership.checkout.paketa.bri.view', ['bria' => $User]);
    }
    public function bnia()
    {
        $User = User::all();

        return view('membership.checkout.paketa.bni.view', ['bnia' => $User]);
    }
    public function bcaa()
    {
        $User = User::all();

        return view('membership.checkout.paketa.bca.view', ['bcaa' => $User]);
    }

    public function storebank(Request $request)
    {
            $paymentReceipt = $request->file('paymentReceipt');
            $User = User::all();
            $namaFile = time()."_".$paymentReceipt->getClientOriginalName();

            $paymentReceipt_upload = 'payments';
            $paymentReceipt->move($paymentReceipt_upload,$namaFile);

            Payment::create([
                'codeOfPayment'=>$request->codeOfPayment,
                'name'=>$request->name,
                'email'=>$request->email,
                'nameOfBank'=>$request->nameOfBank,
                'nameOfBankAccount'=>$request->nameOfBankAccount,
                'paymentReceipt' =>$paymentReceipt,
              ]);

            return redirect()->back();
            //return view('discussionForum.halamanForumDiskusi', ['discussion_topics' => $discussion_topics]);
    }

    public function checkoutb()
    {
        $User = User::all();

        return view('membership.checkout.paketb.view', ['checkoutb' => $User]);
    }
    public function brib()
    {
        $User = User::all();

        return view('membership.checkout.paketb.bri.view', ['brib' => $User]);
    }
    public function bnib()
    {
        $User = User::all();

        return view('membership.checkout.paketb.bni.view', ['bnib' => $User]);
    }
    public function bcab()
    {
        $User = User::all();

        return view('membership.checkout.paketb.bca.view', ['bcab' => $User]);
    }
    public function checkoutc()
    {
        $User = User::all();

        return view('membership.checkout.paketc.view', ['checkoutc' => $User]);
    }
    public function bric()
    {
        $User = User::all();

        return view('membership.checkout.paketc.bri.view', ['bric' => $User]);
    }
    public function bnic()
    {
        $User = User::all();

        return view('membership.checkout.paketc.bni.view', ['bnic' => $User]);
    }
    public function bcac()
    {
        $User = User::all();

        return view('membership.checkout.paketc.bca.view', ['bcac' => $User]);
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
