@extends('layouts.app')


@section('content')
    @if(Auth::check()){
    <main>
        <div class="container-fluid sp-header">
            <div class="present-sp-header">
                <h2 class="text-center">Заглавие 1</h2>
                <h4 class="text-center">Подназвание</h4>
            </div>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-6 col-md-6">
                        <div class="thumbnail">
                            <img src="http://pre02.deviantart.net/d9f2/th/pre/f/2016/066/2/c/the_good_die_young_by_nanomortis-d9ua12s.png" alt="">
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
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.
                </div>
            </div> <!-- /.sp-description -->
        </div> <!-- /.container -->
    </main>
    @else
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="alert alert-warning">
                    <strong>You're not authorized.<a href="/login"> Please log in  </a></strong>
                </div>
            </div>
        </div>
   @endif

@endsection





