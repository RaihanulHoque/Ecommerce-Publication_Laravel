<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransectionStatus extends Model
{
    protected $fillable = ['title', 'notes'];

    public static function getData($id, $field) {
        $value = TransectionStatus::where('id', $id)->first();
        if (empty($value->$field)) {
            return null;
        } else {
            return $value->$field;
        }
    }
}
