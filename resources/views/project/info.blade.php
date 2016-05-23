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
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="{{ $pr->video_link }}"></iframe>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6 col-lg-6 col-md-6">
                        <h2><span class="fa fa-percent"></span> 40 <small>найдено</small></h2>
                        <h2><span class="fa fa-money"></span> 23 056 <small> сомов</small></h2>
                        <h2><span class="fa fa-users"></span> 215 <small> вложились</small></h2>
                        <p>{{ $pr->option1 }} </p>
                        @if(($bookmark === 'none') and Auth::user())
                                <a class="btn btn-primary" href="{{'/bookmark/'.$pr->id}}"><span class="fa fa-bookmark-o fa-lg"></span> В закладки</a>
                        @elseif(!($bookmark === 'none') and Auth::user())
                                <a class="btn btn-primary" href="#"><span class="fa fa-bookmark-o fa-lg"></span> В закладке</a>
                        @else
                            <a class="btn btn-primary" href="{{'/bookmark/'.$pr->id}}"><span class="fa fa-bookmark-o fa-lg"></span> В закладки</a>
                        @endif
                    </div>
                </div><!-- row -->

                <div class="row">

                    <div class="col-sm-6 col-lg-6 col-md-6">
                        <hr>
                        <div class="row">
                            <div class="col-sm-3 col-lg-3 col-md-3">
                                <img src="{{asset('img/def_avatar2.jpg')}}" class="img-circle" alt="" width="100" height="100">
                            </div>
                            <div class="col-sm-9 col-lg-9 col-md-9">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <h4 class=""><b>{{ $pr->creator->user->name }}</b></h4>
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
                                    <b>От: </b> {{ $conditions->startMoney }} сом
                                    <hr>
                                    <h5>{{ $conditions->description }}</h5>
                                    <hr>
                                    <b>Предел: </b> первые 50 человек
                                    <span class="badge pull-right badge-color">21</span>
                                </div>

                            </div>
                        </div>
                        <!--  копировать до сюда -->

                    </div>

        <div class="documentStream__shelfContainer">
            <div class="documentStream__shelf">

                <div class="documentStream__document">
                    <div class="thumbnail cases">

                        <div class="caption">
                            <b>От: </b> 100 сомов <b> До: </b> 200 сомов
                            <hr>
                            <h5>Я Вам дам шоколадку в обертке Наруто</h5>
                            <hr>
                            <b>Предел: </b> первые 50 человек
                            <span class="badge pull-right badge-color">21</span>
                        </div>

                    </div>
                </div>

                <div class="documentStream__document">
                    <div class="thumbnail cases">

                        <div class="caption">
                            <b>От: </b> 100 сомов <b> До: </b> 200 сомов
                            <hr>
                            <h5>Я Вам дам шоколадку в обертке Наруто</h5>
                            <hr>
                            <b>Предел: </b> первые 50 человек
                            <span class="badge pull-right badge-color">21</span>
                        </div>

                    </div>
                </div>

                <div class="documentStream__document">
                    <div class="thumbnail cases">

                        <div class="caption">
                            <b>От: </b> 100 сомов <b> До: </b> 200 сомов
                            <hr>
                            <h5>Я Вам дам шоколадку в обертке Наруто</h5>
                            <hr>
                            <b>Предел: </b> первые 50 человек
                            <span class="badge pull-right badge-color">21</span>
                        </div>

                    </div>
                </div>

                <div class="documentStream__document">
                    <div class="thumbnail cases">

                        <div class="caption">
                            <b>От: </b> 100 сомов <b> До: </b> 200 сомов
                            <hr>
                            <h5>Я Вам дам шоколадку в обертке Наруто</h5>
                            <hr>
                            <b>Предел: </b> первые 50 человек
                            <span class="badge pull-right badge-color">21</span>
                        </div>

                    </div>
                </div>

                <div class="documentStream__document">
                    <div class="thumbnail cases">

                        <div class="caption">
                            <b>От: </b> 100 сомов <b> До: </b> 200 сомов
                            <hr>
                            <h5>Я Вам дам шоколадку в обертке Наруто</h5>
                            <hr>
                            <b>Предел: </b> первые 50 человек
                            <span class="badge pull-right badge-color">21</span>
                        </div>

                    </div>
                </div>

                <div class="documentStream__document">
                    <div class="thumbnail cases">

                        <div class="caption">
                            <b>От: </b> 100 сомов <b> До: </b> 200 сомов
                            <hr>
                            <h5>Я Вам дам шоколадку в обертке Наруто</h5>
                            <hr>
                            <b>Предел: </b> первые 50 человек
                            <span class="badge pull-right badge-color">21</span>
                        </div>

                    </div>
                </div>

                <div class="documentStream__document">
                    <div class="thumbnail cases">

                        <div class="caption">
                            <b>От: </b> 100 сомов <b> До: </b> 200 сомов
                            <hr>
                            <h5>Я Вам дам шоколадку в обертке Наруто</h5>
                            <hr>
                            <b>Предел: </b> первые 50 человек
                            <span class="badge pull-right badge-color">21</span>
                        </div>

                    </div>
                </div>

                <div class="documentStream__document">
                    <div class="thumbnail cases">

                        <div class="caption">
                            <b>От: </b> 100 сомов <b> До: </b> 200 сомов
                            <hr>
                            <h5>Я Вам дам шоколадку в обертке Наруто</h5>
                            <hr>
                            <b>Предел: </b> первые 50 человек
                            <span class="badge pull-right badge-color">21</span>
                        </div>

                    </div>
                </div>

                <div class="documentStream__document">
                    <div class="thumbnail cases">

                        <div class="caption">
                            <b>От: </b> 100 сомов <b> До: </b> 200 сомов
                            <hr>
                            <h5>Я Вам дам шоколадку в обертке Наруто</h5>
                            <hr>
                            <b>Предел: </b> первые 50 человек
                            <span class="badge pull-right badge-color">21</span>
                        </div>

                    </div>
                </div>

                <div class="documentStream__document">
                    <div class="thumbnail cases">

                        <div class="caption">
                            <b>От: </b> 100 сомов <b> До: </b> 200 сомов
                            <hr>
                            <h5>Я Вам дам шоколадку в обертке Наруто</h5>
                            <hr>
                            <b>Предел: </b> первые 50 человек
                            <span class="badge pull-right badge-color">21</span>
                        </div>

                    </div>
                </div>

                <div class="documentStream__document">
                    <div class="thumbnail cases">

                        <div class="caption">
                            <b>От: </b> 100 сомов <b> До: </b> 200 сомов
                            <hr>
                            <h5>Я Вам дам шоколадку в обертке Наруто</h5>
                            <hr>
                            <b>Предел: </b> первые 50 человек
                            <span class="badge pull-right badge-color">21</span>
                        </div>

                    </div>
                </div>

                <div class="documentStream__document">
                    <div class="thumbnail cases">

                        <div class="caption">
                            <b>От: </b> 100 сомов <b> До: </b> 200 сомов
                            <hr>
                            <h5>Я Вам дам шоколадку в обертке Наруто</h5>
                            <hr>
                            <b>Предел: </b> первые 50 человек
                            <span class="badge pull-right badge-color">21</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>




        <div class="container sp-description">
            <div id="sp-description">
>>>>>>> dev
                <hr>
                <!-- Описание сюда -->
                <div class="article">
                    <h3>Название абзаца</h3>
                    {!! $pr->option2 !!}
                </div>
            </div> <!-- /.sp-description -->
        </div> <!-- /.container -->
    </main>
        @if ($comments->count()>0)
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Comments</h3>
                        </div><!-- /col-sm-12 -->
                    </div><!-- /row -->
                    @foreach($comments as $comment)
                    <div class="row">
                        <div class="col-sm-1">
                            <div class="thumbnail">
                                @if($comment->user->avatar)
                                    <img class="img-responsive user-photo" src="{{  asset('images/user/'.$comment->user->avatar) }}">
                                @else
                                    <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                                @endif
                            </div><!-- /thumbnail -->
                        </div><!-- /col-sm-1 -->

                        <div class="col-sm-5">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <strong>{{ $comment->user->name }}</strong> <span class="text-muted">commented {{ $comment->created_at }}</span>
                                </div>
                                <div class="panel-body">
                                    {{ $comment->text }}
                                </div><!-- /panel-body -->
                            </div><!-- /panel panel-default -->
                        </div><!-- /col-sm-5 -->
                        </div>
                    @endforeach
                </div>
        @endif

        @include('project.comment')
@endsection
