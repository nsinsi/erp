
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
        <h6 class="card-header text-uppercase text-white" style="background-color:#343a40;">Edit User </h6><!-- .card-body -->
        <div class="card-body">
      {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="first_name">Name:</label>
                  {!! Form::text('first_name', null, array('placeholder' => 'First Name','class' => 'form-control')) !!}
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="last_name">Last Name:</label>
                   {!! Form::text('last_name', null, array('placeholder' => 'Last Name','class' => 'form-control')) !!}
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="email">Email:</label>
                   {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                </div>
              </div>
              <div class="col-sm-6">
                <label for="role_id">Roles:</label>
                {!! Form::select('roles[]', $roles, array('class' => 'form-control','multiple')) !!}
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <label for="password">Password:</label>
                 {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
              </div>
              <div class="col-sm-6">
                <label for="confirm-password">Confirm password:</label>
                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
              </div>
            </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="purpose">District:</label>
                  {!! Form::select('districts[]', $districts, array('distict','class' => 'form-control','multiple')) !!}
                </div>
              </div>
               <button type="submit" class="btn btn-primary">Submit</button>
            </div>

            {{ Form::close() }}
        </div>
  </div>
</div>
@endsection
