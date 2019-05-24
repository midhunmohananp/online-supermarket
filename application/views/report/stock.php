<!-- Main content -->
<section class="content">
	  <!-- Default box -->
  <div class="row">
      <div class="col-md-6">
      	<div class="form-group">
          <label class="control-label">Product Name</label>
          <input type="text" id="txtCustomerName" name="txtCustomerName" class="form-control" placeholder="Product Name"  disabled />
          <input type="hidden" id="txtProductID" name="txtProductID" />
        </div>
      	 <div class="form-group">
          <label class="control-label">SKU</label>
          <input type="text" id="txtSku" name="txtSku" class="form-control" placeholder="SKU"  disabled />
        </div>
      </div>
      <div class="col-md-6">
      	 <div class="form-group text-center">
           <button class="btn btn-icon btn-primary" id="btnStockSearch" name="btnStockSearch">Search</button>
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
                  <table id="stockReportList" name="stockReportList" class="table table-bordered table-hover table-responsive">
                    <thead>
                      <tr>
                        <th>Product Hsn</th>
                        <th>Product Name</th>
                        <th>Product Description</th>
                        <th>Category</th>
                        <th>Stock</th>
                        <th>Quantity Sold</th>
                        <th>Unit Price</th>
                        <th>Tax</th>
                        <th>UOM</th>
                        <th>SKU</th>
                        <th>Date Created</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
</section>
</div>