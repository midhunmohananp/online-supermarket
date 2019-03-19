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
                        <th>Tax Name</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($taxs as $tax) {
                    	# code...
                    
                      echo '<tr>
                        <td>'.$tax->tax_name.'</td>
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