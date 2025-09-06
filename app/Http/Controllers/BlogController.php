<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogImage;
use Illuminate\Support\Str;
use Image;



class BlogController extends Controller
{
    /**
     * Save image as webp and return filename
     */
private function saveWebpImage($image, $path = 'uploads/blogs')
{
    $fileName = time() . '_' . uniqid() . '.webp';
    $destination = public_path($path . '/' . $fileName);

    if (!is_dir(public_path($path))) {
        mkdir(public_path($path), 0755, true);
    }

    // v2 syntax
    \Intervention\Image\Facades\Image::make($image)
        ->encode('webp', 90)
        ->save($destination);

    return $fileName;
}




    /**
     * Display a listing of blogs.
     */
    public function index()
    {
        $blogs = Blog::with('category')->latest()->paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new blog.
     */
    public function create()
    {
        $categories = BlogCategory::all();
        return view('admin.blogs.create', compact('categories'));
    }

    /**
     * Store a newly created blog in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'          => 'required|string|max:255',
            'slug'           => 'nullable|string|max:255|unique:blogs,slug',
            'category_id'    => 'required|exists:blog_categories,id',
            'content'        => 'required',
            'read_time'      => 'nullable|integer',
            'author'         => 'nullable|string|max:255',
            'featured_image' => 'nullable|image|mimes:jpg,jpeg,png|max:131072',
            'description'    => 'nullable|string',
            'status'         => 'nullable|in:draft,published',
            'images.*'       => 'nullable|image|mimes:jpg,jpeg,png|max:131072'
        ]);

        // Generate slug
        $validated['slug'] = $validated['slug'] ?? Str::slug($validated['title']);

        // Handle featured image
        if ($request->hasFile('featured_image')) {
            $validated['featured_image'] = $this->saveWebpImage($request->file('featured_image'));
        }

        // Default author
        $validated['author'] = $validated['author'] ?? auth()->user()->name ?? 'Admin';

        // Create blog
        $blog = Blog::create($validated);

        // Handle multiple gallery images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $fileName = $this->saveWebpImage($image);

                $blog->images()->create([
                    'image_url' => $fileName,
                    'caption'   => null,
                    'position'  => 1,
                ]);
            }
        }

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }

    /**
     * Show the form for editing the specified blog.
     */
    public function edit($id)
    {
        $blog = Blog::with('images')->findOrFail($id);
        $categories = BlogCategory::all();
        return view('admin.blogs.edit', compact('blog', 'categories'));
    }

    /**
     * Update the specified blog in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title'          => 'required|string|max:255',
            'slug'           => 'nullable|string|max:255|unique:blogs,slug,' . $id,
            'category_id'    => 'required|exists:blog_categories,id',
            'content'        => 'required|string',
            'read_time'      => 'nullable|integer',
            'author'         => 'nullable|string|max:255',
            'featured_image' => 'nullable|image|mimes:jpg,jpeg,png|max:131072',
            'description'    => 'nullable|string',
            'status'         => 'nullable|in:draft,published',
            'images.*'       => 'nullable|image|mimes:jpg,jpeg,png|max:131072'
        ]);

        $blog = Blog::findOrFail($id);

        // Generate slug
        $validated['slug'] = $validated['slug'] ?? Str::slug($validated['title']);

        // Update featured image if uploaded
        if ($request->hasFile('featured_image')) {
            if ($blog->featured_image && file_exists(public_path('uploads/blogs/' . $blog->featured_image))) {
                unlink(public_path('uploads/blogs/' . $blog->featured_image));
            }
            $validated['featured_image'] = $this->saveWebpImage($request->file('featured_image'));
        }

        // Update blog
        $blog->update($validated);

        // Append new gallery images if uploaded
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $fileName = $this->saveWebpImage($image);

                $blog->images()->create([
                    'image_url' => $fileName,
                    'caption'   => null,
                    'position'  => 1,
                ]);
            }
        }

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified blog from storage.
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        // Delete featured image
        if ($blog->featured_image && file_exists(public_path('uploads/blogs/' . $blog->featured_image))) {
            unlink(public_path('uploads/blogs/' . $blog->featured_image));
        }

        // Delete gallery images
        foreach ($blog->images as $img) {
            if (file_exists(public_path('uploads/blogs/' . $img->image_url))) {
                unlink(public_path('uploads/blogs/' . $img->image_url));
            }
            $img->delete();
        }

        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
