


@extends('layouts.master')
@section('body')
<div class="row justify-content-center">
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
  <div class="card col-md-9">
    <h6 class="card-header text-uppercase text-white" style="background-color:#343a40;">Update Payableto</h6><!-- .card-body -->
    <div class="card-body">
      {!! Form::model($payableto, ['method' => 'PATCH','route' => ['payableto.update', $payableto->id]]) !!}
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="full_name">Name:</label>
            {!! Form::text('full_name', null, array('placeholder' => 'full_nameName','class' => 'form-control')) !!}
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="account_number">Accountn No:</label>
            {!! Form::text('account_number', null, array('placeholder' => 'account_number','class' => 'form-control')) !!}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="bank_details">Account Details:</label>
            {!! Form::text('bank_details', null, array('placeholder' => 'bank_details','class' => 'form-control')) !!}
          </div>
        </div>

      </div>
          <button type="submit" class="btn btn-primary">Update</button>
      {{ Form::close() }}
    </div>
  </div>
</div>
@endsection
