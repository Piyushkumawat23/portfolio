<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Portfolio;

class PortfolioController extends Controller
{

    // public function index()
    // {
    //     $projects = Project::with('images')->limit(3)->get();
    //     return view('portfolio.index', compact('projects'));
    // }


    public function index()
{
    $projects = Project::with('images')
                ->where('status', 1) // Only published projects
                ->latest()
                ->limit(3)
                ->get();

    return view('portfolio.index', compact('projects'));
}

    
    public function about()
    {
        return view('portfolio.about');
    }

   
    public function projects()
    {
        return view('portfolio.projects');
    }

    public function testimonial()
    {
        return view('portfolio.testimonial');
    }
    public function faq()
    {
        return view('portfolio.faq');
    }
    public function error()
    {
        return view('portfolio.404');
    }

    public function blog()
    {
        return view('portfolio.blog');
    }
    public function blog_details()
    {
        return view('portfolio.blog-details');
    }
    public function contact()
    {
        return view('portfolio.contact');
    }
}
