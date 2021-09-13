
<?php $__env->startSection('body'); ?>

<div class="container" style="margin-top:20px">
<div class="card">
    <div class="card-header"><strong>Payable To</strong>
          <a class="btn btn-outline-success float-right" title="Add" href="<?php echo e(route('payableto.create')); ?>" >Add</a>
        </div>
    <div class="card-body">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Account NO</th>
            <th>Account Name </th>
            <th width="280px">Action</th>
          </tr>
          <tr>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $payableto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($payableto->full_name); ?></td>
            <td><?php echo e($payableto->account_number); ?></td>
            <td><?php echo e($payableto->bank_details); ?></td>
              <td>
                  <a class="btn btn-info" href=" <?php echo e(route('payableto.show',$payableto->id)); ?>">Show</a>
                  <a class="btn btn-primary" href=" <?php echo e(route('payableto.edit',$payableto->id)); ?>">Update</a>
                  <form action="<?php echo e(route('payableto.destroy', $payableto->id)); ?>" method="POST">
                              <input type="hidden" name="_method" value="DELETE">
                              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                              <button class="btn btn-danger m-1">Delete</button>

              </td>
          </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </thead>

      </table>

    </div>
  </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp\resources\views/payableto/index.blade.php ENDPATH**/ ?>