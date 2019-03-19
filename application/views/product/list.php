  <section class="content">
  <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <!-- <h3 class="box-title">Hover Data Table</h3> -->
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="table-responsive">
                  <table id="productList" name="productList" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Product Name</th>
                        <th>Product Description</th>
                        <th>Product HSN</th>
                        <th>Product Color</th>
                        <th>Product Size</th>
                        <th>Product Category</th>
                        <th>Product Unit Of Meassure</th>
                        <th>Product Image</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($products as $product) {
                    	# code...
                    
                      echo '<tr>
                        <td>'.$product->product_name.'</td>
                        <td>'.$product->product_description.'</td>
                        <td>'.$product->product_hsn.'</td>
                        <td>'.$product->product_color.'</td>
                        <td>'.$product->product_size.'</td>
                        <td>'.$product->category_ID.'</td>
                        <td>'.$product->uom_ID.'</td>
                        <td><a href="'.base_url().'uploads/'.$product->product_image.'" target="_blank">'.$product->product_image.'</td>
                      </tr>';

                      }
                      ?>
                      </tbody>
                      </table>
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>

  </section>