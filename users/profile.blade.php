@extends('layouts.master')
@section('body')
<div class="container">
  <div class="row my-2">
    <div class="col-lg-8 order-lg-2">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
        </li>
        <li class="nav-item">
          <a href="" data-target="#messages" data-toggle="tab" class="nav-link">Users</a>
        </li>
        <li class="nav-item">
          <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Settings</a>
        </li>
      </ul>
      <div class="tab-content py-4">
        <div class="tab-pane active" id="profile">
          <div class="col-lg-12 html">
            <div class="tab-content my--2 body" id="nav-tabContent">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show  active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <div class="card card-fluid">
                    <h6 class="card-header text-uppercase text-white" style="background-color:#0066ff;">Profile </h6>
                    <div class="card-body">
                      <form method="post" enctype="multipart/form-data" action="">
                        <input type="hidden" name="_token" value="daWllPYg0OXfNO1ZWsKL35xww6sswwl7VkrsqQpX">
                        <div class="form-row">
                          <div class="form-group col-6">
                            <label class="form-control-label text-muted">First Name :</label>
                            <input type="text" class="form-control" name="firstname" value="" required="">
                          </div>
                          <div class="form-group col-6">
                            <label class="form-control-label text-muted">Last Name :</label>
                            <input type="text" class="form-control" name="lastname" value="" required="">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-6">
                            <label class="form-control-label text-muted">Email :</label>
                            <input type="email" class="form-control" name="email" value="" >
                          </div>
                          <div class="form-group col-6">
                            <label class="form-control-label text-muted">Department :</label>
                            <input type="text" class="form-control" name="username" value="" required="">
                          </div>
                        </div>
                        <div class="list-group-header category-title">Change Password </div>
                        <div class="form-row mb-3">
                          <div class="col-6">
                            <label class="form-control-label text-muted">New Password :</label>
                            <input type="password" class="form-control" placeholder="Enter New Password" name="password">
                          </div>
                          <div class="col-6">
                            <label class="form-control-label text-muted">Confirm Password :</label>
                            <input type="password" class="form-control ml-auto mr-3" name="password_confirmation" placeholder="Confirm New Password">
                          </div>
                        </div>
                        <div class="list-group-header category-title">Deactivate Account </div>
                        <div class="list-group-item d-flex  align-items-center"> Deactivate Account &nbsp; &nbsp;
                          <label class="switcher-control switcher-control-success">
                            <input type="checkbox" name="deactivate_account" value="yes" class="switcher-input">
                            <span class="switcher-indicator"></span>
                          </label>
                        </div>
                        <hr>
                        <div class="form-actions">
                          <button type="submit" class="btn btn-outline-info">Update Profile</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="messages">
          <div class="card">
            <table class="table">
              <thead class="thead-light">
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Department</th>
                  <th>Email</th>
                  <th>Roles</th>

                  <th width="280px">Action</th>
                </tr>

                @foreach ($data as $key => $user)
                <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->department }}</td>
                  <td>{{ $user->email }}</td>
                  <td>
                    @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                    <label class="badge badge-success">{{ $v }}</label>
                    @endforeach
                    @endif
                  </td>
                  <td>
                    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                  </td>
                </tr>
                @endforeach
              </thead>
            </table>
          </div>
        </div>
        <div class="tab-pane" id="edit">
          <form role="form">








          </form>
        </div>
      </div>
    </div>
    <div class="col-lg-4 order-lg-1 text-center">
      <img src="//placehold.it/150" class="mx-auto img-fluid img-circle d-block" alt="avatar">
      <h6 class="mt-2">Upload a different photo</h6>
      <label class="custom-file">
        <input type="photo" id="photo" class="custom-file-input">
        <span class="custom-file-control">Choose file</span>
      </label>
    </div>
  </div>
</div>


@endsection
