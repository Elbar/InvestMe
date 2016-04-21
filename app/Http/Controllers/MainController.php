<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
       $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function empty1(){
        return view('Admin.empty');
    }

    public function category(){
        $categories = Category::all();
        return view('Admin.categories',compact('categories'));
    }

}
