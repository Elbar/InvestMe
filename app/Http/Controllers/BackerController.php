<?php

namespace App\Http\Controllers;

use App\Backer;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class BackerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $backers = Backer::all();
        return view('Admin.backer.index',compact('backers'));
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
        $backers = Backer::all();
        $backer = Backer::find($id);
        return view('Admin.backer.edit',compact('backers','backer'));
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
        $backer = Backer::find($id);
        $backer->update([
            'reward' => $request['reward'],
            'method_of_pay' => $request['method_of_pay'],
            'amount' => $request['amount'],
            'funds' => $request['funds']
        ]);
        $backer->save();
        Session::flash('message','Successfully updated');
        return redirect(route('backer'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $backer = Backer::find($id);
        $backer->delete();
        Session::flash('message','Successfully deleted');
        return redirect(route('backer'));
    }
}
