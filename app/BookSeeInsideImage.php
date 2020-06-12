<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookSeeInsideImage extends Model
{
    protected $fillable = ['product_id', 'seeinside_id', 'image'];

    public static function getData($id, $field) {
        $value = BookSeeInsideImage::where('id', $id)->first();
        if (empty($value->$field)) {
            return null;
        } else {
            return $value->$field;
        }
    }
}
