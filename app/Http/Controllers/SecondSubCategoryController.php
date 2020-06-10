<?php

namespace App\Http\Controllers;

use App\SecondSubCategory;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use function PHPSTORM_META\argumentsSet;

class SecondSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SecondSubCategory::latest()->paginate(50);
        $subCategories = DB::table('sub_categories')->orderBy('id')->get();
        //return view('admin.writer.index', compact('data'))->with('i',(request()->input('page', 1) -1) *5);
        return view('admin.sec-sub-category.index', compact('subCategories','data'))->with('i',(request()->input('page', 1) -1) *50);
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
        SecondSubCategory::saveCategoryInfo($request);

        // return redirect('admin.writer.index')->with('success', 'Writer Added Successfully!');
        return redirect('admin/sec-sub-categories')->with('success', 'Second SubCategory Added Successfully!');

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
        $data = SecondSubCategory::findOrFail($id);
        // return view('admin.writer.index', compact('shData','sh'));
        return view('admin.sec-sub-category.view', compact('data'));
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
        $data = SecondSubCategory::findOrFail($id);
        //return view('admin.writer.index', compact('edtData','edt'));
        $subCategories = DB::table('sub_categories')->orderBy('id')->get();
        return view('admin.sec-sub-category.edit', compact('subCategories','data'));
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

        SecondSubCategory::updateCategoryInfo($request, $id);

        // return redirect('admin.writer.index')->with('success', 'Writer Added Successfully!');
        return redirect('admin/sec-sub-categories')->with('success', 'Secondary SubCategory Updated Successfully!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Writer $writer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = SecondSubCategory::findOrFail($id);
        $data->delete();

        //return redirect('admin.writer.index')->with('success', 'Writer Updated Successfully!');
        return redirect('admin/sec-sub-categories')->with('success', 'Secondary SubCategory Deleted Successfully!');

    }

    public function delete(Request $request){
        $writer = SecondSubCategory::find($request->id);
        $writer->delete();
        return redirect('admin/sec-sub-categories')->with('success', 'Secondary SubCategory Deleted Successfully!');

    }
}
