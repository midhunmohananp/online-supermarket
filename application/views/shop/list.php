  <section class="content">
  <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <!-- <h3 class="box-title">Hover Data Table</h3> -->
                </div><!-- /.box-header -->
                <div class="box-body">

                  <table id="shopList" name="shopList" class="table table-bordered table-hover table-responsive">
                    <thead>
                      <tr>
                        <th>Shop Name</th>
                        <th>Shop Location</th>
                        <th>Shop Address</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    if($shops == true) {
                      foreach ($shops as $shop) {
                      	# code...
                      
                        echo '<tr>
                          <td>'.$shop->shop_name.'</td>
                          <td>'.$shop->shop_location.'</td>
                          <td>'.$shop->shop_address.'</td>
                          <td><a href="'.site_url(['shop-edit',$shop->shop_ID]).'"><button class="btn btn-sm btn-primary">Edit</button></a> <button class="btn btn-sm btn-danger" data-toggle="modal" data-shopid="'.$shop->shop_ID.'" data-target="#modalShopDelete">Delete</button></td>
                        </tr>';

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

  </section>
  <!-- modals -->
  <div class="modal fade" id="modalShopDelete" tabindex="-1" role="dialog" aria-labelledby="modalShopDeleteLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalShopDeleteLabel">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo form_open_multipart('shop-delete',['id'=>'formShopDelete','name'=>'formShopDelete','role'=>'form'])?>
      <div class="modal-body">
        Are you sure want to delete?
        <input type="hidden" name="txtShopId" id="txtShopId">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="save" class="btn btn-danger">Delete</button>
      </div>
      <?php echo form_close();?>
    </div>
  </div>
</div>