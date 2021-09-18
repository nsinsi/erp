@extends('layouts.master')


@section('body')
<div class="row justify-content-center">
<div class="card col-md-8">
  <h6 class="card-header text-uppercase text-white" style="background-color:#343a40;">Show Role </h6><!-- .card-body -->
  <div class="card-body">
    <!-- .media -->
    <form method="post" enctype="multipart/form-data" action="">
      <!-- form -->
      <div class="form-row">
          <div class="form-group col-6">
              <strong>First Name:</strong>
              {{ $role->first_name }}
          </div>
              <div class="form-group col-6">
                  <strong>Last Name:</strong>
                  {{ $role->last_name }}
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
          <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
      </div>

   </div>
    </form><!-- /form -->
  </div><!-- /.card-body -->
</div>
</div>

@endsection
