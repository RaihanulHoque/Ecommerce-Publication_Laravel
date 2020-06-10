<?php

namespace App\Http\Controllers;

use App\SubCategory;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use function PHPSTORM_META\argumentsSet;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SubCategory::latest()->paginate(50);
        $mainCategories = DB::table('categories')->orderBy('id')->get();
        return view('admin.sub-category.index', compact('mainCategories','data'))->with('i',(request()->input('page', 1) -1) *50);
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
        SubCategory::saveCategoryInfo($request);

        // return redirect('admin.writer.index')->with('success', 'Writer Added Successfully!');
        return redirect('admin/sub-categories')->with('success', 'SubCategory Added Successfully!');

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
        $data = SubCategory::findOrFail($id);
        // return view('admin.writer.index', compact('shData','sh'));
        return view('admin.sub-category.view', compact('data'));
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
        $data = SubCategory::findOrFail($id);
        //return view('admin.writer.index', compact('edtData','edt'));
        $mainCategories = DB::table('categories')->orderBy('id')->get();
        return view('admin.sub-category.edit', compact('mainCategories','data'));
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

        SubCategory::updateCategoryInfo($request, $id);

        // return redirect('admin.writer.index')->with('success', 'Writer Added Successfully!');
        return redirect('admin/sub-categories')->with('success', 'SubCategory Updated Successfully!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Writer $writer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = SubCategory::findOrFail($id);
        $data->delete();

        //return redirect('admin.writer.index')->with('success', 'Writer Updated Successfully!');
        return redirect('admin/sub-categories')->with('success', 'SubCategory Deleted Successfully!');

    }

    public function delete(Request $request){
        $writer = SubCategory::find($request->id);
        $writer->delete();
        return redirect('admin/sub-categories')->with('success', 'SubCategory Deleted Successfully!');

    }
}
