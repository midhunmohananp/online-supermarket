<div class="box-body">
            <div class="row">
              <div class="col-sm-8">
                
              <div class="box box-solid ">
                <div class="box-header">
                  <h3 class="box-title">Invoice Details</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                  </div>
                </div>
                <div class="box-body">
                <?php echo form_open('#',['id'=>'saleItemAdd','name'=>'saleItemAdd']);?>
                  <div class="row">
                  <div class="form-group col-md-3">
                      <label for="txtInvoiceNumber">Invoice Number</label>
                      <input type="text" disabled="" class="form-control form-control-width" id="txtInvoiceNumber" name="txtInvoiceNumber"  value="<?php echo $invoice_number;?>">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="txtInvoiceDate">Invoice Date</label>
                      <input type="text" disabled="" class="form-control form-control-width" id="txtInvoiceDate" name="txtInvoiceDate"  value="<?php echo $invoice_date;?>">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="txtInvoiceCo">C/O</label>
                      <input type="text" class="form-control form-control-width" id="txtInvoiceCo" name="txtInvoiceCo"  placeholder="">
                    </div>                  
                    
                    
                  </div>
                  
                  <div class="row">
                  <div class="form-group col-md-3">
                      <label for="txtCustomerName">Customer Name</label>
                      <!-- <input type="text" class="form-control form-control-width" id="txtCustomerName" name="txtCustomerName"  placeholder=""> -->
                    <select class="js-example-basic-single form-control form-control-width" name="state">
                    </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="txtCustomerEmail">Customer Email</label>
                      <input type="text" class="form-control form-control-width" id="txtCustomerEmail" name="txtCustomerEmail"  placeholder="">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="txtCustomerNumber">Customer Number</label>
                      <input type="text" class="form-control form-control-width" id="txtCustomerNumber" name="txtCustomerNumber"  placeholder="">
                    </div>
                    <div class="form-group" col-md-3">
                      <label for="txtCustomerAddress">Customer Address</label>
                      <input type="text" class="form-control form-control-width" id="txtCustomerAddress" name="txtCustomerAddress"  placeholder="">
                    </div>
                    
                    
                  </div>
                  <hr>
                  <div class="row">
                  <div class="form-group col-md-3">
                      <label for="txtProduct">Product Name</label>
                      <input type="text" class="form-control form-control-width" id="txtProduct" name="txtProduct"  placeholder="">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="txtProuductUnitPrice">Unit Price</label>
                      <input type="text" class="form-control form-control-width" id="txtProuductUnitPrice" name="txtProuductUnitPrice"  placeholder="">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="txtProductUom">UOM</label>
                      <input type="text" class="form-control form-control-width" id="txtProductUom" name="txtProductUom"  placeholder="">
                    </div>
                    <div class="form-group" col-md-3>
                      <label for="txtProductqty">Qty</label>
                      <input type="text" class="form-control form-control-width" id="txtProductqty" name="txtProductqty"  placeholder="">
                    </div>
                    
                    
                  </div>
                  <div class="row">
                    <div class="form-group col-md-3">
                      <label for="txtProductTax">Tax</label>
                      <input type="text" class="form-control form-control-width" id="txtProductTax" name="txtProductTax"  placeholder="">
                    </div>
                  <div class="form-group col-md-3">
                      <label for="txtProductDiscount">Discount(%)</label>
                      <input type="text" class="form-control form-control-width" id="txtProductDiscount" name="txtProductDiscount"  placeholder="">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="txtProductTotal">Total</label>
                      <input type="text" class="form-control form-control-width" id="txtProductTotal" name="txtProductTotal"  placeholder="">
                    </div>               
                                        
                  </div>
                  <div class="row">
                  <div class="col-md-3">
                   <button class="btn btn-block btn-primary" id="txtAddItem" name="txtAddItem">Add to Cart</button>
                   </div>
                  </div>
                <?php echo form_close();?>
                </div><!-- /.box-body -->
              </div><!-- /.box -->


              </div>
              <div class="col-sm-4">
                
                <div class="box box-solid box-primary">
                <div class="box-header">
                  <h3 class="box-title">Payment Details</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                  </div>
                </div>
                <div class="box-body">

                  <div class="form-group row">
                    <label class="col-md-6">Sub Total:</label>
                    <label class="col-md-6 ">0.00</label>
                    <label class="col-md-6">Tax Amount:</label>
                    <label class="col-md-6 ">0.00</label>
                    <label class="col-md-6">Discount:</label>
                    <label class="col-md-6 ">0.00</label>
                    <hr>
                    <label class="col-md-6">Grand Total:</label>
                    <label class="col-md-6 ">0.00</label>
                    
                  </div>

  
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
            </div>

            <div class="row">
            <div class="col-md-12"> 

                              <div class="box box-solid">
                <div class="box-header">
                  <h3 class="box-title">Payment Details</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                  </div>
                </div>
                <div class="box-body">

                  <div class="form-group row">
                    <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody>
                    <tr>
                      <th>Item Name</th>
                      <th>Uom</th>
                      <th>Unit Price</th>                      
                      <th>Discount(%)</th>
                      <th>Discount Price</th>
                      <th>Qty</th>
                      <th>Total</th>
                      <th>&nbsp;</th>
                    </tr>
                    <!-- <tr>
                      <td>183</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr> -->
                  </tbody></table>
                </div>
                    
                  </div>
<!-- <span class="label label-success">Approved</span> -->
  
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
            </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
            
            </div><!-- /.box-footer-->
            
          </div><!-- /.box -->