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

    /*//middleware
    public function __construct(){
        $this->middleware('auth')->except(['index','show']);
    }*/


    public function index(){

        /*$posts=Post::latest()->get();*/
        /*paginating posts desc order to get the latest post 1st*/
        $newposts=Post::orderBy('id','desc')->paginate(5);
        $posts=Post::orderBy('id','desc')->paginate(3);
        return view('posts.index',compact('posts','newposts'));
    }
    //showing create view
    public function create(){

        $user = Auth::user();
        $categorys= Category::all();
        return view('posts.create1',compact('categorys','user'))->with('title',"Create New Blog");
    }

    //showing specific Post
    public function show($id){
        $newposts=Post::orderBy('id','desc')->paginate(5);
        $post =Post ::find($id);
        return view('posts.show',compact('post','newposts'));
    }

    //Showing the update Page
    public function update($id){
        $post =Post ::find($id);
        $categorys= Category::all();
        $user = Auth::user();
        return view('posts.update',compact('post','categorys','user'))->with('title',"Edit Blog");
    }

    //Storing updated Post
    public function edit(Request $request,$id){
        //for validation
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'category' => 'required'
        ]);

        $data = array(
            'title' => $request->input('title'),
            'body' => $request->input('body'),
        );
        //for image
        $post =Post ::find($id);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('upload/images/' .$filename);
            Image::make($image)->resize(800,400)->save($location);

            $post->image=$filename;
        }

        $post->save();
        //updating in database
        Post::where('id',$id)->update($data);
        $post->category()->attach($request->input('category'));
        $notification = [
            'message' => 'Post Updated Successfully!',
            'alert-type' => 'success'
        ];

        return redirect('/')->with($notification);

    }

    //Deleting Post
    public function delete($id){

        Post::where('id',$id)->delete($id);
        $notification = [
            'message' => 'Post Deleted Sucessfully!',
            'alert-type' => 'success'
        ];
        return redirect('/')->with($notification);
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
        /*$post->category_id = $request->input('category');*/
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
        $post->category()->attach($request->input('category'));

        //return $post->category_id;
        $notification = [
            'message' => 'Post added Sucessfully!',
            'alert-type' => 'success'
        ];

        return redirect('/')->with($notification);;
    }
    /*for contact page*/
    public function contact(){
        $posts=Post::orderBy('id','desc')->paginate(5);
        return view('contact',compact('posts'));
    }

    public function query(Request $request){
        // Gets the query string from our form submission
        $query = $request->input('search');;
        // Returns an array of articles that have the query string located somewhere within
        // our articles titles. Paginates them so we can break up lots of search results.
        $posts=Post::where('title', 'LIKE', '%' . $query . '%')->orWhere('body','LIKE','%'.$query.'%')->paginate(10);
        $newposts=Post::orderBy('id','desc')->paginate(5);
        /*$posts=Post::orderBy('id','desc')->paginate(3);*/

        // returns a view and passes the view the list of articles and the original query.
        return view('posts.index', compact('posts', 'newposts'));
    }

    public function myPosts($id)
    {
        $profile = Profile::find($id);
        $user = User::find($id);
        $posts = Post::where('user_id', Auth::User()->id)->orderBy('id', 'desc')->get();
        return view('profile.show', compact('posts', 'user', 'profile'));
        /*return $profile;  */
    }

}
