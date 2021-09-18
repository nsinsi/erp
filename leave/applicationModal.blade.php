<!-- fuel Modal -->
<!-- Modal -->
<div class="modal fade" id="applicationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-primary" role="document">
    <div class="modal-content">
      <form action="#">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Leave Application</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="name">Start Date:</label>
                <input class="form-control" name="name" id="name" type="text" placeholder="">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="number">End Date:</label>
                <input class="form-control" name="number" id="cheque" type="number" placeholder="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="handover officer">HandOver Officer:</label>
                <input class="form-control" name="officer" id="officer" type="text" placeholder="">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="vanue">Days:</label>
                <input class="form-control" name="vanue" id="vanue" type="text" placeholder="">
              </div>
            </div>
          </div>

          <!-- <div class="row">
            <div class="form-group col-sm-4">
              <label for="myfile">Attachments:</label>
              <input type="file" id="myfile" name="attachments[]" multiple><br><br>
            </div>
          </div> -->

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
