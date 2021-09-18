@extends('layouts.master')
@section('body')
<div class="container" style="margin-top:20px">
  @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
  @endif
  <div class="card">
     {!! Form::open(['route' => 'projects.store', 'method' => 'POST']) !!}
      <form method="" action="">

         @csrf

        <div class="card-header"><strong>Add Project</strong></div>
        <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="name">Project Name:</label>
                  <input class="form-control" name="name" id="name" type="text" placeholder="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="donor_id">Donor:</label>
                  <input class="form-control" name="donor_id" id="donor_id" type="number" placeholder="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="code">Code:</label>
                  <input class="form-control" name="code" id="code" type="number" placeholder="">
                </div>
              </div>
              <div class="col-sm-8">
                <div class="form-group">
                  <label for="project_brief">Project Brief:</label>
                  <textarea class="form-control" style="height:150px" name="project_brief" placeholder=""></textarea>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
  </div>
</form>
</div>
@endsection
