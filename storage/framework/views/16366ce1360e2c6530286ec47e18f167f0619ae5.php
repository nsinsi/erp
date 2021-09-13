
<?php $__env->startSection('body'); ?>
<div class="row justify-content-center">
<div class="card col-md-12">
  <h6 class="card-header text-uppercase text-white" style="background-color:#343a40;">Profile </h6><!-- .card-body -->
  <div class="card-body">

    <form method="post" enctype="multipart/form-data" action="">
      <input type="hidden" name="_token" value="HkGGxlNvQuslJfW05e1qfehVpsYoKlb93efOuFh4">
      <div class="media mb-6">
        <div class="user-avatar ">
          <img  src="images/avatar.jpg "alt="">
        </div>
      </div>

      <div class="form-row">
          <div class="form-group col-6">
              <strong>First Name:</strong>
              <?php echo e($user->first_name); ?>

          </div>
              <div class="form-group col-6">
                  <strong>Last Name:</strong>
                  <?php echo e($user->last_name); ?>

              </div>
      </div>
      <div class="form-row">
          <div class="form-group col-6">
            <strong>Roles:</strong>
            <?php if(!empty($user->getRoleNames())): ?>
                <?php $__currentLoopData = $user->getRoleNames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <label class="badge badge-success"><?php echo e($v); ?></label>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
          </div>
              <div class="form-group col-6">
                  <strong>Email:</strong>
                  <?php echo e($user->email); ?>

              </div>
      </div>
      <div class="form-row">
          <div class="form-group col-6">
            <strong>District:</strong>
              <?php echo e($user->district); ?>

          </div>
              <div class="form-group col-6">
                  <strong>Department:</strong>
                    <?php echo e($user->department); ?>

              </div>
      </div>
      <div class="form-row">
          <div class="form-group col-6">
            <strong>Permissions:</strong>
            <?php if(!empty($rolePermissions)): ?>
                <?php $__currentLoopData = $rolePermissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <label class="label label-success"><?php echo e($v->name); ?>,</label>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
          </div>
          
      </div>
      <hr>
      <!-- .form-actions -->
      <div class="pull-right">
          <a class="btn btn-primary" href="<?php echo e(route('users.index')); ?>"> Back</a>
      </div>

   </div>
    </form><!-- /form -->
  </div><!-- /.card-body -->
</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp\resources\views/users/show.blade.php ENDPATH**/ ?>