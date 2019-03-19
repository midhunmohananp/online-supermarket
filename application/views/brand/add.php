
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <!-- <h3 class="box-title">Dashboard</h3> -->

            </div>
            <div class="box-body">
            <?php echo form_open('brand-insert',['id'=>'formBrandAdd','name'=>'formBrandAdd','role'=>'form'])?>
                    <!-- text input -->
                    <div class="form-group">
                      <label>Brand Name</label>
                      <input type="text" id="txtBrandName" name="txtBrandName" class="form-control" placeholder="Enter ..."/>
                    </div>

            </div><!-- /.box-body -->
            <div class="box-footer">
              <!-- Footer --><button type="submit" id="btnBrandAdd" name="btnBrandAdd" class="btn btn-primary">Save</button>
            </div><!-- /.box-footer-->
            <?php echo form_close();?>
          </div><!-- /.box -->

        </section><!-- /.content -->
        </div>