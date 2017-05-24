@extends('user.layout')
@section('leftbar')
    @include('user.partials.leftbar')
@endsection
@section('user_content')
    @include('user.specialities')


    <div class="panel panel-default">
        <div class="panel-heading">Edit Account</div>
        <div class="panel-body">
            {!! Form::model(Auth::user(),['id'=>'form','route'=>'user.update','method' => 'put','class'=>'form-horizontal']) !!}
            <div class="form-group">
                {{Form::label('name','Full Name :',['class'=>'col-md-3 control-label'])}}
                <div class="col-md-9">
                    {{Form::text('name',null,['class'=>'form-control'])}}
                </div>
            </div>
            <div class="form-group">
                {{Form::label('email','Email :',['class'=>'col-md-3 control-label'])}}
                <div class="col-md-9">
                    {{Form::text('email',null,['class'=>'form-control'])}}
                </div>
            </div>


            <div class=" form-group">
                {{Form::submit('Save', ['class' => 'btn btn-success col-md-3 col-md-offset-8'])}}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    @include('user.partials.address_edit')
@endsection

@section('rightbar')
    @include('user.partials.rightbar_edit')
@endsection


@section('js')
    <script>
        jQuery(document).ready(function ($) {
            $("#form_address").submit(function () {
                $('input[name=latitude]').val(maps[0].markers[0].getPosition().lat());
                $('input[name=longitude]').val(maps[0].markers[0].getPosition().lng());
                return true;
            });
        });
        $(".cities_select").select2({
            maximumSelectionLength: 2
        });
        $("#profile").click(function() {
            $("input[id='profile-image']").click();
        });
        $('#profile-image').change(function(){
            $('.profile-form').submit();
        });
        $('div.alert').delay(3000).slideUp(300);


    </script>
    <script type="text/javascript">
        $(".js-example-basic-multiple").select2();
    </script>
@endsection