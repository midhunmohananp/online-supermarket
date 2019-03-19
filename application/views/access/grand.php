
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <!-- <h3 class="box-title">Dashboard</h3> -->

            </div>
            <div class="box-body">
            <?php echo form_open('access-grand-insert',['id'=>'formGrandAccessAdd','name'=>'formGrandAccessAdd','role'=>'form'])?>
                    <!-- text input -->
                    <div class="form-group">
                      <label>Access Name</label>
                                            <select class="form-control" id="txtAccessName" name="txtAccessName">
                        <?php
                        if (isset($access_types) == TRUE) {
                          foreach ($access_types as $access) {
                            echo '<option value="'.$access->access_ID.'">'.$access->access_name.'</option>';
                          }
                        }
                        ?>

                      </select>
                    </div>
                    <div class="form-group">
                      <label>User Type</label>
                      <select class="form-control" id="txtUserType" name="txtUserType">
                        <?php
                        if (isset($user_types) == TRUE) {
                          foreach ($user_types as $type) {
                            echo '<option value="'.$type->user_type_ID.'">'.$type->user_type_name.'</option>';
                          }
                        }
                        ?>

                      </select>
                    </div>

            </div><!-- /.box-body -->
            <div class="box-footer">
              <!-- Footer --><button type="submit" id="btnGrandAccessAdd" name="btnGrandAccessAdd" class="btn btn-primary">Save</button>
            </div><!-- /.box-footer-->
            <?php echo form_close();?>
          </div><!-- /.box -->

        </section><!-- /.content -->
        </div>