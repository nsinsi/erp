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
     {!! Form::open(['route' => 'item.store', 'method' => 'POST']) !!}
      <form method="" action="">
         @csrf
        <div class="card-header"><strong>Add Item</strong></div>
        <div class="card-body">
            <div class="row">
              <!-- <div class="col-sm-6">
                <div class="form-group">
                  <label for="name"> Name:</label>
                  <input class="form-control" name="name" id="name" type="text" placeholder="">
                </div>
              </div> -->
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="cost">Cost:</label>
                  <input class="form-control" name="cost" id="cost" type="number" placeholder="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="item_id"> Item id:</label>
                  <input class="form-control" name="item_id" id="item_id" type="text" placeholder="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="purchase_id">purchase id:</label>
                  <input class="form-control" name="purchase_id" id="purchase_id" type="number" placeholder="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="qty">Quatity:</label>
                  <input class="form-control" name="qty" id="qty" type="number" placeholder="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="Warranty_value">Warranty value:</label>
                  <input class="form-control" name="Warranty_value" id="Warranty_value" type="number" placeholder="">
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
  </div>
</form>
</div>
@endsection
