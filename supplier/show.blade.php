@extends('layouts.master')


@section('body')
<div class="row justify-content-center">
<div class="card col-md-8">
  <h6 class="card-header text-uppercase text-white" style="background-color:#343a40;">Show Supplier</h6><!-- .card-body -->
  <div class="card-body">
    <!-- .media -->
    <form method="post" enctype="multipart/form-data" action="">
      <input type="hidden" name="_token" value="HkGGxlNvQuslJfW05e1qfehVpsYoKlb93efOuFh4">
      <!-- form -->
      <div class="form-row">
          <div class="form-group col-6">
              <strong>Name:</strong>
                {{ $supplier->name}}
          </div>
      </div>

      <hr>
      <!-- .form-actions -->
      <div class="pull-right">
          <a class="btn btn-primary" href="{{ route('supplier.index') }}"> Back</a>
      </div>

   </div>
    </form><!-- /form -->
  </div><!-- /.card-body -->
</div>
</div>
@endsection
