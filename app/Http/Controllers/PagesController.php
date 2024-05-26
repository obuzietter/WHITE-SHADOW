<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view("index");
    }
    public function about(){
        return view("about");
    }
    public function services(){
        return view("services");
    }
    public function contact(){
        return view("contact");
    }
    public function gallery(){
        return view("gallery");
    }
    public function gallerySingle(){
        return view("gallery-single");
    }
}
