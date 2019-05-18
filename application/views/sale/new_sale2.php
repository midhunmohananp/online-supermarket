

<?php //print_r($saleDetails);exit(); ?>
<div class="main-content">
        
    <div class="row">
      <!-- Raw Links -->

      <div class="col-md-6 col-sm-4 form-group pull-left">
        <!-- <button type="submit" class="btn btn-success">Save</button> -->
        <button type="button" id="saleDetailPay" class="btn btn-green btn-icon icon-left">
          Payment Complete
          <i class="entypo-check"></i>
        </button>
        <button type="button" id="saleDetailSave" class="btn btn-blue btn-icon icon-left">
          Save Sale
          <i class="entypo-check"></i>
        </button>
        <!-- <button type="button" id="saleDetailCancel" class="btn btn-warning btn-icon icon-left">
          Cancel Sale
          <i class="entypo-check"></i>
        </button> -->
      </div>

      <div class="col-md-6 col-sm-4 clearfix hidden-xs pull-right">
        <ul class="list-inline links-list pull-right">
          <li>
            <a href="<?php echo base_url(); ?>dashboard/logoff">
              Log Out <i class="entypo-logout right"></i>
            </a>
          </li>
        </ul>
    
      </div>
    
    </div>
    
    <hr />

    <!-- Payment Form Starts Herer -->
    <form role="form" id="saleDetail" action="<?php echo base_url(); ?>sale/saleSave" method="post" class="validate">

            
      <!-- <h2>Add sale</h2>
      <br />
       -->
      <div class="panel panel-primary col-md-9">
        <div class="panel-heading">
          <div class="panel-title">
            <strong>Invoice Details</strong>
          </div>
          
          <div class="panel-options">
            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
            <!-- <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a> -->
          </div>
        </div>
        <?php 
        // print_r($saleDetails);
        // echo $saleDetails->invoicecocustomers_percentage;
        ?>
        <div class="panel-body" style="padding: 5px;">
      
            <input type="hidden" name="invoice_id" id="invoice_id" value="<?php if(isset($saleDetails->invoice_id)) { echo $saleDetails->invoice_id; } ?>">
            <!-- invoice_status_id -->
            <input type="hidden" name="invoice_status_id" id="invoice_status_id" value="<?php if(isset($saleDetails->invoice_status_id)) { echo $saleDetails->invoice_status_id; } ?>">

            <div class="col-md-12" style="padding-left: 0px;">
              
              <div class="form-group col-md-3" style="padding: 5px;margin: 0;">
                <label class="control-label">Invoice No</label>
        
                <input type="text" class="form-control" id="invoice_number" name="invoice_number" data-validate="required" data-message-required="This is required field." placeholder="Invoice No" value="<?php if(isset($saleDetails->invoice_number)) { echo $saleDetails->invoice_number; } else { echo '1000'; } ?>" readonly />
              </div>

              <div class="form-group col-md-3" style="padding: 5px;margin: 0;">
                <label class="control-label">Invoice Created Date</label>
        
                <input type="text" class="form-control" id="invoice_created" name="invoice_created" data-validate="required" data-message-required="This is required field." placeholder="Invoice Created" value="<?php if(isset($saleDetails->invoice_created)) { echo $saleDetails->invoice_created; } else { echo date('Y-m-d h:i:s'); } ?>" readonly />
              </div>

              <div class="form-group col-md-3" style="padding: 5px;margin: 0;">
                <label class="control-label">Invoice Modified Date</label>
        
                <input type="text" class="form-control" id="invoice_modified" name="invoice_modified" data-validate="required" data-message-required="This is required field." placeholder="Invoice Modified" value="<?php if(isset($saleDetails->invoice_modified)) { echo $saleDetails->invoice_modified; } else { echo date('Y-m-d h:i:s'); } ?>" readonly />
              </div>

              <div class="form-group col-md-3" style="padding: 5px;margin: 0;">
                <label class="control-label">C/o</label>
                
                <input type="hidden" name="invoice_co_cusomers_id" id="invoice_co_cusomers_id" value="<?php if(isset($saleDetails->invoice_co_cusomers_id)) { echo $saleDetails->invoice_co_cusomers_id; }else { echo '0.00'; } ?>" readonly>
                <input type="text" class="form-control" id="invoice_co_customers_name" name="invoice_co_customers_name" placeholder="C/o" value="<?php if(isset($saleDetails->invoice_co_customers_name)) { echo $saleDetails->invoice_co_customers_name; } ?>" onKeypress="loadCustomer_co()" />
              </div>

            </div>

            <div class="col-md-12" style="padding-left: 0px;"> 
              
              <div class="form-group col-md-3" style="padding: 5px;margin: 0;">
                <!-- <label class="control-label">Customer Name</label> -->
                
                <input type="hidden" name="customers_id" id="customers_id" value="<?php if(isset($saleDetails->customers_id)) { echo $saleDetails->customers_id; } ?>"> 
                <input type="text" class="form-control" id="customers_name" name="customers_name" data-validate="required" data-message-required="This is required field." autocomplete="off" placeholder="Customer Name" value="<?php if(isset($saleDetails->customers_name)) { echo $saleDetails->customers_name; } ?>" onKeypress="loadCustomer()" />
              </div>

              <div class="form-group col-md-3" style="padding: 5px;margin: 0;">
                <!-- <label class="control-label">Customer mobile</label> -->
        
                <input type="text" class="form-control" id="customers_mobile" name="customers_mobile" data-validate="required" data-message-required="This is required field." placeholder="Customer Mobile" value="<?php if(isset($saleDetails->customers_mobile)) { echo $saleDetails->customers_mobile; }  ?>" />
              </div>

              <div class="form-group col-md-3" style="padding: 5px;margin: 0;">
                <!-- <label class="control-label">Customer Email</label> -->
        
                <input type="email" class="form-control" id="customers_email" name="customers_email"  placeholder="Customer Email" value="<?php if(isset($saleDetails->customers_email)) { echo $saleDetails->customers_email; } ?>" />
              </div>

              <div class="form-group col-md-3" style="padding: 5px;margin: 0;">
                <!-- <label class="control-label">Customer Email</label> -->
          
                <input type="text"  class="form-control" id="invoicecocustomers_percentage" name="invoicecocustomers_percentage"  placeholder="C/o Percentage" value="<?php if(isset($saleDetails->invoicecocustomers_percentage)) { echo $saleDetails->invoicecocustomers_percentage; } ?>" />
              </div>

            </div>

            <div class="col-md-12" id="div_item_search" style="padding-left: 0px;padding-right: 0px;">
              <hr>

              <input type="hidden" name="invoice_item_nogst_price" id="invoice_item_nogst_price">
              <input type="hidden" name="invoice_item_nogst_total" id="invoice_item_nogst_total">
              <input type="hidden" name="invoice_item_price_total" id="invoice_item_price_total">
              <input type="hidden" name="invoice_item_discount_price" id="invoice_item_discount_price"> 
              <input type="hidden" name="invoice_item_gst" id="invoice_item_gst">
              <input type="hidden" name="invoice_item_category_id" id="invoice_item_category_id">
              <input type="hidden" name="invoice_item_brand_id" id="invoice_item_brand_id">

              <div class="form-group col-md-3" style="padding: 5px;margin: 0;">
                <label class="control-label">Product Name</label>
                
                <input type="hidden" name="invoice_item_id" id="invoice_item_id" value=""> 

                <input type="text" class="form-control" id="invoice_item_name" name="invoice_item_name" autocomplete="off" placeholder="Product Name" onKeypress="loadProduct()" />
              </div>

              <div class="form-group col-md-2" style="padding: 5px;margin: 0;">
                <label class="control-label">Price</label>
                
                <input type="number" min="0" class="form-control" id="invoice_item_price" name="invoice_item_price"  autocomplete="off" placeholder="Poduct price" value="0.00" readonly />
              </div>

              <div class="form-group col-md-2" style="padding: 5px;margin: 0;">
                <label class="control-label">Discount(%)</label>
                
                <input type="number" min="0" max="100" class="form-control" id="invoice_item_discount" name="invoice_item_discount"  autocomplete="off" placeholder="0"  value="0.00" onchange="itemFiledsUpdate();" />
              </div>

              <div class="form-group col-md-1" style="padding: 5px;margin: 0;">
                <label class="control-label">Quantity</label>
                
                <input type="number" min="0" class="form-control" id="invoice_item_qty" name="invoice_item_qty"  autocomplete="off" placeholder="" value="1" onchange="itemFiledsUpdate();" />
              </div>

              <div class="form-group col-md-2" style="padding: 5px;margin: 0;">
                <label class="control-label">Line Total</label>
                
                <input type="number" min="0" class="form-control" id="invoice_item_total" name="invoice_item_total"  autocomplete="off" placeholder="Line total" value="0.00" readonly />
              </div>
              <div class="form-group col-md-2" style="padding: 5px;margin: 0;">
                <label class="control-label">Stock</label>
                
                <input type="number" min="0" class="form-control" id="invoice_item_stock" name="invoice_item_stock"  autocomplete="off" placeholder="Current Stock" value="0" readonly />
              </div>
              

                <input type="hidden" min="0" class="form-control" id="product_co_discount" readonly /><!-- 
                <input type="text" min="0" class="form-control" id="total_product_co_discount"  readonly /> -->
                <!-- <input type="hidden" min="0" class="form-control" id="product_rack"  readonly /> -->
              <div class="form-group col-md-2" style="margin: 0;padding-left: 6px;">
                <button type="button" style="margin-top: 0px;" class="btn btn-blue" onclick="itemAddToCart()">Add row</button>
              </div>

            </div>

        </div>
      
      </div>

      <!-- Payment Details Start -->
      <div class="panel panel-primary col-md-3" style="height: 252px;">
        <div class="panel-heading">
          <div class="panel-title">
            <strong>Payment Details</strong>
          </div>
          
          <div class="panel-options">
            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
            <!-- <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a> -->
          </div>
        </div>
        <div class="panel-body">
          <label class="control-label pull-left">Sub Total <span style="margin-left: 50px;">:</span></label><label class="control-label rtl pull-right" id="lbl_invoice_subtotal">₹0.00 </label>
          <input type="hidden" name="invoice_subtotal" id="invoice_subtotal" value="0.00">
          <br/>
          
          <label class="control-label pull-left">Tax Amount <span style="margin-left: 34px;">:</span></label><label class="control-label rtl pull-right" id="lbl_invoice_tax">₹0.00 </label>
          <input type="hidden" name="invoice_tax" id="invoice_tax" value="0.00">
          <br/>

          <label class="control-label pull-left">Discount <span style="margin-left: 50px;">:</span></label><label class="control-label rtl pull-right" id="lbl_invoice_discount">₹0.00 </label>
          <input type="hidden" name="invoice_discount" id="invoice_discount" value="0.00">
          <br/>

          <hr/>
          <label class="control-label pull-left">Grand Total <span style="margin-left: 37px;">:</span></label><label class="control-label rtl pull-right" id="lbl_invoice_total">₹0.00 </label>
          <input type="hidden" name="invoice_total" id="invoice_total" value="0.00">

        </div>
      </div>
      <!-- Payment Details End -->

      <!-- Invoice Items Start -->
      <div class="panel panel-primary col-md-12">
        <div class="panel-heading">
          <div class="panel-title">
            <strong>Invoice Items</strong>
          </div>
          
          <div class="panel-options">
            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
            <!-- <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a> -->
          </div>
        </div>
        <div class="panel-body" style="padding: 5px;margin: 0px;">
          <!-- Invoice items listing table -->
          <table class="table table-bordered col-md-12" style="margin: 0px;padding: 0px;color: #5a5757;" id="saleDetailsItems">
            <thead>
              <tr>
                <th class="text-center" width="0%">Item Name</th>
                <th class="text-center" width="10%">Price(inc.Tax)</th>
                <th class="text-center" width="10%">Discount(%)</th>
                <th class="text-center" width="15%">Discount Price</th>
                <th class="text-center" width="10%">Qty</th>
                <th class="text-center" width="20%">Line Total</th>
                <th class="text-center" width="5%">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if(count($invoiceProducts) >=0)
              {
                $global_item_counter = 1;
                //print_r($invoiceProducts);
                foreach ($invoiceProducts as $item) 
                {

                  $string = "";
                  $string .= "<tr>";
                  //$string .= '<input type="hidden" name="invoiceproducts_product_name[]" id="invoiceproducts_product_name_'.$global_item_counter.'" value="'.$item->invoiceproducts_product_name.'">';
              
                  $string .= '<input type="hidden" name="invoiceproducts_id[]" id="invoiceproducts_id_'.$global_item_counter.'" value="'.$item->invoiceproducts_id.'">';
                  
                  $string .= '<input type="hidden" name="invoiceproducts_created[]" id="invoiceproducts_created_'.$global_item_counter.'" value="'.$item->invoiceproducts_created.'">';
                  
                  $temp_date_validate = date('Y_m_d',strtotime($item->invoiceproducts_created));
                  $string .= '<input type="hidden" name="invoiceproducts_product_id[]" id="invoiceproducts_product_id_'.$global_item_counter.'" value="'.$item->invoiceproducts_product_id.'">';
                  
                  $string .= '<input type="hidden" name="invoiceproducts_product[]" id="invoiceproducts_product_id_'.$item->invoiceproducts_product_id.'_'.$temp_date_validate.'" value="'.$global_item_counter.'">';
                  
                  $string .= '<input type="hidden" name="invoiceproducts_category_id[]" id="invoiceproducts_category_id_'.$global_item_counter.'" value="'.$item->invoiceproducts_category_id.'">';
                  
                  $string .= '<input type="hidden" name="invoiceproducts_brand_id[]" id="invoiceproducts_brand_id_'.$global_item_counter.'" value="'.$item->invoiceproducts_brand_id.'">';
                  

                  

                  
                  $string .= '<input type="hidden" name="invoiceproducts_product_name[]" id="invoiceproducts_product_name_'.$global_item_counter.'" value="'.$item->invoiceproducts_product_name.'">';
                  $string .='<td>';
                  $string .=$item->invoiceproducts_product_name;
                  $string .='</td>';

                  $string .= '<input type="hidden" name="invoiceproducts_price[]" id="invoiceproducts_price_'.$global_item_counter.'" value="'.$item->invoiceproducts_price.'">';
                  $string .='<td class="text-center">';
                  $string .=$item->invoiceproducts_price;
                  $string .='</td>';

                  $string .= '<input type="hidden" name="invoiceproducts_nogst_price[]" id="invoiceproducts_nogst_price_'.$global_item_counter.'" value="'.$item->invoiceproducts_nogst_price.'">';
                  
                  $string .= '<input type="hidden" name="invoiceproducts_discount[]" id="invoiceproducts_discount_'.$global_item_counter.'" value="'.$item->invoiceproducts_discount.'">';
                  $string .='<td class="text-center">';
                  $string .=$item->invoiceproducts_discount.'%';
                  $string .='</td>';

                  $string .= '<input type="hidden" name="invoiceproducts_discountprice[]" id="invoiceproducts_discountprice_'.$global_item_counter.'" value="'.$item->invoiceproducts_discountprice.'">';
                  $string .='<td class="text-center">';
                  $string .=$item->invoiceproducts_discountprice;
                  $string .='</td>';

                  $string .= '<input type="hidden" name="invoiceproducts_qty[]" id="invoiceproducts_qty_'.$global_item_counter.'" value="'.$item->invoiceproducts_qty.'">';
                  $string .= '<input type="hidden" name="invoiceproducts_qty_old[]" id="invoiceproducts_qty_old_'.$global_item_counter.'" value="'.$item->invoiceproducts_qty.'">';
                  $string .='<td class="text-center" id="td_invoiceproducts_qty_'.$global_item_counter.'">';
                  $string .=$item->invoiceproducts_qty;
                  $string .='</td>';

                  $string .= '<input type="hidden" name="invoiceproducts_total[]" id="invoiceproducts_total_'.$global_item_counter.'" value="'.$item->invoiceproducts_total.'">';
                  $string .='<td class="text-center" id="td_invoiceproducts_total_'.$global_item_counter.'">';
                  $string .=$item->invoiceproducts_total;
                  $string .='</td>';
                    // $string .='<td class="text-center" id="td_invoiceproducts_total_'.$global_item_counter.'">';
                  // $string .=$item->invoiceproducts_total;
                  //$string .='</td>';

                  //   $string .= '<input type="hidden" name="invoiceproducts_nogst_total[]" id="invoiceproducts_nogst_total_'.$global_item_counter.'" value="'.$item->invoiceproducts_nogst_total.'">';
                  $string .= '<input type="hidden" name="invoiceproducts_nogst_total[]" id="invoiceproducts_nogst_total_'.$global_item_counter.'" value="'.$item->invoiceproducts_nogst_total.'">';

                  $string .= '<input type="hidden" name="invoiceproducts_price_total[]" id="invoiceproducts_price_total_'.$global_item_counter.'" value="'.$item->invoiceproducts_price_total.'">';

                  $string .= '<input type="hidden" name="product_co_discount[]" id="product_co_discount_'.$global_item_counter.'" value="'.$item->product_co_discount.'">';

                  $string .= '<input type="hidden" name="total_product_co_discount[]" id="total_product_co_discount_'.$global_item_counter.'" value="'.$item->invoiceproducts_codiscountprice.'">';
                  $string .='<td><div class="form-group col-md-2" style="margin: 0;padding-left: 6px;">';
  
                  // $string .='<button type="button" style="margin-top: 0px;" name="remove[]" id="remove_'.$global_item_counter.'" class="btn btn-blue" onclick="removeRow(this)">Remove</button>';
                  $string .='<button type="button" style="margin-top: 0px;" name="remove[]" id="remove_'.$global_item_counter.'" class="btn btn-danger btn-xs" onclick="removeRow(this)"><i class="entypo-cancel"></i></button>';

                  $string .='</div></td>';
                  
                  $string .= "</tr>";

                  echo $string;
                  $global_item_counter ++;
                }
              }
              else
              {
              ?>
                <tr>
                  <td class="text-center"colspan="6">***** Items Comes Here *****</td>
                </tr>
              <?php 
              }
              ?>
              
            </tbody>
          </table>
        </div>
      </div>
      <!-- Invoice Items End -->
      <div class="clearfix"></div>
      <!-- <div class="form-group" align="center">
        <button type="submit" class="btn btn-success">Save</button>
        <button type="reset" class="btn">Retest</button>
      </div> -->
    <!-- Payment Form End Herer -->
    </form>
    

    <?php 
    if($this->session->flashdata('success_msg')){

      $script ="";
      $script .= "<script type=\"text/javascript\">jQuery(document).ready(function($){";
      $script .= "var opts = {\"closeButton\": true,\"debug\": false,\"positionClass\": \"toast-top-right\",\"onclick\": null,\"showDuration\": \"300\",\"hideDuration\": \"1000\",\"timeOut\": \"5000\",\"xtendedTimeOut\": \"1000\",\"showEasing\": \"swing\",\"hideEasing\": \"linear\",\"showMethod\": \"fadeIn\",\"hideMethod\": \"fadeOut\"};";
      $script .= "toastr.success(\"".$this->session->flashdata('success_msg')."\",\"success\", opts);";
      $script .= "});</script>";
      echo $script;
      $this->session->unset_userdata('success_msg');

    } 
    ?>
    <script type="text/javascript">
      $("#saleDetailSave").click(function(){
        //$("#saleDetailSave").attr('disabled','disabled');
        var _temp_count = 0;
        $(":input[name^='invoiceproducts_price_total[]']").each(function() {
            _temp_count++;
        });
        if(_temp_count ==0)
        {
          alert('Please add atleast one item to save');
          $("#saleDetailPay").removeAttr("disabled");
          return;
        }
        $("#saleDetailSave").attr('disabled','disabled');
        $('#invoice_status_id').val('2');
        $("#saleDetail").submit();
      });

      //Payment button
      $("#saleDetailPay").click(function(){
        //$("#saleDetailPay").attr('disabled','disabled');
        var _temp_count = 0;
        $(":input[name^='invoiceproducts_price_total[]']").each(function() {
            _temp_count++;
        });
        if(_temp_count ==0)
        {
          alert('Please add atleast one item to Pay');
          $("#saleDetailPay").removeAttr("disabled");
          return;
        }
        $("#saleDetailPay").attr('disabled','disabled');
        $('#invoice_status_id').val('1');

        $("#saleDetail").submit();
      });
      $("#saleDetailReset").click(function(){
        $("#saleDetail").reset();
      });

      $(document).ready(function(){

        if($("#invoice_status_id").val() == '2')
        {
          $("#customers_name").attr('readonly','readonly');
          $("#customers_mobile").attr('readonly','readonly');
          $("#customers_email").attr('readonly','readonly');
          $("#invoice_co_customers_name").attr('readonly','readonly');
          $("#invoicecocustomers_percentage").attr('readonly','readonly');

        }
      });
    </script>
    
