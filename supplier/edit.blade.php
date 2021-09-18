
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
    <h6 class="card-header text-uppercase text-white" style="background-color:#343a40;">Update supplier </h6><!-- .card-body -->
    <div class="card-body">
      {!! Form::model($supplier, ['method' => 'PATCH','route' => ['supplier.update', $supplier->id]]) !!}
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="name">Name:</label>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
          </div>
        </div>
      </div>
          <button type="submit" class="btn btn-primary">Update</button>
      {{ Form::close() }}
    </div>
  </div>
  @endsection
