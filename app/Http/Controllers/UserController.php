<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Creator;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
=======
use Illuminate\Http\Request;

use App\Http\Requests;
>>>>>>> 6b420789e4911c0cd3c54f4998f6747ac91026e6

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $user = Auth::user();
        $creator = $user->creator;
        $backer = $user->backer;
        return view('user.index',compact('creator','backer'));
=======
        //
>>>>>>> 6b420789e4911c0cd3c54f4998f6747ac91026e6
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
<<<<<<< HEAD

    public function change(Request $request){
        $pass = bcrypt($request['password']);
        dd($pass);
        $pw_c = Auth::user()->password;
        if ($pass != $pw_c){
            return "sorry";
        }
        return redirect('prof');
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function info(Request $request,$id){
        $user = User::find($id);
        $user->name = $request['username'];
        $user->email = $request['email'];
        $user->save();
        Session::flash('message','Successfully updated!');
        return redirect('prof');
    }
=======
>>>>>>> 6b420789e4911c0cd3c54f4998f6747ac91026e6
}
