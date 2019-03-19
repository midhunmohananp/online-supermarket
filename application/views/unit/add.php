
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <!-- <h3 class="box-title">Dashboard</h3> -->

            </div>
            <div class="box-body">
            <?php echo form_open('unit-insert',['id'=>'formUnitAdd','name'=>'formUnitAdd','role'=>'form'])?>
                    <!-- text input -->
                    <div class="form-group">
                      <label>Unit Name</label>
                      <input type="text" id="txtUnitName" name="txtUnitName" class="form-control" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group">
                      <label>Unit Symbol</label>
                      <input type="text" id="txtUnitSymbol" name="txtUnitSymbol" class="form-control" placeholder="Enter ..."/>
                    </div>

            </div><!-- /.box-body -->
            <div class="box-footer">
              <!-- Footer --><button type="submit" id="btnUnitAdd" name="btnUnitAdd" class="btn btn-primary">Save</button>
            </div><!-- /.box-footer-->
            <?php echo form_close();?>
          </div><!-- /.box -->

        </section><!-- /.content -->
        </div>