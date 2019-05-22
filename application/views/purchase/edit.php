
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
            </div>
            <div class="box-body">
            <?php echo form_open_multipart('purchase-update/'.$stock->store_ID,['id'=>'formPurchaseEdit','name'=>'formPurchaseEdit','role'=>'form'])?>
                    <!-- text input -->
                    <div class="row">
                    <div class="col-md-6">
                      <label>Product Name</label>
                      <label class="form-control"><?php echo $stock->product_name;?></label>
                    </div>
                    
                    <div class="col-md-6">
                      <label>Product Quantity</label>
                      <input type="text" id="txtProductQty" name="txtProductQty" class="form-control" placeholder="Enter ..." value="<?php echo $stock->quantity;?>" />
                    </div>
                   
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                      <label>Product Sku</label>
                      <input type="text" id="txtProductSKU" name="txtProductSKU" class="form-control" placeholder="Enter ..." value="<?php echo $stock->sku; ?>" disabled/>
                    </div>
                    <!-- textarea -->
                    </div>
                    <div class="row">
                     <div class="col-md-6">
                      <label>Product Unit Of Meassure</label>
                     <select class="form-control" id="txtProductUOM" name="txtProductUOM">
                        <?php
                        if (isset($units) == TRUE) {
                          foreach ($units as $unit) {
                            echo '<option value="'.$unit->unit_ID.'">'.$unit->unit_name.'</option>';
                          }
                        }
                        ?>

                      </select>
                    </div>
                    <div class="col-md-6">
                      <label>Product Tax</label>
                     <select class="form-control" id="txtProductTax" name="txtProductTax">
                        <?php
                        if (isset($taxs) == TRUE) {
                          foreach ($taxs as $tax) {
                            echo '<option value="'.$tax->tax_ID.'">'.$tax->tax_name.'</option>';
                          }
                        }
                        ?>

                      </select>
                    </div>
                     </div>
                    <div class="row">
                    <div class="col-md-6">
                      <label>Product Unit Price</label>
                      <input type="text" id="txtProductUnitPrice" name="txtProductUnitPrice" class="form-control" placeholder="Enter ..." value="<?php echo $stock->unit_price; ?>" />
                    </div>
                    <div class="col-md-6">
                      <label>Product Purchase Rate</label>
                      <input type="text" id="txtProductPurchasePrice" name="txtProductPurchasePrice" class="form-control" placeholder="Enter ..." value="<?php echo $stock->purchase_rate; ?>" />
                    </div>
                     </div>

                    
                    </div><!-- /.box-body -->
            <div class="box-footer">
              <!-- Footer --><button type="submit" id="btnPurchaseEdit" name="btnPurchaseEdit" class="btn btn-primary">Save</button>
            </div><!-- /.box-footer-->
            <?php echo form_close();?>
          </div><!-- /.box -->

        </section><!-- /.content -->
        </div>
       