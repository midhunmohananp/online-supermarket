  <section class="content">
  <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <!-- <h3 class="box-title">Hover Data Table</h3> -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="brandList" name="brandList" class="table table-bordered table-hover table-responsive">
                    <thead>
                      <tr>
                        <th>Brand Name</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      if($brands == true) {
                        foreach ($brands as $brand) {
                        	# code...
                        
                          echo '<tr>
                            <td>'.$brand->brand_name.'</td>
                            <td><a href="'.site_url(['brand-edit',$brand->brand_ID]).'"><button class="btn btn-sm btn-primary">Edit</button></a> <button class="btn btn-sm btn-danger" data-toggle="modal" data-brandid="'.$brand->brand_ID.'" data-target="#modalBrandDelete">Delete</button></td>
                          </tr>';

                          }
                      }
                      ?>
                      </tbody>
                      </table>
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>

  </section>
  <!-- modals -->
  <div class="modal fade" id="modalBrandDelete" tabindex="-1" role="dialog" aria-labelledby="modalBrandDeleteLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalBrandDeleteLabel">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo form_open_multipart('brand-delete',['id'=>'formBrandDelete','name'=>'formBrandDelete','role'=>'form'])?>
      <div class="modal-body">
        Are you sure want to delete?
        <input type="hidden" name="txtBrandId" id="txtBrandId">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="save" class="btn btn-danger">Delete</button>
      </div>
      <?php echo form_close();?>
    </div>
  </div>
</div>