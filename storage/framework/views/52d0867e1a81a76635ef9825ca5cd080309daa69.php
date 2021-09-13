
<?php $__env->startSection('body'); ?>
<div class="container" style="margin-top:20px">
  <div class="card">
    <div class="card-header"><strong>Supplier</strong>
      <a class="btn btn-outline-success float-right"   title="Add supplier" href="<?php echo e(route('supplier.create')); ?>">Add supplier</a>
    </div>
    <div class="card-body">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
          </tr>
          <tr>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($supplier->name); ?></td>
            <td>
              <a class="btn btn-info"  title="show" href="<?php echo e(route('supplier.show',$supplier->id)); ?>">Show</a>
              <a class="btn btn-primary"  title="update" href="<?php echo e(route('supplier.edit',$supplier->id)); ?>">Update</a>
              <form action="<?php echo e(route('supplier.destroy', $supplier->id)); ?>" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <button class="btn btn-danger m-1">Delete</button>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </thead>
        </table>
        <?php echo e($data->links()); ?>

      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp\resources\views/supplier/index.blade.php ENDPATH**/ ?>