

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
    <h6 class="card-header text-uppercase text-white" style="background-color:#343a40;">Update supplier </h6><!-- .card-body -->
    <div class="card-body">
      <?php echo Form::model($supplier, ['method' => 'PATCH','route' => ['supplier.update', $supplier->id]]); ?>

      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="name">Name:</label>
            <?php echo Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')); ?>

          </div>
        </div>
      </div>
          <button type="submit" class="btn btn-primary">Update</button>
      <?php echo e(Form::close()); ?>

    </div>
  </div>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp\resources\views/supplier/edit.blade.php ENDPATH**/ ?>