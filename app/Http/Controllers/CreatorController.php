<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Creator;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\DB;

class CreatorController extends Controller
{
    //
    public function index()
    {
        if (Auth::user()->isCreator == null)
            return view('creators.form');
        return redirect('/');
    }
    public function create()
    {

    }
    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'postcode' => 'required|integer',
            'country' => 'required',
            'address' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/creator')
                ->withInput()
                ->withErrors($validator);
        }
        $id = Auth::user()->id;
        $creator = new Creator();
        $creator->postcode = $request->postcode;
        $creator->country = $request->country;
        $creator->home_address = $request->address;
        $creator->user_id = $id;
        $creator->save();
        DB::update('update users set isCreator = 1 where id = ?', [$id]);

        return redirect('/new');
    }
}
