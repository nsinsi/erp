



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
    <h6 class="card-header text-uppercase text-white" style="background-color:#343a40;">Update Payableto</h6><!-- .card-body -->
    <div class="card-body">
      <?php echo Form::model($payableto, ['method' => 'PATCH','route' => ['payableto.update', $payableto->id]]); ?>

      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="full_name">Name:</label>
            <?php echo Form::text('full_name', null, array('placeholder' => 'full_nameName','class' => 'form-control')); ?>

          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="account_number">Accountn No:</label>
            <?php echo Form::text('account_number', null, array('placeholder' => 'account_number','class' => 'form-control')); ?>

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="bank_details">Account Details:</label>
            <?php echo Form::text('bank_details', null, array('placeholder' => 'bank_details','class' => 'form-control')); ?>

          </div>
        </div>

      </div>
          <button type="submit" class="btn btn-primary">Update</button>
      <?php echo e(Form::close()); ?>

    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp\resources\views/payableto/edit.blade.php ENDPATH**/ ?>