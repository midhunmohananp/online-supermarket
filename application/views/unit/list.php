  <section class="content">
  <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <!-- <h3 class="box-title">Hover Data Table</h3> -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="unitList" name="unitList" class="table table-bordered table-hover table-responsive">
                    <thead>
                      <tr>
                        <th>Unit Name</th>
                        <th>Unit Symbol</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    if($units == true) {
                      foreach ($units as $unit) {
                      	# code...
                      
                        echo '<tr>
                          <td>'.$unit->unit_name.'</td>
                          <td>'.$unit->unit_symbol.'</td>
                          <td><a href="'.site_url(['unit-edit',$unit->unit_ID]).'"><button class="btn btn-sm btn-primary">Edit</button></a> <button class="btn btn-sm btn-danger" data-toggle="modal" data-unitid="'.$unit->unit_ID.'" data-target="#modalUnitDelete">Delete</button></td>
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
  <div class="modal fade" id="modalUnitDelete" tabindex="-1" role="dialog" aria-labelledby="modalUnitDeleteLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalUnitDeleteLabel">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo form_open_multipart('unit-delete',['id'=>'formUnitDelete','name'=>'formUnitDelete','role'=>'form'])?>
      <div class="modal-body">
        Are you sure want to delete?
        <input type="hidden" name="txtUnitId" id="txtUnitId">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="save" class="btn btn-danger">Delete</button>
      </div>
      <?php echo form_close();?>
    </div>
  </div>
</div>