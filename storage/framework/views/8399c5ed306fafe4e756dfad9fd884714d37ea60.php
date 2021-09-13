<!-- travel Modal -->
<!-- Modal -->
<div class="modal fade" id="travelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-primary" role="document">
    <div class="modal-content">
      <form action="#">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">MAKE TRAVEL REQUEST</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="form-group col-sm-6">
              <label for="name">Activity start date:</label>
              <input class="form-control" id="name" name="name" type="date" placeholder="">
            </div>
            <div class="form-group col-sm-6">
              <label for="activity">Activity end date:</label>
              <input class="form-control" id="project" name="name" type="date" placeholder="">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-6">
              <label for="name">Amount:</label>
              <input class="form-control" id="name" name="name" type="name" placeholder="">
            </div>
            <div class="form-group col-sm-6">
              <label for="activity">Payable to:</label>
              <input class="form-control" id="project" name="name" type="name" placeholder="">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-6">
              <label for="name">Project:</label>
              <input class="form-control" id="name" name="name" type="name" placeholder="">
            </div>
            <div class="form-group col-sm-6">
              <label for="activity">Budget:</label>
              <input class="form-control" id="project" name="name" type="name" placeholder="">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-12">
              <label for="textarea-input">Purpose of the Request:</label>
              <div>
                <textarea class="form-control" id="textarea-input" name="textarea-input" rows="5" placeholder="Content.."></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-4">
              <label for="myfile">Attachments:</label>
              <input type="file" id="myfile" name="attachments[]" multiple><br><br>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php /**PATH C:\xampp\htdocs\erp\resources\views/requisitions/travelModal.blade.php ENDPATH**/ ?>