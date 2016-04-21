@extends('layouts.app')

@section('content')
        <!--   Full Page Image Background Carousel Header -->
         <header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <div class="item active">
            <!-- Set the first background image using inline CSS below. -->

            <div class="fill" style="background-image:url({{asset('/images/'.$active1->image[0]->image_name)}});"></div>

            <div class="carousel-caption">
                <h1>{{ $active1->title }}</h1>
                <h3>{{ $active1->option1 }}</h3>
                <a class="btn btn-primary" href="{{ url('show',$active1->id) }}">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>

        <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="fill" style="background-image:url({{asset('/images/'.$active2->image[1]->image_name)}});"></div>

            <div class="carousel-caption">
                <h1>{{ $active2->title }}</h1>
                <h3>{{ $active2->option1 }}</h3>
                <a class="btn btn-primary" href="{{ url('show',$active2->id) }}">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->

            <div class="fill" style="background-image:url({{asset('/images/'.$active3->image[2]->image_name)}});"></div>

            <div class="carousel-caption">
                <h1>{{ $active3->title }}</h1>
                <h3>{{ $active3->option1 }}</h3>
                <a class="btn btn-primary" href="{{ url('show',$active3->id) }}">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>

</header>
        <!-- / Full Page Image Background Carousel Header -->

<!-- Page Content -->
<main>
    <div class="container">
        <!--   Popular SP -->
        <div id="pop-sp"> <!-- popular sp-->
            <br>
             <h3>Популярные</h3>

            <ul class="nav nav-pills">
                <li class="active"><a href="#">Категория 1</a></li>
                <li><a href="#">Категория 2</a></li>
                <li><a href="#">Категория 3</a></li>
                <li><a href="#">Категория 4</a></li>
                <li><a href="#">Категория 5</a></li>
                <li><a href="#">Категория 6</a></li>
            </ul>
            <br>
            <div class="row">
                @foreach($project as $pro)
                    <!--   popular SP item 1 -->
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="{{asset('/images/'.$pro->image()->first()->image_name)}}" alt="">
                            <div class="caption">
                                <h4><a href="{{ url('show',$pro->id) }}">{{ $pro->title }}</a></h4>
                                <h4><small>Авторы</small></h4>
                                <ol class="list-inline">
                                    <li><h4> <small><span class="fa fa-map-marker"></span> {{ $pro->mesto }}</small> </h4> </li>
                                    <li><h4> <small><span class="fa fa-tag"></span> {{ $pro->teg }}</small> </h4> </li>
                                </ol>
                                <p>{{ $pro->option1 }} <a target="_blank" href="#">подробно... </a> </p>
                            </div>
                            <div class="ratings">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                        <span class="sr-only">40% Complete</span>
                                    </div>
                            </div>
                            <ol class="list-inline">
                                <li><h4><span class="fa fa-percent icon-styled"></span> 40 <small>найдено</small> </h4> </li>
                                <li><h4><span class="fa fa-users icon-styled"></span> 215 <small> вложились</small> </h4> </li>
                            </ol>
                        </div>
                    </div>
                </div>
                @endforeach
        </div> <!-- / #pop-sp -->
        <!-- / Popular SP -->


        <!--   Newest SP -->
        <div id="new-sp">
            <br>
            <h3>Новые</h3>
            <ul class="nav nav-pills">
                <li class="active"><a href="#">Категория 1</a></li>
                <li><a href="#">Категория 2</a></li>
                <li><a href="#">Категория 3</a></li>
                <li><a href="#">Категория 4</a></li>
                <li><a href="#">Категория 5</a></li>
                <li><a href="#">Категория 6</a></li>
            </ul>
            <br>
            <!-- Project One -->
            <div class="row">
                <div class="col-md-4">
                    <a href="#">
                        <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                    </a>
                </div>
                <div class="col-md-8">
                    <div class="caption">
                        <h4>Лего для детей</h4>
                        <h4><small>Авторы: T.O.P</small></h4>
                        <ol class="list-inline">
                            <li><h4> <small><span class="fa fa-map-marker"></span> Бишкек </small> </h4> </li>
                            <li><h4> <small><span class="fa fa-tag"></span> Конструкции</small> </h4> </li>
                            <li><h4> <small><span class="fa fa-calendar"></span> Сбор продлится до 5 августа</small> </h4> </li>
                        </ol>
                        <p>Glyphicons are icon fonts which you can use in your web projects. Glyphicons Halflings are not free and require licensing, however their creator has made them available for Bootstrap projects free of cost. It is  </p>
                        <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                        <button type="button" class="btn btn-warning"><span class="fa fa-bookmark-o fa-lg"></span>     В закладки</button>
                    </div>
                    <div class="ratings">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 52%;">
                                <span class="sr-only">52% Complete</span>
                            </div>
                        </div>
                        <ol class="list-inline">
                            <li><h4><span class="fa fa-percent"></span> 52 <small>найдено</small> </h4> </li>
                            <li><h4><span class="fa fa-money"></span> 85 <small> сомов</small> </h4> </li>
                            <li><h4><span class="fa fa-users"></span> 215 <small> вложились</small></h4></li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <br>
            <div class="row">
                <div class="col-sm-12 col-lg-12 col-md-12">
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <h5> Дверь в лето <small> Описание продолжается маленькое такое</small></h5>
                        </a>
                        <a href="#" class="list-group-item">
                            <h5> Конец вечности<small> Описание продолжается маленькое такое</small></h5>

                        </a>
                        <a href="#" class="list-group-item">
                            <h5> Сами боги <small> Описание продолжается маленькое такое</small></h5>
                        </a>
                    </div>
                </div>
            </div>  <!-- .row -->

        </div> <!-- .new-sp -->
        <!-- / Newest SP -->
    </div> <!-- /.container -->

        <div class="well follow-well">
            <div class="container text-center">
                <h3>Subscribe for more free stuff</h3>
                <p>Enter your name and email</p>

                <form action="" class="form-inline">
                    <div class="form-group">
                        <label for="subscription">Subscribe</label>
                        <input type="text" class="form-control" id="subscription" placeholder="Your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter your Email">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                    <hr>
                </form>


            </div><!-- end Container-->

        </div><!-- end well-->
        </div>

</main>

@endsection

