@extends('layouts.master')
@section('body')
<div class="container-fluid">
  <link rel="stylesheet" href="public\css\mycss.css">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-6 col-lg-4">
        <div class="card text-white home-card ">
          <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
            @role('Administrator')
            <div>
              <div class="text-value-lg" style="font-size: 1.8em;">935</div>
              <div class="" style="font-size: 1.8em;">Total Users</div>
            </div>
            @endrole
            @hasanyrole('Project Officer|Program Support Manager|sm')
            <div>
              <div class="text-value-lg" style="font-size: 1.8em;">935</div>
              <div class="" style="font-size: 1.8em;">Total Requistions</div>
            </div>
            @endhasanyrole
            @role('Stores Officer')
            <div>
              <div class="text-value-lg" style="font-size: 1.8em;">935</div>
              <div class="" style="font-size: 1.8em;">Total Items</div>
            </div>
            @endrole
          </div>
          <div class="" style="height:50px;">
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="card text-white home-card">
          <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
            @role('Administrator')
            <div>
              <div class="text-value-lg" style="font-size: 1.8em;">345</div>
              <div style="font-size: 1.8em;">Total Requisitions</div>
            </div>
          @endrole
            @hasanyrole('Project Officer|Program Support Manager|sm')
            <div>
              <div class="text-value-lg" style="font-size: 1.8em;">345</div>
              <div style="font-size: 1.8em;">Pending</div>
            </div>
            @endhasanyrole
            @role('Stores Officer')
            <div>
              <div class="text-value-lg" style="font-size: 1.8em;">45</div>
              <div style="font-size: 1.8em;">Total Supplier</div>
            </div>
          @endrole
          </div>
          <div class="" style="height:50px;"></div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="card text-white home-card">
          <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
            @role('Administrator')
            <div>
              <div class="text-value-lg" style="font-size: 1.8em;">23</div>
              <div style="font-size: 1.8em;">Online Users</div>
            </div>
            @endrole
            @hasanyrole('Project Officer|Program Support Manager')
            <div>
              <div class="text-value-lg" style="font-size: 1.8em;">23</div>
              <div style="font-size: 1.8em;">Make Request</div>
            </div>
            @endhasanyrole
            @role('sm')
            <div>
              <div class="text-value-lg" style="font-size: 1.8em;">3</div>
              <div style="font-size: 1.8em;">Liquidations</div>
            </div>
            @endrole
          </div>
            <div class="" style="height:50px;"></div>
        </div>
      </div>
    </div>
      @role('Administrator')
      <div class="row">
      <div class="card-muted col-md-6" >
        <div class="card-header-muted">REQUISITION ACTIVITY
          <div class="card-header-actions">
            <a class="card-header-action" href="http://www.chartjs.org" target="_blank">
              <small class="text-muted"></small>
            </a>
          </div>
        </div>
        <div class="card-body">
          <div class="c-chart-wrapper">
            <div class="chartjs-size-monitor">
              <div class="chartjs-size-monitor-expand">
                <div class="">
                </div>
              </div>
              <div class="chartjs-size-monitor-shrink">
                <div class="">
                </div>
              </div>
            </div>
            <canvas id="canvas-1" style="display: block; width: 455px; height: 227px;" width="455" height="227" class="chartjs-render-monitor">
            </canvas>
          </div>
        </div>
      </div>
      <div class="card-muted col-md-6">
        <div class="card-header-muted">USERS
          <div class="card-header-actions">
            <a class="card-header-action" href="http://www.chartjs.org" target="_blank">
              <small class="text-muted"></small>
            </a>
          </div>
        </div>
        <div class="card-body">
          <div class="c-chart-wrapper">
            <div class="chartjs-size-monitor">
              <div class="chartjs-size-monitor-expand">
                <div class="">
                </div>
              </div>
              <div class="chartjs-size-monitor-shrink">
                <div class="">
                </div>
              </div>
            </div>
            <canvas id="canvas-5" width="467" height="233" style="display: block; width: 467px; height: 233px;" class="chartjs-render-monitor">
            </canvas>
          </div>
        </div>
      </div>
    </div>
      @endrole
      @role('sm')
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header" >Pending Requistions</div>
            <div class="card-body">
              <table class="table table-responsive-sm table-bordered">
                <thead class="thead-light">
                  <tr>
                    <th>No</th>
                    <th>Officer</th>
                    <th>Amount</th>
                    <th>Purpose</th>
                    <th>Status</th>
                    <th>action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $requisitions)
                  <tr>
                    <td>{ ++ }</td>
                    <td><a  href="">{{ $requisitions->user->first_name }}</a></td>
                    <td >{{ $requisitions->amount}}</td>
                    <td>{{ $requisitions->payableto->full_name}}</td>
                    <td >{{ $requisitions->status->name }}</td>
                    <td>
                      <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="">View</a>
                          <a class="dropdown-item" href="">Check</a>
                          <a class="dropdown-item" href="">Approve</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                      @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
        @endrole
      @role('Project Officer')
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header" > MY ITEMS</div>
            <div class="card-body">
              <table class="table table-responsive-sm table-bordered">
                <thead class="thead-light">
                  <tr>
                    <th>Asset No</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>23432</td>
                    <td>HP ProBook Laptop PC</td>
                    <td >1</td>
                    <td>
                      <a class="btn btn-info" data-toggle="modal" data-target="#reportModal" href="reportModal">Report</a>
                    </td>
                  </tr>
                    <tr>
                      <td>23432</td>
                      <td>HP ProBook Laptop PC</td>
                      <td >1</td>
                      <td>
                        <a class="btn btn-info" href="">Report</a>
                      </td>
                    </tr>
                      <tr>
                        <td>23432</td>
                        <td>HP ProBook Laptop PC</td>
                        <td >1</td>
                        <td>
                          <a class="btn btn-info" href="">Report</a>
                        </td>
                      </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header" >Outstanding Liquidations</div>
          <div class="card-body">
            <table class="table table-responsive-sm table-bordered">
              <thead class="thead-light">
                <tr>
                  <th>No</th>
                  <th>Activity Name</th>
                  <th>Cheque No:</th>
                  <th>More</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <a class="btn btn-info" data-toggle="modal" data-target="#cashModal" href="cashModal">Liquidate</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
        @endrole
        @role('Stores Officer')
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header" >ITEMS IN STOCK</div>
              <div class="card-body">
                <table class="table table-responsive-sm table-bordered">
                  <thead class="thead-light">
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Quantity</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>HP ProBook Laptop PC</td>
                      <td >10</td>
                      <td>
                        <a class="btn btn-info" href="">View</a>
                      </td>
                    </tr>
                      <tr>
                        <td>2</td>
                        <td>HP mouse</td>
                        <td >30</td>
                        <td>
                          <a class="btn btn-info" href="">View</a>
                        </td>
                      </tr>
                        <tr>
                          <td>3</td>
                          <td>HP printer</td>
                          <td>5</td>
                          <td>
                            <a class="btn btn-info" href="">View</a>
                          </td>
                        </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header" >Requistions</div>
            <div class="card-body">
              <table class="table table-responsive-sm table-bordered">
                <thead class="thead-light">
                  <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Activity Name:</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <a class="btn btn-info" href="">SignOff</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
          @endrole
        @role('Program Support Manager')
      <div class="col-md-12">
        <div class="card">
          <div class="card-header" >Requistions</div>
          <div class="card-body">
            <table class="table table-responsive-sm table-bordered">
              <thead class="thead-light">
                <tr>
                  <th>Name</th>
                  <th>Quatity</th>
                  <th>Type</th>
                  <th>More</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> </td>
                  <td></td>
                  <td ></td>
                  <td>
                    <a class="btn btn-info" href="">Check</a>
                    <a class="btn btn-primary" href="">Ignore</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header" >Leave</div>
          <div class="card-body">
            <table class="table table-responsive-sm table-bordered">
              <thead class="thead-light">
                <tr>
                  <th>Name</th>
                  <th>Days</th>
                  <th>Reason</th>
                  <th>More</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> </td>
                  <td></td>
                  <td ></td>
                  <td>
                    <a class="btn btn-info" href="">Recommend</a>
                    <a class="btn btn-primary" href="">Ignore</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      @endrole
  </div>
</div>
  <script>
  $(document).ready(function() {
    // executes when HTML-Document is loaded and DOM is ready
    console.log("document is ready");
    $( ".home-card" ).hover(
      function() {
        $(this).addClass('shadow-lg').mycss('cursor', 'pointer');
      }, function() {
        $(this).removeClass('shadow-lg');
      }
    );

    // document ready
  });
  </script>
  @endsection
