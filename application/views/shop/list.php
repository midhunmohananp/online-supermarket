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
                    foreach ($shops as $shop) {
                    	# code...
                    
                      echo '<tr>
                        <td>'.$shop->shop_name.'</td>
                        <td>'.$shop->shop_location.'</td>
                        <td>'.$shop->shop_address.'</td>
                        <td><a href="'.site_url(['shop-edit',$shop->shop_ID]).'"><button class="btn btn-sm btn-primary">Edit</button></a> <button class="btn btn-sm btn-danger">Delete</button></td>
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

  </section>
  <!-- modals -->