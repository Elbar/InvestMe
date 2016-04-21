<?php

namespace App\Http\Controllers;

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
                echo "<table border='1' style='width:100%'>";
                foreach ($models as $model){
                            echo "<tr><td>";
                            echo $model->title;
                            echo "</td><td>";
                            echo $model->option1;
                            echo "</td><td>";
                            echo $model->option2;
                            echo "</td></tr>";
                }
                echo '</table>';
            } else
                return ('Not found (((((((((((((((((');
        }
        else
            return redirect('/');
    }
}
