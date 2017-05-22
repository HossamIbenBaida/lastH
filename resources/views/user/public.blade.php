@extends('user.layout')

@section('title')
    {{$user->name}}
@endsection
@section('leftbar')
    @include('user.partials.leftbarpublic')
@endsection
@section('user_content')

    <div class="panel panel-default">
        <div class="panel-heading">About : {{$user->name}}</div>
        <div class="panel-body">
            {{$user->contact->about}}
        </div>
        <div style="width: 100%; height: 200px;">
            {!! Mapper::render() !!}
        </div>
    </div>

@endsection
@section('rightbar')
    @include('user.partials.rightbar')
@endsection