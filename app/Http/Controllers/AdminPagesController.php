<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Role;
use App\Speciality;
use App\User;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use Illuminate\Support\Facades\Auth;
use Image;
class AdminPagesController extends Controller
{
   public function Doctors(){
       $doctors=User::paginate(10)->where('role_id','=','3');
       return view('admin_pages.Doctors_manager',compact('doctors'));
   }
public function drop($id){

        if($id != Auth::user()->id){
            Notification::container()->error('You are not allowed to delete that user. WTF.');
            return Redirect::route('home');

        }
        if(User::find($id)){


            $user = User::find($id);
            $user->contact->delete();
            $user->address->delete();
            $user->delete();
            Notification::container()->success('Your account has been permanently removed from the system. Sorry to see you go!');
            return Redirect('DocController');
        } else {

            return Redirect('DocController');
        }
    }

}
