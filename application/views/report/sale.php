<!-- Main content -->
<section class="content">
	  <!-- Default box -->
  <div class="row">
      <div class="col-md-3">
      	<div class="form-group">
          <label class="control-label">Customer Name</label>
          <input type="text" id="txtCustomerName" name="txtCustomerName" class="form-control" placeholder="Customer Name"  disabled />
          <input type="hidden" id="txtCustomerID" name="txtCustomerID" />
        </div>
      	 <div class="form-group">
          <label class="control-label">Invoice Number</label>
          <input type="text" id="txtInvoiceId" name="txtInvoiceId" class="form-control" placeholder="Invoice Number"  disabled />
        </div>
      </div>
      <div class="col-md-6">      	
                  <!-- Date and time range -->
                  <div class="form-group">
                    <label>Date Range:</label>
                    <div class="input-group">
                      <button class="btn btn-default pull-right" id="daterange-btn">
                        <i class="fa fa-calendar"></i> Date range picker
                        <i class="fa fa-caret-down"></i>
                      </button>
                      <input type="hidden" name="txtStartDate" id="txtStartDate">
                      <input type="hidden" name="txtEndDate" id="txtEndDate">
                    </div>
                  </div>
                  <div class="form-group">
			          <label class="control-label">Start Date :</label>&nbsp;
			          <label class="control-label" name="lblStartDate" id="lblStartDate"></label>
			        </div>
			        <div class="form-group">
			          <label class="control-label">End Date :</label>&nbsp;
			          <label class="control-label" name="lblEndDate" id="lblEndDate"></label>
			        </div>
      </div>
      <div class="col-md-3">
      	 <div class="form-group text-center">
           <button class="btn btn-icon btn-primary" id="btnSearch" name="btnSearch">Search</button>
       	</div>
      </div>
      
  </div>
  <hr>
    <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <!-- <h3 class="box-title">Hover Data Table</h3> -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="saleReportList" name="saleReportList" class="table table-bordered table-hover table-responsive">
                    <thead>
                      <tr>
                        <th>Customer Name</th>
                        <th>Customer Email</th>
                        <th>Customer Phone</th>
                        <th>Invoice ID</th>
                        <th>Issue Date</th>
                        <th>Amount</th>
                        <th>Discount</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Amount Paid</th>
                        <th>Blance</th>
                        <th>Date Of Payment</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
            <tr>
                <th colspan="5" style="text-align:right">Total:</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
</section>
</div>