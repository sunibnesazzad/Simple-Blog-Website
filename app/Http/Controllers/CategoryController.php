<?php

namespace App\Http\Controllers;

use App\Category;
use App\Role;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //showing all categories
    public function index(){
        $categorys= Category::all();
        $roles= Role::all();
        return view('category.index',compact('categorys','roles'));
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
        return redirect('/category')->with('info','Category Added Successfully.');

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

        return redirect('/category')->with('info','Category Updated Sucessfully');
    }

    //deleting category
    public function destroy($id){
        Category::where('id',$id)->delete($id);
        return redirect('/category')->with('info','Category Deleted Sucessfully');
    }

}
