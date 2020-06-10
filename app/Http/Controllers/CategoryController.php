<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use function PHPSTORM_META\argumentsSet;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::latest()->paginate(15);
        return view('admin.category.index', compact('data'))->with('i',(request()->input('page', 1) -1) *15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Category::saveCategoryInfo($request);

        // return redirect('admin.writer.index')->with('success', 'Writer Added Successfully!');
        return redirect('admin/categories')->with('success', 'Category Added Successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @param  \App\Writer $writer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Category::findOrFail($id);
        // return view('admin.writer.index', compact('shData','sh'));
        return view('admin.category.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @param  \App\Writer $writer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Category::findOrFail($id);
        //return view('admin.writer.index', compact('edtData','edt'));
        return view('admin.category.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Writer $writer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        Category::updateCategoryInfo($request, $id);

        // return redirect('admin.writer.index')->with('success', 'Writer Added Successfully!');
        return redirect('admin/categories')->with('success', 'Category Updated Successfully!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Writer $writer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Category::findOrFail($id);
        $data->delete();

        //return redirect('admin.writer.index')->with('success', 'Writer Updated Successfully!');
        return redirect('admin/categories')->with('success', 'Category Deleted Successfully!');

    }

    public function delete(Request $request){
        $writer = Category::find($request->id);
        $writer->delete();
        return redirect('admin/categories')->with('success', 'Category Deleted Successfully!');

    }
}
