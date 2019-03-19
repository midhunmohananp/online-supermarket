
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <!-- <h3 class="box-title">Dashboard</h3> -->

            </div>
            <div class="box-body">
            <?php echo form_open('category-insert',['id'=>'formCategoryAdd','name'=>'formCategoryAdd','role'=>'form'])?>
                    <!-- text input -->
                    <div class="form-group">
                      <label>Catgory Name</label>
                      <input type="text" id="txtCategoryName" name="txtCategoryName" class="form-control" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group">
                      <label>Parent Catgory Name</label>
                      <select class="form-control" id="txtParentCategory" name="txtParentCategory">
                        <option value="0" selected>Null</option>
                        <?php
                        if (isset($categories) == TRUE) {
                          foreach ($categories as $category) {
                            echo '<option value="'.$category->category_ID.'">'.$category->category_name.'</option>';
                          }
                        }
                        ?>

                      </select>
                    </div>

            </div><!-- /.box-body -->
            <div class="box-footer">
              <!-- Footer --><button type="submit" id="btnCategoryAdd" name="btnCategoryAdd" class="btn btn-primary">Save</button>
            </div><!-- /.box-footer-->
            <?php echo form_close();?>
          </div><!-- /.box -->

        </section><!-- /.content -->
        </div>