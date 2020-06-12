<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductApprovalStatus extends Model
{
    protected $fillable = ['title'];

    public static function getData($id, $field) {
        $value = ProductApprovalStatus::where('id', $id)->first();
        if (empty($value->$field)) {
            return null;
        } else {
            return $value->$field;
        }
    }
}
