<ul class="list-group">

    <li class="list-group-item">
        <a href="#">
            <img src="{{asset($user->avatar)}}" class="icon-size img-thumbnail">
        </a></li>
    <li class="list-group-item">
        <p>Dr.{{$user->name}}</p>
    </li>
    <li class="list-group-item">
        <a href="#">contact</a>
    </li>
    {{--<li class="list-group-item">--}}
        {{--<a href="#">--}}
            {{--<span class="glyphicon pull-right glyphicon-warning-sign"></span>--}}
        {{--</a>--}}
    {{--</li>--}}
</ul>