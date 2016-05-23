@extends('layouts.app')

@section('content')

{{--<div class="container">--}}
    {{--<section style="padding-bottom: 50px; padding-top: 50px;">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-4">--}}
                {{--@if (count($errors) > 0)--}}
                        {{--<!-- Form Error List -->--}}
                {{--<div class="alert alert-danger">--}}
                    {{--<strong>Whoops! Something went wrong!</strong>--}}

                    {{--<br>--}}

                    {{--<ul>--}}
                        {{--@foreach ($errors->all() as $error)--}}
                            {{--<li>{{ $error }}</li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}
                {{--</div>--}}
                {{--@endif--}}
                {{--<form action="{{ url('information',Auth::user()->id) }}" method="post" enctype="multipart/form-data">--}}

                    {{--<div class="form-group">--}}
                        {{--<div class="image-upload">--}}
                            {{--<label for="file-input">--}}
                                {{--<img src="{{ asset('images/user/'.Auth::user()->avatar) }}" class="img-rounded img-responsive" />--}}
                            {{--</label>--}}

                            {{--<input id="file-input" type="file" style="display:none" class="form-control-file" name="image"/>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<label>Registered Username</label>--}}
                    {{--<input type="text" class="form-control" value="{{ Auth::user()->name }}" name="username">--}}
                    {{--<label>Registered Email</label>--}}
                    {{--<input type="text" class="form-control" value="{{ Auth::user()->email }}" name="email">--}}
                    {{--<br>--}}
                    {{--<button type="submit" class="btn btn-primary">Update Details</button>--}}
                    {{--{{ Form::token() }}--}}
                {{--</form>--}}
                {{--@if (Session::has('message'))--}}
                    {{--<div class="alert alert-success"> {{ Session::get('message') }} </div>--}}
                {{--@endif--}}
                {{--<br /><br/>--}}
            {{--</div>--}}
            {{--<div class="col-md-8">--}}
                {{--<div class="alert alert-info">--}}
                    {{--<h3>Created projects</h3>--}}
                    {{--<ul>@if ($creator)--}}
                            {{--@foreach($creator->project as $project)--}}
                                {{--<li>--}}
                                    {{--{{ $project->title }}--}}
                                {{--</li>--}}
                            {{--@endforeach--}}
                        {{--@else--}}
                            {{--No created projects--}}
                        {{--@endif--}}
                    {{--</ul>--}}
                    {{--<h3>Backed projects</h3>--}}
                    {{--<ul>@if ($backer)--}}
                            {{--@foreach($backer->project as $backed)--}}
                                {{--<li>{{ $backed->title }}</li>--}}
                            {{--@endforeach--}}
                        {{--@else--}}
                            {{--No backed projects--}}
                        {{--@endif--}}
                    {{--</ul>--}}
                    {{--<h3>Bookmarks</h3>--}}
                    {{--<ul>@if ($zagladki)--}}
                            {{--@foreach($zagladki as $pr)--}}
                                {{--<li>--}}
                                    {{--{{ $pr->title }}--}}
                                {{--</li>--}}
                            {{--@endforeach--}}
                        {{--@else--}}
                            {{--No bookmarks--}}
                        {{--@endif--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<!-- ROW END -->--}}


    {{--</section>--}}
    {{--<!-- SECTION END -->--}}
{{--</div>--}}
{{--<!-- CONATINER END -->--}}



{{--<!-- GOOGLE ADD SECTION START -->--}}
{{--<div id="add-div-main">--}}
    {{--<link href="http://designbootstrap.com/track/add-style.css" rel="stylesheet" />--}}
    {{--<div class="add-wrapper-db">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">--}}
                {{--</div>--}}
                {{--<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 text-center">--}}
                    {{--<div class="add-block" id="ftr-large-add"  >--}}
                        {{--<center>--}}
                            {{--<script async data-rocketsrc="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="text/rocketscript"></script>--}}
                            {{--<!-- db-footer-one-728-90 -->--}}
                            {{--<ins class="adsbygoogle"--}}
                                 {{--style="display:inline-block;width:728px;height:90px"--}}
                                 {{--data-ad-client="ca-pub-2936243881134126"--}}
                                 {{--data-ad-slot="5253257896"></ins>--}}
                            {{--<script type="text/rocketscript">--}}
{{--(adsbygoogle = window.adsbygoogle || []).push({});--}}
{{--</script>--}}
                        {{--</center>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<!-- GOOGLE ADD SECTION END -->--}}

{{--@endsection--}}
{{--<!-- REQUIRED SCRIPTS FILES -->--}}
{{--<!-- CORE JQUERY FILE -->--}}
{{--<script data-rocketsrc="assets/js/jquery-1.11.1.js" type="text/rocketscript"></script>--}}
{{--<!-- REQUIRED BOOTSTRAP SCRIPTS -->--}}
{{--<script data-rocketsrc="assets/js/bootstrap.js" type="text/rocketscript">--}}

{{--</script>--}}
    {{--<script>--}}
        {{--document.getElementById("file-input").style.display="none";--}}
    {{--</script>--}}



<div class="well">
    <div class="container">
        <div class="row ">
            <div class="col-lg-4 col-md-4">
                <img src="images/pr.jpg" class="img-circle" alt="" width="300" height="300">

            </div>
            <div class="col-lg-4 col-md-4">
                <h2><b>Joker</b></h2>
                <h4><span class="fa fa-envelope"></span> joker@yahoo.com </h4>
                <h4><small><span class="fa fa-phone-square"></span> +996 778 569 236</small></h4>
                <h4><small><span class="fa fa-user"></span> login-nickname </small></h4>
                <h4><small><span class="fa fa-map-marker"></span> Бишкек, Кыргызстан </small></h4>
                <hr>
                <div class="btn-group pull-right" role="group" aria-label="...">

                    <button type="button" class="btn btn-default"><span class="fa fa-facebook"></span></button>

                </div>
                <p> 0 вложились </p>
                <p> Регистрация 3 мая </p>
                <hr>
                <button type="button" class="btn btn-primary"><span class="fa fa-pencil"></span> Редактировать профиль</button>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <span class="fa fa-credit-card"></span> Кошелек
                    </div>
                    <div class="panel-body">
                        <p><a href="" class="wallet"><b>Visa</b></a></p>
                        <p><a href="" class="wallet"><b>ЭлСом</b></a></p>
                        <p><a href="" class="wallet">Мобильник</a></p>
                    </div>
                    <div class="panel-footer">

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- Wrapper -->
<div class="container">

    <ul class="nav nav-pills">
        <li class="active"><a data-toggle="tab" href="#home">Закладки</a></li>
        <li><a data-toggle="tab" href="#menu1">Проекты</a></li>
        <li><a data-toggle="tab" href="#menu2">Сообщения</a></li>
        <li><a data-toggle="tab" href="#menu3">Комментарии</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <h3>Проекты за которымы Вы следите</h3>
            <p><em>(Если ни одного) Вы еще не следите ни за одним проектом</em></p>
            <h2>Активные</h2>
            <br>
            <div class="row">
                <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="thumbnail">
                        <img src="images/01.jpg" class="rat" alt="">
                        <div class="caption">
                            <h4><a href="project-item.html">Странные люди</a></h4>
                            <h4><small>Авторы: François Ollivier</small></h4>
                            <ol class="list-inline">
                                <li><h4> <small><span class="fa fa-map-marker"></span> Бишкек </small> </h4> </li>
                                <li><h4> <small><span class="fa fa-tag"></span> Искусство</small> </h4> </li>
                            </ol>
                        </div>
                        <div class="ratings">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                    <span class="sr-only">10% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="thumbnail">
                        <img src="images/01.jpg" class="rat" alt="">
                        <div class="caption">
                            <h4><a href="project-item.html">Странные люди</a></h4>
                            <h4><small>Авторы: François Ollivier</small></h4>
                            <ol class="list-inline">
                                <li><h4> <small><span class="fa fa-map-marker"></span> Бишкек </small> </h4> </li>
                                <li><h4> <small><span class="fa fa-tag"></span> Искусство</small> </h4> </li>
                            </ol>
                        </div>
                        <div class="ratings">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                    <span class="sr-only">10% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="thumbnail">
                        <img src="images/01.jpg" class="rat" alt="">
                        <div class="caption">
                            <h4><a href="project-item.html">Странные люди</a></h4>
                            <h4><small>Авторы: François Ollivier</small></h4>
                            <ol class="list-inline">
                                <li><h4> <small><span class="fa fa-map-marker"></span> Бишкек </small> </h4> </li>
                                <li><h4> <small><span class="fa fa-tag"></span> Искусство</small> </h4> </li>
                            </ol>
                        </div>
                        <div class="ratings">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                    <span class="sr-only">10% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="thumbnail">
                        <img src="images/01.jpg" class="rat" alt="">
                        <div class="caption">
                            <h4><a href="project-item.html">Странные люди</a></h4>
                            <h4><small>Авторы: François Ollivier</small></h4>
                            <ol class="list-inline">
                                <li><h4> <small><span class="fa fa-map-marker"></span> Бишкек </small> </h4> </li>
                                <li><h4> <small><span class="fa fa-tag"></span> Искусство</small> </h4> </li>
                            </ol>
                        </div>
                        <div class="ratings">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                    <span class="sr-only">10% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <h2>Законченные</h2>
            <div class="row">
                <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="thumbnail">
                        <img src="images/01.jpg" class="rat" alt="">
                        <div class="caption">
                            <h4><a href="project-item.html">Странные люди</a></h4>
                            <h4><small>Авторы: François Ollivier</small></h4>
                            <ol class="list-inline">
                                <li><h4> <small><span class="fa fa-map-marker"></span> Бишкек </small> </h4> </li>
                                <li><h4> <small><span class="fa fa-tag"></span> Искусство</small> </h4> </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="menu1" class="tab-pane fade">
            <h3>Ваши активные проекты</h3>
            <p><em>(Если ни одного) Вы еще не создали ни одного проекта</em></p>
            <button type="button" class="btn btn-primary"><span class="fa fa-diamond"></span> Создать проект</button>
            <br>
            <div class="row">
                <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="thumbnail">
                        <img src="images/01.jpg" class="rat" alt="">
                        <div class="caption">
                            <h4><a href="project-item.html">Странные люди</a></h4>
                            <h4><small>Авторы: François Ollivier</small></h4>
                            <ol class="list-inline">
                                <li><h4> <small><span class="fa fa-map-marker"></span> Бишкек </small> </h4> </li>
                                <li><h4> <small><span class="fa fa-tag"></span> Искусство</small> </h4> </li>
                            </ol>
                        </div>
                        <div class="ratings">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                    <span class="sr-only">10% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="thumbnail">
                        <img src="images/01.jpg" class="rat" alt="">
                        <div class="caption">
                            <h4><a href="project-item.html">Странные люди</a></h4>
                            <h4><small>Авторы: François Ollivier</small></h4>
                            <ol class="list-inline">
                                <li><h4> <small><span class="fa fa-map-marker"></span> Бишкек </small> </h4> </li>
                                <li><h4> <small><span class="fa fa-tag"></span> Искусство</small> </h4> </li>
                            </ol>
                        </div>
                        <div class="ratings">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                    <span class="sr-only">10% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="thumbnail">
                        <img src="images/01.jpg" class="rat" alt="">
                        <div class="caption">
                            <h4><a href="project-item.html">Странные люди</a></h4>
                            <h4><small>Авторы: François Ollivier</small></h4>
                            <ol class="list-inline">
                                <li><h4> <small><span class="fa fa-map-marker"></span> Бишкек </small> </h4> </li>
                                <li><h4> <small><span class="fa fa-tag"></span> Искусство</small> </h4> </li>
                            </ol>
                        </div>
                        <div class="ratings">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                    <span class="sr-only">10% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="thumbnail">
                        <img src="images/01.jpg" class="rat" alt="">
                        <div class="caption">
                            <h4><a href="project-item.html">Странные люди</a></h4>
                            <h4><small>Авторы: François Ollivier</small></h4>
                            <ol class="list-inline">
                                <li><h4> <small><span class="fa fa-map-marker"></span> Бишкек </small> </h4> </li>
                                <li><h4> <small><span class="fa fa-tag"></span> Искусство</small> </h4> </li>
                            </ol>
                        </div>
                        <div class="ratings">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                    <span class="sr-only">10% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <h3>Ваши законченные проекты</h3>
            <p><em>(Если ни одного) У Вас еще нет законченного проекта</em></p>
            <div class="row">
                <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="thumbnail">
                        <img src="images/01.jpg" class="rat" alt="">
                        <div class="caption">
                            <h4><a href="project-item.html">Странные люди</a></h4>
                            <h4><small>Авторы: François Ollivier</small></h4>
                            <ol class="list-inline">
                                <li><h4> <small><span class="fa fa-map-marker"></span> Бишкек </small> </h4> </li>
                                <li><h4> <small><span class="fa fa-tag"></span> Искусство</small> </h4> </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="thumbnail">
                        <img src="images/01.jpg" class="rat" alt="">
                        <div class="caption">
                            <h4><a href="project-item.html">Странные люди</a></h4>
                            <h4><small>Авторы: François Ollivier</small></h4>
                            <ol class="list-inline">
                                <li><h4> <small><span class="fa fa-map-marker"></span> Бишкек </small> </h4> </li>
                                <li><h4> <small><span class="fa fa-tag"></span> Искусство</small> </h4> </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="menu2" class="tab-pane fade">
            <h3>Последние сообщения</h3>

            <ul class="list-unstyled">
                <li class="left clearfix">
          <span class="pull-left">
            <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
          </span>
                    <div class="clearfix">
                        <div class="clearfix-content">
                            <strong class="primary-font">Jack Sparrow</strong>
                            <small class="text-muted">
                                <span class="fa fa-clock-o fa-fw"></span> 12 mins ago
                            </small>
                            <strong class="primary-font">Тема: А что это такое?</strong>
                            <p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                            </p>
                            <button type="button" class="btn btn-primary"><span class="fa fa-reply"></span> Написать ответ</button>
                        </div>
                    </div>

                </li>
            </ul>

        </div>

        <div id="menu3" class="tab-pane fade">
            <h3>Последние комментарии</h3>

            <ul class="list-unstyled">
                <li class="left clearfix">
          <span class="pull-left">
            <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
          </span>
                    <div class="clearfix">
                        <div class="clearfix-content">
                            <strong class="primary-font">Jack Sparrow</strong>
                            <small class="text-muted">
                                <span class="fa fa-clock-o fa-fw"></span> 12 mins ago
                            </small>
                            <strong class="primary-font">Проект: Странные люди</strong>
                            <p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                            </p>
                            <button type="button" class="btn btn-primary"><span class="fa fa-reply"></span> Ответить</button>
                        </div>
                    </div>

                </li>
            </ul>
        </div>
    </div>

</div>

    @endsection