<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PagesController extends Controller
{

    public function check_slug(Request $request)
    {
        //return ($request);
        // Old version: without uniqueness
        $slug = str_slug($request->title);

        // New version: to generate unique slugs
        $slug = SlugService::createSlug(Page::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }
}
