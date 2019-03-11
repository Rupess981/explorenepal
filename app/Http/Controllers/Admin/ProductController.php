<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller{

    public function index($category_id){
        $data['products'] = Product::with('category')->where('category_id', $category_id)->get();
        return view('admin.product.index', $data);
    }

    public function delete($id){
        Product::where('id', $id)->delete();
        session()->flash('message', 'Successfully deleted');
        return redirect()->back();
    }

    public function statusChange($id){
        $product = Product::find($id);
        if($product->is_active == 1)
            $product->is_active = 0;
        else
            $product->is_active = 1;

        $product->save();

        session()->flash('message', 'Successfully status changed');
        return redirect()->back();
    }

    public function create(){
        return view('admin.product.add');
    }

    public function store(Request $request){
        $this->validate($request,['title'=>'required']);
        $product = new Product();
        $product->name = $request->title;
        $product->slug = str_slug($request->title);
        $product->save();

        session()->flash('message','product sucessfully added');
        return redirect()->route('admin.product.index');

    }

    public function edit($id){
        $data['cat'] = Product::find($id);
        return view('admin.product.edit',$data);

    }

    public function update (Request $request){
        $this->validate($request,['title' =>'required']);
        //$category = ['name' => $request->name];
        //Category::where('id', $request->category_id)->update($category);

        $product = Product::find($request->product_id);
        $product->name=$request->title;
        $product->slug= str_slug($request->title);
        $product->save();


        session()->flash('message','product sucessfully updated');
        return redirect()->route('admin.product.index');
    }


}
