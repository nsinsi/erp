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
    <form method="POST" action="{{  }}">
        @csrf
        <div class="card-header"><strong>Add Details</strong></div>
        <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="name">First Name:</label>
                  <input class="form-control" name="name" id="name" type="name" placeholder="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="name">Last Name:</label>
                  <input class="form-control" name="name" id="name" type="name" placeholder="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="account_number">Account Number:</label>
                  <input class="form-control" name="code" id="account_number" type="text" placeholder="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="bank_details">Account Name:</label>
                  <input class="form-control" name="code" id="bank_details" type="text" placeholder="">
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
  </div>
</form>
</div>
@endsection
