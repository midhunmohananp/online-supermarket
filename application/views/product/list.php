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
                        <th>Product HSN</th>                        
                        <th>Product Category</th>
                        <th>Product Unit Of Meassure</th>
                        <th>Product Color</th>
                        <th>Product Size</th>
                        <th>Product Image</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    if($products == true) {
                    foreach ($products as $product) {
                    	# code...
                    
                      echo '<tr>
                        <td>'.$product->product_name.'</td>
                        <td>'.$product->product_hsn.'</td>
                        <td>'.$product->category_name.'</td>
                        <td>'.$product->unit_name.'</td>
                        <td>'.$product->product_color.'</td>
                        <td>'.$product->product_size.'</td>';
                      echo '<td>';
                      if($product->product_image == true) {
                        echo '<a href="'.base_url().'uploads/'.$product->product_image.'" target="_blank"> <button class="btn btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i></button></a>';
                      }
                      echo  '</td>';
                      echo  '<td><a href="'.site_url(['product-edit',$product->product_ID]).'"><button class="btn btn-sm btn-primary">Edit</button></a> <button class="btn btn-sm btn-danger" data-toggle="modal" data-productid="'.$product->product_ID.'" data-target="#modalProductDelete">Delete</button></td>';
                      echo  '</tr>';

                      }
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
    <!-- modals -->
  <div class="modal fade" id="modalProductDelete" tabindex="-1" role="dialog" aria-labelledby="modalProductDeleteLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalProductDeleteLabel">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo form_open_multipart('product-delete',['id'=>'formProductDelete','name'=>'formProductDelete','role'=>'form'])?>
      <div class="modal-body">
        Are you sure want to delete?
        <input type="hidden" name="txtProductID" id="txtProductID">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="save" class="btn btn-danger">Delete</button>
      </div>
      <?php echo form_close();?>
    </div>
  </div>
</div>
