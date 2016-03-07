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
            </div>
        </div>
        <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="fill" style="background-image:url('http://wallpapers-images.ru/1920x1080/nature/wallpapers/wallpapers-nature-1.jpg');"></div>
            <div class="carousel-caption">
                <h1>Заглавие 2</h1>
                <h1><small>Краткое описание</small></h1>
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url('http://wallpapers-images.ru/1920x1080/nature/wallpapers/wallpapers-nature-1.jpg');"></div>
            <div class="carousel-caption">
                <h1>Заглавие 3</h1>
                <h1><small>Краткое описание</small></h1>
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
             <h2>Популярные</h2>
            <br>

            <div class="row">

                <!--   popular SP item 1 -->
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/320x150" alt="">
                        <div class="caption">
                            <h4 class="pull-right">$24.99</h4>
                            <h4><a href="#">Первый проект</a></h4>
                            <p>Тут офигенное краткое описание, которое хочется прочитать более <a target="_blank" href="#">подробнее... </a> </p>
                        </div>
                        <hr>
                        <div class="ratings">
                            <p class="pull-right">15 просмотров</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </p>
                        </div>
                    </div>
                </div>
                <!--   / popular SP item 1 -->

                <!--   popular SP item 2 -->
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/320x150" alt="">
                        <div class="caption">
                            <h4 class="pull-right">$24.99</h4>
                            <h4><a href="#">Первый проект</a></h4>
                            <p>Тут офигенное краткое описание, которое хочется прочитать более <a target="_blank" href="#">подробнее... </a> </p>
                        </div>
                        <hr>
                        <div class="ratings">
                            <p class="pull-right">15 просмотров</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </p>
                        </div>
                    </div>
                </div>
                <!--   / popular SP item 2 -->

                <!--   popular SP item 3 -->
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/320x150" alt="">
                        <div class="caption">
                            <h4 class="pull-right">$24.99</h4>
                            <h4><a href="#">Первый проект</a></h4>
                            <p>Тут офигенное краткое описание, которое хочется прочитать более <a target="_blank" href="#">подробнее... </a> </p>
                        </div>
                        <hr>
                        <div class="ratings">
                            <p class="pull-right">15 просмотров</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- / popular SP item 3 -->

                <!--   popular SP item 4 -->
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/320x150" alt="">
                        <div class="caption">
                            <h4 class="pull-right">$24.99</h4>
                            <h4><a href="#">Первый проект</a></h4>
                            <p>Тут офигенное краткое описание, которое хочется прочитать более <a target="_blank" href="#">подробнее... </a> </p>
                        </div>
                        <hr>
                        <div class="ratings">
                            <p class="pull-right">15 просмотров</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </p>
                        </div>
                    </div>
                </div>
                <!--   / popular SP item 4 -->

                <!--   popular SP item 5 -->
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/320x150" alt="">
                        <div class="caption">
                            <h4 class="pull-right">$24.99</h4>
                            <h4><a href="#">Первый проект</a></h4>
                            <p>Тут офигенное краткое описание, которое хочется прочитать более <a target="_blank" href="#">подробнее... </a> </p>
                        </div>
                        <hr>
                        <div class="ratings">
                            <p class="pull-right">15 просмотров</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </p>
                        </div>
                    </div>
                </div>
                <!--   / popular SP item 5 -->

                <!--   popular SP item 6 -->
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/320x150" alt="">
                        <div class="caption">
                            <h4 class="pull-right">$24.99</h4>
                            <h4><a href="#">Первый проект</a></h4>
                            <p>Тут офигенное краткое описание, которое хочется прочитать более <a target="_blank" href="#">подробнее... </a> </p>
                        </div>
                        <hr>
                        <div class="ratings">
                            <p class="pull-right">15 просмотров</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- / popular SP item 6 -->

            </div>


        </div> <!--  #pop-sp -->
        <!-- / Popular SP -->


        <!--   Newest SP -->
        <div id="new-sp">
            <br>
            <h2>Новые</h2>
            <br>
            <!-- Project One -->
            <div class="row">
                <div class="col-md-7">
                    <a href="#">
                        <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                    </a>
                </div>
                <div class="col-md-5">
                    <h3>Название проекта</h3>
                    <h4><small>Авторы</small></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
                    <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
            <!-- /.row -->
            <br>
            <div class="row">
                <div class="col-sm-12 col-lg-12 col-md-12">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h4>Кыргызский суперкар.<small> Мы созданем кыргызский суперкар красного цвета...</small></h4>
                        </li>
                        <li class="list-group-item">
                            <h4>Алтай-комикс.<small> Комикс про мальчика по имени Алтай - супергероя...</small></h4>
                        </li>
                        <li class="list-group-item">
                            <h4>Бла-бла.<small> Комикс про мальчика по имени Алтай - супергероя...</small></h4>
                        </li>
                        <li class="list-group-item">
                            <h4>Бла-бла.<small> Комикс про мальчика по имени Алтай - супергероя...</small></h4>
                        </li>
                        <li class="list-group-item">
                            <h4>Бла-бла.<small> Комикс про мальчика по имени Алтай - супергероя...</small></h4>
                        </li>
                    </ul>
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

