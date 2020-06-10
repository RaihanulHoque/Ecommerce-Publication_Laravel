<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use DB;
class Writer extends Model
{
    //title title_bang slug phone email address detail_info
    protected $fillable=['title', 'title_bang', 'slug','phone','email','address', 'detail_info', 'image', 'image_origin_name', 'created_by','updated_by' ];

    public static function saveWriterInfo($request){

        $slugTxt = Str::slug($request->title);

        $request->validate([
            'title'         =>'required',
            'title_bang'    =>'required',
            //'slug'          =>'required',
            'image'         =>'image|max:1000',
        ]);

        $image = $request->file('image');
        $image_origin_name = $image;
        $new_name = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploads/writers/'),$new_name);
        $form_data = array(
            'title'         =>$request->title,
            'title_bang'    =>$request->title_bang,
            'slug'          =>$slugTxt,
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
    }

    //UPDATE WRITER INFORMATION
    public static function updateWriterInfo($request, $id){

        $writer = Writer::findOrFail($id);
        $slugTxt = Str::slug($request->title);

        $image_name =$request->hidden_image;
        $image_origin_name = $request->image_origin_name;
        $image = $request->file('image');
        if($image != '')
        {
            $request -> validate([
                'title'         =>'required',
                'title_bang'    =>'required',
                //'slug'          =>'required',
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
            'slug'          =>$slugTxt,
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
}

