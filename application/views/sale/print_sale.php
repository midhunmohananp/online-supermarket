
<!-- Main content -->
<section class="content">
<section class="invoice">
          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                <i class="fa fa-globe"></i> <?php echo $shop->shop_name;?>
                <small class="pull-right">Date: <?php echo date('d/m/Y',strtotime($invoice->date_created));?></small>
              </h2>
            </div><!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
              From
              <address>
                <strong><?php echo $shop->shop_name;?></strong><br>
                <?php echo $shop->shop_address;?><br>
                <?php echo $shop->shop_location;?><br>
                Email: info@<?php echo $shop->shop_name;?>.com
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              To
              <address>
                <strong><?php echo $customer->first_name;?>&nbsp;<?php echo $customer->middle_name;?>&nbsp;<?php echo $customer->last_name;?></strong><br>
                <?php echo $customer->address;?><br/>
                Phone: <?php echo $customer->phone;?><br/>
                Email: <?php echo $customer->email;?>
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <b>Invoice #<?php echo $invoice->invoice_ID;?></b><br/>
              <br/>
              <b>Order ID:</b><?php echo $invoice->invoice_number;?><br/>
              <b>Account:</b> 968-34567
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Serial #</th>
                    <th>Product</th>
                    <th>HSN/SAC</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Value of Supply</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    if($items == true) {
                      $i=0;
                      $tax_amount=0.00;
                      foreach ($items as $item) {
                        $i++;
                        $tax_amount = $tax_amount+$item->product_tax_amount;
                        echo '
                          <tr>                            
                            <td>'.$i.'</td>
                            <td>'.$item->product_name.'</td>
                            <td>'.$item->product_hsn.'</td>
                            <td>'.$item->product_quantity.'</td>
                            <td>'.$item->product_amount.'</td>
                            <td>'.$item->product_discount.'</td>
                            <td>'.($item->product_amount - $item->product_discount)*$item->product_quantity.'</td>
                          </tr>
                        ';
                      }
                    }  
                  ?>
                </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-xs-6">
            </div>
            <div class="col-xs-6">
              <!-- <p class="lead">Amount Due 2/22/2014</p> -->
              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <th style="width:50%">Subtotal:</th>
                    <td>₹<?php echo $invoice->total_amount;?></td>
                  </tr>
                  <tr>
                    <th style="width:50%">CGST:</th>
                    <td>₹<?php echo $tax_amount;?></td>
                  </tr>
                  <tr>
                    <th style="width:50%">SGST :</th>
                    <td>₹<?php echo $tax_amount;?></td>
                  </tr>
                  <tr>
                    <th style="width:50%">Discount:</th>
                    <td>₹<?php echo $invoice->discount_amount;?></td>
                  </tr>
                  <tr>
                    <th>Total:</th>
                    <td>₹<?php echo $invoice->net_amount;?></td>
                  </tr>
                </table>
              </div>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
              <!-- <a href="invoice-print.html" target="_blank" class="btn btn-default pull-right"><i class="fa fa-print"></i> Print</a> -->
              <!-- <button class="btn btn-icon btn-success pull-right" id="btnInvoicePrint" name="btnInvoicePrint">Print</button> -->
              <a href="javascript:window.print();" class="btn btn-success pull-right">
              Print Invoice
            </a>
            </div>
          </div>
        </section>
</section>
</div>

