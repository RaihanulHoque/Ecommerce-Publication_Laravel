<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(){
        //echo "Category Adding";
        return view('admin.category.add-category');
    }
}
