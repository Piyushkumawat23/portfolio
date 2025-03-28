<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectImage;

class ProjectController extends Controller {
    public function index() {
        $projects = Project::with('images')->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }
    

    public function create() {
        return view('admin.projects.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    
        $project = Project::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
    
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('projects', 'public');
                ProjectImage::create([
                    'project_id' => $project->id,
                    'file_name' => $imagePath,
                ]);
            }
        }
    
        return redirect()->route('admin.projects.index')->with('success', 'Project added successfully!');
    }
    

    public function edit(Project $project) {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project) {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('projects', 'public');
            $project->image = $imagePath;
        }

        $project->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $project->image,
        ]);

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully!');
    }

    public function destroy(Project $project) {
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully!');
    }




    public function portfolioIndex() {
        $projects = Project::with('images')->get();
        return view('portfolio.portfolio', compact('projects'));
    }
    

    
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('portfolio.portfolio-details', compact('project'));
    }
}
