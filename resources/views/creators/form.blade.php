@extends('layouts.app')

@section('content')
    <div class="container auth-form">
        <div class="row">
            <div class="col-sm-8 project-form">
        <div class="panel panel-default">
            <div class="panel-heading">Is Creator</div>
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
                <form class="form-horizontal" action="/creator/add" method="post">
                    <fieldset>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">Postcode</label>
                            <div class="col-md-4">
                                <input id="textinput" name="postcode" type="text" placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="selectcategory ">Country</label>
                            <div class="col-md-4">
                                <select id="selectcategory " name="country" class="form-control">
                                    <option>Kyrgyztan</option>
                                    <option>Kazakstan</option>
                                    <option>Russia</option>
                                    <option>Turkey</option>
                                    <option>China</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">Address:</label>
                            <div class="col-md-4">
                                <input id="textinput" name="address" type="text" placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="submit "></label>
                            <div class="col-md-4">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button id="submit " name="submit " class="btn btn-success btn-block">next</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
        </div>
    </div>
@endsection