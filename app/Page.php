<?php

use Cviebrock\EloquentSluggable\Sluggable;

class Page extends Model
{
use Sluggable;

/**
* Return the sluggable configuration array for this model.
*
* @return array
*/
public function sluggable()
{
return [
'slug' => [
'source' => 'title'
]
];
}
}
