<!-- fuel Modal -->
<!-- Modal -->
<div class="modal fade" id="fuelliModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-primary" role="document">
    <div class="modal-content">
      <form action="#">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">fuel Reconcillation </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php echo e(Form::open(array('route' => 'requisitions.store'))); ?>

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="name">Loading Date:</label>
                <input class="form-control" name="name" id="name" type="text" placeholder="">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="number">Loading Amount:</label>
                <input class="form-control" name="number" id="cheque" type="number" placeholder="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="date">Card Pin:</label>
                <input class="form-control" name="date" id="date" type="text" placeholder="">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="vanue">Card Number:</label>
                <input class="form-control" name="vanue" id="vanue" type="text" placeholder="">
              </div>
            </div>
          </div>
          <div class="card-body">
            <div id="table" class="table-editable">
              <span class="table-add float-right mb-3 mr-2">
                <a href="#!" class="text-success">
                  <i class="fas fa-plus fa-2x" aria-hidden="true">
                  </i>
                </a>
              </span>
              <table class="table table-bordered table-responsive-md table-striped text-center">
                <thead>
                  <tr>
                    <th class="text-center">Date</th>
                    <th class="text-center">Amount Paid</th>
                    <th class="text-center">New Balance</th>
                    <th class="text-center">Reg No</th>
                    <th class="text-center">Odmeter</th>
                    <th class="text-center">Liters</th>
                  </tr>
                </thead>
                <tbody>
                  <div id="liquidation-items">
                    <tr>
                      <td class="pt-3-half" contenteditable="true">
                        <input type="text" id="liquidation-budget" data-id="1" style="width:100%; height:100%; margin:0px; border: 0px; background-color: #ebedef;">
                      </td>
                      <td  class="pt-3-half" contenteditable="true">
                        <input type="text" id="liquidation-code" data-id="1" style="width:100%; height:100%; margin:0px; border: 0px; background-color: #ebedef;">
                      </td>
                      <td  class="pt-3-half" contenteditable="true">
                        <input type="number" id="liquidation-expenditure" data-id="1" style="width:100%; height:100%; margin:0px; border: 0px; background-color: #ebedef;">
                      </td>
                      <td  class="pt-3-half" contenteditable="true"  data-id="1">
                        <input type="number" id="liquidation-vat" data-id="1" style="width:100%; height:100%; margin:0px; border: 0px; background-color: #ebedef;">
                      </td>
                      <td  class="pt-3-half" contenteditable="true"  data-id="1">
                        <input type="number" id="liquidation-vat" data-id="1" style="width:100%; height:100%; margin:0px; border: 0px; background-color: #ebedef;">
                      </td>
                      <td  class="pt-3-half" contenteditable="true">
                        <p id="liquidation-total" data-id="1"></p>
                      </td>
                    </tr>
                  </div>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-4">
              <label for="myfile">Attachments:</label>
              <input type="file" id="myfile" name="attachments[]" multiple><br><br>
            </div>
          </div>
      
          <?php echo e(Form::close()); ?>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Liquidate</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php /**PATH C:\xampp\htdocs\erp\resources\views/liquidations/fuelliModal.blade.php ENDPATH**/ ?>