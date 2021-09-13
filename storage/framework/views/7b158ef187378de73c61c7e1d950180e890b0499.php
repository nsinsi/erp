
<?php $__env->startSection('body'); ?>
<div class="container">
<?php if($errors->any()): ?>
<div class="alert alert-danger">
<ul>
  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <li> <?php echo e($error); ?></li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
</div>
<?php endif; ?>
 <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body p-4">
           <?php echo Form::open(['route' => 'users.store', 'method' => 'POST']); ?>

            <form method="" action="">
                <?php echo csrf_field(); ?>
                <p class="text-muted">Create User</p>

                <div  class="input-group md-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cil-user"></use>
                        </svg>
                      </span>
                    </div>
                    <input class="form-control" type="text" placeholder="<?php echo e(__('First Name')); ?>" name="first_name" value="<?php echo e(old('first_name')); ?>" required >
                </div>
                <div class="input-group md-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cil-user"></use>
                        </svg>
                      </span>
                    </div>
                    <input class="form-control" type="text" placeholder="<?php echo e(__('Last Name')); ?>" name="last_name" value="<?php echo e(old('last_name')); ?>" required >
                </div>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cil-institution"></use>
                        </svg>
                      </span>
                    </div>
                     <input class="form-control" type="text" placeholder="<?php echo e(__('Department')); ?>" name="department" value="<?php echo e(old('department')); ?>" required>
                  </div>
                  <div class="input-group md-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cil-envelope-open"></use>
                        </svg>
                      </span>
                    </div>
                    <input class="form-control" type="text" placeholder="<?php echo e(__('E-Mail Address')); ?>" name="email" value="<?php echo e(old('email')); ?>" required>
                </div>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cil-institution"></use>
                        </svg>
                      </span>
                    </div>
                    <select class="form-control" name="distict" required>
                      <option value="">Select</option>
                      <?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($district->id); ?>" ><?php echo e($district->name); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                  </div>
                  <div class="input-group mb-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cil-user"></use>
                        </svg>
                      </span>
                    </div>
                    <select class="form-control" name="role" required>
                      <option value="">Select</option>
                      <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($role->id); ?>" ><?php echo e($role->name); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cil-lock-locked"></use>
                        </svg>
                      </span>
                    </div>
                    <input class="form-control" type="password" placeholder="<?php echo e(__('Password')); ?>" name="password" required>
                  </div>
                      <div class="input-group md-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <svg class="c-icon">
                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cil-lock-locked"></use>
                        </svg>
                      </span>
                    </div>
                    <input class="form-control" type="password" placeholder="<?php echo e(__('Confirm Password')); ?>" name="password" required>
                </div>

              </br>
              <div class="form-group form-actions">
                <button class="btn btn-sm btn-success" type="submit"><?php echo e(__('Register')); ?></button>
              </div>
            </form>
        </div>
      </div>
    </div>

  </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp\resources\views/users/create.blade.php ENDPATH**/ ?>