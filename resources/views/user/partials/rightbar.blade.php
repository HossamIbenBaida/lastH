
        <div class="panel panel-default">
            <div class="panel-heading">Contact information</div>
            <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        {{$user->contact->address->street_address}}
                            <i class="fa fa-map-marker pull-left" aria-hidden="true"></i>
                    </li>
                    <li class="list-group-item">
                        {{$user->contact->phone}}
                        <i class="fa fa-phone pull-left" aria-hidden="true"></i>
                    </li>
                    <li class="list-group-item">

                        {{$user->contact->email}}
                        <i class="fa fa-envelope-o pull-left" aria-hidden="true"></i>
                    </li>
                    <li class="list-group-item">
                            0575658842
                        <i class="fa fa-fax pull-left" aria-hidden="true"></i>
                    </li>
                </ul>
            </div>
        </div>
