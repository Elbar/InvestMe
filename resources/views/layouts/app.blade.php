<?php
use Illuminate\Support\Facades\DB;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>InvestMe</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
    {{--<link href="{{ elixir('css/app.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" type="text/css" href="<?=asset('bootstrap/css/font-awesome.min.css')?>" />
    <link rel="stylesheet" type="text/css" href="<?=asset('bootstrap/css/full-slider.css')?>" />
    <link rel="stylesheet" type="text/css" href="<?=asset('bootstrap/css/main.css')?>" />
    <link rel="stylesheet" type="text/css" href="<?=asset('bootstrap/css/style.css')?>" />
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/js/bootstrap.min.js"></script>

    <style>
        body {
            /*font-family: 'Lato';*/
        }

        .fa-btn {
            margin-right: 6px;
        }
        .image1 {
            max-width: 220px;
            max-height: 140px;
        }

    </style>

</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Навигация</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand invest-nav" href="{{ url('/') }}">
                    InvestMe
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/new') }}">Создать проект</a></li>
                    <li><a href="{{ url('/archive') }}">Архив проектов</a></li>
                    <li><a href="{{ url('/random') }}">Мне повезёт!</a> </li>
                    <li><a href="{{ url('/about') }}">О нас</a></li>
                </ul>
                <!-- Search -->
                <form class="navbar-form navbar-left" role="search" method="post" action="/search">
                    <div class="input-group">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <input type="text" name="search" class="form-control" placeholder="Искать">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit" value="">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                    </div><!-- /input-group -->
                </form>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Вход</a></li>
                        <li><a href="{{ url('/register') }}">Регистрация</a></li>

                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-suitcase"></i> Личный кабинет</a></li>
                                <li><a href="{{ url('/#') }}"><i class="fa fa-btn fa-bolt"></i> Уведомления</a></li>
                                <li><a href="{{ url('/#') }}"> <i class="fa fa-wrench"></i></i> Настройки</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Выйти</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <br>
    @yield('content')

@include('partials.footer')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Script to Activate the Carousel -->
    <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        });
    </script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.js"></script>
    <script>
        $(document).ready(function(){
            $(".nav-tabs a").click(function(){
                $(this).tab('show');
            });
        });
    </script>
@yield('script')
</body>
</html>
