      <!-- =============================================== -->

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?php if(isset($pageheading)) {
              echo  $pageheading;
              } else {
                echo title();
              }?>
            <!-- <small>it all starts here</small> -->
          </h1><br/>
        <!--   <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
          </ol> -->
          <?php if($this->session->has_userdata('success') == TRUE) :?>
<div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <!-- <h4>  <i class="icon fa fa-check"></i> Alert!</h4> -->
                        <?php echo $this->session->flashdata('success');?>
                      </div>
            <?php endif;?>
        </section>