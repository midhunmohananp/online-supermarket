  <section class="content">
  <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <!-- <h3 class="box-title">Hover Data Table</h3> -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="taxList" name="taxList" class="table table-bordered table-hover table-responsive">
                    <thead>
                      <tr>
                        <th>Tax Name</th>
                        <th>Tax Rate (%)</th>
                        <th>Tax Name</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($taxs as $tax) {
                    	# code...
                    
                      echo '<tr>
                        <td>'.$tax->tax_name.'</td>
                        <td>'.$tax->tax_rate.'</td>
                        <td><a href="'.site_url(['tax-edit',$tax->tax_ID]).'"><button class="btn btn-sm btn-primary">Edit</button></a> <button class="btn btn-sm btn-danger">Delete</button></td>
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