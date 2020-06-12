<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoverCollageImage extends Model
{
    protected $fillable = ['product_id', 'collage_id', 'image'];

    public static function getData($id, $field) {
        $value = CoverCollageImage::where('id', $id)->first();
        if (empty($value->$field)) {
            return null;
        } else {
            return $value->$field;
        }
    }
}
