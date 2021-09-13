<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $data = Project::orderBy('id','DESC')->paginate(5);

       return view('projects.index',compact('data'))

           ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
          'name' => 'required',
          'donor_id' => 'required',
          'code' => 'required',
          'project_brief' => 'required',
      ]);

      $input = $request->all();

      Project::create($input);

      return redirect()->route('projects.index')->with('success','project created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $project = Project::find($id);

      return view('projects.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $project = Project::find($id);

      return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $project = Project::findOrFail($id);

        $this->validate($request, [
            'name' => 'required',
            'donor_id' => 'required',
            'code' => 'required',
            'project_brief' => 'required',
        ]);

        $input = $request->all();

        $project->fill($input)->save();

        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $project = Project::findOrFail($id);

      $project->delete();

      return redirect()->route('projects.index');
    }
}
