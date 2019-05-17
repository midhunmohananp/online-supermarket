  <section class="content">
  <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <!-- <h3 class="box-title">Hover Data Table</h3> -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="taxList" name="taxList" class="table table-bordered table-hover table-responsive">
                    <thead>
                      <tr>
                        <th>Tax Name</th>
                        <th>Tax Rate (%)</th>
                        <th>Tax Name</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    if($taxs == true) {
                      foreach ($taxs as $tax) {
                      	# code...
                      
                        echo '<tr>
                          <td>'.$tax->tax_name.'</td>
                          <td>'.$tax->tax_rate.'</td>
                          <td><a href="'.site_url(['tax-edit',$tax->tax_ID]).'"><button class="btn btn-sm btn-primary">Edit</button></a> <button class="btn btn-sm btn-danger" data-toggle="modal" data-taxid="'.$tax->tax_ID.'" data-target="#modalTaxDelete">Delete</button></td>
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
  <div class="modal fade" id="modalTaxDelete" tabindex="-1" role="dialog" aria-labelledby="modalTaxDeleteLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTaxDeleteLabel">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo form_open_multipart('tax-delete',['id'=>'formTaxDelete','name'=>'formTaxDelete','role'=>'form'])?>
      <div class="modal-body">
        Are you sure want to delete?
        <input type="hidden" name="txtTaxId" id="txtTaxId">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="save" class="btn btn-danger">Delete</button>
      </div>
      <?php echo form_close();?>
    </div>
  </div>
</div>