<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = ['product_id', 'quantity', 'trans_comment','trans_referance', 'trans_by', 'trans_at', 'trans_status'];

    public static function getData($id, $field) {
        $value = Inventory::where('id', $id)->first();
        if (empty($value->$field)) {
            return null;
        } else {
            return $value->$field;
        }
    }
}
