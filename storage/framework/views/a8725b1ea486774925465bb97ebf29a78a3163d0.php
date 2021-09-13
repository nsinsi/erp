
<?php $__env->startSection('body'); ?>
<div class="container" style="margin-top:20px">
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
  <?php echo Form::open(['route' => 'payableto.store', 'method' => 'POST']); ?>

  <div class="card">
    <form method="" action="">
        <?php echo csrf_field(); ?>
        <div class="card-header"><strong>Add Details</strong></div>
        <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="name">Full Name:</label>
                  <input class="form-control" name="full_name" id="full_name" type="name" placeholder="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="account_number">Account Number:</label>
                  <input class="form-control" name="account_number" id="account_number" type="number" placeholder="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="bank_details">Account Name:</label>
                  <input class="form-control" name="bank_details" id="bank_details" type="text" placeholder="">
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
  </div>
</form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp\resources\views/payableto/create.blade.php ENDPATH**/ ?>