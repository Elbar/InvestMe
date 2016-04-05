@extends('layouts.app')

@section('content')
    @if(Auth::check())

        <!-- Page Content -->
<main>
    <div class="container-fluid sp-header">
        <div class="present-sp-header container">
            <form role="form">
                <div class="form-group">
                    <h4 class="text-center">Заглавие:</h4>
                    <input type="text" class="form-control center" id="project-title" placeholder="Введите название проекта">
                </div>
            </form>
            <h4 class="text-center"><small>Автор: G-Dragon</small></h4>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-6 col-md-6"> <!-- Image Cover -->
                    <div class="thumbnail form-cover">
                        <div class="form-group">
                            <label class="text" for="inputCover">Обложка:</label>

                            <input type="file" class="form-control-file" id="inputCover1" >
                            <input type="file" class="form-control-file" id="inputCover2" >
                            <input type="file" class="form-control-file" id="inputCover3" >
                            <small class="text-muted">Выберите файл для обложки вашего проекта 700*700 пикселей.</small>
                            <hr>
                            <label class="text" for="inputCover">Видео:</label>
                            <input type="url" class="form-control center" id="project-video-cover" placeholder="Вставьте ссылку">

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6 col-md-6"> <!-- Presentation -->
                    <div class="form-group">
                        <label for="text">Краткое описание:</label>
                        <textarea class="form-control" rows="8" id="text"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="chooseCategory">Выберите категорию:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="chooseCategory">
                                <option>Категория 1</option>
                                <option>Категория 2</option>
                                <option>Категория 3</option>
                                <option>Категория 4</option>
                                <option>Категория 5</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div><!-- row -->
            <div class="row">

                <div class="col-sm-6 col-lg-6 col-md-6 autor-hr">
                    <hr>
                    <div class="row">
                        <div class="col-sm-3 col-lg-3 col-md-3">
                            <img src="http://www.sbs.com.au/popasia/sites/sbs.com.au.popasia/files/styles/thumb_small/public/gd_fashion_black_white_704.jpg?itok=aOwps24I" class="img-circle" alt="" width="100" height="100">
                        </div>
                        <div class="col-sm-9 col-lg-9 col-md-9">
                            <h4 class="">G-Dragon</h4>
                            <a href="#" class="">Связаться</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6 col-md-6 autor-hr">
                    <hr>

                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="text"><span class="fa fa-map-marker"></span> </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="case-to" placeholder="Место проведения">
                            </div>
                        </div>
                    </form>

                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="text"><span class="fa fa-tag"></span> </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="case-to" placeholder="Теги">
                            </div>
                        </div>
                    </form>

                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="text"><span class="fa fa-calendar"></span> </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="case-to" placeholder="До какого числа продлится сбор">
                            </div>
                        </div>
                    </form>

                </div>
            </div><!-- row -->
        </div> <!-- container -->

    </div> <!-- container-fluid -->



    <div class="container">
        <div id="sp-description">
            <!--  Условия -->
            <h4>Условия:</h4>
            <div class="cas row">
                <div class="col-sm-3 col-lg-3 col-md-3 create">
                    <button class="btn btn-primary">Добавить еще условия</button>
                </div>
                <!--  Условия  -->
                <div id="case1" class="case col-sm-3 col-lg-3 col-md-3">

                    <div class="thumbnail cases">

                        <div class="caption">
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="text">От:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="case-from" placeholder="От...">
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="text">До:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="case-to" placeholder="До...">
                                    </div>
                                </div>
                            </form>
                            <hr>
                            <form  role="form">
                                <div class="form-group">
                                    <label for="text">Плюшки:</label>
                                    <textarea class="form-control" rows="5" id="text"></textarea>
                                </div>
                            </form>
                            <hr>

                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="text">Предел:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="case-to" placeholder="Предел...">
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>







            </div> <!-- /.row -->
        </div> <!-- /.sp-description -->
        <hr>
        <!-- Описание сюда -->
        <div class="article">
            <div class="form-group">
                <label for="text">Полное описание проекта:</label>
                <textarea class="form-control" rows="20" id="text"></textarea>
            </div>

            <form role="form">
                <button class="btn btn-primary text-centre">Отправить</button>
            </form>

        </div>
    </div>
    <hr>
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
                <!-- jQuery -->
        <script>
            var cloneCount = 2;;
            $(document).ready(function(){
                $(".create").click(function(){
                    $("#case1").clone().attr('id', 'case'+ cloneCount++).appendTo(".cas");
                });
            });
        </script>
@endsection

