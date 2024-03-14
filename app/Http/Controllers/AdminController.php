<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
     return view('admin.index' , ['projects' => Project::all()]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
     $request ->validate([
        'name' => 'required',
        'description' => 'required',
        'image' => 'required|image|max:2048', // Adjust max file size as needed
     ]);

     if ($request->hasFile('image')) {
        $image = $request->file('image')->store('images', 'public');
        // Save image path to database (you can adjust this based on your model)
        Project::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $image,
        ]);
      return redirect('/')->with('success', 'Project created successfully!');
    }}

    public function edit(Project $project)
    {
     return view('admin.edit' , ['project' => $project]);
    }

    public function update(Request $request, $id)
{
    $request ->validate([
        'name' => 'required',
        'description' => 'required',
        'image' => 'required|image|max:2048', // Adjust max file size as needed
     ]);
     $project = Project::findOrFail($id);

     $project->name = $request->input('name');
     $project->description = $request->input('description');
 
     // Handle image update (if provided)
     if ($request->hasFile('image')) {
         $image = $request->file('image')->store('images', 'public');
         $project->image = $image;
     }
 
     // Save changes
     $project->save();
 
     return redirect('/')->with('success', 'Project updated successfully!');

}

    public function destroy(Project $project)
    {
        $project->delete();
        return back()->with('success', 'Project deleted successfully!');
    }

}
