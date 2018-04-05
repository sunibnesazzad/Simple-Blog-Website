<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Post;
use Image;
use Auth;
use App\Comment;

class PostController extends Controller
{

    //middleware
    public function __construct(){
        $this->middleware('auth')->except(['index','show']);
    }


    public function index(){

        $posts=Post::latest()->get();
        return view('posts.index',compact('posts'));
    }
     //showing create view
    public function create(){

        $user = Auth::user();
         $categorys= Category::all();
        return view('posts.create1',compact('categorys','user'))->with('title',"Create New Blog");
    }

    //showing specific Post
    public function show($id){

           $post =Post ::find($id);
        return view('posts.show',compact('post'));
    }

    //Showing the update Page
    public function update($id){
        $post =Post ::find($id);
        $categorys= Category::all();
        return view('posts.update',compact('post'));
    }

    //Storing updated Post
    public function edit(Request $request,$id){
       //for validation
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
        ]);

        $data = array(
           'title' => $request->input('title'),
            'body' => $request->input('body'),
            'category_id' => $request->input('category'),
        );
        //updating in database
        Post::where('id',$id)->update($data);

        return redirect('/')->with('info','Data Updated Sucessfully');

    }

    //Deleting Post
    public function delete($id){

        Post::where('id',$id)->delete($id);
        return $id;
       // return redirect('/')->with('info','Post Deleted Successfully');
    }

    //storing in database
    public function store(Request $request){

        //validation
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'image' => 'sometimes|image',

        ]);

        //storing in database post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->category_id = $request->input('category');
        $post->user_id = auth()->id();

        //for image
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('upload/images/' .$filename);
            Image::make($image)->resize(800,400)->save($location);

            $post->image=$filename;
        }

        $post->save();

         //return $post->category_id;

        return redirect('/')->with('info','Post added Sucessfully');
    }

}
