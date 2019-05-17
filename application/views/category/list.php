  <section class="content">
  <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <!-- <h3 class="box-title">Hover Data Table</h3> -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="categoryList" name="categoryList" class="table table-bordered table-hover table-responsive">
                    <thead>
                      <tr>
                        <th>Category Name</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    if($categories == true) {
                      foreach ($categories as $category) {
                      	# code...
                      
                        echo '<tr>
                          <td>'.$category->category_name.'</td>
                          <td><a href="'.site_url(['category-edit',$category->category_ID]).'"><button class="btn btn-sm btn-primary">Edit</button></a> <button class="btn btn-sm btn-danger" data-toggle="modal" data-categoryid="'.$category->category_ID.'" data-target="#modalCategoryDelete">Delete</button></td>
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
  <div class="modal fade" id="modalCategoryDelete" tabindex="-1" role="dialog" aria-labelledby="modalCategoryDeleteLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCategoryDeleteLabel">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo form_open_multipart('category-delete',['id'=>'formCategoryDelete','name'=>'formCategoryDelete','role'=>'form'])?>
      <div class="modal-body">
        Are you sure want to delete?
        <input type="hidden" name="txtCategoryId" id="txtCategoryId">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="save" class="btn btn-danger">Delete</button>
      </div>
      <?php echo form_close();?>
    </div>
  </div>
</div>