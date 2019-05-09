  <section class="content">
  <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <!-- <h3 class="box-title">Hover Data Table</h3> -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="unitList" name="unitList" class="table table-bordered table-hover table-responsive">
                    <thead>
                      <tr>
                        <th>Unit Name</th>
                        <th>Unit Symbol</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($units as $unit) {
                    	# code...
                    
                      echo '<tr>
                        <td>'.$unit->unit_name.'</td>
                        <td>'.$unit->unit_symbol.'</td>
                        <td><a href="'.site_url(['unit-edit',$unit->unit_ID]).'"><button class="btn btn-sm btn-primary">Edit</button></a> <button class="btn btn-sm btn-danger">Delete</button></td>
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