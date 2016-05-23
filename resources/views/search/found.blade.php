@extends('layouts.app')
@section('content')
    <div class="container">
        </br>
        </br>
    <div class="panel-group">
        @foreach($models as $model)
            <?php
            $image = DB::table('images')->where('project_id', $model->id)->first();
            ?>
        <div class="panel panel-default">
            <div class="panel-heading"><a href="/show/{{$model->id}}">{{$model->title}}</a></div>
            <div class="panel-body">
                <img src="{{asset('images/'.$image->image_name)}}" class="img-rounded" alt="Cinque Terre" width="304" height="236">
                {{$model->option1}}
            </div>
        </div>
        @endforeach
    </div>
 </div>
@endsection