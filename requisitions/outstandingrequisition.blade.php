@extends('layouts.master')
@section('body')
<div class="container" style="margin-top:20px">
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="card">
<div class="card-header"><strong>Outstanding Requistions</strong>
  <a class="btn btn-success float-right"  href=""> Make requisition</a>
     </div>
    <div class="card-body">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Payable To</th>
            <th scope="col">Purpose</th>
            <th scope="col">Amount</th>
            <th scope="col">Status</th>
            <th scope="col"></th>
          </tr>
          <tr>
              <td></td>
              <td><a href=""></a></td>
              <td></td>
               <td></td>
               <td> <span class="badge badge-secondary" ></span></td>
              <td>
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Action
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="">Show</a>
                  </div>
                </div>
              </td>
          </tr>
        </thead>
      </table>
    </div>
</div>
</div>
@endsection

<!-- @endsection
$(document).ready(function(){
$('#inputproject').on('change', function(){
var project = this.value;
$.ajax({
  url:'/get/budgetlines/' +project,
  type: 'GET',
  dataType:'json',
  success:function(result){
    //
  },
  error:function(err){
    console.log(err);
  }
}).done(function(result){
  var content = '<option value="">Choose budget_line</option>';
  result.forEach(function(obj){
    content +='<option value="' +obj.id +'">' +obj.name +'</option>';
  });
  $('#inputbudget').html(content);
});
});
});
-->
