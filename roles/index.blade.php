@extends('layouts.master')


@section('body')
<div class="container" style="margin-top:20px">
<div class="card">
    <div class="card-header"><strong>ROLE MANAGEMENT</strong>
          <a class="btn btn-outline-success float-right"  href="{{ route('roles.create') }}"> Create Role</a>
        </div>
    <div class="card-body">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
          </tr>
          @foreach ($roles as $key => $role)
          <tr>
              <td>{{ ++$i }}</td>
              <td>{{ $role->name }}</td>
              <td>
                  <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
                  @can('role-edit')
                      <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                  @endcan
                  @can('role-delete')
                      {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                          {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                      {!! Form::close() !!}
                  @endcan
              </td>
          </tr>
          @endforeach
        </thead>

      </table>

      {{$roles->links()}}
    </div>
  </div>
</div>
</div>

@endsection
