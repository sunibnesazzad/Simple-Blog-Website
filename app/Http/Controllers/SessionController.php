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
        return redirect('/');
    }


    public function store()
    {
        if (auth()->attempt(request(['email' , 'password']))) {
            return redirect('/')->with('success','Log in successfylly.');
        }else{
            return redirect('login')->with('error','Please check your creddential and try again');
        }
    }



}
