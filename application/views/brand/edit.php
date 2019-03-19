
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <!-- <h3 class="box-title">Dashboard</h3> -->

            </div>
            <div class="box-body">
            <?php echo form_open('brand-update/'.$brand->brand_ID,['id'=>'formBrandEdit','name'=>'formBrandEdit','role'=>'form'])?>
                    <!-- text input -->
                    <div class="form-group">
                      <label>Brand Name</label>
                      <input type="text" id="txtBrandName" name="txtBrandName" value="<?php echo $brand->brand_name;?>" class="form-control" placeholder="Enter ..."/>
                      <input type="hidden" name="txtBrandId" value="<?php echo $brand->brand_ID;?>">
                    </div>

            </div><!-- /.box-body -->
            <div class="box-footer">
              <!-- Footer --><button type="submit" id="btnBrandEdit" name="btnBrandEdit" class="btn btn-primary">Save</button>
            </div><!-- /.box-footer-->
            <?php echo form_close();?>
          </div><!-- /.box -->

        </section><!-- /.content -->
        </div>