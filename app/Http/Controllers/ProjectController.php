<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Http\Requests;
use App\Project;

class ProjectController extends Controller
{
    public function add_new()
    {
        return  view('project.new');
    }
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
    public function create(Request $Project)
    {

        dd($Project);
        dd(Auth::user()->isCreator);

        $error_msg = [
            'name.required' => 'Проектин атын созсуз толтуруш керек.',
        ];

        $validator = Validator::make($Project->all(), [
            'name' => 'required|max:25',
            'textarea' => 'required|max:255',
            'file' => 'required|max:2048|mimes:jpeg,bmp,png',
        ],$error_msg);

        if ($validator->fails()) {
            return redirect('/new')
                ->withInput()
                ->withErrors($validator);
        }
        if ($Project->hasFile('file')) {

            $fileType = $Project->file('file')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$fileType;
            $documentRoot = 'images/';
            $new_project = new Project();
            $new_project->title = $Project->name;
            //dd($Project->category);
            $new_project->creator_id =1 ;// Auth::User()->id;
            $new_project->category_id = 1;
            $new_project->image =$fileName;
            $new_project->risk = $Project->textarea;
            $new_project->save();
            $Project->file('file')->move($documentRoot,$fileName);
            $number= $new_project->id;

            return redirect ('/show/'.$number);
        }

        return redirect ('/new');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ['pr' => Project::findOrFail($id),];

        return view('project.info')->with($data);
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
