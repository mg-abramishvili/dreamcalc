@extends('layouts.app')
@section('content')

    <table class="table table-bordered table-hover">
        @foreach($users as $user)
            <tr>
                <td><a href="/user/{{ $user->id }}">{{ $user->name }}</a></td>
            </tr>
        @endforeach
    </table>

@endsection