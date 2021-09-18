@extends('layouts.master')
@section('body')

<div class="container" style="margin-top:20px">
<div class="card">
    <div class="card-header"><strong>PROJECTS</strong>
          <a class="btn btn-outline-success float-right"   title="Add project" href="{{route('projects.create')}}">Add project</a>
        </div>
    <div class="card-body">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Donor Id</th>
            <th>Code</th>
              <th>Project Brief</th>
            <th width="280px">Action</th>
          </tr>
          <tr>
          @foreach ($data as $key => $project)
              <td>{{ ++$i }}</td>
              <td>{{ $project->name }}</td>
              <td>{{ $project->donor_id}}</td>
              <td>{{ $project->code}}</td>
                <td>{{ $project->project_brief}}</td>
              <td>
                  <a class="btn btn-info"  title="show" href="{{route('projects.show',$project->id) }}">Show</a>
                  <a class="btn btn-primary"  title="update" href="{{route('projects.edit',$project->id)}}">Update</a>
                  <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                              <input type="hidden" name="_method" value="DELETE">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <button class="btn btn-danger m-1">Delete</button>

              </td>
          </tr>
              @endforeach
        </thead>

      </table>
  {{$data->links()}}
    </div>
  </div>
</div>
</div>
@endsection
