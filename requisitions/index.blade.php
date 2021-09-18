@extends('layouts.master')


@section('body')
<div class="container" style="margin-top:20px">
@if ($message = Session::get('success'))

<div class="alert alert-success">

    <p>{{ $message }}</p>

</div>

@endif
<div class="card">
<div class="card-header"><strong>Requistions</strong>
  <a class="btn btn-success float-right"  href="{{ route('requisitions.create') }}"> Make requisition</a>
     </div>
    <div class="card-body">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Officer</th>
            <th scope="col">Payable To</th>
            <th scope="col">Purpose</th>
            <th scope="col">Status</th>
            <th scope="col"></th>
          </tr>
          @foreach ($data as $key => $requisition)
          <tr>
              <td>{{ ++$i }}</td>

              <td><a  href="{{ route('users.show',$requisition->user->id) }}">{{ $requisition->user->first_name }}</a></td>
              <td>{{ $requisition->payableto->full_name}}</td>
               <td>{{ $requisition->purpose }}</td>
               <td> <span class="badge badge-secondary" >{{ $requisition->status->name }}</span></td>
              <td>
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Action
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ route('requisitions.show',$requisition->id) }}">Show</a>
                    <a class="dropdown-item" href="{{ route('requisitions.download',$requisition->id) }}">Download</a>
                    @if($requisition->status->name == "Created")
                      @can('recommend-requisition')
                      <a class="dropdown-item" href="{{ route('requisitions.show',$requisition->id) }}">Recommend</a>
                      @endcan
                    @endif
                    @if($requisition->status->name == "Recommended")
                      @can('endorse-requisition')
                      <a class="dropdown-item" href="{{ route('requisitions.show',$requisition->id) }}">Endorse</a>
                      @endcan
                    @endif
                    @if($requisition->status->name == "Endorsed")
                      @can('approve-requisition')
                      <a class="dropdown-item" href="{{ route('requisitions.show',$requisition->id) }}">Approve</a>
                      @endcan
                    @endif
                    @if($requisition->status->name == "Approved")
                      @can('prepare-requisition')
                      <a class="dropdown-item" href="{{ route('requisitions.edit',$requisition->id) }}">Prepare</a>
                      @endcan
                    @endif
                    @if($requisition->status->name == "Prepared")
                        @can('collect-requisition')
                        <a class="dropdown-item" href="{{ route('requisitions.edit',$requisition->id) }}">Collect</a>
                        @endcan
                    @endif
                    @can('edit-requisition')
                    <a class="dropdown-item" href="{{ route('requisitions.edit',$requisition->id) }}">Edit</a>
                    @endcan
                  </div>
                </div>
              </td>
          </tr>
          @endforeach
        </thead>
      </table>
      {{ $data->onEachSide(10)->links()}}
    </div>
</div>
</div>
@endsection
