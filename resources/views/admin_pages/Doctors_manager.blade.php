@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-10">
        <h1>Doctors Manager</h1>
    </div>
    <div class="col-md-2">
        <a href="{{route('DocController')}}" class="btn btn-lg btn-block btn-primary bnt-h1-spacing">refrech</a>
    </div>
    <div class="col-md-12">
        <hr>
    </div>
</div>
    <div class="row">
        <div class="col-ms-12">

            <table>
                <thead>
                <th>avatar</th>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>about</th>
                <th>created at</th>
                <th>manage</th>
                </thead>
                <tbody>
                @foreach($doctors as $doctor)
                 <tr>
                     <th>{{$doctor->avatar}}</th>
                     <td>{{$doctor->id}}</td>
                     <td>{{$doctor->name}}</td>
                     <td>{{$doctor->contact->email}}</td>
                     <td>{{$doctor->contact->about}}</td>
                     <td>{{$doctor->contact->created_at}}</td>
                     <td><a href="{{"user/".$doctor->username}}" class="btn btn-success">view</a><br><a href="#" class="btn btn-primary">edit</a> {!!  Form::open (array('route'=>'user.drop' , 'methode'=>'get'))!!}{!! Form::submit('Drop',array('class'=>'btn btn-danger')) !!}{!!Form::close()!!}</td>
                 </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection