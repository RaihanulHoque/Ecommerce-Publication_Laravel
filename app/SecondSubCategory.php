<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use DB;
use Intervention\Image\ImageManagerStatic as Image;

class SecondSubCategory extends Model
{
    protected $fillable = ['parent','title','title_bang', 'image', 'slug', 'detail_info', 'created_by', 'updated_by'];

    public static function saveCategoryInfo($request){

        $slugTxt = Str::slug($request->title);

        $request->validate([
            'parent'         =>'required',
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
            $image_resize->save(public_path('uploads/categories/' .$filename));
        }
        //echo $filename; exit();

        $form_data = array(
            'parent'        =>$request->parent,
            'title'         =>$request->title,
            'title_bang'    =>$request->title_bang,
            'slug'          =>$slugTxt,
            'detail_info'   =>$request->detail_info,
            'image'         =>$filename,
            'created_by'    =>Auth::id(),
            'created_at'    =>time()
        );

        SecondSubCategory::create($form_data);
    }

    //UPDATE Category INFORMATION
    public static function updateCategoryInfo($request, $id){

        $category = SecondSubCategory::findOrFail($id);
        $slugTxt = Str::slug($request->title);

        $filename =$request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request -> validate([
                'parent'         =>'required',
                'title'         =>'required',
                'title_bang'    =>'required',
                'image'         =>'image|max:1000'
            ]);

            $image          = $request->file('image');
            $filename       = rand().'.'.$image->getClientOriginalExtension();
            $image_resize   = Image::make($image->getRealPath());
            $image_resize->resize(1000, 150);
            $image_resize->save(public_path('uploads/categories/' .$filename));

        }else{
            $request -> validate([
                'parent'         =>'required',
                'title'         =>'required',
                'title_bang'    =>'required',
            ]);
        }

        $form_data = array(
            'parent'        =>$request->parent,
            'title'         =>$request->title,
            'title_bang'    =>$request->title_bang,
            'slug'          =>$slugTxt,
            'detail_info'   =>$request->detail_info,
            'image'         =>$filename,
            'updated_by'    =>Auth::id(),
        );

        DB::table('second_sub_categories')->where([
            ['id', '=', $id],
        ])->update($form_data);
        //Category::WhereId($id)->update($form_data);
        //return redirect('admin.writer.index')->with('success', 'Writer Updated Successfully!');
        return redirect('admin/sec-sub-categories')->with('success', 'Second SubCategory Updated Successfully!');

    }

    public static function getData($id, $field) {
        $value = SecondSubCategory::where('id', $id)->first();
        if (empty($value->$field)) {
            return null;
        } else {
            return $value->$field;
        }
    }
}
