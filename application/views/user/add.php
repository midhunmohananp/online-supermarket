
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
            </div>
            
            <?php echo form_open('user-insert',['id'=>'formUserAdd','name'=>'formUserAdd','role'=>'form'])?>
            <div class="box-body">
                    <!-- text input -->
                    <div class="row">
                    <div class="col-md-6">
                      <label>User Type</label>
                     <select class="form-control" id="txtUserType" name="txtUserType">
                        <?php
                        if(isset($user_types)){
                          foreach ($user_types as $user_type) {
                            echo '<option value="'.$user_type->user_type_ID.'">'.$user_type->user_type_name.'</option>';
                          }
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                    <div class="row">
                    <div class="col-md-6">
                      <label>User Name</label>
                      <input type="text" id="txtUserName" name="txtUserName" class="form-control" placeholder="Enter ..."/>
                    </div>
                    <div class="col-md-6">
                      <label>Password</label>
                      <input type="password" id="txtUserPassword" name="txtUserPassword" class="form-control" placeholder="Enter ..."/>
                    </div>
                  </div>
                  <div class="row">
                   <div class="col-md-6">
                      <label>Confirm Password</label>
                      <input type="password" id="txtUserConfirmPassword" name="txtUserConfirmPassword" class="form-control" placeholder="Enter ..."/>
                    </div>           
   
                    <div class="col-md-6">
                      <label>First Name</label>
                      <input type="text" id="txtUserFirstName" name="txtUserFirstName" class="form-control" placeholder="Enter ..."/>
                    </div>
                    </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label>Middle  Name</label>
                      <input type="text" id="txtUserMiddleName" name="txtUserMiddleName" class="form-control" placeholder="Enter ..."/>
                    </div>
                      <div class="col-md-6">
                      <label>Last Name</label>
                      <input type="text" id="txtUserLastName" name="txtUserLastName" class="form-control" placeholder="Enter ..."/>
                    </div>
                    </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label>Email Address</label>
                      <input type="text" id="txtUserEmail" name="txtUserEmail" class="form-control" placeholder="Enter ..."/>
                    </div>
                    <div class="col-md-6">
                      <label>Phone Number</label>
                      <input type="text" id="txtUserPhone" name="txtUserPhone" class="form-control" placeholder="Enter ..."/>
                    </div>
                    </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label>Address</label>
                      <input type="text" id="txtUserAddress" name="txtUserAddress" class="form-control" placeholder="Enter ..."/>
                    </div>
                  </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
              <!-- Footer --><button type="submit" id="btnUserAdd" name="btnUserAdd" class="btn btn-primary">Save</button>
            </div><!-- /.box-footer-->
            <?php echo form_close();?>
          </div><!-- /.box -->

        </section><!-- /.content -->
        </div>