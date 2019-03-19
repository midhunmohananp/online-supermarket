
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <!-- <h3 class="box-title">Dashboard</h3> -->
<!--               <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div> -->
            </div>
            <div class="box-body">
            <?php echo form_open_multipart('product-insert',['id'=>'formProductAdd','name'=>'formProductAdd','role'=>'form'])?>
                    <!-- text input -->
                    <div class="form-group">
                      <label>Product Name</label>
                      <input type="text" id="txtProductName" name="txtProductName" class="form-control" placeholder="Enter ..."/>
                    </div>
                   
                    <div class="form-group">
                      <label>Product Description</label>
                      <input type="text" id="txtProductDescription" name="txtProductDescription" class="form-control" placeholder="Enter ..."/>
                    </div>
                <!--     <div class="form-group">
                      <label>Product Sku</label>
                      <input type="text" id="txtProductSKU" name="txtProductSKU" class="form-control" placeholder="Enter ..."/>
                    </div> -->
                    <!-- textarea -->
                    <div class="form-group">
                      <label>Product HSN</label>
                      <input type="text" id="txtProductHSN" name="txtProductHSN" class="form-control" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group">
                      <label>Product Color</label>
                      <input type="text" id="txtProductColor" name="txtProductColor" class="form-control" placeholder="Enter ..."/>
                    </div>
                     <div class="form-group">
                      <label>Product Size</label>
                      <input type="text" id="txtProductSize" name="txtProductSize" class="form-control" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group">
                      <label>Product Category</label>
                     <select class="form-control" id="txtProductCategory" name="txtProductCategory">
                        <?php
                        if (isset($categories) == TRUE) {
                          foreach ($categories as $category) {
                            echo '<option value="'.$category->category_ID.'">'.$category->category_name.'</option>';
                          }
                        }
                        ?>

                      </select>
                    </div>
                     <div class="form-group">
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
                    
<?php /*<!--                      <div class="form-group">
                      <label>Purchase Rate</label>
                     <input type="text" id="txtProductRate" name="txtProductRate" class="form-control" placeholder="Enter ..."/>
                    </div>
                     <div class="form-group">
                      <label>Product Unit Price(Selling Price)</label>
                      <input type="text" id="txtProductUnitPrice" name="txtProductUnitPrice" class="form-control" placeholder="Enter ..."/>
                    </div>    
                     <div class="form-group">
                      <label>Product Tax %</label>
                    <select class="form-control" id="txtProductTAX" name="txtProductTAX">
                        <?php
                        if (isset($taxs) == TRUE) {
                          foreach ($taxs as $tax) {
                            echo '<option value="'.$tax->tax_ID.'">'.$tax->tax_name.'</option>';
                          }
                        }
                        ?>

                      </select>
                    </div>                    
                     <div class="form-group">
                      <label>Product Quntity</label>
                      <input type="text" id="txtProductQuantity" name="txtProductQuantity" class="form-control" placeholder="Enter ..."/>
                    </div> -->*/?>
                    <div class="form-group">
                      <label>Product Image</label>
<input type="file" name="productFile" id="productFile" size="20" class="form-control"/>                    </div>
                    </div><!-- /.box-body -->
            <div class="box-footer">
              <!-- Footer --><button type="submit" id="btnProductAdd" name="btnProductAdd" class="btn btn-primary">Save</button>
            </div><!-- /.box-footer-->
            <?php echo form_close();?>
          </div><!-- /.box -->

        </section><!-- /.content -->
        </div>
       