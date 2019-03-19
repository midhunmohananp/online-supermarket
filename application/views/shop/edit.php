
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
            </div>
            <div class="box-body">
            <?php echo form_open('shop-update/'.$shop->shop_ID,['id'=>'formShopEdit','name'=>'formShopEdit','role'=>'form'])?>
                    <!-- text input -->
                    <div class="form-group">
                      <label>Shop Name</label>
                      <input type="text" id="txtShopName" name="txtShopName"  value="<?php echo $shop->shop_name?>" class="form-control" placeholder="Enter ..."/>
                    </div>
                   
                    <div class="form-group">
                      <label>Shop Location</label>
                      <input type="text" id="txtShopLocation" name="txtShopLocation" value="<?php echo $shop->shop_location?>" class="form-control" placeholder="Enter ..."/>
                      <input type="hidden"  name="txtShopID" value="<?php echo $shop->shop_ID?>" />
                    </div>

                    <!-- textarea -->
                    <div class="form-group">
                      <label>Shop address</label>
                      <textarea class="form-control" id="txtShopAddress" name="txtShopAddress" value="" rows="3" placeholder="Enter ..."><?php echo $shop->shop_address?></textarea>
                    </div>
                    

            </div><!-- /.box-body -->
            <div class="box-footer">
              <!-- Footer --><button type="submit" id="btnShopEdit" name="btnShopEdit" class="btn btn-primary">Save</button>
            </div><!-- /.box-footer-->
            <?php echo form_close();?>
          </div><!-- /.box -->

        </section><!-- /.content -->
        </div>