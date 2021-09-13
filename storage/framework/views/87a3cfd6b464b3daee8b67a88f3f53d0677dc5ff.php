
<?php $__env->startSection('body'); ?>

<div class="row justify-content-center">
<div class="card col-md-8">
  <h6 class="card-header text-uppercase text-white" style="background-color:#343a40;">Create New Role</h6><!-- .card-body -->


<?php if(count($errors) > 0): ?>

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <li><?php echo e($error); ?></li>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ul>

    </div>

<?php endif; ?>


<?php echo Form::open(array('route' => 'roles.store','method'=>'POST')); ?>


<div class="row">

    <div class=" col-md-6">

        <div class="form-group">

            <strong>Name:</strong>

            <?php echo Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')); ?>


        </div>

    </div>
  </div>

    <div class=" col-md-6">

        <div class="form-group">

            <strong>Permission:</strong>

            <br/>

            <?php $__currentLoopData = $permission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <label><?php echo e(Form::checkbox('permission[]', $value->id, false, array('class' => 'name'))); ?>


                <?php echo e($value->name); ?></label>

            <br/>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

        <button type="submit" class="btn btn-primary">Submit</button>

    </div>

</div>
</div>
</div>
<?php echo Form::close(); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp\resources\views/roles/create.blade.php ENDPATH**/ ?>