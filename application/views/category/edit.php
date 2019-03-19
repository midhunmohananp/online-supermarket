
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <!-- <h3 class="box-title">Dashboard</h3> -->

            </div>
            <div class="box-body">
            <?php echo form_open('category-update/'.$category->category_ID,['id'=>'formCategoryEdit','name'=>'formCategoryEdit','role'=>'form'])?>
                    <!-- text input -->
                    <div class="form-group">
                      <label>Catgory Name</label>
                      <input type="text" id="txtCategoryName" name="txtCategoryName" value="<?php echo $category->category_name;?>" class="form-control" placeholder="Enter ..."/>
                      <input type="hidden" name="txtCategoryId" value="<?php echo $category->category_ID;?>">
                    </div>
                    <div class="form-group">
                      <label>Parent Catgory Name</label>
                      <select class="form-control" id="txtParentCategory" name="txtParentCategory">
                        <option value="0" selected>Null</option>
                        <?php
                        if (isset($categories) == TRUE) {
                          foreach ($categories as $incategory) {
                            if($category->parent_category_ID == $incategory->category_ID) {
                              echo '<option value="'.$incategory->category_ID.'" selected>'.$incategory->category_name.'</option>';
                            } else {
                               echo '<option value="'.$incategory->category_ID.'">'.$incategory->category_name.'</option>';
                            }
                          }
                        }
                        ?>

                      </select>
                    </div>

            </div><!-- /.box-body -->
            <div class="box-footer">
              <!-- Footer --><button type="submit" id="btnCategoryEdit" name="btnCategoryEdit" class="btn btn-primary">Save</button>
            </div><!-- /.box-footer-->
            <?php echo form_close();?>
          </div><!-- /.box -->

        </section><!-- /.content -->
        </div>