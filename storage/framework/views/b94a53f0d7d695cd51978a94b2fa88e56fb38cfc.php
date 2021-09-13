
<?php $__env->startSection('body'); ?>
<div class="c-body">
  <div class="container" style="margin-top:20px">
    <div class="card">
      <div class="card-header"><span><strong>Users</strong></span>
      <a class="btn btn-outline-success float-right" data-toggle="tooltip" data-placement="bottom" title="Create a new user." href=""> Create New User</a>
      </div> <div class="card-body">
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Program Support Manager</th>
              <th>Senior Manager</th>
              <th width="280px">Action</th>
            </tr>
            <tr>
              <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $districts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <td><?php echo e(++$i); ?></td>
                  <td><?php echo e($districts->name); ?></td>
                  <td></td>
                  <td></td>
                  <td>
                      <a class="btn btn-info"  title="show" href="">Show</a>
                      <a class="btn btn-primary"  title="update" href="">Edit</a>
                      <form action="" method="POST">
                                  <input type="hidden" name="_method" value="DELETE">
                                  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                  <button class="btn btn-danger m-1">Delete</button>

                  </td>
              </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </thead>
        </table>
  <?php echo e($data->links()); ?>

      </div>
    </div>

</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp\resources\views/district/index.blade.php ENDPATH**/ ?>