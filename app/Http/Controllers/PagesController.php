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
        // $images = Image::all()->where('category', 'people_portraits');
        // $imageCategories = [
        //     'portrait' => Image::all()->where('category', 'people_portraits')
        // ];

        return view("gallery")->with('images', $images);
    }
    public function gallerySingle($category)
    {
        $images = Image::where('category', $category)->get();

        $singleCount = 0;
        $arrayCount = 0;
        foreach ($images as $image) {
            if (is_array($image->path)) {
                $arrayCount += count($image->path);
            } else {
                $singleCount++;
            }
        }
        $totalCount = $singleCount + $arrayCount;
        $categoryArr = [
            'people_portraits' => 'People and Portraits',
            'events_occasions' => 'Events and Occasions',
            'commercial_business' => 'Commercial and Business',
        ];
        return view('gallery', compact('images', 'totalCount', 'category', 'categoryArr'));
    }
}
