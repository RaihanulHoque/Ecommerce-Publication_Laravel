<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function addCategory(){
        //echo "Category Adding";
        return view('admin.category.add-category');
    }

    public function newCategory(Request $request){
        //return Auth::id();
        //return $request->all();
        DB::table('categories')->insert([
            'parent'    => $request->parent,
            'title'    => $request->title,
            'title_bang'    => $request->title_bang,
            'slug'    => $request->slug,
            'detail_info'    => $request->detail_info,
            'created_by'    => Auth::id(),
            'detail_info'    => $request->detail_info,
            'created_at' => time(),
        ]);



        Category::updateOrCreate(['id' => $request->category_id],
            [
                'parent' => $request->parent,
                'title' => $request->title,
                'title_bang' => $request->title_bang,
                'slug' => $request->slug,
                'detail_info' => $request->detail_info,
                'created_by' => Auth::id(),
                'created_at' => time(),
            ]
        );

        return 'Added Succesfully';

    }
}
