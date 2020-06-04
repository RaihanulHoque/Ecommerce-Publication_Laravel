<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    //title title_bang slug phone email address detail_info
    protected $fillable=['title', 'title_bang', 'slug','phone','email','address', 'detail_info', 'image', 'image_origin_name', 'created_by','updated_by' ];

}
