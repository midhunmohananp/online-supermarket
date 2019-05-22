
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <!-- <h3 class="box-title">Dashboard</h3> -->

            </div>
            <div class="box-body">
            <?php echo form_open('customer-update/'.$customer->customer_ID,['id'=>'formCustomerEdit','name'=>'formCustomerEdit','role'=>'form'])?>
                    <!-- text input -->
                    <div class="row">
                    <div class="col-md-6">
                      <label>Customer First Name</label>
                      <input type="text" id="txtCustomerFirstName" name="txtCustomerFirstName" class="form-control" placeholder="Enter ..." value="<?php echo $customer->first_name;?>" />
                    </div>
                    <div class="col-md-6">
                      <label>Customer Middle Name</label>
                      <input type="text" id="txtCustomerMiddleName" name="txtCustomerMiddleName" class="form-control" placeholder="Enter ..." value="<?php echo $customer->middle_name;?>"/>
                    </div>
                    <div class="col-md-6">
                      <label>Customer Last Name</label>
                      <input type="text" id="txtCustomerLastName" name="txtCustomerLastName" class="form-control" placeholder="Enter ..." value="<?php echo $customer->last_name;?>"/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label>Customer Email</label>
                      <input type="text" id="txtCustomerEmail" name="txtCustomerEmail" class="form-control" placeholder="Enter ..." value="<?php echo $customer->email;?>"/>
                    </div><div class="col-md-6">
                      <label>Customer Phone </label>
                      <input type="text" id="txtCustomerPhone" name="txtCustomerPhone" class="form-control" placeholder="Enter ..." value="<?php echo $customer->phone;?>"/>
                    </div>
                    </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label>Customer WhatsApp Number</label>
                      <input type="text" id="txtCustomerWhatsApp" name="txtCustomerWhatsApp" class="form-control" placeholder="Enter ..." value="<?php echo $customer->whatsapp;?>"/>
                    </div>
                    <div class="col-md-6">
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
                    </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label>Customer DOB</label>
                      <input type="date" id="txtCustomerDob" name="txtCustomerDob" class="form-control" placeholder="Enter ..." value="<?php echo $customer->dob;?>"/>
                    </div>
                    <div class="col-md-6">
                      <label>Customer Occupation</label>
                      <input type="text" id="txtCustomerOccupation" name="txtCustomerOccupation" class="form-control" placeholder="Enter ..." value="<?php echo $customer->occupation;?>"/>
                    </div>
                    </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label>Customer Address</label>
                      <textarea id="txtCustomerAddress" name="txtCustomerAddress" class="form-control" placeholder="Enter ..." value="<?php echo $customer->address;?>"></textarea>
                    </div> 
                    <div class="col-md-6">
                      <label>Customer Landmark</label>
                      <textarea id="txtCustomerLandmark" name="txtCustomerLandmark" class="form-control" placeholder="Enter ..." value="<?php echo $customer->landmark;?>"></textarea>
                    </div>
                  </div>

            </div><!-- /.box-body -->
            <div class="box-footer">
              <!-- Footer --><button type="submit" id="btnCustomerEdit" name="btnCustomerEdit" class="btn btn-primary">Save</button>
            </div><!-- /.box-footer-->
            <?php echo form_close();?>
          </div><!-- /.box -->

        </section><!-- /.content -->
        </div>