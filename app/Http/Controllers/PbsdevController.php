<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PbsdevController extends Controller
{
    public function index(){
        return view('front.home.home');
    }
}
