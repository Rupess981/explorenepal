<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
//    public function index(){
//
//        $category = Category::all();
//        $data['category_list'] = $category;
//        return view ("admin.category.index");
//
//    }
    public function products(){
        return $this->hasMany('App\Product','category_id');
    }

}
