<!-- book Modal -->
<!-- Modal -->
<div class="modal fade" id="bookModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-primary" role="document">
    <div class="modal-content">
      <form action="#">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Book An Item</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="form-group col-sm-6">
              <label for="item">Item Name</label>
              <input class="form-control" id="where" name="where" type="text" placeholder="">
            </div>
            <div class="form-group col-sm-6">
              <label for="date">Date</label>
              <input class="form-control" id="model" name="date" type="date" placeholder="">
            </div>
          </div>
            <div class="row">
              <div class="form-group col-sm-6">
                <label for="brief">Reason</label>
                  <textarea class="form-control" style="height:150px" name="brief" placeholder=""></textarea>
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
