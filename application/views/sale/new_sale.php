
<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="row">
      <div class="col-md-6 col-sm-4 form-group pull-left">
           <button class="btn btn-icon btn-success" id="txtInvoicePrint" name="txtInvoicePrint">Print</button>
           <button class="btn btn-icon btn-primary" id="txtInvoiceSave" name="txtInvoiceSave">Save</button>
      </div>
  </div>
  <hr>
  <div class="row">
    <!-- left column -->
            <div class="col-md-8 ">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Invoice Details</h3>
                      <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="col-md-12 sale-no-padding">
                      <div class="form-group col-md-3 sale-form-group-padding">
                        <label class="control-label">Invoice No</label>
                        <input type="text" id="txtAccessName" name="txtAccessName" class="form-control" placeholder="placeholder"/>
                      </div>
                      <div class="form-group col-md-3 sale-form-group-padding">
                        <label class="control-label">Date</label>
                        <input type="text" id="txtAccessName" name="txtAccessName" class="form-control" placeholder="placeholder"/>
                      </div>
                      <div class="form-group col-md-3 sale-form-group-padding">
                        <label class="control-label">C/o</label>
                        <input type="text" id="txtAccessName" name="txtAccessName" class="form-control" placeholder="C/o"/>
                      </div>                     
                    </div>
                    <div class="col-md-12 sale-no-padding">
                      <div class="form-group col-md-3 sale-form-group-padding">
                        <input type="text" id="txtAccessName" name="txtAccessName" class="form-control" placeholder="Customer Name"/>
                      </div>
                      <div class="form-group col-md-3 sale-form-group-padding">
                        <input type="text" id="txtAccessName" name="txtAccessName" class="form-control" placeholder="Mobile Number"/>
                      </div>
                      <div class="form-group col-md-3 sale-form-group-padding">
                        <input type="text" id="txtAccessName" name="txtAccessName" class="form-control" placeholder="Email"/>
                      </div>
                      <div class="form-group col-md-3 sale-form-group-padding">
                        <input type="text" id="txtAccessName" name="txtAccessName" class="form-control" placeholder="Balance"/>
                      </div>                    
                    </div>
                    <div class="col-md-12 sale-no-padding">
                      <hr>
                      <div class="form-group col-md-3 sale-form-group-padding">
                        <label class="control-label">Product Name</label>
                        
                        <input type="hidden" name="invoice_item_id" id="invoice_item_id" value=""> 

                        <input type="text" class="form-control" id="invoice_item_name" name="invoice_item_name" autocomplete="off" placeholder="Product Name" onKeypress="" />
                      </div>
                      <div class="form-group col-md-2 sale-form-group-padding">
                        <label class="control-label">Price</label>
                        
                        <input type="hidden" name="invoice_item_id" id="invoice_item_id" value=""> 

                        <input type="text" class="form-control" id="invoice_item_name" name="invoice_item_name" autocomplete="off" placeholder="Product Name" onKeypress="" />
                      </div>
                      <div class="form-group col-md-2 sale-form-group-padding">
                        <label class="control-label">Discount(%)</label>
                        
                        <input type="hidden" name="invoice_item_id" id="invoice_item_id" value=""> 

                        <input type="text" class="form-control" id="invoice_item_name" name="invoice_item_name" autocomplete="off" placeholder="Product Name"  />
                      </div>
                      <div class="form-group col-md-1 sale-form-group-padding">
                        <label class="control-label">Quantity</label>
                        
                        <input type="hidden" name="invoice_item_id" id="invoice_item_id" value=""> 

                        <input type="text" class="form-control" id="invoice_item_name" name="invoice_item_name" autocomplete="off" placeholder="Product Name"  />
                      </div>
                      <div class="form-group col-md-2 sale-form-group-padding">
                        <label class="control-label">Line Total</label>
                        
                        <input type="hidden" name="invoice_item_id" id="invoice_item_id" value=""> 

                        <input type="text" class="form-control" id="invoice_item_name" name="invoice_item_name" autocomplete="off" placeholder="Product Name"  />
                      </div>
                      <div class="form-group col-md-2 sale-form-group-padding">
                        <label class="control-label">Stock</label>
                        
                        <input type="hidden" name="invoice_item_id" id="invoice_item_id" value=""> 

                        <input type="text" class="form-control" id="invoice_item_name" name="invoice_item_name" autocomplete="off" placeholder="Product Name"  />
                      </div>

                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button  class="btn btn-icon btn-primary">Add</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Payment Details</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <!-- form start -->
                <div>
                  <div class="box-body">    
                    <table class="table table-hover">
                      <tbody>
                        <tr>
                          <td>Sub Total</td>
                          <td>:</td>
                          <td>0.00</td>
                        </tr>
                        <tr>
                          <td>Tax Amount</td>
                          <td>:</td>
                          <td>0.00</td>
                        </tr>
                        <tr>
                          <td>Discount</td>
                          <td>:</td>
                          <td>0.00</td>
                        </tr>
                      </tbody>
                    </table>                
                  </div><!-- /.box-body -->                  
                </div>
              </div>
            </div>

  </div>
  <hr>
</section>
</div>
