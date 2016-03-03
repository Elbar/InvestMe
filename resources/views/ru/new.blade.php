@extends('layouts.app')


@section('content')
    <form class="form-horizontal">
        <fieldset>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Название проекта</label>
                <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectcategory ">Категория</label>
                <div class="col-md-4">
                    <select id="selectcategory " name="selectcategory " class="form-control">
                        <option value="1">Еда</option>
                        <option value="2">Комиксы</option>
                        <option value="3">Развлечения</option>
                        <option value="4">Технологии</option>
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
                    <input id="filebutton" name="filebutton" class="input-file" type="file">
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="submit "></label>
                <div class="col-md-4">
                    <button id="submit " name="submit " class="btn btn-success">Сохранить</button>
                </div>
            </div>

        </fieldset>
    </form>


@endsection