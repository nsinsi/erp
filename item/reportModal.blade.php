<!-- report Modal -->
<!-- Modal -->
<div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-primary" role="document">
    <div class="modal-content">
      <form action="#">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Report Asset</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="form-group col-sm-6">
              <label for="officer-in-charge">Asset Tag:</label>
              <input class="form-control" id="where" name="where" type="text" placeholder="">
            </div>
            <div class="form-group col-sm-6">
              <label for="officer-in-charge">Date Issued:</label>
              <input class="form-control" id="where" name="where" type="text" placeholder="">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-6">
              <label for="officer-in-charge">Life Span:</label>
              <input class="form-control" id="where" name="where" type="text" placeholder="">
            </div>
            <div class="form-group col-sm-6">
              <label for="type-of-item">Report an Item*</label>
              <select class="form-control" name="type" id="type" required>
                <option value=""> Choose</option>
                <option value="missing">Missing</option>
                <option value="broken">Broken</option>
              </select>
            </div>
          </div>
          <div class="missing" id="missing" style="display:none;">
            <hr>
            <div class="row ml-1">
              <h5>Mssing Item</h5>
            </div>
            <div class="row">
              <div class="form-group col-sm-6">
                <label for="date">Date</label>
                <input class="form-control" id="model" name="date" type="date" placeholder="">
              </div>
              <div class="form-group col-sm-6">
                <label for="where">Place</label>
                <input class="form-control" id="where" name="where" type="text" placeholder="">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-sm-6">
                <label for="report">Have you reported to the police?</label>
                <select class="form-control" name="report" id="text" required>
                  <option value=""> Choose</option>
                  <option value="missing">Yes</option>
                  <option value="broken">No</option>
                </select>
              </div>
              <div class="form-group col-sm-6">
                <label for="brief">Brief:</label>
                  <textarea class="form-control" style="height:150px" name="brief" placeholder=""></textarea>
              </div>
            </div>

          </div>
          <div class="broken" id="broken" style="display:none;">
            <hr>
            <div class="row ml-1">
              <h5>Broken Item</h5>
            </div>
            <div class="row">
              <div class="form-group col-sm-6">
                <label for="date">Date:</label>
                <input class="form-control" id="date" type="date" placeholder="">
              </div>
              <div class="form-group col-sm-6">
                <label for="place">Place:</label>
                <input class="form-control" id="place" type="text" placeholder="">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-sm-6">
                <label for="Brief">Brief</label>
                <textarea class="form-control" style="height:150px" name="brief" placeholder=""></textarea>
              </div>
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
<!-- <div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header text-capitalize"><strong>Report</strong></div>
          <div class="card-body">
            <div class="row ml-1">
              <h5>Personal Details</h5>
            </div>
            <div class="row">
              <div class="form-group col-sm-6">
                <label for="officer-in-charge">Item Name</label>
                <input class="form-control" id="where" name="where" type="text" placeholder="">
              </div>
              <div class="form-group col-sm-6">
                <label for="type-of-item">Report an Item*</label>
                <select class="form-control" name="type" id="type" required>
                  <option value=""> Choose</option>
                  <option value="hardware">Missing</option>
                  <option value="software">Broken</option>
                </select>
              </div>
            </div>
            <div class="missing" id="missing" style="display:none;">
              <hr>
              <div class="row ml-1">
                <h5>Mssing Item</h5>
              </div>
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="date">Date</label>
                  <input class="form-control" id="model" name="date" type="date" placeholder="">
                </div>
                <div class="form-group col-sm-6">
                  <label for="where">Where</label>
                  <input class="form-control" id="where" name="where" type="text" placeholder="">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="brief">Brief</label>
                    <textarea class="form-control" style="height:150px" name="brief" placeholder=""></textarea>
                </div>
              </div>

            </div>
            <div class="broken" id="broken" style="display:none;">
              <hr>
              <div class="row ml-1">
                <h5>Broken Item</h5>
              </div>
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="date">Date</label>
                  <input class="form-control" id="date" type="date" placeholder="">
                </div>
                <div class="form-group col-sm-6">
                  <label for="where">where</label>
                  <input class="form-control" id="where" type="text" placeholder="">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="Brief">Brief</label>
                  <textarea class="form-control" style="height:150px" name="brief" placeholder=""></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button class="btn btn-outline-primary pull-right">Save</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
@section('scripts')
<script src="{{('js/report-item.js')}}"></script>
@endsection
