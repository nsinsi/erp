@extends('layouts.master')

@section('body')
<div class="" style="margin-top:20px">
  <div class="card">
    <div class="card-header">
      <span><Strong>Users</strong></span>
      </div>
       <div class="card-body">
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
        {{$data->links()}}
      </div>
    </div>
    @endsection
