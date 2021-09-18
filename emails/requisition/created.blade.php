@component('mail::message')
<div class="container" style="margin-top:20px">

  <div class="card">
    <div class="card-body" >
      <table class="table" height="50px" style='border-collapse: collapse;'>
        <thead style="background-color: #e3f2fd;">
          <tr>

            <th scope="col"><strong>Part A (Completed by a Requesting Officer)</strong></th>

          </tr>
        </thead>
      </table>
      <table class="table" height="200px" style='border-collapse: collapse;'>
        <tbody>
          <tr>
            <th scope="row"><strong>Name of Requesting Officer : </strong></th>
            <td>{{ $requisition->user->first_name }} {{ $requisition->user->last_name }}</td>
          </tr>
          <tr>
            <th scope="row"><strong>Date Of Request : </strong></th>
            <td>{{ $requisition->user->first_name }}</td>
          </tr>
          <tr>
            <th scope="row"><strong> Activity Start Date : </strong></th>
            <td>{{ $requisition->user->first_name }} </td>
          </tr>
          <th scope="row"><strong> Activity End Date : </strong></th>
          <td>{{ $requisition->user->first_name }}</td>
        </tr>
      </tbody>
    </table>
    <table class="table" height="200px" style='border-collapse: collapse;'>
      <tbody>
        <strong>Purpose of Request : </strong>
        <div width='100%' >
          {{ $requisition->purpose }}

          <th scope="row">
            <strong>Payable to Name:</strong>
            {{ $requisition->payable_to }}
            <tr>
              <th scope="row"> <strong>Project Name     :</strong> </span>{{ $requisition->budgetline->project->name}}</th>
              <tr>
                <th scope="row"> <strong>Project Number   :</strong>  </span>{{ $requisition->budgetline->project->code }}</th>
                <tr>
                  <th scope="row"> <strong>Budget Line Name :</strong>  </span>{{ $requisition->budgetline->name }}</th>
                  <tr>
                    <th scope="row"> <strong>Budget Code      :</strong>  </span>{{ $requisition->budgetline->code }}</th>

                  </div>
                </tbody>
              </table>
              <!--- Start Owner of the requisitions ----------------------->
              <div class="row" >
                <table class="table"  height="50px" width='100%' style='border-collapse: collapse;'>
                  <thead style="background-color: #e3f2fd;">
                    <tr>
                      <th scope="col"><strong> Part B (completed by Management and Approving Officers) </strong></th>
                    </tr>
                  </thead>
                </table>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  @foreach($requisition->progresses as $progress)
                  <hr>
                  Status: <span>{{ $progress->status->name }}</span><br>
                  Officer:
                  {{ $progress->user->first_name }} {{ $progress->user->last_name }}<br>
                  Details : {{ $progress->details}}<br>
                  Date : {{ $progress->date }}<br>
                  <hr>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endcomponent
