<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class SessionController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except(['destroy']);
    }

    public function create(){
       return view('session.create');
    }

    public function destroy(){

        auth()->logout();
        $notification = [
            'message' => 'Logout Successfully!',
            'alert-type' => 'success'
        ];
        return redirect('/login')->with($notification);
    }


    public function store()
    {
        if (auth()->attempt(request(['email' , 'password']))) {
            $notification = [
                'message' => 'Login Successfully!',
                'alert-type' => 'success'
            ];
            return  redirect('/')->with($notification);
        }else{
            $notification = [
                'message' => 'Please check your creddential and try again!',
                'alert-type' => 'error'
            ];
            return  redirect('login')->with($notification);
        }
    }



}
