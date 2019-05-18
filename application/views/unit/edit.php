
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <!-- <h3 class="box-title">Dashboard</h3> -->

            </div>
            <div class="box-body">
            <?php echo form_open('unit-update/'.$unit->unit_ID,['id'=>'formUnitEdit','name'=>'formUnitEdit','role'=>'form'])?>
                    <!-- text input -->
                    <div class="form-group">
                      <input type="hidden" name="txtUnitId" value="<?php echo $unit->unit_ID;?>">
                      <label>Unit Name</label>
                      <input type="text" id="txtUnitName" name="txtUnitName" class="form-control" placeholder="Enter ..." value="<?php echo $unit->unit_name;?>"/>
                    </div>
                    <div class="form-group">
                      <label>Unit Symbol</label>
                      <input type="text" id="txtUnitSymbol" name="txtUnitSymbol" class="form-control" placeholder="Enter ..." value="<?php echo $unit->unit_symbol;?>" />
                    </div>

            </div><!-- /.box-body -->
            <div class="box-footer">
              <!-- Footer --><button type="submit" id="btnUnitEdit" name="btnUnitEdit" class="btn btn-primary">Save</button>
            </div><!-- /.box-footer-->
            <?php echo form_close();?>
          </div><!-- /.box -->

        </section><!-- /.content -->
        </div>