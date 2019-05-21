  <section class="content">
  <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <!-- <h3 class="box-title">Hover Data Table</h3> -->
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="table-responsive">
                  <table id="purchaseList" name="purchaseList" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Product SKU</th>
                        <th>Product Name</th>
                        <th>Product HSN</th>                        
                        <th>Product Category</th>                        
                        <th>Tax Name</th>
                        <th>Tax(%)</th>
                        <th>Product Unit Of Meassure</th>
                        <th>Stock Quantity </th>
                        <th>Purchase rate </th>
                        <th>Unit Price </th>
                        <th>Entry Date </th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    if($stocks == true) {
                    foreach ($stocks as $stock) {
                    	# code...
                    
                      echo '<tr>
                        <td>'.$stock->sku.'</td>
                        <td>'.$stock->product_name.'</td>
                        <td>'.$stock->product_hsn.'</td>
                        <td>'.$stock->category_name.'</td>
                        <td>'.$stock->tax_name.'</td>
                        <td>'.$stock->unit_name.'</td>
                        <td>'.$stock->tax_rate.'</td>
                        <td>'.$stock->quantity.'</td>
                        <td>'.$stock->purchase_rate.'</td>
                        <td>'.$stock->unit_price.'</td>                      
                        <td>'.$stock->stock_date_created.'</td>
                        ';
                      echo  '<td><a href="'.site_url(['purchase-edit',$stock->store_ID]).'"><button class="btn btn-sm btn-primary">Edit</button></a> <button class="btn btn-sm btn-danger" data-toggle="modal" data-storeid="'.$stock->store_ID.'" data-target="#modalPurchaseDelete">Delete</button></td>';
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
  <div class="modal fade" id="modalPurchaseDelete" tabindex="-1" role="dialog" aria-labelledby="modalPurchaseDeleteLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalPurchaseDeleteLabel">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo form_open_multipart('purchase-delete',['id'=>'formPurchaseDelete','name'=>'formPurchaseDelete','role'=>'form'])?>
      <div class="modal-body">
        Are you sure want to delete?
        <input type="hidden" name="txtStoreID" id="txtStoreID">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="save" class="btn btn-danger">Delete</button>
      </div>
      <?php echo form_close();?>
    </div>
  </div>
</div>
