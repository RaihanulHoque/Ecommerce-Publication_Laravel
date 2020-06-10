<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class Product extends Model

{

    protected $fillable = [

        'name', 'detail'

    ];

    public static function getData($id, $field) {
        $value = Product::where('id', $id)->first();
        //$value = Product::model()->findByAttributes(array('id' => $id));
        if (empty($value->$field)) {
            return null;
        } else {
            return $value->$field;
        }
    }
}
