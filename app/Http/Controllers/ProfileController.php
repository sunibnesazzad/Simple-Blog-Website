<?php

namespace App\Http\Controllers;

use App\Post;
use App\Profile;
use App\User;
use App\Role;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;


class ProfileController extends Controller
{
    public function create(){

        $profile = Profile::where('user_id',Auth::User()->id)->first();
        $posts= Post::where('user_id',Auth::User()->id)->orderBy('id','desc')->get();
        $user = Auth::user();
        /*for first name*/

        return view('profile.profile',compact('profile','posts','user','first_name'))->with('title','Profile');
    }

    public function update(){

        $profile = Profile::where('user_id',Auth::user()->id)->first();
        $posts= Post::where('user_id',Auth::User()->id)->orderBy('id','desc')->get();;
        $user = Auth::user();
        return view('dashbord.edit_profile',compact('profile','posts','user'))->with('title','Profile');
    }

    public function edit(Request $request,$id){
        //validation
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required',
            'position' => 'required',
            'platform' => 'required',
            'about' => 'required'
        ]);
        $data =array(
            'name' => $request->input('name'),
        );

        $data1 = array(
            /*'name' => $request->input('name'),*/
            'phone' => $request->input('phone'),
            'position' => $request->input('position'),
            'platform' => $request->input('platform'),
            'about_me' => $request->input('about'),

        );

        //for image
        $profile = Profile::find($id);
        //add new photo
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('upload/default/' .$filename);
            Image::make($image)->resize(200,200)->save($location);
            $oldImage = $profile->image;

            //update database
            $profile->image=$filename;
            //delete old image
            Storage::delete($oldImage);
        }

        //updating in database
        $profile->save();
        Profile::where('id',$id)->update($data1);
        User::where('id',$id)->update($data);

        return redirect()->action('DashController@create', ['id' => $id])->with('info','Profile Updated Sucessfully')->with('title','Profile');
    }
    //Showing to normal users
    public function show($id){

        $profile= Profile::find($id);
        $user=  User::find($id);
        $posts= Post::where('user_id',Auth::User()->id)->orderBy('id','desc')->get();
        return view('profile.show',compact('posts','user','profile'));
        /*return $profile;  */
    }

    //Showing to all my postss
    public function myposts($id){

        $profile= Profile::find($id);
        $user=  User::find($id);
        $posts= Post::where('user_id',Auth::User()->id)->orderBy('id','desc')->get();
        return view('posts.myPosts',compact('posts','user','profile'))->with('title',"My Blogs");
    }
}
