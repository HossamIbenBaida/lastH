@extends('user.layout')
@section('title')
    {{--{{$user->name}}--}}
@endsection

@section('left_bar')

    @include('user.partials.leftbar')

@endsection

@section('user_content')

    @include('user.partials.password_edit')

@endsection

@section('right_bar')

    @include('user.partials.rightbar_edit')

@endsection

@section('js')
    <script>
        $("#profile").click(function () {
            $("input[id='profile-image']").click();
        });
        $('#profile-image').change(function () {
            $('.profile-form').submit();
        });
    </script>

@endsection