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
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Customer email</th>
                        <th>Customer phone</th>
                        <th>Customer Whatsapp</th>
                        <th>Customer Gender</th>
                        <th>Customer Dob</th>
                        <th>Customer Occupation</th>
                        <th>Customer Address</th>
                        <th>Customer Landmark</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($customers as $customer) {
                    	# code...
                    
                      echo '<tr>
                        <td>'.$customer->first_name.'</td>
                        <td>'.$customer->middle_name.'</td>
                        <td>'.$customer->last_name.'</td>
                        <td>'.$customer->email.'</td>
                        <td>'.$customer->phone.'</td>
                        <td>'.$customer->whatsapp.'</td>
                        <td>'.$customer->gender.'</td>
                        <td>'.$customer->dob.'</td>
                        <td>'.$customer->occupation.'</td>
                        <td>'.$customer->address.'</td>
                        <td>'.$customer->landmark.'</td>
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