    <div class="login-box">
      <div class="login-logo">
        <a href="<?php echo base_url();?>"><b>Acupa</b>POS</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <?php echo form_open('login-check',['id'=>'formLogin','name'=>'formLogin']);?>
          <?php if($this->session->has_userdata('error') == TRUE) :?>
            <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <!-- <h4>  <i class="icon fa fa-check"></i> Alert!</h4> -->
                        <?php echo $this->session->flashdata('error');?>
                      </div>
            <?php endif;?>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="txtUserName" id="txtUserName" placeholder="Email"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="txtUserPassword" id="txtUserPassword" placeholder="Password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
        

        <div class="social-auth-links text-center">
          <button type="submit" class="btn btn-block btn-social btn-facebook btn-flat"> Sign in </button>
        </div><!-- /.social-auth-links -->
<?php echo form_close();?>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->