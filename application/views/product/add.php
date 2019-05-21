
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
            </div>
            <div class="box-body">
            <?php echo form_open_multipart('product-insert',['id'=>'formProductAdd','name'=>'formProductAdd','role'=>'form'])?>
                    <!-- text input -->
                    <div class="row">
                      <div class="col-md-6">
                        <label>Product Name</label>
                        <input type="text" id="txtProductName" name="txtProductName" class="form-control" placeholder="Enter ..."/>
                      </div>                   
                      <div class="col-md-6">
                        <label>Product HSN</label>
                        <input type="text" id="txtProductHSN" name="txtProductHSN" class="form-control" placeholder="Enter ..."/>
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
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
                    <div class="col-md-6">
                      <label>Product Brand</label>
                     <select class="form-control" id="txtProductBrand" name="txtProductBrand">
                        <?php
                        if (isset($brands) == TRUE) {
                          foreach ($brands as $brand) {
                              echo '<option value="'.$brand->brand_ID.'">'.$brand->brand_name.'</option>';
                          }
                        }
                        ?>

                      </select>
                    </div>
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
                  </div>
                    <div class="row">
                     <div class="col-md-6">
                      <label>Product Color</label>
                      <input type="text" id="txtProductColor" name="txtProductColor" class="form-control" placeholder="Enter ..."/>
                    </div>
                     <div class="col-md-6">
                      <label>Product Size</label>
                      <input type="text" id="txtProductSize" name="txtProductSize" class="form-control" placeholder="Enter ..."/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label>Product Description</label>
                      <input type="text" id="txtProductDescription" name="txtProductDescription" class="form-control" placeholder="Enter ..."/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                  <label>Product Image</label>
                  <input type="file" name="productFile" id="productFile" size="20" class="form-control"/>                    </div>
                  </div>
                    </div><!-- /.box-body -->
            <div class="box-footer">
              <!-- Footer --><button type="submit" id="btnProductAdd" name="btnProductAdd" class="btn btn-primary">Save</button>
            </div><!-- /.box-footer-->
            <?php echo form_close();?>
          </div><!-- /.box -->

        </section><!-- /.content -->
        </div>
       