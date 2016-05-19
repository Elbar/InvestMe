@extends('layouts.app')
@section('title')
    @parent
@stop

@section('content')
    @foreach($projects as $item)
        <h3>{{ $item->name }}</h3>
        <p>{{  $item->description }}</p>
        <div>
            <a class="btn btn-success" href="{{ URL::to('project/'.$item->slug) }}">Read more</a>
            <a class="btn btn-primary" href="{{ URL::to('project/'.$item->slug) }}">Donate</a>

        </div>
    @endforeach
    {!! $projects->render() !!}
@stop