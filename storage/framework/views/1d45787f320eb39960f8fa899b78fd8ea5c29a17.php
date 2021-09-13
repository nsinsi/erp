


<?php $__env->startSection('body'); ?>
<div class="container" style="margin-top:20px">
<?php if($message = Session::get('success')): ?>

<div class="alert alert-success">

    <p><?php echo e($message); ?></p>

</div>

<?php endif; ?>
<div class="card">
<div class="card-header"><strong>Requistions</strong>
  <a class="btn btn-success float-right"  href="<?php echo e(route('requisitions.create')); ?>"> Make requisition</a>
     </div>
    <div class="card-body">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Officer</th>
            <th scope="col">Payable To</th>
            <th scope="col">Purpose</th>
            <th scope="col">Status</th>
            <th scope="col"></th>
          </tr>
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $requisition): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
              <td><?php echo e(++$i); ?></td>

              <td><a  href="<?php echo e(route('users.show',$requisition->user->id)); ?>"><?php echo e($requisition->user->first_name); ?></a></td>
              <td><?php echo e($requisition->payableto->full_name); ?></td>
               <td><?php echo e($requisition->purpose); ?></td>
               <td> <span class="badge badge-secondary" ><?php echo e($requisition->status->name); ?></span></td>
              <td>
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Action
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?php echo e(route('requisitions.show',$requisition->id)); ?>">Show</a>
                    <a class="dropdown-item" href="<?php echo e(route('requisitions.download',$requisition->id)); ?>">Download</a>
                    <?php if($requisition->status->name == "Created"): ?>
                      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('recommend-requisition')): ?>
                      <a class="dropdown-item" href="<?php echo e(route('requisitions.show',$requisition->id)); ?>">Recommend</a>
                      <?php endif; ?>
                    <?php endif; ?>
                    <?php if($requisition->status->name == "Recommended"): ?>
                      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('endorse-requisition')): ?>
                      <a class="dropdown-item" href="<?php echo e(route('requisitions.show',$requisition->id)); ?>">Endorse</a>
                      <?php endif; ?>
                    <?php endif; ?>
                    <?php if($requisition->status->name == "Endorsed"): ?>
                      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('approve-requisition')): ?>
                      <a class="dropdown-item" href="<?php echo e(route('requisitions.show',$requisition->id)); ?>">Approve</a>
                      <?php endif; ?>
                    <?php endif; ?>
                    <?php if($requisition->status->name == "Approved"): ?>
                      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('prepare-requisition')): ?>
                      <a class="dropdown-item" href="<?php echo e(route('requisitions.edit',$requisition->id)); ?>">Prepare</a>
                      <?php endif; ?>
                    <?php endif; ?>
                    <?php if($requisition->status->name == "Prepared"): ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('collect-requisition')): ?>
                        <a class="dropdown-item" href="<?php echo e(route('requisitions.edit',$requisition->id)); ?>">Collect</a>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-requisition')): ?>
                    <a class="dropdown-item" href="<?php echo e(route('requisitions.edit',$requisition->id)); ?>">Edit</a>
                    <?php endif; ?>
                  </div>
                </div>
              </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </thead>
      </table>
      <?php echo e($data->onEachSide(10)->links()); ?>

    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\erp\resources\views/requisitions/index.blade.php ENDPATH**/ ?>