<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //
    public function index(){
        $category = Category::with('products')->get();
        $data['category_list'] = $category;


       // return response()->json(['status' => 'success', 'data' => $category]);


        return view('admin.category.index', $data);
    }

    public function delete($id){
        Category::where('id', $id)->delete();
        session()->flash('message', 'Successfully deleted');
        return redirect()->back();
    }

    public function statusChange($id){
        $category = Category::find($id);
        if($category->is_active == 1)
            $category->is_active = 0;
        else
            $category->is_active = 1;

        $category->save();

        session()->flash('message', 'Successfully status changed');
        return redirect()->back();
    }

    public function create(){
        return view('admin.category.add');
    }

    public function store(Request $request){
        $this->validate($request,['title'=>'required']);
        $category = new Category();
        $category->name = $request->title;
        $category->slug = str_slug($request->title);
        $category->save();

        session()->flash('message','Category sucesspully added');
        return redirect()->route('admin.category.index');

    }

    public function edit($id){
        $data['cat'] = Category::find($id);
        return view('admin.category.edit',$data);

    }

    public function update (Request $request){
        $this->validate($request,['title' =>'required']);
        //$category = ['name' => $request->name];
        //Category::where('id', $request->category_id)->update($category);

        $category = Category::find($request->category_id);
        $category->name=$request->title;
        $category->slug= str_slug($request->title);
        $category->save();


        session()->flash('message','Category sucessfully updated');
        return redirect()->route('admin.category.index');
    }

}
