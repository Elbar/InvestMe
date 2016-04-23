<?php
namespace App\Http\Controllers;

use App\Category;
use App\Condition;
use App\Image;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
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
     * @return Response
     */
    public function index()
    {
        $project = Project::all();
        $data = [
            'active1' => Project::findOrFail(1),
            'active2' => Project::findOrFail(1),
            'active3' => Project::findOrFail(1)
        ];

        return view('index',compact('project'))->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $Project)
    {

        //dd($Project);
        //dd($Project['case_from1']);
        $id_user = Auth::user()->id;
        $id_creator = DB::table('creators')->where('user_id', $id_user)->first();
        $id_creator = $id_creator->id;
        $error_msg = [
            'project_title.required' => 'Проектин атын созсуз толтуруш керек.',
        ];

        $validator = Validator::make($Project->all(), [
            'project_title' => 'required|max:25',
            'project_video_cover' => 'required',
            'text_option' => 'required|max:200',
            'text_option2' => 'required',
            'inputCover1' => 'required|max:700|mimes:jpeg,bmp,png',
            'inputCover2' => 'required|max:700|mimes:jpeg,bmp,png',
            'inputCover3' => 'required|max:700|mimes:jpeg,bmp,png',
            'case_mesto' => 'required',
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
            $new_project = new Project();
            $new_project->title = $Project->project_title;
            $link = $Project->project_video_cover;
            $pos = strpos($link,"watch?v=");
            if ($pos != 0){
                $link = substr_replace($link,"embed/",$pos,8);
            }
            $new_project->video_link = $link;
            $new_project ->option1 = $Project->text_option;
            $new_project ->option2 = $Project->text_option2;
            $new_project ->mesto = $Project->case_mesto;
            $new_project ->teg = $Project->pod_razdel;
            $new_project->creator_id = $id_creator ;
            $new_project->category_id = $Project->chooseCategory;
            $new_project->duration = $Project->date_okanchenie;
            $new_project->save();

            $id_project = $new_project->id;

            $fileType1 = $Project->file('inputCover1')->getClientOriginalExtension();
            $fileType2 = $Project->file('inputCover2')->getClientOriginalExtension();
            $fileType3 = $Project->file('inputCover2')->getClientOriginalExtension();
            $fname = Auth::user()->name.$Project->title;
            $fileName1 = $fname.rand(11111,99999).'.'.$fileType1;
            $fileName2 = $fname.rand(11111,99999).'.'.$fileType2;
            $fileName3 = $fname.rand(11111,99999).'.'.$fileType3;
            $documentRoot = 'images/';
            $Project->file('inputCover1')->move($documentRoot,$fileName1);
            $Project->file('inputCover2')->move($documentRoot,$fileName2);
            $Project->file('inputCover3')->move($documentRoot,$fileName3);

            $image1 = new Image;
            $image1->image_name = $fileName1;
            $image1->project_id = $id_project;
            $image1->save();
            $image2 = new Image;
            $image2->image_name = $fileName2;
            $image2->project_id = $id_project;
            $image2->save();
            $image3 = new Image;
            $image3->image_name = $fileName3;
            $image3->project_id = $id_project;
            $image3->save();

            for ($i = 1; $i <= $Project->number; $i++) {
                $ob = new Condition();
                $ob->startMoney = $Project['case_from'.$i];
                $ob->endMoney = $Project['case_to'.$i];
                $ob->description = $Project['u_text'.$i];
                $ob->number = $Project['predel'.$i];
                $ob->project_id = $id_project;
                $ob->save();
            }

            return redirect ('/show/'.$id_project);
        }

        return redirect ('/new');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        $bookmark_id = "none";

        if(Auth::check()) {
            $id_user = Auth::user()->id;
            $results = DB::select('select id from bookmarks where project_id = ? AND user_id = ?', [$project->id,$id_user]);
            if($results)
            {
                $bookmark_id = $results;
            }
        }

        $data = ['pr' => Project::findOrFail($id),'image' =>  $project->image()->get(),'bookmark'=>$bookmark_id];
        //dd($data);
        return view('project.info')->with($data);
    }
    
    public function archive(){
        $archive = Project::all();
        return view('project.archive',compact('archive'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
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
     * @return Response
     */
    public function update()
    {
        //
        return view('project.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
