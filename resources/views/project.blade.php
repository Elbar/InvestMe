@extends('layouts.app')


@section('content')
    @if(Auth::check()){
    <div class="container">
        <div class="jumbotron">
            <h1> Проект </h1>
        </div>
    </div>
    @elseif(Auth::guest() && Auth::logout())
        <?php echo 1; ?>
   @endif

@endsection





