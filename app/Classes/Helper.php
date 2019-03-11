<?php
/**
 * Created by PhpStorm.
 * User: Rupesh
 * Date: 2/20/2019
 * Time: 8:29 AM
 */

namespace App\Classes;


use App\Category;

class Helper
{
    public static function getcategory(){
        return Category::all();
    }
}