<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectImage;
use \Intervention\Image\Facades\Image;

class ProjectController extends Controller {

     private function saveWebpImage($image, $path = 'assets/img/portfolio')
    {
        $fileName = time() . '_' . uniqid() . '.webp';
        $destination = public_path($path . '/' . $fileName);

        if (!is_dir(public_path($path))) {
            mkdir(public_path($path), 0755, true);
        }

        // Convert & save as webp (v2 syntax)
        Image::make($image)
            ->encode('webp', 90)
            ->save($destination);

        return $fileName; // only the file name for DB
    }


    public function index() {
        $projects = Project::with('images')->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }
    

    public function create() {
        return view('admin.projects.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required',
        'strategy' => 'nullable|string',
        'project_type' => 'nullable|string',
        'client' => 'nullable|string',
        'overview' => 'nullable|string',
        'project_challenge' => 'nullable|string',
        'design_research' => 'nullable|string',
        'design_approach' => 'nullable|string',
        'the_solutions' => 'nullable|string',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    $project = Project::create([
        'name' => $request->name,
        'description' => $request->description,
        'strategy' => $request->strategy,
        'project_type' => $request->project_type,
        'client' => $request->client,
        'overview' => $request->overview,
        'project_challenge' => $request->project_challenge,
        'design_research' => $request->design_research,
        'design_approach' => $request->design_approach,
        'the_solutions' => $request->the_solutions,
        'status' => 0
    ]);

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            // use helper to convert + save as webp
            $imageName = $this->saveWebpImage($image);

            ProjectImage::create([
                'project_id' => $project->id,
                'image_url' => $imageName,
            ]);
        }
    }

    return redirect()->route('admin.projects.index')->with('success', 'Project added successfully!');
}

    
    

    public function edit(Project $project) {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project) {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'overview' => 'nullable|string',
            'strategy' => 'nullable|string',
            'project_type' => 'nullable|string',
            'client' => 'nullable|string',
            'project_challenge' => 'nullable|string',
            'design_research' => 'nullable|string',
            'design_approach' => 'nullable|string',
            'the_solutions' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'center_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Project update fields
        $project->update([
            'name' => $request->name,
            'description' => $request->description,
            'strategy' => $request->strategy,
            'project_type' => $request->project_type,
            'client' => $request->client,
            'overview' => $request->overview,
            'project_challenge' => $request->project_challenge,
            'design_research' => $request->design_research,
            'design_approach' => $request->design_approach,
            'the_solutions' => $request->the_solutions,
        ]);
    
        // If a new image is uploaded, store it in the project_images table
        if ($request->hasFile('banner_image')) {
    $imageName = $this->saveWebpImage($request->file('banner_image'));
    ProjectImage::updateOrCreate(
        ['project_id' => $project->id, 'image_type' => 'banner'],
        ['image_url' => $imageName]
    );
}

if ($request->hasFile('center_image')) {
    $imageName = $this->saveWebpImage($request->file('center_image'));
    ProjectImage::updateOrCreate(
        ['project_id' => $project->id, 'image_type' => 'center'],
        ['image_url' => $imageName]
    );
}


        // if ($request->hasFile('banner_image')) {
        //     $image = $request->file('banner_image');
        //     $imageName = 'banner_' . $image->getClientOriginalName();
        //     $destinationPath = public_path('assets/img/portfolio');
        //     $image->move($destinationPath, $imageName);

        //     ProjectImage::updateOrCreate(
        //         ['project_id' => $project->id, 'image_type' => 'banner'],
        //         ['image_url' => $imageName]
        //     );
        // }

        // if ($request->hasFile('center_image')) {
        //     $image = $request->file('center_image');
        //     $imageName = 'center_' . $image->getClientOriginalName();
        //     $destinationPath = public_path('assets/img/portfolio');
        //     $image->move($destinationPath, $imageName);

        //     ProjectImage::updateOrCreate(
        //         ['project_id' => $project->id, 'image_type' => 'center'],
        //         ['image_url' => $imageName]
        //     );
        // }

    
        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully!');
    }
    

    public function removeImage($id) {
        try {
            $image = ProjectImage::findOrFail($id);
        
            // Image ka physical file delete karein
            $imagePath = public_path('assets/img/portfolio/' . $image->image_url);
            if (!empty($image->image_url) && file_exists($imagePath)) {
                unlink($imagePath);
            }
        
            // Database se image delete karein
            $image->delete();
    
            return response()->json(['success' => true, 'message' => 'Image removed successfully!']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to remove image: ' . $e->getMessage()], 500);
        }
    }
    
    
    
    
    
    
    
    
    

    public function destroy(Project $project) {
        // Project ki saari images delete karni hain
        foreach ($project->images as $image) {
            $imagePath = public_path('assets/img/portfolio/' . $image->image_url);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $image->delete();
        }
    
        // Ab project delete karein
        $project->delete();
    
        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully!');
    }
    




    // public function portfolioIndex() {
    //     $projects = Project::with('images')->get();
    //     return view('portfolio.portfolio', compact('projects'));
    // }

    public function portfolioIndex()
    {
        $projects = Project::with('images')
                    ->where('status', 1)
                    ->latest()
                    ->get();

        return view('portfolio.portfolio', compact('projects'));
    }


    
    public function show($id)
    {
        $project = Project::with('images')->findOrFail($id);
        return view('portfolio.portfolio-details', compact('project'));
    }


    public function toggleStatus($id)
    {
        $project = Project::findOrFail($id);
        $project->status = !$project->status;
        $project->save();

        return redirect()->back()->with('success', 'Project status updated successfully.');
    }


}
