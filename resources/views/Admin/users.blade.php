@extends('Admin.master')
@section('title')
    Users page
@endsection
@section('right')
    <aside class="right-side">
        <div class="row">
    <section class="col-lg-12 connectedSortable">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">User registrations</h3>
            </div><!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>email</th>
                        <th style="width: 90px">Backer</th>
                        <th style="width: 90px">Creator</th>
                        <th style="width: 90px">Admin</th>
                        <th style="width: 90px">Moder</th>
                        <th style="width: 90px">Active</th>
                        <th>created at</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach($users as $user)
                        <tr>
                                <td>{{ $user->id }}.</td>
                                <td>{{ $user->name }}</td>
                                <td>
                                    {{ $user->email }}
                                </td>
                                @if ($user->isBacker)
                                    <td><span class="glyphicon glyphicon-ok"></span></td>
                                @else
                                    <td></td>
                                @endif

                                @if ($user->isCreator)
                                    <td><span class="glyphicon glyphicon-ok"></span></td>
                                @else
                                    <td></td>
                                @endif
                                @if ($user->isAdmin)
                                    <td><span class="glyphicon glyphicon-ok"></span></td>
                                @else
                                    <td></td>
                                @endif
                                @if ($user->isModer)
                                    <td><span class="glyphicon glyphicon-ok"></span></td>
                                @else
                                    <td></td>
                                @endif
                                @if ($user->isActive)
                                    <td><span class="glyphicon glyphicon-ok"></span></td>
                                @else
                                    <td></td>
                                @endif
                                <td>{{ $user->created_at }}</td>
                                <td style="width: 50px;">
                                    <a href="{{ route('users_id',$user->id) }}" >
                                        <input type="button" class="btn btn-success" value="edit">
                                    </a>
                                </td>
                                <td style="width: 50px;">
                                    <a href="{{ route('users_delete',$user->id) }}">
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
        </div>
    </aside>
@endsection