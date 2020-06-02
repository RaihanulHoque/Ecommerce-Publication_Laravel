<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['parent', 'title','title_bang', 'slug', 'detail_info', 'created_by', 'updated_by'];
}
