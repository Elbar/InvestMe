@extends('layouts.app')

@section('content')
    @if(Auth::check())
        <!-- Page Content -->
<main>
    <form role="form" action="/create" method="post" enctype="multipart/form-data">
    <div class="container-fluid sp-header">
        @if (count($errors) > 0)
                <!-- Form Error List -->
        <div class="alert alert-danger">
            <strong>Whoops! Something went wrong!</strong>

            <br><br>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="present-sp-header container">
                <div class="form-group">
                    <h4 class="text-center">Заглавие:</h4>
                    <input type="text" class="form-control center" name="project_title" placeholder="Введите название проекта">

                </div>
            <h4 class="text-center"><small>Автор: {{Auth::user()->name}}</small></h4>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-6 col-md-6"> <!-- Image Cover -->
                    <div class="thumbnail form-cover">
                        <div class="form-group">
                            <label class="text" for="inputCover">Обложка:</label>
                            <input type="file" class="form-control-file" name="inputCover1" >
                            <input type="file" class="form-control-file" name="inputCover2" >
                            <input type="file" class="form-control-file" name="inputCover3" >
                            <small class="text-muted">Выберите файл для обложки вашего проекта 700*700 пикселей.</small>
                            <hr>
                            <label class="text" for="inputCover">Видео:</label>
                            <input type="url" class="form-control center" name="project_video_cover" placeholder="Вставьте ссылку">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 col-md-6"> <!-- Presentation -->
                    <div class="form-group">
                        <label for="text">Краткое описание:</label>
                        <textarea class="form-control" rows="8" name="text_option"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="chooseCategory">Выберите категорию:</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="chooseCategory">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
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
                            <h4 class="">{{Auth::user()->name}}</h4>
                            <a href="/profile" class="">Связаться</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 col-md-6 autor-hr">
                    <hr>
                    <ol class="list-inline">
                        <li>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="text"><span class="fa fa-map-marker"></span> </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="case_mesto" placeholder="Место проведения">
                                    </div>
                                </div>
                        </li>
                        <li>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="text"><span class="fa fa-tag"></span> </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="pod_razdel" placeholder="Теги">
                                    </div>
                                </div>
                        </li>
                        <li>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="text"><span class="fa fa-tag"></span></label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="date_okanchenie" placeholder="Date" required>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div><!-- row -->
        </div> <!-- container -->
    </div> <!-- container-fluid -->
    <div class="container">
        <div id="sp-description">
            <!--  Условия -->
            <h4>Условия:</h4>
            <div class="cas row">
                <div class="col-sm-3 col-lg-3 col-md-3 ">
                    <dev  class="btn btn-primary" id="create">Добавить еще условия</dev>
                </div>
                <!--  Условия  -->
                <div id="case1" class="case col-sm-3 col-lg-3 col-md-3">
                    <div class="thumbnail cases">
                        <div class="form-group">
                        <div class="caption">
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="text">От:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="case_from1" name="case_from1" placeholder="От..." required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="text">До:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="case_to1" name="case_to1" placeholder="До..." required="">
                                    </div>
                                </div>
                            <hr>
                                <div class="form-group">
                                    <label for="text">Плюшки:</label>
                                    <textarea class="form-control" rows="5" id="u_text1" name="u_text1" required=""></textarea>
                                </div>
                            <hr>

                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="text">Предел:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="predel1" name="predel1" placeholder="Предел..." required="">
                                    </div>
                                </div>
                            </br>
                        </div>
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
                <textarea class="form-control" rows="20" name="text_option2"></textarea>
                <script> CKEDITOR.replace('text_option2');</script>
            </div>

            <form role="form">

                <input type="submit" class="btn btn-primary text-centre" value="Отправить">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <input type="hidden" id="number" name="number" value="1">
            </form>
        </div>
    </div>
    <hr>
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
    </form>
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
            var cloneCount = 2;
            var name = "";
            $(document).ready(function(){
                $("#create").click(function(){
                    name='case'+cloneCount;
                    $("#case1").clone().attr('id', name).appendTo(".cas");
                    $("#"+name+' #case_from1' ).attr('id', 'case_from'+ cloneCount);
                        $("#case_from"+cloneCount).attr('name','case_from'+cloneCount);
                    $("#"+name+' #case_to1' ).attr('id', 'case_to'+ cloneCount);
                        $("#case_to"+cloneCount).attr('name', 'case_to'+cloneCount);
                    $("#"+name+' #u_text1' ).attr('id', 'u_text'+ cloneCount);
                        $('#u_text'+cloneCount).attr('name', 'u_text'+cloneCount);
                    $("#"+name+' #predel1' ).attr('id', 'predel'+ cloneCount);
                        $('#predel'+cloneCount).attr('name','predel'+cloneCount);
                    $('#number').attr('value', cloneCount);
                    cloneCount++;
                });
            });
        </script>
@endsection

