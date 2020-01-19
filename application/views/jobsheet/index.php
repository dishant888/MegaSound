<style type="text/css">
.mytextdiv{
  display:flex;
  flex-direction:row;
   align-items: center;
}
.mytexttitle{
  flex-grow:0;
}

.divider{
  flex-grow:1;
  height: 2px;
  background-color: #707070;
}
</style>
<div class="pcoded-main-container">
<div class="pcoded-wrapper">
<div class="pcoded-content">
<div class="pcoded-inner-content">
<div class="page-header">
<div class="page-block">
<div class="row align-items-center">
<div class="col-md-12 text-dark">
<div class="page-header-title">
<h3 class="m-b-10"></h3>
</div>
<div class="row">
  <div class="col-sm-12">
    <h3>Job Sheet</h3>
  </div>
    <div class="col-sm-12 bg-white border shadow">
      <div class="row">
        <div class="col-12 text-sm-left text-center col-sm-6 mt-3">
          <div class="form-group">
            <label>Select Quotation</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Quotation" aria-label="Quotation" aria-describedby="basic-addon1">
          </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 mt-sm-5 mt-2">
          <div class="form-group text-success text-center float-sm-right">
            <label>Populate Data</label><i class="ml-2 fa fa-chevron-circle-down"></i>
          </div>
        </div>
      </div>
      <hr style="border: 5px solid #F8F8F8;">
      <div class="row">
        <div class="col-12">
          <div class="mytextdiv">
            <div class="mytexttitle">
             <h4 class="mr-2"><b>Event 1 Details</b></h4>
            </div>
            <div class="divider"></div>
          </div>
        </div>
        <div class="col-12">
          <div class="row">
            <div class="col-12 col-sm-4">
              <div class="form-group">
                <label>Select Type</label>
                <select class="form-control">
                  <option>---Select---</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-4">
              <div class="form-group">
                <label>Venue</label>
                <input type="text" name="" class="form-control form-control-sm">
              </div>
            </div>
            <div class="col-12 col-sm-4">
              <div class="form-group">
                <label>Event Date</label>
                <input type="text" name="" class="form-control form-control-sm">
              </div>
            </div>
            <div class="col-12 col-sm-4">
              <div class="form-group">
                <label>Event Company</label>
                <input type="text" name="" class="form-control form-control-sm">
              </div>
            </div>
            <div class="col-12 col-sm-4">
              <div class="form-group">
                <label>Contact Person</label>
                <input type="text" name="" class="form-control form-control-sm">
              </div>
            </div>
            <div class="col-12 col-sm-4">
              <div class="form-group">
                <label>Contact Number</label>
                <input type="text" name="" class="form-control form-control-sm">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 mt-3">
          <div class="mytextdiv">
            <div class="mytexttitle">
             <h4 class="mr-2"><b>Team Setup</b></h4>
            </div>
            <div class="divider"></div>
          </div>
        </div>
        <div class="col-12 mt-2">
          <div class="row">
            <div class="col-12 col-sm-4">
              <div class="form-group">
                <select class="form-control" id="employee">
                  <option value="">---Employee---</option>
                  <option value="Employee1">Employee1</option>
                  <option value="Employee2">Employee2</option>
                  <option value="Employee3">Employee3</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-4">
              <div class="form-group">
                <select class="form-control" id="role">
                  <option value="">---Role---</option>
                  <option value="Role1">Role1</option>
                  <option value="Role2">Role2</option>
                  <option value="Role3">Role3</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-4 text-sm-right text-center">
              <div class="form-group p-2">
                <button id="add_team_row" class="border-0 w-25 btn-sm btn-success rounded-0">ADD</button>
              </div>
            </div>
            <div class="col-12 table-responsive">
              <table class="table-sm w-100 table-striped mb-3" id="emp_role">
                <thead>
                  <tr>
                    <th style="width: 10%">No.</th>
                    <th style="width: 30%">Name</th>
                    <th style="width: 25%">Role</th>
                    <th style="width: 45%"></th>
                  </tr>
                </thead>
                <tbody>
                  
                </tbody>
              </table><hr>
              <div class="row">
                <div class="col-12 col-sm-4">
                  <div class="form-group">
                    <label>Call & Setup Ready Time</label>
                    <div class="input-group mb-3">
                   <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="far fa-clock"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Select Time" aria-label="Quotation" aria-describedby="basic-addon1">
                  </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="form-group">
                    <label>Show Over Time</label>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="far fa-clock"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Select Time" aria-label="Quotation" aria-describedby="basic-addon1">
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 mt-3">
          <div class="mytextdiv">
            <div class="mytexttitle">
             <h4 class="mr-2"><b>Labour Details</b></h4>
            </div>
            <div class="divider"></div>
          </div>
        </div>
        <div class="col-12">
          <div class="row">
            <div class="col-12 col-sm-4">
              <div class="form-group">
                <label>Select Required No</label>
                <input type="number" name="" class="form-control form-control-sm">
              </div>
            </div>
            <div class="col-12 col-sm-4">
              <div class="form-group">
                <label>Call Time</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="far fa-clock"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Select Time" aria-label="Quotation" aria-describedby="basic-addon1">
                  </div>
              </div>
            </div>
            <div class="col-12 col-sm-4">
              <div class="form-group">
                <label>Shift Time</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="far fa-clock"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Select Time" aria-label="Quotation" aria-describedby="basic-addon1">
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 mt-3">
          <div class="mytextdiv">
            <div class="mytexttitle">
             <h4 class="mr-2"><b>Transport Details</b></h4>
            </div>
            <div class="divider"></div>
          </div>
        </div>
        <div class="col-12 mt-2">
          <div class="row">
            <div class="col-12 col-sm-4 mb-3 m-sm-0">
              <input type="text" name="" id="transport_det" class="form-control" placeholder="Enter Transport Details">
            </div>
            <div class="col-12 col-sm-4 mb-1 m-sm-0">
              <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="far fa-clock"></i></span>
                    </div>
                    <input type="text" id="call_rel" class="form-control" placeholder="Call & Release Time" aria-label="Quotation" aria-describedby="basic-addon1">
              </div>
            </div>
            <div class="col-12 col-sm-4 mb-3 m-sm-0">
              <input type="text" name="" id="pickup" class="form-control" placeholder="Pick Up Place">
            </div>
            <div class="col-12 col-sm-4 mb-3 m-sm-0">
              <input type="text" name="" id="drop" class="form-control" placeholder="Drop off Place">
            </div>
            <div class="col-12 offset-sm-4 col-sm-4 text-sm-right text-center">
              <button id="add_trans_row" class="border-0 w-25 btn-sm btn-success rounded-0">ADD</button>
            </div>
            <div class="col-12 table-responsive">
              <table class="table-sm w-100 table-striped mb-3" id="trans_tab">
                <thead>
                  <tr>
                    <th style="width: 5%">No.</th>
                    <th style="width: 30%">Transport Description</th>
                    <th style="width: 30%">Call & Release Time</th>
                    <th style="width: 15%">Pick Up</th>
                    <th style="width: 15%">Drop Off</th>
                    <th style="width: 5%"></th>
                  </tr>
                </thead>
                <tbody>
                  
                </tbody>
              </table><hr>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 mt-3">
          <div class="mytextdiv">
            <div class="mytexttitle">
             <h4 class="mr-2"><b>Agency Details</b></h4>
            </div>
            <div class="divider"></div>
          </div>
        </div>
        <div class="col-12 mt-2">
          <div class="row">
            <div class="col-12 col-sm-4 mb-3 m-sm-0">
              <input type="text" name="" id="agency_name" class="form-control" placeholder="Enter Agency Name">
            </div>
            <div class="col-12 col-sm-4 mb-3 m-sm-0">
              <input type="text" name="" id="agency_pick" class="form-control" placeholder="Enter Pickup Place">
            </div>
            <div class="col-12 col-sm-4 text-sm-right text-center">
              <button id="add_agency_row" class="border-0 w-25 btn-sm btn-success rounded-0">ADD</button>
            </div>
            <div class="col-12 table-responsive">
              <table class="table-sm w-100 table-striped mb-3" id="agency_tab">
                <thead>
                  <tr>
                    <th style="width: 10%">No.</th>
                    <th style="width: 30%">Name</th>
                    <th style="width: 25%">Role</th>
                    <th style="width: 45%"></th>
                  </tr>
                </thead>
                <tbody>
                  
                </tbody>
              </table><hr>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script type="text/javascript">
    $.validate({});
</script>
<script type="text/javascript" src="<?=base_url('assets/js/jobsheetCreate.js')?>"></script>


