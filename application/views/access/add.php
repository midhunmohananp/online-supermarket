
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <!-- <h3 class="box-title">Dashboard</h3> -->

            </div>
            <div class="box-body">
            <?php echo form_open('access-insert',['id'=>'formAccessAdd','name'=>'formAccessAdd','role'=>'form'])?>
                    <!-- text input -->
                    <div class="form-group">
                      <label>Access Name</label>
                      <input type="text" id="txtAccessName" name="txtAccessName" class="form-control" placeholder="Enter ..."/>
                    </div>
                     <div class="form-group">
                      <label>Access Value</label>
                      <input type="text" id="txtAccessValue" name="txtAccessValue" class="form-control" placeholder="Enter ..."/>
                    </div>

            </div><!-- /.box-body -->
            <div class="box-footer">
              <!-- Footer --><button type="submit" id="btnAccessAdd" name="btnAccessAdd" class="btn btn-primary">Save</button>
            </div><!-- /.box-footer-->
            <?php echo form_close();?>
          </div><!-- /.box -->

        </section><!-- /.content -->
        </div>