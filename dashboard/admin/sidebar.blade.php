<div class="c-sidebar c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
  <link rel="stylesheet" href="\font-awesome-4.7.0\css\font-awesome.min.css">
  <div class="c-sidebar-brand d-lg-down-none">
    <svg class="c-sidebar-brand-full" width="118" height="46" alt="YONECO Logo">
      <use xlink:href="assets/brand/logo2.jfif"></use>
    </svg>
    <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="">
      <img src=images/logo2.jpg height="100" style="margin-left:2.1em ;margin-right:8.6em !important; border-radius: 50%;" >
    </svg>
  </div>
  <ul class="c-sidebar-nav ps ps--active-y">
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="{{route('home')}}">
        <i class="fas fa-tachometer-alt"></i> Dashboard
      </a>
    </li>
    <li class="c-sidebar-nav-title">Users & Settings</li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="{{route('forms.items.hardware')}}">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="https://coreui.io/demo/3.4.0/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
        </svg>Profile
      </a>
    </li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="{{route('forms.items.software')}}">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="https://coreui.io/demo/3.4.0/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
        </svg>Users
      </a>
    </li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="{{route('vehicle.item')}}">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="https://coreui.io/demo/3.4.0/vendors/@coreui/icons/svg/free.svg#cil-car-alt"></use>
        </svg>Roles
      </a>
    </li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="{{route('furniture.item')}}">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="https://coreui.io/demo/3.4.0/vendors/@coreui/icons/svg/free.svg#cil-door"></use>
        </svg>Permissions
      </a>
    </li>

  </li>
  <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
  </div>
  <div class="ps__rail-y" style="top: 0px; height: 561px; right: 0px;">
    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 423px;"></div>
  </div>
</ul>
</div>
