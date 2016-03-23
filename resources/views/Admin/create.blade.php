@extends('Admin.users')

@section('edit')
    <form class="form-horizontal" action="{{ url('store') }}" method="post">
        {{ Form::token() }}
        <fieldset>
            <div class="form-group">
                <label class="col-md-4 control-label" for="linkinput">Name</label>
                <div class="col-md-4">
                    <input id="linkinput" name="name" type="text" placeholder="" class="form-control input-md" required>
                </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">email</label>
                <div class="col-md-4">
                    <input id="textinput" name="email" type="email" placeholder="" class="form-control input-md" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">email</label>
                <div class="col-md-4">
                    <input id="textinput" name="email" type="email" placeholder="" class="form-control input-md" required="">
                </div>
            </div>
            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="submit "></label>
                <div class="col-md-4">
                    <button id="submit " name="submit " class="btn btn-success btn-block">?????????</button>
                </div>
            </div>

        </fieldset>
    </form>
@endsection