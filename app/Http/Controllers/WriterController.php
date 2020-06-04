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
        $data = Writer::latest()->paginate(5);
        //return view('admin.writer.index', compact('data'))->with('i',(request()->input('page', 1) -1) *5);
        return view('admin.writer.index', compact('data'))->with('i',(request()->input('page', 1) -1) *5);
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
        $request->validate([
            'title'         =>'required',
            'title_bang'    =>'required',
            'slug'          =>'required',
            'image'         =>'image|max:1000',
        ]);

        $image = $request->file('image');
        $image_origin_name = $image;
        $new_name = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploads/writers/'),$new_name);
        $form_data = array(
            'title'         =>$request->title,
            'title_bang'    =>$request->title_bang,
            'slug'          =>$request->slug,
            'phone'         =>$request->phone,
            'email'         =>$request->email,
            'address'       =>$request->address,
            'detail_info'   =>$request->detail_info,
            'image'         =>$new_name,
            'image_origin_name'=> $image_origin_name,
            'created_by'    =>Auth::id(),
            'created_at'    =>time()
        );

        Writer::create($form_data);
       // return redirect('admin.writer.index')->with('success', 'Writer Added Successfully!');
        return redirect('crud')->with('success', 'Writer Added Successfully!');

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
        $writer = Writer::findOrFail($id);

        $image_name =$request->hidden_image;
        $image_origin_name = $request->image_origin_name;
        $image = $request->file('image');
        if($image != '')
        {
            $request -> validate([
                'title'         =>'required',
                'title_bang'    =>'required',
                'slug'          =>'required',
                'image'         =>'image|max:1000'
            ]);
            $image = $request->file('image');
            $image_origin_name = $image;
            $image_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/writers/'),$image_name);
        }else{
            $request -> validate([
                'title'         =>'required',
                'title_bang'    =>'required',
                'slug'          =>'required'
            ]);
        }

        $form_data = array(
            'title'         =>$request->title,
            'title_bang'    =>$request->title_bang,
            'slug'          =>$request->slug,
            'phone'         =>$request->phone,
            'email'         =>$request->email,
            'address'       =>$request->address,
            'detail_info'   =>$request->detail_info,
            'image'         =>$image_name,
            'image_origin_name'=> $image_origin_name,
            'updated_by'    =>Auth::id(),
           // 'updated_at'    =>time()
        );

        DB::table('writers')->where([
            ['id', '=', $id],
        ])->update($form_data);
         //Writer::WhereId($id)->update($form_data);
        //return redirect('admin.writer.index')->with('success', 'Writer Updated Successfully!');
        return redirect('crud')->with('success', 'Writer Updated Successfully!');

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
        return redirect('crud')->with('success', 'Writer Updated Successfully!');

    }
}
