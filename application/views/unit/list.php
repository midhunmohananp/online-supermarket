  <section class="content">
  <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <!-- <h3 class="box-title">Hover Data Table</h3> -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="productList" name="productList" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Unit Name</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($units as $unit) {
                    	# code...
                    
                      echo '<tr>
                        <td>'.$unit->unit_name.'</td>
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