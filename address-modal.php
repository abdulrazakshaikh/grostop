<div class="modal-header">
        <h5 class="modal-title" id="addAddressModalLabel">Add New Address</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <div class="btn-group btn-group-tags btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-outline-dark btn-sm active">
                  <input type="radio" name="tags" id="taghome" value="home" checked>Home
                </label>
                <label class="btn btn-outline-dark btn-sm">
                  <input type="radio" name="tags" id="tagoffice" value="office">Office
                </label>
                <label class="btn btn-outline-dark btn-sm">
                  <input type="radio" name="tags" id="tagothers" value="others">Others
                </label>
                  <div id="collapseothers" style="display: none;">
                    <div class="form-group mb-0">
                      <input id="" name="" type="text" placeholder="Enter Tags" class="form-control form-control-sm rounded-0">
                    </div>
                  </div>  
              </div>
            </div>
           
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="form-group">
              <label class="control-label">Flat / House / Office No.</label>
              <input id="" name="" type="text" placeholder="Flat / House / Office No." class="form-control input-md" required="">
            </div>
            
          </div>
          <div class="col-lg-12 col-md-12">
            <div class="form-group">
              <label class="control-label">Address Line</label>
              <input id="" name="" type="text" placeholder="Address Line" class="form-control input-md">
            </div>
          </div>

          <div class="col-lg-6 col-md-12">
            <div class="form-group">
              <label class="control-label">Pincode</label>
              <input id="pincode" name="pincode" type="text" placeholder="Pincode" class="form-control input-md" required="">
            </div>
          </div>

          <div class="col-lg-6 col-md-12">
            <div class="form-group">
              <label class="control-label">City</label>
              <input id="" name="" type="text" placeholder="City" class="form-control input-md" required="">
            </div>
          </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-secondary">Save changes</button>
      </div>