@extends('layouts.master')
@section('body')
<div class="row justify-content-center">
<div class="card col-md-12">
  <h6 class="card-header text-uppercase text-white" style="background-color:#343a40;">Profile </h6><!-- .card-body -->
  <div class="card-body">

    <form method="post" enctype="multipart/form-data" action="">
      <input type="hidden" name="_token" value="HkGGxlNvQuslJfW05e1qfehVpsYoKlb93efOuFh4">
      <div class="media mb-6">
        <div class="user-avatar ">
          <img  src="images/avatar.jpg "alt="">
        </div>
      </div>

      <div class="form-row">
          <div class="form-group col-6">
              <strong>First Name:</strong>
              {{ $user->first_name }}
          </div>
              <div class="form-group col-6">
                  <strong>Last Name:</strong>
                  {{ $user->last_name }}
              </div>
      </div>
      <div class="form-row">
          <div class="form-group col-6">
            <strong>Roles:</strong>
            @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                    <label class="badge badge-success">{{ $v }}</label>
                @endforeach
            @endif
          </div>
              <div class="form-group col-6">
                  <strong>Email:</strong>
                  {{ $user->email }}
              </div>
      </div>
      <div class="form-row">
          <div class="form-group col-6">
            <strong>District:</strong>
              {{ $user->district }}
          </div>
              <div class="form-group col-6">
                  <strong>Department:</strong>
                    {{ $user->department }}
              </div>
      </div>
      <div class="form-row">
          <div class="form-group col-6">
            <strong>Permissions:</strong>
            @if(!empty($rolePermissions))
                @foreach($rolePermissions as $v)
                    <label class="label label-success">{{ $v->name }},</label>
                @endforeach
            @endif
          </div>
          
      </div>
      <hr>
      <!-- .form-actions -->
      <div class="pull-right">
          <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
      </div>

   </div>
    </form><!-- /form -->
  </div><!-- /.card-body -->
</div>
</div>

@endsection
