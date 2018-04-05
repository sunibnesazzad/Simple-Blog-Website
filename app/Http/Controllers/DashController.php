<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Profile;
use App\User;
use Auth;


class DashController extends Controller
{
    public function create($id){
        $user=  User::find($id);
        $posts= Post::where('user_id',Auth::User()->id)->orderBy('id','desc')->get();;
        return view('dashbord.dash_profile',compact('posts','user'))->with('title',"Profile");
        /*return $user;*/
    }
}
