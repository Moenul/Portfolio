<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\About;
use App\Models\Service;
use App\Models\Gallary;
use App\Models\Social;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $abouts = About::all();
        $services = Service::all();
        $gallaries = Gallary::all();
        $socials = Social::all();
        return view('home', compact('categories','abouts','services','gallaries','socials'));
    }
}
