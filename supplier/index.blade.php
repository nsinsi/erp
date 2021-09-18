@extends('layouts.master')
@section('body')
<div class="container" style="margin-top:20px">
  <div class="card">
    <div class="card-header"><strong>Supplier</strong>
      <a class="btn btn-outline-success float-right"   title="Add supplier" href="{{route('supplier.create')}}">Add supplier</a>
    </div>
    <div class="card-body">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
          </tr>
          <tr>
            @foreach ($data as $key => $supplier)
            <td>{{ ++$i }}</td>
            <td>{{ $supplier->name }}</td>
            <td>
              <a class="btn btn-info"  title="show" href="{{route('supplier.show',$supplier->id) }}">Show</a>
              <a class="btn btn-primary"  title="update" href="{{route('supplier.edit',$supplier->id)}}">Update</a>
              <form action="{{ route('supplier.destroy', $supplier->id) }}" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button class="btn btn-danger m-1">Delete</button>
              </td>
            </tr>
            @endforeach
          </thead>
        </table>
        {{$data->links()}}
      </div>
    </div>
  </div>
</div>
@endsection
