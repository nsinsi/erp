<!-- payment Modal -->
<!-- Modal -->
<div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-primary" role="document">
    <div class="modal-content">
      <form action="#">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">MAKE A  PAYMENT REQUISITION</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
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
                  <label for="name">Payable To:</label>
                  <input class="form-control" name="payable_to" id="payable_to" type="text" placeholder="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="number">Amount (MWK):</label>
                  <input class="form-control" name="amount" id="amount" type="number" placeholder="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-sm-6">
                <label for="project_id">Project:</label>
                <select name="project" class="form-control" id="project_id" required>
                <option value="">--- Select Project ---</option>

                </select>
              </div>
              <div class="form-group col-sm-6">
                <label for="budgetline_id">Budget Line:</label>
                <select name="budgetline_id" class="form-control" id="budget_line_id" required>
                <option>--Budget Line--</option>
                </select>
              </div>
              <div class="col-sm-8">
                <div class="form-group">
                  <label for="purpose">Purpose:</label>
                  <textarea class="form-control" style="height:150px" name="purpose" placeholder="Purpose of the requisition"></textarea>
                </div>

              </div>
            </div>
            <!-- <button type="submit" class="btn btn-primary">Make</button> -->
            <?php echo e(Form::close()); ?>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php /**PATH C:\xampp\htdocs\erp\resources\views/requisitions/paymentModal.blade.php ENDPATH**/ ?>