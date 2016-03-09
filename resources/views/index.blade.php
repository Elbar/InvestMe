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
            <div class="fill" style="background-image:url('http://wallpapers-images.ru/1920x1080/nature/wallpapers/wallpapers-nature-1.jpg');"></div>
            <div class="carousel-caption">
                <h1>Заглавие 1</h1>
                <h1><small>Краткое описание</small></h1>
                <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="fill" style="background-image:url('http://wallpapers-images.ru/1920x1080/nature/wallpapers/wallpapers-nature-1.jpg');"></div>
            <div class="carousel-caption">
                <h1>Заглавие 2</h1>
                <h1><small>Краткое описание</small></h1>
                <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url('http://wallpapers-images.ru/1920x1080/nature/wallpapers/wallpapers-nature-1.jpg');"></div>
            <div class="carousel-caption">
                <h1>Заглавие 3</h1>
                <h1><small>Краткое описание</small></h1>
                <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
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

            <ul class="nav nav-tabs">
                <li class="active"><a href="#">Категория 1</a></li>
                <li><a href="#">Категория 2</a></li>
                <li><a href="#">Категория 3</a></li>
                <li><a href="#">Категория 4</a></li>
                <li><a href="#">Категория 5</a></li>
                <li><a href="#">Категория 6</a></li>
            </ul>
            <br>
            <div class="row">

                <!--   popular SP item 1 -->
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/700x300" alt="">
                        <div class="caption">
                            <h4><a href="#">Первый проект</a></h4>
                            <h4><small>Авторы</small></h4>
                            <ol class="list-inline">
                                <li><h4> <small><span class="fa fa-map-marker"></span> Бишкек </small> </h4> </li>
                                <li><h4> <small><span class="fa fa-tag"></span> Проект</small> </h4> </li>
                            </ol>
                            <p>Тут офигенное краткое описание, которое хочется прочитать более <a target="_blank" href="#">подробно... </a> </p>
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
                <!--   / popular SP item 1 -->

                <!--   popular SP item 2 -->
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/700x300" alt="">
                        <div class="caption">
                            <h4><a href="#">Первый проект</a></h4>
                            <h4><small>Авторы</small></h4>
                            <ol class="list-inline">
                                <li><h4> <small><span class="fa fa-map-marker"></span> Бишкек </small> </h4> </li>
                                <li><h4> <small><span class="fa fa-tag"></span> Проект</small> </h4> </li>
                            </ol>
                            <p>Тут офигенное краткое описание, которое хочется прочитать более <a target="_blank" href="#">подробно... </a> </p>
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
                <!--   / popular SP item 2 -->

                <!--   popular SP item 3 -->
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/700x300" alt="">
                        <div class="caption">
                            <h4><a href="#">Первый проект</a></h4>
                            <h4><small>Авторы</small></h4>
                            <ol class="list-inline">
                                <li><h4> <small><span class="fa fa-map-marker"></span> Бишкек </small> </h4> </li>
                                <li><h4> <small><span class="fa fa-tag"></span> Проект</small> </h4> </li>
                            </ol>
                            <p>Тут офигенное краткое описание, которое хочется прочитать более <a target="_blank" href="#">подробно... </a> </p>
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
                <!-- / popular SP item 3 -->

                <!--   popular SP item 4 -->
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/700x300" alt="">
                        <div class="caption">
                            <h4><a href="#">Первый проект</a></h4>
                            <h4><small>Авторы</small></h4>
                            <ol class="list-inline">
                                <li><h4> <small><span class="fa fa-map-marker icon-styled"></span> Бишкек </small> </h4> </li>
                                <li><h4> <small><span class="fa fa-tag icon-styled"></span> Проект</small> </h4> </li>
                            </ol>
                            <p>Тут офигенное краткое описание, которое хочется прочитать более <a target="_blank" href="#">подробно... </a> </p>
                        </div>
                        <div class="ratings">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                    <span class="sr-only">40% Complete</span>
                                </div>
                            </div>
                            <ol class="list-inline">
                                <li><h4><span class="fa fa-percent"></span> 40 <small>найдено</small> </h4> </li>
                                <li><h4><span class="fa fa-users"></span> 215 <small> вложились</small> </h4> </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!--   / popular SP item 4 -->

                <!--   popular SP item 5 -->
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/700x300" alt="">
                        <div class="caption">
                            <h4><a href="#">Первый проект</a></h4>
                            <h4><small>Авторы</small></h4>
                            <ol class="list-inline">
                                <li><h4> <small><span class="fa fa-map-marker"></span> Бишкек </small> </h4> </li>
                                <li><h4> <small><span class="fa fa-tag"></span> Проект</small> </h4> </li>
                            </ol>
                            <p>Тут офигенное краткое описание, которое хочется прочитать более <a target="_blank" href="#">подробно... </a> </p>
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
                <!--   / popular SP item 5 -->

                <!--   popular SP item 6 -->
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/700x300" alt="">
                        <div class="caption">
                            <h4><a href="#">Первый проект</a></h4>
                            <h4><small>Авторы</small></h4>
                            <ol class="list-inline">
                                <li><h4> <small><span class="fa fa-map-marker"></span> Бишкек </small> </h4> </li>
                                <li><h4> <small><span class="fa fa-tag"></span> Проект</small> </h4> </li>
                            </ol>
                            <p>Тут офигенное краткое описание, которое хочется прочитать более <a target="_blank" href="#">подробно... </a> </p>
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
                <!-- / popular SP item 6 -->

            </div>


        </div> <!-- / #pop-sp -->
        <!-- / Popular SP -->


        <!--   Newest SP -->
        <div id="new-sp">
            <br>
            <p><h3>Новые</h3></p>
            <ul class="nav nav-tabs">
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
                <div class="col-md-6">
                    <a href="#">
                        <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="caption">
                        <h4>Первый проект</h4>
                        <h4><small>Авторы</small></h4>
                        <ol class="list-inline">
                            <li><h4> <small><span class="fa fa-map-marker"></span> Бишкек </small> </h4> </li>
                            <li><h4> <small><span class="fa fa-tag"></span> Проект</small> </h4> </li>
                        </ol>
                        <p>Тут офигенное краткое описание, которое хочется прочитать более подробно... </p>
                        <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                    <div class="ratings">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                <span class="sr-only">40% Complete</span>
                            </div>
                        </div>
                        <ol class="list-inline">
                            <li><h4><span class="fa fa-percent"></span> 40 <small>найдено</small> </h4> </li>
                            <li><h4><span class="fa fa-users"></span> 215 <small> вложились</small> </h4> </li>
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
                            <h4>Кыргызский суперкар.<small> Мы созданем кыргызский суперкар красного цвета...</small></h4>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4>Алтай-комикс.<small> Комикс про мальчика по имени Алтай - супергероя...</small></h4>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4>Бла-бла.<small> Комикс про мальчика по имени Алтай - супергероя...</small></h4>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4>Бла-бла.<small> Комикс про мальчика по имени Алтай - супергероя...</small></h4>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4>Бла-бла.<small> Комикс про мальчика по имени Алтай - супергероя...</small></h4>
                        </a>
                    </div>
                </div>
            </div> <!-- .row -->

        </div> <!-- .new-sp -->
        <!-- / Newest SP -->
       </div> <!-- /.container -->
</main>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-6 col-md-6">
                БУТЕР
            </div>
            <div class="col-sm-6 col-lg-6 col-md-6">
                ФУТЕР
            </div>

        </div>
    </div> <!-- /.container -->

</footer>


@endsection

