
<?php $__env->startSection('body'); ?>
<div class="row justify-content-center">
<div class="card col-md-8">
  <h6 class="card-header text-uppercase text-white" style="background-color:#343a40;">Show Requisition</h6><!-- .card-body -->
  <div class="card-body">
    <!-- .media -->
    <form method="post" enctype="multipart/form-data" action="">
      <input type="hidden" name="_token" value="HkGGxlNvQuslJfW05e1qfehVpsYoKlb93efOuFh4">
      <!-- form -->
      <div class="form-row">
          <div class="form-group col-6">
              <strong>Name:</strong>

          </div>
              <div class="form-group col-6">
                  <strong>Purpose:</strong>
          
              </div>
      </div>
      <hr>
      <!-- .form-actions -->
      <div class="pull-right">
          <a class="btn btn-primary" href="<?php echo e(route('requisitions.index')); ?>"> Back</a>
      </div>
   </div>
    </form><!-- /form -->
  </div><!-- /.card-body -->
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp\resources\views/requisitions/show.blade.php ENDPATH**/ ?>