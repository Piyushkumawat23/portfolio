<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Support\Str;

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


        $blogs = Blog::where('status', 'published') // Only published blogs
                ->latest()
                ->take(4) // just 2 blogs
                ->get();


        return view('portfolio.index', compact('projects','blogs'));
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

    public function blog(Request $request)
    {
        $categories = BlogCategory::all();

        $query = Blog::with('category')
                    ->where('status', 'published');

        if ($request->has('category')) {
            $query->where('category_id', $request->category);
        }

        $blogs = $query->latest()->paginate(6);

        return view('portfolio.blog', compact('blogs', 'categories'));
    }
    public function blog_details($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('portfolio.blog-details', compact('blog'));
    }

    public function contact()
    {
        return view('portfolio.contact');
    }
}
