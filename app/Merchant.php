<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use DB;
use Intervention\Image\ImageManagerStatic as Image;

class Merchant extends Model
{
    protected $fillable=['title', 'title_bang', 'slug','phone','email', 'athorised_person','address', 'detail_info', 'image', 'created_by','updated_by', 'status' ];

    public static function saveMerchantInfo($request){

        $slugTxt = Str::slug($request->title);

        $request->validate([
            'title'         =>'required',
            'title_bang'    =>'required',
            'image'         =>'image|max:1200',
        ]);
        $filename ='';
        if($request->hasFile('image')) {
            $image       = $request->file('image');
            $filename = rand().'.'.$image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(1000, 150);
            $image_resize->save(public_path('uploads/merchants/' .$filename));
        }
        //echo $filename; exit();
        $form_data = array(
            'title'         =>$request->title,
            'title_bang'    =>$request->title_bang,
            'slug'          =>$slugTxt,
            'athorised_person'          =>$request->athorised_person,
            'phone'         =>$request->phone,
            'email'         =>$request->email,
            'address'       =>$request->address,
            'detail_info'   =>$request->detail_info,
            'status'        =>1,
            'image'         =>$filename,
            'created_by'    =>Auth::id(),
            'created_at'    =>time()
        );

        Merchant::create($form_data);
    }

    //UPDATE Merchant INFORMATION
    public static function updateMerchantInfo($request, $id){

        $Merchant = Merchant::findOrFail($id);
        $slugTxt = Str::slug($request->title);

        $filename =$request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request -> validate([
                'title'         =>'required',
                'title_bang'    =>'required',
                'image'         =>'image|max:1000'
            ]);

            $image          = $request->file('image');
            $filename       = rand().'.'.$image->getClientOriginalExtension();
            $image_resize   = Image::make($image->getRealPath());
            $image_resize->resize(1000, 150);
            $image_resize->save(public_path('uploads/merchants/' .$filename));

        }else{
            $request -> validate([
                'title'         =>'required',
                'title_bang'    =>'required',
            ]);
        }

        $form_data = array(
            'title'         =>$request->title,
            'athorised_person'         =>$request->athorised_person,
            'title_bang'    =>$request->title_bang,
            'slug'          =>$slugTxt,
            'detail_info'   =>$request->detail_info,
            'image'         =>$filename,
            'updated_by'    =>Auth::id(),
            'status'        =>$request->status,
        );

        DB::table('merchants')->where([
            ['id', '=', $id],
        ])->update($form_data);
        //Merchant::WhereId($id)->update($form_data);
        //return redirect('admin.writer.index')->with('success', 'Writer Updated Successfully!');
        return redirect('crud')->with('success', 'Merchant Updated Successfully!');

    }


    public static function getData($id, $field) {
        $value = Merchant::where('id', $id)->first();
        if (empty($value->$field)) {
            return null;
        } else {
            return $value->$field;
        }
    }
}
