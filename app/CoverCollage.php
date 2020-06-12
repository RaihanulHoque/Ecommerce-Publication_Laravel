<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoverCollage extends Model
{
    protected $fillable = ['product_id', 'folder_name', 'status', 'added_by', 'updated_by'];

    public static function getData($id, $field) {
        $value = CoverCollage::where('id', $id)->first();
        if (empty($value->$field)) {
            return null;
        } else {
            return $value->$field;
        }
    }
}
