
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
  <div class="card">
        <div class="card-header"><strong>Make Requisition</strong></div>
        <div class="card-body">
          <?php echo e(Form::open(array('route' => 'requisitions.store'))); ?>

            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="date">Start Date:</label>
                  <input class="form-control" name="start_date" id="start_date" type="date" placeholder="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="date">End Date:</label>
                  <input class="form-control" name="end_date" id="end_date" type="date" placeholder="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="payableto">Payable To:</label>
                  <select class="form-control" name="payableto" required>
                    <option value="">Select</option>
                    <?php $__currentLoopData = $payabletos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payableto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($payableto->id); ?>" ><?php echo e($payableto->full_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="amount">Amount (MWK):</label>
                  <input class="form-control" name="amount" id="amount" type="number" placeholder="">
                </div>
              </div>
            </div>
            <div class="row">
             <div class="form-group col-sm-6">
               <label class="form-label" for="name">Project Name:</label>
               <select id="project" name="project" class="form-control">
                 <option selected>Choose project</option>
                 <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <option value=""></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </select>
             </div>
             <div class="form-group col-sm-6">
               <label class="form-label" for="budgetline">Budget Line:</label>
               <select id="budgetline_id" name="budgetline_id" class="form-control">
                 <option selected>Choose project First</option>
               </select>
             </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="purpose">Purpose:</label>
                  <textarea class="form-control" style="height:150px" name="purpose" placeholder="Purpose of the requisition"></textarea>
                </div>
                <div class="form-group col-sm-6 ">
                  <label for="title" class="col-sm-6 col-form-label text-md-right">File Upload</label>
                  <div class="myfrm form-control">
                    <input type="file" name="attachment[]" class="myfrm form-control" multiple="">
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Make</button>
            <?php echo e(Form::close()); ?>

        </div>
  </div>
</div>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<script type="text/javascript">
jQuery(document).ready(function ()
{
        jQuery('select[name="projects"]').on('change',function(){
           var projectId = jQuery(this).val();
           if(projectId)
           {
              jQuery.ajax({
                 url : '/dropdownlist/getbudgetlines/' +projectId,
                 type : "GET",
                 dataType : "json",
                 success:function(data)
                 {
                    console.log(data);
                    jQuery('select[name="budgetline_id"]').empty();
                    jQuery.each(data, function(key,value){
                       $('select[name="budgetline_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                    });
                 }
              });
           }
           else
           {
             console.log(112);
              $('select[name="budgetline_id"]').empty();
           }
        });
});

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp\resources\views/requisitions/create.blade.php ENDPATH**/ ?>