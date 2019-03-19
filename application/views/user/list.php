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
                        <th>Customer Name</th>
                        <th>Customer Middle Name</th>
                        <th>Customer Queue Name</th>
                        <th>Customer Email</th>
                        <th>Customer Phone</th>
                        <th>Customer User Address</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($users as $user) {
                    	# code...users
                    
                      echo '<tr>
                        <td>'.$user->first_name.'</td>
                        <td>'.$user->middle_name.'</td>
                        <td>'.$user->last_name.'</td>
                        <td>'.$user->user_email.'</td>
                        <td>'.$user->user_phone.'</td>
                        <td>'.$user->user_address.'</td>
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