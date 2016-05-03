@extends('Admin.master')
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
                              <td style="width: 50px;">
                                <a href="{{ route('creators.edit',$creator->id) }}">
                                  <input type="button" class="btn btn-success" value="edit">
                                </a>
                              </td>
                              <td style="width: 50px;">
                                  <a href="{{ url('creator_delete',$creator->id) }}">
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
