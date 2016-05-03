@extends('admin.master')

@section('title') Moderator page @endsection
@section('headerRight')
    @include('admin.moderator.partials.header',$commentLast)
@endsection
@section('left')
   @include('Admin.moderator.partials.left')
@endsection

@section('right')
    @yield('content')
@endsection