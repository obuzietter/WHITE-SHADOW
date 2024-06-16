<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Image;

class PagesController extends Controller
{
    public function index()
    {
        $images = Image::inRandomOrder()->get();

        return view('index')->with('images', $images);
    }
    public function about()
    {
        $testimonials = Testimonial::all()->where('approved', 1);
        return view("about")->with('testimonials', $testimonials);
    }
    public function services()
    {
        $testimonials = Testimonial::all()->where('approved', 1);
        return view("services")->with('testimonials', $testimonials);
    }
    public function contact()
    {
        return view("contact");
    }
    public function gallery()
    {
        $images = Image::inRandomOrder()->get();
        
        return view("gallery")->with('images', $images);
    }
    public function gallerySingle()
    {
        return view("gallery-single");
    }
}
