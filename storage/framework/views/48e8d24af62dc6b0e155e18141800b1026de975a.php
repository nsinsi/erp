


<?php $__env->startSection('body'); ?>
<div class="container" style="margin-top:20px">
<div class="card">
    <div class="card-header"><strong>ROLE MANAGEMENT</strong>
          <a class="btn btn-outline-success float-right"  href="<?php echo e(route('roles.create')); ?>"> Create Role</a>
        </div>
    <div class="card-body">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
          </tr>
          <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
              <td><?php echo e(++$i); ?></td>
              <td><?php echo e($role->name); ?></td>
              <td>
                  <a class="btn btn-info" href="<?php echo e(route('roles.show',$role->id)); ?>">Show</a>
                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-edit')): ?>
                      <a class="btn btn-primary" href="<?php echo e(route('roles.edit',$role->id)); ?>">Edit</a>
                  <?php endif; ?>
                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-delete')): ?>
                      <?php echo Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']); ?>

                          <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

                      <?php echo Form::close(); ?>

                  <?php endif; ?>
              </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </thead>

      </table>

      <?php echo e($roles->links()); ?>

    </div>
  </div>
</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp\resources\views/roles/index.blade.php ENDPATH**/ ?>