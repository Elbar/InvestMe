@extends('Admin.backer.index')

@section('edit')
    <form class="form-group" method="post" action="{{ url('backer_update',$backer->id) }}">
        {{ Form::token() }}
        <table class="table table-striped">
            <tr>
                <th style="width: 10px">#</th>
                <th>Reward</th>
                <th>Method of pay</th>
                <th>Amount</th>
                <th>Funds</th>
                <th></th>
            </tr>
            <tr>
                <td> {{ $backer->id }}</td>
                <td><input type="text" name="reward" class="form-control" value="{{ $backer->reward }}"></td>
                <td><input type="text" name="method_of_pay" class="form-control" value="{{ $backer->method_of_pay }}"></td>
                <td><input type="text" name="amount" class="form-control" value="{{ $backer->amount }}"></td>
                <td><input type="text" name="funds" class="form-control" value="{{ $backer->funds }}"></td>
                <td><input type="submit" value="Update" class="btn btn-warning"></td>
            </tr>
        </table>
    </form>
@endsection
