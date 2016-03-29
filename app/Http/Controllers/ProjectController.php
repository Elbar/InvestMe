<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Http\Requests;
use App\Project;

class ProjectController extends Controller
{
    public function add_new()
    {
        $categories = Category::all();
        
        if (Auth::user()->isCreator == null)
            return redirect('/creator');
        return  view('project.new',compact('categories'));
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

        dd($Project->toArray());
        dd(Auth::user()->isCreator);

        $error_msg = [
            'project-title.required' => 'Проектин атын созсуз толтуруш керек.',
        ];

        $validator = Validator::make($Project->all(), [
            'project-title' => 'required|max:25',
            'project-video-cover' => 'required|active_url',
            'text_option' => 'required|max:200',
            'text_option2' => 'required',
            'inputCover1' => 'required|max:700|mimes:jpeg,bmp,png',
            'inputCover2' => 'required|max:700|mimes:jpeg,bmp,png',
            'inputCover3' => 'required|max:700|mimes:jpeg,bmp,png',
            'case-mesto' => 'required',
            'pod_razdel' => 'required',
        ],$error_msg);

        if ($validator->fails()) {
            return redirect('/new')
                ->withInput()
                ->withErrors($validator);
        }
        if ($Project->hasFile('inputCover1') && $Project->hasFile('inputCover2')
            && $Project->hasFile('inputCover3'))
        {
            $fileType1 = $Project->file('inputCover1')->getClientOriginalExtension();
            $fileType2 = $Project->file('inputCover2')->getClientOriginalExtension();
            $fileType3 = $Project->file('inputCover2')->getClientOriginalExtension();
            $fname = Auth::user()->name.$Project->project-title;
            $fileName1 = $fname.rand(11111,99999).'.'.$fileType1;
            $fileName2 = $fname.rand(11111,99999).'.'.$fileType2;
            $fileName3 = $fname.rand(11111,99999).'.'.$fileType3;
            ///
            $documentRoot = 'images/';
            $new_project = new Project();
            $new_project->title = $Project->project-title;
            $new_project->video_link = $Project->project-video-cover;
            $new_project ->risk;
            $new_project->creator_id =1 ;// Auth::User()->id;
            $new_project->category_id = 1;
            $new_project->image =$fileName1;
            $new_project->risk = $Project->textarea;
            $new_project->save();
            $Project->file('file')->move($documentRoot,$fileName1);
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
