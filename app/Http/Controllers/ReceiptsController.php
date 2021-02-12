<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use App\Models\Resource;
use App\Models\Section;
use App\Models\Wallet;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ReceiptsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $wid = request('wallet_id');
        //Receipt::create(request(['rec_no', 'wallet', 'cash', 'section_no', 'chap_no', 'item_no', 'type_no', 'note']));
        
        Receipt::create([
            'wallet_id' => $wid,
            'cash' => request('cash'),
            'section_no' => request('section_no'),
            'chap_no' => request('chap_no'),
            'item_no' => request('item_no'),
            'type_no' => request('type_no'),
            'note' => request('note'),
        ]);
        /*
        $wallet = DB::table('wallets')
        ->join('receipts', 'wallets.wallet_id', '=', 'receipts.wallet_id')
        ->select('receipts.*', 'wallets.*')
        ->where('receipts.wallet_id', $wallet_id)
        ->orderBy('receipts.id', 'DESC')
        ->get();
        */
        return redirect('wallets/' . $wid . '/edit');
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
    public function update(Receipt $receipt)
    {
        dd(request()->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$wid = Receipt::findOrFail($id)->get();
        
        Receipt::findOrFail($id)->delete();
        dd($id);
        //return redirect('/receipt');
    }
}
