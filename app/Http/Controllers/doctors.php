<?php

namespace App\Http\Controllers;
use App\City;
use App\Role;
use App\Speciality;
use App\User;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;


class doctors extends Controller
{

public function index()
    {

        $posts=User::paginate(3)->where('role_id','=','3');
        return view('pages.categories.doctors',compact('posts'));
    }

}
