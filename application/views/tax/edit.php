
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <!-- <h3 class="box-title">Dashboard</h3> -->

            </div>
            <div class="box-body">
            <?php echo form_open('tax-update/'.$tax->tax_ID,['id'=>'formTaxEdit','name'=>'formTaxEdit','role'=>'form'])?>
                    <!-- text input -->
                    <div class="form-group">
                      <label>Tax Name</label>
                      <input type="hidden" name="txtTaxId" value="<?php echo $tax->tax_ID;?>">
                      <input type="text" id="txtTaxName" name="txtTaxName" value="<?php echo $tax->tax_name;?>" class="form-control" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group">
                      <label>Tax Rate (%)</label>
                      <input type="text" id="txtTaxRate" name="txtTaxRate" class="form-control" placeholder="Enter ..." value="<?php echo $tax->tax_rate;?>" />
                    </div>

            </div><!-- /.box-body -->
            <div class="box-footer">
              <!-- Footer --><button type="submit" id="btnTaxEdit" name="btnTaxEdit" class="btn btn-primary">Save</button>
            </div><!-- /.box-footer-->
            <?php echo form_close();?>
          </div><!-- /.box -->

        </section><!-- /.content -->
        </div>