@extends('layouts.app')

@section('content')

<div class="container">
    <section style="padding-bottom: 50px; padding-top: 50px;">
        <div class="row">
            <div class="col-md-4">
                <img src="img/250x250.png" class="img-rounded img-responsive" />
                <br />
                @if (Session::has('message'))
                    <div class="alert alert-success"> {{ Session::get('message') }} </div>
                @endif
                <br />
                <form action="{{ url('information',Auth::user()->id) }}" method="post">
                    {{ Form::token() }}
                    <label>Registered Username</label>
                    <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="username">
                    <label>Registered Email</label>
                    <input type="text" class="form-control" value="{{ Auth::user()->email }}" name="email">
                    <br>
                    <button type="submit" class="btn btn-primary">Update Details</button>
                </form>
                <br /><br/>
            </div>
            <div class="col-md-8">
                <div class="alert alert-info">
                    <h3>Created projects</h3>
                    <ul>@if ($creator)
                            @foreach($creator->project as $project)
                                <li>
                                    {{ $project->title }}
                                </li>
                            @endforeach
                        @else
                            No created projects
                        @endif
                    </ul>
                    <h3>Backed projects</h3>
                    <ul>@if ($backer)
                            @foreach($backer->project as $backed)
                                <li>{{ $backed->title }}</li>
                            @endforeach
                        @else
                            No backed projects
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <!-- ROW END -->


    </section>
    <!-- SECTION END -->
</div>
<!-- CONATINER END -->



<!-- GOOGLE ADD SECTION START -->
<div id="add-div-main">
    <link href="http://designbootstrap.com/track/add-style.css" rel="stylesheet" />
    <div class="add-wrapper-db">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 text-center">
                    <div class="add-block" id="ftr-large-add"  >
                        <center>
                            <script async data-rocketsrc="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="text/rocketscript"></script>
                            <!-- db-footer-one-728-90 -->
                            <ins class="adsbygoogle"
                                 style="display:inline-block;width:728px;height:90px"
                                 data-ad-client="ca-pub-2936243881134126"
                                 data-ad-slot="5253257896"></ins>
                            <script type="text/rocketscript">
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
                        </center>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- GOOGLE ADD SECTION END -->

@endsection
<!-- REQUIRED SCRIPTS FILES -->
<!-- CORE JQUERY FILE -->
<script data-rocketsrc="assets/js/jquery-1.11.1.js" type="text/rocketscript"></script>
<!-- REQUIRED BOOTSTRAP SCRIPTS -->
<script data-rocketsrc="assets/js/bootstrap.js" type="text/rocketscript"></script>

