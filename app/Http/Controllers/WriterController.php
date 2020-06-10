<?php

namespace App\Http\Controllers;

use App\Writer;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use function PHPSTORM_META\argumentsSet;

class WriterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Writer::latest()->paginate(50);
        return view('admin.writer.index', compact('data'))->with('i',(request()->input('page', 1) -1) *50);
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
        Writer::saveWriterInfo($request);

       // return redirect('admin.writer.index')->with('success', 'Writer Added Successfully!');
        return redirect('admin/writers')->with('success', 'Writer Added Successfully!');

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
        $data = Writer::findOrFail($id);
       // return view('admin.writer.index', compact('shData','sh'));
        return view('admin.writer.view', compact('data'));
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
        $data = Writer::findOrFail($id);
        //return view('admin.writer.index', compact('edtData','edt'));
        return view('admin.writer.edit', compact('data'));
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

        Writer::updateWriterInfo($request, $id);

        // return redirect('admin.writer.index')->with('success', 'Writer Added Successfully!');
        return redirect('admin/writers')->with('success', 'Writer Updated Successfully!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Writer $writer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Writer::findOrFail($id);
        $data->delete();

        //return redirect('admin.writer.index')->with('success', 'Writer Updated Successfully!');
        return redirect('crud')->with('success', 'Writer Deleted Successfully!');

    }

    public function delete(Request $request){
        $writer = Writer::find($request->id);
        $writer->delete();
        return redirect('admin/writers')->with('success', 'Writer Deleted Successfully!');

    }
}
