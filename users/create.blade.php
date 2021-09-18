@extends('layouts.master')
@section('body')
<div class="container">
@if($errors->any())
<div class="alert alert-danger">
<ul>
  @foreach($errors->all() as $error)
  <li> {{$error}}</li>
  @endforeach
</ul>
</div>
@endif
 <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body p-4">
           {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
            <form method="" action="">
                @csrf
                <p class="text-muted">Create User</p>

                <div  class="input-group md-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cil-user"></use>
                        </svg>
                      </span>
                    </div>
                    <input class="form-control" type="text" placeholder="{{ __('First Name') }}" name="first_name" value="{{ old('first_name') }}" required >
                </div>
                <div class="input-group md-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cil-user"></use>
                        </svg>
                      </span>
                    </div>
                    <input class="form-control" type="text" placeholder="{{ __('Last Name') }}" name="last_name" value="{{ old('last_name') }}" required >
                </div>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cil-institution"></use>
                        </svg>
                      </span>
                    </div>
                     <input class="form-control" type="text" placeholder="{{ __('Department') }}" name="department" value="{{ old('department') }}" required>
                  </div>
                  <div class="input-group md-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cil-envelope-open"></use>
                        </svg>
                      </span>
                    </div>
                    <input class="form-control" type="text" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required>
                </div>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cil-institution"></use>
                        </svg>
                      </span>
                    </div>
                    <select class="form-control" name="distict" required>
                      <option value="">Select</option>
                      @foreach($districts as $district)
                      <option value="{{$district->id}}" >{{$district->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="input-group mb-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cil-user"></use>
                        </svg>
                      </span>
                    </div>
                    <select class="form-control" name="role" required>
                      <option value="">Select</option>
                      @foreach($roles as $role)
                      <option value="{{$role->id}}" >{{$role->name}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cil-lock-locked"></use>
                        </svg>
                      </span>
                    </div>
                    <input class="form-control" type="password" placeholder="{{ __('Password') }}" name="password" required>
                  </div>
                      <div class="input-group md-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cil-lock-locked"></use>
                        </svg>
                      </span>
                    </div>
                    <input class="form-control" type="password" placeholder="{{ __('Confirm Password') }}" name="password" required>
                </div>

              </br>
              <div class="form-group form-actions">
                <button class="btn btn-sm btn-success" type="submit">{{ __('Register') }}</button>
              </div>
            </form>
        </div>
      </div>
    </div>

  </div>
</div>


@endsection
