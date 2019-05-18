
<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="row">
      <div class="col-md-6 col-sm-4 form-group pull-left">
           <button class="btn btn-icon btn-success" id="txtInvoicePrint" name="txtInvoicePrint">Print</button>
           <button class="btn btn-icon btn-primary" id="btnInvoiceSave" name="btnInvoiceSave">Save</button>
      </div>
  </div>
  <hr>
  <div class="row">
    <!-- left column -->
            <div class="col-md-9 sale-invoice-details">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Invoice Details</h3>
                      <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <!-- form start -->
                
                  <div class="box-body">
                  <form role="form" id="saleItemAdd" name="saleItemAdd">
                      <div class="col-md-12 sale-no-padding">
                        <div class="form-group col-md-3 sale-form-group-padding">
                          <label class="control-label">Invoice No</label>
                          <input type="text" id="txtInvoiceNumber" name="txtInvoiceNumber" class="form-control" placeholder="invoice number" value="<?php echo $invoice_number;?>" disabled />
                        </div>
                        <div class="form-group col-md-3 sale-form-group-padding">
                          <label class="control-label">Date</label>
                          <input type="text" id="txtInvoiceDate" name="txtInvoiceDate" class="form-control" placeholder="date" value="<?php echo $invoice_date;?>" disabled />
                        </div>
                        <div class="form-group col-md-3 sale-form-group-padding">
                          <label class="control-label">C/o</label>
                          <input type="text" id="txtUserName" name="txtUserName" class="form-control" placeholder="C/o" value="<?php echo $user_name;?>" disabled/>
                        </div>                     
                      </div>
                      <div class="col-md-12 sale-no-padding">
                        <div class="form-group col-md-4 sale-form-group-padding">
                          <input type="text" class="form-control" id="customers_name" name="customers_name" data-validate="required" data-message-required="This is required field." autocomplete="off" placeholder="Customer Name"  onKeypress="loadCustomer()"/>
                          <input type="hidden" name="txtCustomerID" id="txtCustomerID">
                        </div>
                        <div class="form-group col-md-4 sale-form-group-padding">
                          <input type="text" id="txtCustomerMobile" name="txtCustomerMobile" class="form-control" placeholder="Mobile Number"/>
                        </div>
                        <div class="form-group col-md-4 sale-form-group-padding">
                          <input type="text" id="txtCustomerEmail" name="txtCustomerEmail" class="form-control" placeholder="Email"/>
                        </div>
                      </div>
                      <div class="col-md-12 sale-no-padding">
                      <hr>                      
                          <div class="form-group col-md-3 sale-form-group-padding">
                            <label class="control-label">Product Name</label>
                            <input type="type" id="txtProductID" name="txtProductID" hidden=""> 
                            <input type="type" id="txtStoreID" name="txtStoreID" hidden=""> 
                            <input type="text" class="form-control" id="product_name" name="product_name" autocomplete="off" placeholder="Product Name" onKeypress="loadProducts()" />
                          </div>
                          <div class="form-group col-md-2 sale-form-group-padding">
                            <label class="control-label">Price</label>
                            <input type="text" class="form-control" id="txtProuductUnitPrice" name="txtProuductUnitPrice" autocomplete="off" disabled placeholder="Price" hidden="" hidden="" />
                          </div>
                          <div class="form-group col-md-2 sale-form-group-padding">
                            <label class="control-label">Tax(%)</label>                        
                            <input type="text" class="form-control" id="txtProductTax" name="txtProductTax" autocomplete="off" disabled placeholder="Tax"  hidden="" />
                          </div>
                          <div class="form-group col-md-1 sale-form-group-padding">
                            <label class="control-label">Quantity</label>                        
                            <input type="text" class="form-control" id="txtProductQty" name="txtProductQty" autocomplete="off" placeholder="Qty"  />
                          </div>                      
                          <div class="form-group col-md-2 sale-form-group-padding">
                            <label class="control-label">Discount(%)</label>                        
                            <input type="text" class="form-control" id="txtProductDiscount" name="txtProductDiscount" autocomplete="off" placeholder="Discount"  value="0" />
                          </div>
                          <div class="form-group col-md-2 sale-form-group-padding">
                            <label class="control-label">Line Total</label>                        
                            <input type="text" class="form-control" id="txtLineTotal" name="txtLineTotal" autocomplete="off" disabled placeholder="Total"  value="0.00" />
                          </div>                  
                        </div>
                        <div class="col-md-12 sale-no-padding">
                           <div class="form-group col-md-2 sale-form-group-padding">
                            <label class="control-label">Stock</label>                        
                            <input type="text" class="form-control" id="txtProductStock" name="txtProductStock" autocomplete="off" disabled placeholder="Product Name"  hidden="" />
                          </div>
                        </div>
                      </div><!-- /.box-body -->

                      <div class="box-footer">
                        <button  class="btn btn-icon btn-primary" name="txtAddItem" id="txtAddItem" >Add</button>
                      </div>
                  </form>  
              </div>
            </div>
            <div class="col-md-3 sale-payment-details">
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
                    <table class="table table-hover tbl-payment-details">
                      <tbody>
                        <tr>
                          <td>Sub Total</td>
                          <td>:</td>
                          <td id="subTotal">0.00</td>
                        </tr>
                        <tr>
                          <td>Tax Amount</td>
                          <td>:</td>
                          <td id="taxAmount">0.00</td>
                        </tr>
                        <tr>
                          <td>Discount</td>
                          <td>:</td>
                          <td id="discount">0.00</td>
                        </tr>
                        <tr>
                          <td>Grand Total</td>
                          <td>:</td>
                          <td id="grandTotal">0.00</td>
                        </tr>
                      </tbody>
                    </table> 
                  </div><!-- /.box-body -->                  
                </div>
              </div>
            </div>

            <div class="col-md-12 sale-payment-details">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Invoice Items</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <!-- form start -->
                <div>
                  <div class="box-body ">    
                    <table class="table table-hover table-striped table-bordered" id="tblItems" name="tblItems">
                      <tbody>
                        <thead>
                            <th class="text-center" >Item Name</th>
                            <th class="text-center" >Unit Price</th>
                            <th class="text-center" >Tax(%)</th>
                            <th class="text-center" >Price(inc.Tax)</th>
                            <th class="text-center" >Discount(%)</th>
                            <th class="text-center" >Discount Price</th>
                            <th class="text-center" >Qty</th>
                            <th class="text-center" >Line Total</th>
                            <th class="text-center" >&nbsp;</th>
                        </thead>
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
