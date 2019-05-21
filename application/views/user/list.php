  <section class="content">
  <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <!-- <h3 class="box-title">Hover Data Table</h3> -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="productList" name="productList" class="table table-bordered table-hover" class="table table-bordered table-hover table-responsive">
                    <thead>
                      <tr>
                        <th>User Name</th>
                        <th>User Middle Name</th>
                        <th>User Queue Name</th>
                        <th>User Email</th>
                        <th>User Phone</th>
                        <th>User User Address</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    if($users == true) {
                    foreach ($users as $user) {
                    	# code...users
                    
                      echo '<tr>
                        <td>'.$user->first_name.'</td>
                        <td>'.$user->middle_name.'</td>
                        <td>'.$user->last_name.'</td>
                        <td>'.$user->user_email.'</td>
                        <td>'.$user->user_phone.'</td>
                        <td>'.$user->user_address.'</td>
                        <td><a href="'.site_url(['user-edit',$user->user_ID]).'"><button class="btn btn-sm btn-primary">Edit</button></a> <button class="btn btn-sm btn-danger" data-toggle="modal" data-userid="'.$user->user_ID.'" data-target="#modalUserDelete">Delete</button></td>
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
  <div class="modal fade" id="modalUserDelete" tabindex="-1" role="dialog" aria-labelledby="modalUserDeleteLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalUserDeleteLabel">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo form_open_multipart('user-delete',['id'=>'formUserDelete','name'=>'formUserDelete','role'=>'form'])?>
      <div class="modal-body">
        Are you sure want to delete?
        <input type="hidden" name="txtUserId" id="txtUserId">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="save" class="btn btn-danger">Delete</button>
      </div>
      <?php echo form_close();?>
    </div>
  </div>
</div>