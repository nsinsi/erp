<div class="c-sidebar c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
  <link rel="stylesheet" href="\font-awesome-4.7.0\css\font-awesome.min.css">
  <div class="c-sidebar-brand d-lg-down-none">
    <svg class="c-sidebar-brand-full"  width="118" height="46" alt="YONECO Logo">
      <img src="assets/images/yoneco.jpg"  height="100" style="margin-left:0.25em ;margin-right:6.6em !important; border-radius: 50%;">
    </svg>

  </div>
  <ul class="c-sidebar-nav ps ps--active-y">
    <?php if(auth()->check() && auth()->user()->hasRole('Administrator')): ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create-user')): ?>
    <li class="c-sidebar-nav-title">Manage Users</li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="/users">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="https://coreui.io/demo/3.4.0/vendors/@coreui/icons/svg/free.svg#cil-people"></use>
        </svg>Users
      </a>
    </li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="<?php echo e(route('users.create')); ?>">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="https://coreui.io/demo/3.4.0/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
        </svg>Create user
      </a>
    </li>
    <?php endif; ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-create')): ?>
    <li class="c-sidebar-nav-title">Manage Roles</li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="/roles">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="https://coreui.io/demo/3.4.0/vendors/@coreui/icons/svg/free.svg#cil-people"></use>
        </svg>Roles
      </a>
    </li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="/roles/create">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="https://coreui.io/demo/3.4.0/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
        </svg>Create roles
      </a>
    </li>
    <?php endif; ?>
    <?php endif; ?>
    <?php if(auth()->check() && auth()->user()->hasAnyRole('Administrator|sm')): ?>
    <li class="c-sidebar-nav-title">Manage Requisition</li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="/requisitions">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="https://coreui.io/demo/3.4.0/vendors/@coreui/icons/svg/free.svg#cil-envelope-closed"></use>
        </svg>Requisitions
      </a>
    </li>
    <?php endif; ?>
    <?php if(auth()->check() && auth()->user()->hasAnyRole('Project Officer|Program Support Manager')): ?>
    <?php if(Auth::User()->type == ""): ?>
    <li class="c-sidebar-nav-title">Manage Requisition</li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="/requisitions/outstandingrequisition">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="https://coreui.io/demo/3.4.0/vendors/@coreui/icons/svg/free.svg#cil-envelope-closed"></use>
        </svg>Requisitions
      </a>
    </li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" data-toggle="modal" data-target="#travelModal" href="travelModal">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="https://coreui.io/demo/3.4.0/vendors/@coreui/icons/svg/free.svg#cil-truck"></use>
        </svg>Vehicle Requisition
      </a>
    </li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" data-toggle="modal" data-target="#storesModal" href="storesModal">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="https://coreui.io/demo/3.4.0/vendors/@coreui/icons/svg/free.svg#cil-industry"></use>
        </svg>Stores Requisition
      </a>
    </li>
    <?php endif; ?>
    <?php endif; ?>
    <?php if(auth()->check() && auth()->user()->hasAnyRole('Administrator|sm')): ?>
    <li class="c-sidebar-nav-title">Manage Projects</li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="/projects">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="https://coreui.io/demo/3.4.0/vendors/@coreui/icons/svg/free.svg#cil-task"></use>
        </svg>Projects
      </a>
    </li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="/payableto">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="https://coreui.io/demo/3.4.0/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
        </svg>Payable To
      </a>
    </li>
    <?php endif; ?>
    <?php if(auth()->check() && auth()->user()->hasRole('Administrator')): ?>
    <li class="c-sidebar-nav-title">Manage Districts</li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="/district">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="https://coreui.io/demo/3.4.0/vendors/@coreui/icons/svg/free.svg#cil-task"></use>
        </svg>Districts
      </a>
    </li>
    <?php endif; ?>
    <?php if(auth()->check() && auth()->user()->hasAnyRole('Project Officer|Program Support Manager|sm')): ?>

    <li class="c-sidebar-nav-title">Manage Leave</li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" data-toggle="modal" data-target="#applicationModal" href="applicationModal">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="https://coreui.io/demo/3.4.0/vendors/@coreui/icons/svg/free.svg#cil-send"></use>
        </svg>Apply
      </a>
    </li>
    <?php if(auth()->check() && auth()->user()->hasAnyRole('Program Support Manager|sm')): ?>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="https://coreui.io/demo/3.4.0/vendors/@coreui/icons/svg/free.svg#cil-people"></use>
        </svg>Leave Applicant
      </a>
    </li>
    <?php endif; ?>
    <?php endif; ?>
    <?php if(auth()->check() && auth()->user()->hasAnyRole('Project Officer|Program Support  Manager|sm')): ?>
    <li class="c-sidebar-nav-title">Liquidations</li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" data-toggle="modal" data-target="#cashModal" href="cashModal">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="https://coreui.io/demo/3.4.0/vendors/@coreui/icons/svg/free.svg#cil-cash"></use>
        </svg>cash
      </a>
    </li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" data-toggle="modal" data-target="#fuelliModal" href="fuelliModal">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="https://coreui.io/demo/3.4.0/vendors/@coreui/icons/svg/free.svg#cil-envelope-closed"></use>
        </svg>Fuel
      </a>
    </li>
    <?php endif; ?>
    <?php if(auth()->check() && auth()->user()->hasAnyRole('accountant|Project Officer')): ?>
    <li class="c-sidebar-nav-title">Items</li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="https://coreui.io/demo/3.4.0/vendors/@coreui/icons/svg/free.svg#cil-plus"></use>
        </svg>Add
      </a>
    </li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" data-toggle="modal" data-target="#bookModal" href="bookModal">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="https://coreui.io/demo/3.4.0/vendors/@coreui/icons/svg/free.svg#cil-book"></use>
        </svg>Book
      </a>
    </li>
    <?php endif; ?>
    <?php if(auth()->check() && auth()->user()->hasRole('Stores Officer')): ?>
    <li class="c-sidebar-nav-title">Items</li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="/item/create">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="https://coreui.io/demo/3.4.0/vendors/@coreui/icons/svg/free.svg#cil-plus"></use>
        </svg>Add
      </a>
    </li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="/item">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="https://coreui.io/demo/3.4.0/vendors/@coreui/icons/svg/free.svg#cil-cast"></use>
        </svg>View
      </a>
    </li>
    <li class="c-sidebar-nav-title">Supplier</li>
    <!-- <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="/supplier/create">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="https://coreui.io/demo/3.4.0/vendors/@coreui/icons/svg/free.svg#cil-plus"></use>
        </svg>Add
      </a>
    </li> -->
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="/supplier">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="https://coreui.io/demo/3.4.0/vendors/@coreui/icons/svg/free.svg#cil-cast"></use>
        </svg>Suppliers
      </a>
    </li>
    <li class="c-sidebar-nav-title">Requisitions</li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="https://coreui.io/demo/3.4.0/vendors/@coreui/icons/svg/free.svg#cil-envelope-closed"></use>
        </svg>Approved Requisitions
      </a>
    </li>
    <?php endif; ?>

  </li>
  <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
  </div>
  <div class="ps__rail-y" style="top: 0px; height: 561px; right: 0px;">
    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 423px;"></div>
  </div>
</ul>
</div>
<?php /**PATH C:\xampp\htdocs\erp\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>