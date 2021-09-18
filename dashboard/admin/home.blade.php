@extends('dashboard.admin.master')

@section('body')
<main class="c-main">
  <div class="container-fluid">
    <div class="fade-in">
      <div class="row">
        <div class="col-sm-6 col-lg-4">
          <div class="card text-white home-card">
            <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
              <div>
                <div class="text-value-lg">935</div>
                <div>Total Users</div>
              </div>
            </div>
            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card text-white home-card">
            <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
              <div>
                <div class="text-value-lg">345</div>
                <div>Active Users</div>
              </div>
            </div>
            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas class="chart chartjs-render-monitor" id="card-chart2" height="70" width="202" style="display: block; width: 202px; height: 70px;"></canvas>
            <div id="card-chart2-tooltip" class="c-chartjs-tooltip top bottom" style="opacity: 0; left: 84.9053px; top: 138.054px;"><div class="c-tooltip-header"><div class="c-tooltip-header-item">January</div></div><div class="c-tooltip-body"><div class="c-tooltip-body-item"><span class="c-tooltip-body-item-color" style="background-color: rgb(51, 153, 255);"></span><span class="c-tooltip-body-item-label">My First dataset</span><span class="c-tooltip-body-item-value">1</span></div></div></div></div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card text-white home-card">
            <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
              <div>
                <div class="text-value-lg">23</div>
                <div>Online Users</div>
              </div>
            </div>
            <div class="c-chart-wrapper mt-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas class="chart chartjs-render-monitor" id="card-chart3" height="70" width="234" style="display: block; width: 234px; height: 70px;"></canvas>
            <div id="card-chart3-tooltip" class="c-chartjs-tooltip top" style="opacity: 0; left: 104.685px; top: 101.3px;"><div class="c-tooltip-header"><div class="c-tooltip-header-item">February</div></div><div class="c-tooltip-body"><div class="c-tooltip-body-item"><span class="c-tooltip-body-item-color" style="background-color: rgba(255, 255, 255, 0.2);"></span><span class="c-tooltip-body-item-label">My First dataset</span><span class="c-tooltip-body-item-value">81</span></div></div></div></div>
          </div>
        </div>

        <div class="row col-md-12">
          <div class="col-md-12">
            <div class="card col-md-12">
              <div class="card-header justify-content-center">TABLE OF USERS </div>
              <div class="card-body">
                <table class="table table-responsive-sm table-bordered">

                  <div class="input-group s">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                    aria-describedby="search-addon" />
                    <button type="button" class="btn btn-outline-primary">search</button>
                  </div>
                  <br>
                  <thead class="thead-light">
                    <tr>
                      <th>Name</th>
                      <th>Department</th>
                      <th>District</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>


                    @foreach($users as $user)
                    <tr>
                      <td>{{$user->first_name}} {{$user->last_name}}</td>
                      <td>{{$user->department->name}}</td>
                      <td>{{$user->district->name}}</td>
                      <td>
                        <div class="dropdown d-md-down-none mx-2">
                          <a class="" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                            <svg class="c-icon">
                              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                            </svg>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
                            <a class="dropdown-item"  href="{{route('showuser')}}">View</a>
                            <a class="dropdown-item"  href="#">Edit</a>
                            <a class="dropdown-item"  href="#">Deactivate</a>
                            <a class="dropdown-item"  href="#">Reset Password</a>
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
        <div class="card col-md-12">
          <div class="card-header justify-content-center">ACTIVITY
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
      </div>
    </div>
  </main>
  @endsection
