<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use DB;

class Slug extends Model
{
    protected $fillable=['title', 'reference', 'slug_url' ];

    public static function checkExisting($slug){

    }
    public static function makeSlug($slugTitle, $ref){
        $slug = Str::slug($slugTitle);
        $refSubstr = substr($ref, 0, 3);
        $slugTxt = $slug.'-'.$refSubstr;
        if(DB::table('slugs')->where('slug_url', $slugTxt)->doesntExist()){
            $model = new Slug();
            $model->title = $slugTitle;
            $model->reference = $ref;
            $model->slug_url = $slugTxt;
            if($model->save()){
                $slug_id = $model->id;
                return  $slug_id;
            }
        }else{
            $slugTxt =
            $model = new Slug();
            $model->title = $slugTitle;
            $model->reference = $ref;
            $model->slug_url = $slugTxt;
            if($model->save()){
                $slug_id = $model->id;
                return  $slug_id;
            }
        }
    }
    public static function saveSlug($request){

    }
}
