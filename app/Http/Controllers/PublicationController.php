<?php

namespace App\Http\Controllers;

use App\Publication;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use function PHPSTORM_META\argumentsSet;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Publication::latest()->paginate(50);
        return view('admin.publication.index', compact('data'))->with('i',(request()->input('page', 1) -1) *50);
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
        Publication::savePublicationInfo($request);

        // return redirect('admin.Publication.index')->with('success', 'Publication Added Successfully!');
        return redirect('admin/publications')->with('success', 'Publication Added Successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @param  \App\Publication $Publication
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Publication::findOrFail($id);
        // return view('admin.Publication.index', compact('shData','sh'));
        return view('admin.publication.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @param  \App\Publication $Publication
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Publication::findOrFail($id);
        //return view('admin.Publication.index', compact('edtData','edt'));
        return view('admin.publication.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publication $Publication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        Publication::updatePublicationInfo($request, $id);

        // return redirect('admin.Publication.index')->with('success', 'Publication Added Successfully!');
        return redirect('admin/publications')->with('success', 'Publication Updated Successfully!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publication $Publication
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Publication::findOrFail($id);
        $data->delete();

        //return redirect('admin.Publication.index')->with('success', 'Publication Updated Successfully!');
        return redirect('admin/publications')->with('success', 'Publication Deleted Successfully!');

    }

    public function delete(Request $request){
        $Publication = Publication::find($request->id);
        $Publication->delete();
        return redirect('admin/publications')->with('success', 'Publication Deleted Successfully!');

    }
}
