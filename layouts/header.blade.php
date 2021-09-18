
<header class="c-header c-header-light c-header-fixed">
  <link rel="stylesheet" href="public\css\mycss.css">
    <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
      <svg class="c-icon c-icon-lg">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
      </svg>
    </button>
    <ul class="c-header-nav d-md-down-none">
      <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="{{ url('/') }}">Dashboard</a></li>
      <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="{{ route('users.index') }}">Users</a></li>
    </ul>
    <ul class="c-header-nav mfs-auto">
      <li class="c-header-nav-item px-3 c-d-legacy-none">
      </li>
    </ul>

    <div class="top-bar-search justify-content-right px-1">
              <div class="input-group input-group-search " style="border-color: white!important" >
                <form class="form-inline" type="get"  action="{{ url('search') }}">
                  <input type="hidden" name="query" >
                    <div class="" style="height:100% !important">
                    <select class="search-dropdown form-control custom-select" name="query" style=" opacity: 1; height:100% !important;">
                      <option value="">All</option>
                      <option value="users">Users</option>
                      <option value="requisitions">Requisitions</option>
                    </select>
                  </div>
                  <div class="">
                    <input type="text" class="form-control" name="search" aria-label="Search" placeholder="Search" keyup.enter="" id="search" >
                    <!-- <button class="search-button" type="submit" >
                      <svg class="c-icon mfe-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-search"></use>
                      </svg>
                    </button> -->
                  </div>
                </form>
              </div>
            </div>
    <ul class="c-header-nav">
          <li class="c-header-nav-item dropdown">
            <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
            </a>
          </a>
          <div class="dropdown-menu dropdown-menu-right pt-0">
            <div class="dropdown-header bg-light py-2"><strong>Settings</strong>
            </div>
            <a class="dropdown-item" href="{{url('profile')}}">
              <svg class="c-icon mfe-2">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
              </svg> Profile
            </a>
              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <svg class="c-icon mfe-2">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                </svg> Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
              </form>
              </div>
            </li>
          </ul>
          <div class="c-subheader justify-content-between px-3">
            <ol class="breadcrumb border-0 m-0 px-0 px-md-3">
              <li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item"><a href="javascript:window.location.reload();">Admin</a></li>
              <li class="breadcrumb-item active" <a href="javascript:window.location.reload();"></a>Dashboard</li>
            </ol>
            <div class="c-subheader-nav d-md-down-none mfe-2"><a class="c-subheader-nav-link" href="#">
              <svg class="c-icon">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
              </svg> &nbsp;Settings</a></div>
            </div>
          </header>
