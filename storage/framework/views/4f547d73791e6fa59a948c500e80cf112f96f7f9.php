
<?php $__env->startSection('body'); ?>
<div class="container" style="margin-top:20px">
  <div class="card">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th>No</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Department</th>
          <th>District</th>
          <th>Email</th>
          <th>Roles</th>

          <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td>{++$i }</td>
          <td><?php echo e($user->first_name); ?></td>
          <td><?php echo e($user->last_name); ?></td>
          <td><?php echo e($user->department); ?></td>
          <td><?php echo e($user->distict); ?></td>
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
    <?php echo e($users->links()); ?>

  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp\resources\views/users/search.blade.php ENDPATH**/ ?>