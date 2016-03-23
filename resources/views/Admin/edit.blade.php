@extends('Admin.users')
@section('edit')
    <form class="form" method="post" action="{{ route('users_id_post',$user->id) }}">

        <table>
        <tr>
            <th style="width: 10px">#</th>
            <th>Name</th>
            <th>email</th>
            <th style="width: 90px">Backer</th>
            <th style="width: 90px">Creator</th>
            <th style="width: 90px">Admin</th>
            <th style="width: 90px">Moder</th>
            <th style="width: 90px">Active</th>
            <th></th>
        </tr>
        <td>{{ $user->id }}.</td>
        <td>
            <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}">
        </td>
        <td>
           <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}">
        </td>
        @if ($user->isBacker)
            <td> <input type="checkbox" name="isBacker" value="1 " checked> </td>
        @else
            <td> <input type="checkbox" name="isBacker" value="1"></td>
        @endif

        @if ($user->isCreator)
            <td> <input type="checkbox" name="isCreator" value="1" checked></td>
        @else
            <td> <input type="checkbox" name="isCreator" value="1"></td>
        @endif
        @if ($user->isAdmin)
            <td> <input type="checkbox" name="isAdmin" value="1" checked></td>
        @else
            <td> <input type="checkbox" name="isAdmin" value="1"></td>
        @endif
        @if ($user->isModer)
            <td> <input type="checkbox" name="isModer" value="1" checked></td>
        @else
            <td> <input type="checkbox" name="isModer" value="1"></td>
        @endif
        @if ($user->isActive)
            <td> <input type="checkbox" name="isActive" value="1" checked></td>
        @else
            <td> <input type="checkbox" name="isActive" value="1"></td>
        @endif
            <td> <input type="submit" value="update" class="btn btn-warning"> </td>
        </table>
        {{ Form::token() }}
    </form>
@endsection