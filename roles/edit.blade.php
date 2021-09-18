
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
        <h6 class="card-header text-uppercase text-white" style="background-color:#343a40;">Edit Roles </h6><!-- .card-body -->

        <div class="card-body">
          <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
  {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="name">Name:</label>
                  {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                </div>

              </div>

              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                      <label for="permission">Permission:</label>
                    @foreach($permission as $value)

                      {{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}

                        {{ $value->name }}

                    <br/>

                    @endforeach
                  </div>
                </div>
            </div>
               <button type="submit" class="btn btn-primary">Submit</button>
            </div>

            {{ Form::close() }}
        </div>
  </div>
</div>
@endsection
