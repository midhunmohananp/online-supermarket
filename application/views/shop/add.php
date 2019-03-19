
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
            </div>
            <div class="box-body">
            <?php echo form_open('shop-insert',['id'=>'formShopAdd','name'=>'formShopAdd','role'=>'form'])?>
                    <!-- text input -->
                    <div class="form-group">
                      <label>Shop Name</label>
                      <input type="text" id="txtShopName" name="txtShopName" class="form-control" placeholder="Enter ..."/>
                    </div>
                   
                    <div class="form-group">
                      <label>Shop Location</label>
                      <input type="text" id="txtShopLocation" name="txtShopLocation" class="form-control" placeholder="Enter ..."/>
                    </div>

                    <!-- textarea -->
                    <div class="form-group">
                      <label>Shop address</label>
                      <textarea class="form-control" id="txtShopAddress" name="txtShopAddress" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    

            </div><!-- /.box-body -->
            <div class="box-footer">
              <!-- Footer --><button type="submit" id="btnShopAdd" name="btnShopAdd" class="btn btn-primary">Save</button>
            </div><!-- /.box-footer-->
            <?php echo form_close();?>
          </div><!-- /.box -->

        </section><!-- /.content -->
        </div>