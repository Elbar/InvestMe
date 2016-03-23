<?php

namespace App\Http\Controllers;

use App\Backer;
use App\Category;
use App\Comment;
use App\Creator;
use App\Project;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $count = $users->count();
        $projects = Project::all();
        $comments = Comment::all();
        $categories = Category::all();
        $backers = Backer::all();
        $creators = Creator::all();
        return view('Admin.index',compact('creators','count','projects','comments','categories','backers'));
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

    public function users(){
        $users = User::all();
        return view('Admin.users',compact('users'));
    }

    public function users_id($id){
        $users = User::all();
        $user = User::find($id);
        return view('Admin.edit',compact('users','user'));
    }

    public function users_id_post(Request $request, $id){
//        $user = User::find($id);
//        $user->update([
//            'name' => $request['name'],
//            'email' => $request['email'],
//            'isBacker' => $request['isBacker'],
//            'isCreator' => $request['isCreator'],
//            'isAdmin' => $request['isAdmin'],
//            'isModer' => $request['isModer'],
//            'isActive' => $request['isActive'],
//        ]);
        $data = [
            'name' => $request['name'],
            'email' => $request['email'],
            'isBacker' => $request['isBacker'],
            'isCreator' => $request['isCreator'],
            'isAdmin' => $request['isAdmin'],
            'isModer' => $request['isModer'],
            'isActive' => $request['isActive']
        ];
        $i = DB::table('users')->where('id',$id)->update($data);
        return redirect(route('users'));
    }

    public function users_delete($id){
        User::destroy($id);
        return redirect(route('users'));
    }
}
