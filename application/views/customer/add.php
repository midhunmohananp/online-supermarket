
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <!-- <h3 class="box-title">Dashboard</h3> -->

            </div>
            <div class="box-body">
            <?php echo form_open('customer-insert',['id'=>'formCustomerAdd','name'=>'formCustomerAdd','role'=>'form'])?>
                    <!-- text input -->
                    <div class="form-group">
                      <label>Customer First Name</label>
                      <input type="text" id="txtCustomerFirstName" name="txtCustomerFirstName" class="form-control" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group">
                      <label>Customer Middle Name</label>
                      <input type="text" id="txtCustomerMiddleName" name="txtCustomerMiddleName" class="form-control" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group">
                      <label>Customer Last Name</label>
                      <input type="text" id="txtCustomerLastName" name="txtCustomerLastName" class="form-control" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group">
                      <label>Customer Email</label>
                      <input type="text" id="txtCustomerEmail" name="txtCustomerEmail" class="form-control" placeholder="Enter ..."/>
                    </div><div class="form-group">
                      <label>Customer Phone </label>
                      <input type="text" id="txtCustomerPhone" name="txtCustomerPhone" class="form-control" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group">
                      <label>Customer WhatsApp Number</label>
                      <input type="text" id="txtCustomerWhatsApp" name="txtCustomerWhatsApp" class="form-control" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group">
                      <label>Customer Gender</label>
                      <div class="radio">
                        <label>
                          <input type="radio" name="txtCustomerGender" id="txtCustomerGender" value="
                          male" checked="">
                          Male
                        </label>
                      </div> 
                      <div class="radio">
                        <label>
                          <input type="radio" name="txtCustomerGender" id="txtCustomerGender" value="female" >
                         Female
                        </label>
                      </div> 
                      <div class="radio">
                        <label>
                          <input type="radio" name="txtCustomerGender" id="txtCustomerGender" value="others" >
                          Others
                        </label>
                      </div>                    
                    </div>
                    <div class="form-group">
                      <label>Customer DOB</label>
                      <input type="date" id="txtCustomerDob" name="txtCustomerDob" class="form-control" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group">
                      <label>Customer Occupation</label>
                      <input type="text" id="txtCustomerOccupation" name="txtCustomerOccupation" class="form-control" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group">
                      <label>Customer Address</label>
                      <textarea id="txtCustomerAddress" name="txtCustomerAddress" class="form-control" placeholder="Enter ..."></textarea>
                    </div> 
                    <div class="form-group">
                      <label>Customer Landmark</label>
                      <textarea id="txtCustomerLandmark" name="txtCustomerLandmark" class="form-control" placeholder="Enter ..."></textarea>
                    </div>

            </div><!-- /.box-body -->
            <div class="box-footer">
              <!-- Footer --><button type="submit" id="btnCustomerAdd" name="btnCustomerAdd" class="btn btn-primary">Save</button>
            </div><!-- /.box-footer-->
            <?php echo form_close();?>
          </div><!-- /.box -->

        </section><!-- /.content -->
        </div>