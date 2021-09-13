

<?php $__env->startSection('body'); ?>
<div class="" style="margin-top:20px">
  <div class="card">
    <div class="card-header">
      <span><Strong>Users</strong></span>
      </div> <div class="card-body">
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Department</th>
              <th>Email</th>
              <th>Roles</th>

              <th width="280px">Action</th>
            </tr>

            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e(++$i); ?></td>
              <td><?php echo e($user->name); ?></td>
              <td><?php echo e($user->department); ?></td>
              <td><?php echo e($user->email); ?></td>
              <td>
                <?php if(!empty($user->getRoleNames())): ?>
                <?php $__currentLoopData = $user->getRoleNames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <label class="badge badge-success"><?php echo e($v); ?></label>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
              </td>
              <td>
                <a class="btn btn-info" href="<?php echo e(route('users.show',$user->id)); ?>">Show</a>
                <a class="btn btn-primary" href="<?php echo e(route('users.edit',$user->id)); ?>">Edit</a>
                <?php echo Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']); ?>

                <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

                <?php echo Form::close(); ?>

              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </thead>

        </table>
        <?php echo e($data->links()); ?>

      </div>
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp\resources\views/users/index.blade.php ENDPATH**/ ?>