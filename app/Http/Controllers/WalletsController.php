<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Box;
use App\Models\Resource;
use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;

class WalletsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$wallets = Wallet::all();
        //الحوافظ الاخيرة
        $wallets = Wallet::latest()->take(3)->get();
        return view('wallets.index', ['address' => 'حافظة نقدية جديدة'], compact('wallets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $resources = Resource::all();
        $boxes = Box::all();
        return view('/wallets.create', ['address' => 'حافظة نقدية جديدة'], compact('resources', 'boxes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Wallet::create([
            'resource_id' => request('resource_id'),
            'taxpayer' => request('taxpayer'),
            'box_no' => request('box_no'),
            'order_no' => request('order_no'),
            'status' => '0',
            'signature' => '0',
            'status' => Auth::id(),
        ]);

        return redirect('/wallets');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function show(Wallet $wallet)
    {
        $address = 'عرض بيانات حافظة نقدية';
        return view('wallets.show', compact('wallet', 'address'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function edit(Wallet $wallet)
    {
        //dd($wallet);
        $address = 'تعديل حافظة نقدية';
        return view('wallets.edit', compact('wallet', 'address'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wallet $wallet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wallet $wallet)
    {
        $wallet->delete();
        return redirect('/wallets');
    }
}
