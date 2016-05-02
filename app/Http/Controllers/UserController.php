<?php

namespace App\Http\Controllers;
use App\Creator;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $creator = $user->creator;
        $backer = $user->backer;
        $zagladki = DB::select('select * from bookmarks where user_id = ?', [$user->id]);
        return view('user.index',compact('creator','backer','zagladki'));
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
     * @param \App\Http\Controllers\Request|Request $request
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
     * @param \App\Http\Controllers\Request|Request $request
     * @param  int $id
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
     * @param \App\Http\Controllers\Request|Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function info(Request $request,$id){
        $validator = Validator::make($request->all(), [
            'image' => 'required|max:700|mimes:jpeg,bmp,png',
        ]);
        if ($validator->fails()) {
            return redirect('/profile')
                ->withInput()
                ->withErrors($validator);
        }
        if ($request->hasFile('image')){
            $user = User::find($id);
            $user->name = $request['username'];
            $user->email = $request['email'];

            $fileType1 = $request->file('image')->getClientOriginalExtension();
            $fname = Auth::user()->name.$request->title;
            $fileName1 = $fname.'.'.$fileType1;
            $documentRoot = 'images/user/';
            $request->file('image')->move($documentRoot,$fileName1);
            $user->avatar = $fileName1;
            $user->save();
            Session::flash('message','Successfully updated!');
        }

        return redirect('profile');
    }
    public function upload()
    {
        // getting all of the post data
        $file = array('image' => Input::file('image'));
        // setting up rules
        $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
        // doing the validation, passing post data, rules and the messages
        $validator = Validator::make($file, $rules);
        if ($validator->fails()) {
            // send back to the page with the input data and errors
            return Redirect::to('upload')->withInput()->withErrors($validator);
        } else {
            // checking file is valid.
            if (Input::file('image')->isValid()) {
                $destinationPath = 'uploads'; // upload path
                $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
                $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
                Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
                // sending back with message
                Session::flash('success', 'Upload successfully');
                return Redirect::to('upload');
            } else {
                // sending back with error message.
                Session::flash('error', 'uploaded file is not valid');
                return Redirect::to('upload');
            }
        }
    }
}

