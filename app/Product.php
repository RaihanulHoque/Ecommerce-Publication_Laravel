<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['merchant_id', 'publication_id', 'author_id', 'title', 'title_bang', 'isbn', 'edition', 'sku_code',
        'category', 'sub_category', 'second_sub_category', 'order_type', 'language', 'cover_image', 'cover_collage', 'see_inside',
        'list_price', 'discount_purchase', 'discount_sales', 'quantity', 'reorder_level', 'uom', 'status', 'approval_status',
        'created_by', 'updated_by', 'approved_by', 'approved_at', 'detail_info'];


    public static function getData($id, $field) {
        $value = Writer::where('id', $id)->first();
        if (empty($value->$field)) {
            return null;
        } else {
            return $value->$field;
        }
    }
}
