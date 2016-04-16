<?php

namespace App\Http\Controllers;

use App\Bookmark;
use App\Project;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class BookmartController extends Controller
{
    //
    public function add($id)
    {
        $id_user = Auth::user()->id;
        $project = Project::find($id);
        $model = new Bookmark();
        $model -> title = $project ->title;
        $model -> user_id = $id_user;
        $model -> project_id = $project -> id;
        $model ->save();

        redirect('/show/'.$id);

    }

    public function delete($id)
    {
        $model = Bookmark::find($id);
        $model->delete();
    }

    public function show($id)
    {
        //
    }
}
