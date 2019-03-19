  <section class="content">
  <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <!-- <h3 class="box-title">Hover Data Table</h3> -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="brandList" name="brandList" class="table table-bordered table-hover table-responsive">
                    <thead>
                      <tr>
                        <th>Brand Name</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($brands as $brand) {
                    	# code...
                    
                      echo '<tr>
                        <td>'.$brand->brand_name.'</td>
                        <td><a href="'.site_url(['brand-edit',$brand->brand_ID]).'"><button class="btn btn-sm btn-primary">Edit</button></a> <button class="btn btn-sm btn-danger">Delete</button></td>
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