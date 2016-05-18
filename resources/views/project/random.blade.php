@extends('layouts.app')

@section('content')

    <div class="container">
        <div id="pop-sp">
            <br>
            <h2><i class="fa fa-star fa-sm"></i> Возможно, вас заинтересуют такие проекты? <i class="fa fa-star fa-sm"></i></h2>
            <br>
    </div>
    </div>

    <div class="row">
        @foreach($project as $pro)
                <!--   popular SP item 1 -->
        <div id="{{ $pro->category->title }}" class="col-sm-4 col-lg-4 col-md-4 tab-pane fade in acitve" >
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
                        <li><h4><span class="fa fa-heart icon-styled"></span> <small>Пожертвовать </small></h4> </li>

                    </ol>
                </div>
            </div>
        </div>
        @endforeach
    </div> <!-- / #pop-sp -->
    <!-- / Popular SP -->

@endsection


@section('script')
 <script>
     $('.fa-heart').hover(function(){
         $('.fa-heart').css('color', 'red');
     }, function() {
         $('.fa-heart').css('color', '');
     });

 </script>


@endsection