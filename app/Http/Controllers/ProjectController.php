<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        return view('projects');
    }
    public function dashboard(){
        $data = Project::get();
        return view('dashboard',compact('data'));
    }
    public function add(){
        return view('projects.add');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
        ]);
        $name = $request->name;
        $description = $request->description;
        
        $project = new Project;
        $project->name = $name;
        $project->description = $description;
        $project->save();
        return redirect()->back()->with('message','Project Add Successfully!');
    }
    public function edit($id){
        $data = Project::where('id', '=', $id)->first();
        return view('projects.edit',compact('data'));
    }
    public function update(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
        ]);
        $id = $request->id;
        $name = $request->name;
        $description = $request->description;

        Project::where('id', '=', $id)->update([
            'name'=>$name,
            'description'=>$description,
        ]);
        return redirect('dashboard')->with('message','Project Edit Success');
    }
    public function destroy(Project $project){
        $project->delete();
        return redirect()->back();
    }
}
