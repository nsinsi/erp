
@extends('layouts.master')
@section('body')
<div class="row justify-content-center">
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
  <div class="card col-md-9">
    <h6 class="card-header text-uppercase text-white" style="background-color:#343a40;">Update project </h6><!-- .card-body -->
    <div class="card-body">
      {!! Form::model($project, ['method' => 'PATCH','route' => ['projects.update', $project->id]]) !!}
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="name">Name:</label>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="donor_id">Donor:</label>
            {!! Form::text('donor_id', null, array('placeholder' => 'Donor','class' => 'form-control')) !!}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="code">Code:</label>
            {!! Form::text('code', null, array('placeholder' => 'code','class' => 'form-control')) !!}
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="project_brief">Project Brief:</label>
            {!! Form::text('project_brief', null, array('placeholder' => 'Project Brief','class' => 'form-control')) !!}
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
      {{ Form::close() }}
    </div>
  </div>
  @endsection
