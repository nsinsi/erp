@extends('layouts.master')
@section('body')
<div class="container" style="margin-top:20px">
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
  <div class="card">
     {!! Form::open(['route' => 'supplier.store', 'method' => 'POST']) !!}
      <form method="" action="">
         @csrf
        <div class="card-header"><strong>Add Supplier</strong></div>
        <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="name">Supplier Name:</label>
                  <input class="form-control" name="name" id="name" type="text" placeholder="">
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
        </div>
  </div>
</form>
</div>
@endsection
