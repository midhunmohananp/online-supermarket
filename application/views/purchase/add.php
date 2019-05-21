
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
            </div>
            <div class="box-body">
            <?php echo form_open_multipart('purchase-insert',['id'=>'formPurchaseAdd','name'=>'formPurchaseAdd','role'=>'form'])?>
                    <!-- text input -->
                    <div class="row">
                    <div class="col-md-6">
                      <label>Product Name</label>
                      <select class="form-control" id="txtProductID" name="txtProductID">
                        <?php
                        if (isset($products) == TRUE) {
                          foreach ($products as $product) {
                            echo '<option value="'.$product->product_ID.'">'.$product->product_name.'</option>';
                          }
                        }
                        ?>

                      </select>
                    </div>
                    
                    <div class="col-md-6">
                      <label>Product Quantity</label>
                      <input type="text" id="txtProductQty" name="txtProductQty" class="form-control" placeholder="Enter ..."/>
                    </div>
                   
                    
                    <div class="col-md-6">
                      <label>Product Sku</label>
                      <input type="text" id="txtProductSKU" name="txtProductSKU" class="form-control" placeholder="Enter ..."/>
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
                      <input type="text" id="txtProductUnitPrice" name="txtProductUnitPrice" class="form-control" placeholder="Enter ..."/>
                    </div>
                    <div class="col-md-6">
                      <label>Product Purchase Rate</label>
                      <input type="text" id="txtProductPurchasePrice" name="txtProductPurchasePrice" class="form-control" placeholder="Enter ..."/>
                    </div>
                     </div>

                    
                    </div><!-- /.box-body -->
            <div class="box-footer">
              <!-- Footer --><button type="submit" id="btnPurchaseAdd" name="btnPurchaseAdd" class="btn btn-primary">Save</button>
            </div><!-- /.box-footer-->
            <?php echo form_close();?>
          </div><!-- /.box -->

        </section><!-- /.content -->
        </div>
       