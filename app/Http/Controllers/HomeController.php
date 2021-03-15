<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug = null)
    {
        $sliderItems = \App\Models\MainSlider::getData();
        if(is_null($slug)) {
            return view('index', compact('sliderItems'));
        } 

        if($page = Page::where('slug', $slug)->first()) {

            return view('pages.index', compact('page'));
        }
        
        return view('empty');
    }

}
