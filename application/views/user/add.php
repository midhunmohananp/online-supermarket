
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <!-- <h3 class="box-title">Dashboard</h3> -->
<!--               <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div> -->
            </div>
            
            <?php echo form_open('user-insert',['id'=>'formUserAdd','name'=>'formUserAdd','role'=>'form'])?>
            <div class="box-body">
                    <!-- text input -->
                    <div class="form-group">
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
                    <div class="form-group">
                      <label>User Name</label>
                      <input type="text" id="txtUserName" name="txtUserName" class="form-control" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" id="txtUserPassword" name="txtUserPassword" class="form-control" placeholder="Enter ..."/>
                    </div>
                   <div class="form-group">
                      <label>Confirm Password</label>
                      <input type="password" id="txtUserConfirmPassword" name="txtUserConfirmPassword" class="form-control" placeholder="Enter ..."/>
                    </div>           
   
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" id="txtUserFirstName" name="txtUserFirstName" class="form-control" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group">
                      <label>Middle  Name</label>
                      <input type="text" id="txtUserMiddleName" name="txtUserMiddleName" class="form-control" placeholder="Enter ..."/>
                    </div>
                      <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" id="txtUserLastName" name="txtUserLastName" class="form-control" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group">
                      <label>Email Address</label>
                      <input type="text" id="txtUserEmail" name="txtUserEmail" class="form-control" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group">
                      <label>Phone Number</label>
                      <input type="text" id="txtUserPhone" name="txtUserPhone" class="form-control" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" id="txtUserAddress" name="txtUserAddress" class="form-control" placeholder="Enter ..."/>
                    </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
              <!-- Footer --><button type="submit" id="btnUserAdd" name="btnUserAdd" class="btn btn-primary">Save</button>
            </div><!-- /.box-footer-->
            <?php echo form_close();?>
          </div><!-- /.box -->

        </section><!-- /.content -->
        </div>