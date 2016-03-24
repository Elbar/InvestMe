@extends('Admin.master')
        @section('title')

        AdminLTE | Dashboard

        @endsection

        @section('right')
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        {{ $projects->count() }}
                                    </h3>
                                    <p>
                                        New Projects
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        53<sup style="font-size: 20px">%</sup>
                                    </h3>
                                    <p>
                                        Bounce Rate
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        {{ $count }}
                                    </h3>
                                    <p>
                                        User Registrations
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="{{ url('admin',['id' => 1]) }}" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        65
                                    </h3>
                                    <p>
                                        Unique Visitors
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->
                    <!-- top row -->
                    <div class="row">
                        <div class="col-xs-12 connectedSortable">
                            
                        </div><!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-10 connectedSortable">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Categories</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <table class="table table-striped">
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Title</th>
                                            <th>created at</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        @foreach($categories as $category)
                                            <tr>
                                                <td>{{ $category->id }}</td>
                                                <td>{{ $category->title }}</td>
                                                <td>{{ $category->created_at }}</td>
                                                <td style="width: 50px;"><input type="button" class="btn btn-success" value="edit"></td>
                                                <td style="width: 50px;"><input type="button" class="btn btn-danger" value="delete"></td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Backers</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <table class="table table-striped">
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Name</th>
                                            <th>Reward</th>
                                            <th>Method of pay</th>
                                            <th>Amount</th>
                                            <th>Funds</th>
                                            <th>Created at</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        @foreach($backers as $backer)
                                            <tr>
                                                <td>{{ $backer->id }}</td>
                                                <td>{{ $backer->user->name }}</td>
                                                <td>{{ $backer->reward }}</td>
                                                <td>{{ $backer->method_of_pay }}</td>
                                                <td>{{ $backer->amount }}</td>
                                                <td>{{ $backer->funds }}</td>
                                                <td>{{ $backer->created_at }}</td>
                                                <td style="width: 50px;"><input type="button" class="btn btn-success" value="edit"></td>
                                                <td style="width: 50px;"><input type="button" class="btn btn-danger" value="delete"></td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Creators</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <table class="table table-striped">
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Name</th>
                                            <th>Postcode</th>
                                            <th>Country</th>
                                            <th>Address</th>
                                            <th>Created at</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        @foreach($creators as $creator)
                                            <tr>
                                                <td>{{ $creator->id }}</td>
                                                <td>{{ $creator->user->name }}</td>
                                                <td>{{ $creator->postcode }}</td>
                                                <td>{{ $creator->country }}</td>
                                                <td>{{ $creator->home_address }}</td>
                                                <td>{{ $creator->created_at }}</td>
                                                <td style="width: 50px;"><input type="button" class="btn btn-success" value="edit"></td>
                                                <td style="width: 50px;"><input type="button" class="btn btn-danger" value="delete"></td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Projects</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <table class="table table-striped">
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Name</th>
                                            <th>Video link</th>
                                            <th>Title</th>
                                            <th>Risk</th>
                                            <th>Duration</th>
                                            <th>Created at</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        @foreach($projects as $project)
                                            <tr>
                                                <td>{{ $project->id }}</td>
                                                <td>{{ $project->creator->user->name }}</td>
                                                <td>{{ $project->video_link }}</td>
                                                <td>{{ $project->title }}</td>
                                                <td>{{ $project->risk }}</td>
                                                <td>{{ $project->duration }}</td>
                                                <td>{{ $creator->created_at }}</td>
                                                <td style="width: 50px;"><input type="button" class="btn btn-success" value="edit"></td>
                                                <td style="width: 50px;"><input type="button" class="btn btn-danger" value="delete"></td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </section><!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-6 connectedSortable">

                            <!-- Chat box -->
                            <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title"><i class="fa fa-comments-o"></i> Chat</h3>
                                    <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                                        <div class="btn-group" data-toggle="btn-toggle" >
                                            <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i></button>                                            
                                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body chat" id="chat-box">
                                    <!-- chat item -->
                                    @foreach($comments as $comment)
                                    <div class="item">
                                        <img src="admin_bootstrap/img/avatar.png" alt="user image" class="online"/>
                                        <p class="message">
                                            <a href="#" class="name">
                                                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
                                              {{ $comment->user->name }}
                                            </a>
                                            {{ $comment->text }}
                                        </p>
                                    </div><!-- /.item -->
                                    @endforeach
                                </div><!-- /.chat -->
                                <div class="box-footer">
                                    <div class="input-group">
                                        <input class="form-control" placeholder="Type message..."/>
                                        <div class="input-group-btn">
                                            <button class="btn btn-success"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.box (chat box) -->

                        </section><!-- right col -->
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        @endsection
