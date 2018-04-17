<?php

namespace App\Http\Controllers;

use App\Mail\Success_mail;
use App\Role;
use App\Profile;
use Illuminate\Http\Request;
use App\User;
use Image;
use Illuminate\Support\Facades\Mail; 


class RegistrationController extends Controller
{



    public function create(){
        $roles= Role::all();
        return view('registration.registration2',compact('roles'));
    }

    public function store(Request $request){

        //return request('name');
        //validate the form
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            /*'image' => 'required'*/
        ]);
        //crete and save the user

       // $user= User::create(request(['name','email','password']));

        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        /*$user->role_name = request('role');*/
        $user->save();

        //sign them in
        auth()->login($user);
        //assigning permission
        $user->assignRole('writer');

        //creating profile part
        $profile = new Profile;
        $profile->user_id = $user->id;

        //for image
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('upload/default/' .$filename);
            Image::make($image)->resize(200,200)->save($location);

            $profile->image=$filename;
        }

        $profile->save();

        //firing the mail
        Mail::to($user->email)->send(new Success_mail($user));

        $notification = [
            'message' => 'Registration is successful.!',
            'alert-type' => 'success'
        ];
        return redirect()->home()->with($notification);
    }

}
