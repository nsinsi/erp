@extends('layouts.master')
@section('body')

<div class="container" style="margin-top:20px">
  <div class="card">
    <div class="card-header"><strong>ITEM</strong>
      <a class="btn btn-outline-success float-right"   title="Add Item" href="">Add Item</a>
    </div>
    <div class="card-body">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Cost</th>
            <th>Quatity</th>
            <th>Warranty_value</th>
            <th width="280px">Action</th>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <a class="btn btn-info"  title="show" href="">Show</a>
              <a class="btn btn-primary"  title="update" href="">Update</a>
              <form action="" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button class="btn btn-danger m-1">Delete</button>
              </td>
            </tr>

          </thead>

        </table>

      </div>
    </div>
  </div>
</div>
@endsection
