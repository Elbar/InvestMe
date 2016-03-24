@extends('layouts.app')

@section('content')
    @if(Auth::check())
  <div class="col-sm-2"></div>
  <div class="col-sm-8 project-form">
    <div class="panel panel-default">
        <div class="panel-heading">Опишите ваш проект</div>
        <div class="panel-body">
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
            <form class="form-horizontal" method="post" action="/create" enctype="multipart/form-data">
                <fieldset>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Название проекта</label>
                        <div class="col-md-4">
                            <input id="textinput" name="name" type="text" placeholder="" class="form-control input-md" required="">
                            <input type="hidden" name="_token" value="{{ csrf_token()}}">
                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="selectcategory ">Категория</label>
                        <div class="col-md-4">
                            <select id="selectcategory " name="category " class="form-control">
                                <option value="1">Еда</option>
                                <option value="2">Комиксы</option>
                                <option value="3">Развлечения</option>
                                <option value="4">Технологии</option>
                                <option value="4">Наука</option>
                            </select>
                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textarea">Описание проекта</label>
                        <div class="col-md-4">
                            <textarea class="form-control" id="textarea" name="textarea"></textarea>
                        </div>
                    </div>

                    <!-- File Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="filebutton">Загрузить файл</label>
                        <div class="col-md-4">
                            <input id="filebutton" name="file" class="input-file" type="file">
                            <span class="help-block">Размер файла не должен превышать 2 Мб.</span>
                        </div>

                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="submit "></label>
                        <div class="col-md-4">
                            <button id="submit " name="submit " class="btn btn-success btn-block">Сохранить</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
  </div>
  <div class="col-sm-2">

  </div>
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