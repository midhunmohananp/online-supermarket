  <section class="content">
  <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <!-- <h3 class="box-title">Hover Data Table</h3> -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="customerList" name="customerList" class="table table-bordered table-hover table-responsive">
                    <thead>
                      <tr>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Customer email</th>
                        <th>Customer phone</th>
                        <th>Customer Whatsapp</th>
                        <th>Customer Gender</th>
                        <th>Customer Address</th>
                        <th>Actions</th>
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
                        <td>'.$customer->address.'</td>
                        <td><a href="'.site_url(['customer-edit',$customer->customer_ID]).'"><button class="btn btn-sm btn-primary">Edit</button></a> <button class="btn btn-sm btn-danger" data-toggle="modal" data-customerid="'.$customer->customer_ID.'" data-target="#modalCustomerDelete">Delete</button></td>
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
  <div class="modal fade" id="modalCustomerDelete" tabindex="-1" role="dialog" aria-labelledby="modalCustomerDeleteLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCustomerDeleteLabel">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo form_open_multipart('customer-delete',['id'=>'formCustomerDelete','name'=>'formCustomerDelete','role'=>'form'])?>
      <div class="modal-body">
        Are you sure want to delete?
        <input type="hidden" name="txtCustomerId" id="txtCustomerId">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="save" class="btn btn-danger">Delete</button>
      </div>
      <?php echo form_close();?>
    </div>
  </div>
</div>