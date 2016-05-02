@extends('Admin.master')
    @section('title')
        Backers
    @endsection
    @section('left')
        @include('Admin.partials.leftSide')
    @endsection
    @section('right')
            <section class="content">
                <section class="col-lg-10 connectedSortable">
                    <div class="row">
                        @if (Session::has('message'))
                            <div class="alert alert-success"> {{ Session::get('message') }} </div>
                        @endif
                    </div>
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
                                        <td style="width: 50px;">
                                            <a href="{{ route('backer.edit',$backer->id) }}">
                                                <input type="button" class="btn btn-success" value="edit">
                                            </a>
                                        </td>
                                        <td style="width: 50px;">
                                            <a href="{{ route('backer.destroy',$backer->id) }}">
                                                <input type="button" class="btn btn-danger" value="delete">
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                            @yield('edit')
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </section>
            </section>
    @endsection