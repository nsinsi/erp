

<?php $__env->startSection('body'); ?>
<div class="row justify-content-center">
  <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
  <?php endif; ?>
  <div class="card col-md-9">
        <h6 class="card-header text-uppercase text-white" style="background-color:#343a40;">Edit User </h6><!-- .card-body -->
        <div class="card-body">
      <?php echo Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]); ?>

            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="first_name">Name:</label>
                  <?php echo Form::text('first_name', null, array('placeholder' => 'First Name','class' => 'form-control')); ?>

                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="last_name">Last Name:</label>
                   <?php echo Form::text('last_name', null, array('placeholder' => 'Last Name','class' => 'form-control')); ?>

                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="email">Email:</label>
                   <?php echo Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')); ?>

                </div>
              </div>
              <div class="col-sm-6">
                <label for="role_id">Roles:</label>
                <?php echo Form::select('roles[]', $roles, array('class' => 'form-control','multiple')); ?>

              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <label for="password">Password:</label>
                 <?php echo Form::password('password', array('placeholder' => 'Password','class' => 'form-control')); ?>

              </div>
              <div class="col-sm-6">
                <label for="confirm-password">Confirm password:</label>
                <?php echo Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')); ?>

              </div>
            </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="purpose">District:</label>
                  <?php echo Form::select('districts[]', $districts, array('distict','class' => 'form-control','multiple')); ?>

                </div>
              </div>
               <button type="submit" class="btn btn-primary">Submit</button>
            </div>

            <?php echo e(Form::close()); ?>

        </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp\resources\views/users/edit.blade.php ENDPATH**/ ?>