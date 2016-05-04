<?php

namespace App\Http\Controllers;

use App\Image;
use App\Project;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;

class SearchController extends Controller
{
    //
    public function search(Request $request){
        if($request->search) {
            $text = $request->search;
            $models = DB::table('projects')
                ->orderBy('title')
                ->where('title', 'like', $text.'%')
                ->get();
            if ($models) {
                return view('search.found',compact('models'));
            } else
                return view('search.error');
        }
        else
            return redirect('/');
    }
}
