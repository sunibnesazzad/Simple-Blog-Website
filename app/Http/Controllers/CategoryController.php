<?php

namespace App\Http\Controllers;

use App\Category;
use App\Role;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //showing all categories
    public function index(){
        $posts=Post::orderBy('id','desc')->paginate(5);
        $categorys= Category::paginate(10);
        $roles= Role::all();
        return view('category.newIndex',compact('categorys','roles','posts'));
    }

    //showing create category page
    public function create(){
        $role = Role::all();
        return view('category.create',compact('role'));
    }

    //storing in database
    public function store(Request $request){

        //validation
        $this->validate($request,[
            'category' => 'required'
        ]);

        $category = new Category;
        $category->name = $request->input('category');

        $category->save();
        $notification = [
            'message' => 'Category Added Successfully.!',
            'alert-type' => 'success'
        ];
        return redirect('/category')->with($notification);

    }

    //showing category update page
    public function update($id){
        $category = Category::find($id);
        return view('category.update',compact('category'));

    }

    //storing updated category
    public function edit(Request $request,$id){

        //validation
        $this->validate($request,[
            'category' => 'required'
        ]);

        $data = array(
            'name' => $request->input('category'),
        );
        //updating in database
        Category::where('id',$id)->update($data);
        $notification = [
            'message' => 'Category Updated Sucessfully.!',
            'alert-type' => 'success'
        ];

        return redirect('/category')->with($notification);
    }

    //deleting category
    public function destroy($id){
        Category::where('id',$id)->delete($id);
        $notification = [
            'message' => 'Category Deleted Sucessfully.!',
            'alert-type' => 'info'
        ];
        return redirect('/category')->with($notification);
    }

}
