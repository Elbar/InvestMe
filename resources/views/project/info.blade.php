@extends('layouts.app')


@section('content')
    <br>
    <main>
        <div class="container-fluid sp-header">
            <div class="present-sp-header">
                <h2 class="text-center">{{$pr->title}}</h2>
                <h4 class="text-center"><small>Автор: G-Dragon</small></h4>
            </div>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-6 col-md-6" style="max-height: 600px; max-width: 600px;">
                        <div class="thumbnail">
                            <img src="{{asset('/images/'.$image[0]->image_name)}}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6 col-md-6">
                        <h2><span class="fa fa-percent"></span> 40 <small>найдено</small></h2>
                        <h2><span class="fa fa-money"></span> 23 056 <small> сомов</small></h2>
                        <h2><span class="fa fa-users"></span> 215 <small> вложились</small></h2>
                        <p>Glyphicons are icon fonts which you can use in your web projects. Glyphicons Halflings are not free and require licensing, however their creator has made them available for Bootstrap projects free of cost. It is recommended, as a thank you, we ask you to include an optional link back to GLYPHICONS whenever practical. — Bootstrap Documentation
                        </p>
                        <button type="button" class="btn btn-primary"><span class="fa fa-bookmark-o fa-lg"></span> В закладки</button>
                    </div>
                </div><!-- row -->

                <div class="row">

                    <div class="col-sm-6 col-lg-6 col-md-6">
                        <hr>
                        <div class="row">
                            <div class="col-sm-3 col-lg-3 col-md-3">
                                <img src="http://www.sbs.com.au/popasia/sites/sbs.com.au.popasia/files/styles/thumb_small/public/gd_fashion_black_white_704.jpg?itok=aOwps24I" class="img-circle" alt="" width="100" height="100">
                            </div>
                            <div class="col-sm-9 col-lg-9 col-md-9">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <h4 class=""><b>G-Dragon BigBang TOP Seungri</b></h4>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <h4 class=""><small><b>56</b> вложился</small></h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <a href="#" class=""><span class="fa fa-envelope"></span> Написать</a>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <a href="#" class=""><span class="fa fa-paw"></span> Посмотреть биографию</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-6 col-md-6">
                        <hr>
                        <ol class="list-inline">
                            <li><h4> <small><span class="fa fa-map-marker"></span> Бишкек </small> </h4> </li>
                            <li><h4> <small><span class="fa fa-tag"></span> Проект</small> </h4> </li>
                            <li><h4> <small><span class="fa fa-calendar"></span> Сбор продлится до 5 августа</small> </h4> </li>
                        </ol>

                        Поделиться:
                        <div class="btn-group" role="group" aria-label="...">
                            <button type="button" class="btn btn-default"><span class="fa fa-twitter"></span></button>
                            <button type="button" class="btn btn-default"><span class="fa fa-facebook"></span></button>
                            <button type="button" class="btn btn-default"><span class="fa fa-pinterest"></span></button>
                        </div>
                    </div>
                </div><!-- row -->
            </div>
        </div>

        <div class="container">
            <div id="sp-description">
                <!--  Условия -->
                <h4>Условия:</h4>
                <div class="row">

                    <!--  Копировать вот это  -->
                    <div class="col-sm-3 col-lg-3 col-md-3">

                        <div class="thumbnail cases">

                            <div class="caption">
                                <b>От: </b> 100 сомов
                                <hr>
                                <h5>Я Вам дам шоколадку в обертке Наруто</h5>
                                <hr>
                                <b>Предел: </b> первые 50 человек
                                <span class="badge pull-right badge-color">21</span>
                            </div>

                        </div>
                    </div>
                    <!--  копировать до сюда -->

                </div>

                <hr>
                <!-- Описание сюда -->
                <div class="article">
                    <h3>Название абзаца</h3>
                    {!! $pr->option2 !!}
                </div>
            </div> <!-- /.sp-description -->
        </div> <!-- /.container -->
    </main>
@endsection





