<footer class="main-footer">
        <!-- <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div> -->
        <strong>Copyright &copy; <?php echo date('Y');?> <a href="<?php echo base_url(); ?>"><?php echo title();?></a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

      <!-- jQuery 2.1.3 -->
      <script src="<?php echo assets_url();?>plugins/jQuery/jQuery-2.1.3.min.js"></script>
      <!-- Bootstrap 3.3.2 JS -->
      <script src="<?php echo assets_url();?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
          <!-- DATA TABES SCRIPT -->
    <!-- DATA TABES SCRIPT -->
    <script src="<?php echo assets_url();?>plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="<?php echo assets_url();?>plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
      <!-- SlimScroll -->
      <script src="<?php echo assets_url();?>plugins/slimScroll/jquery.slimScroll.min.js" type="text/javascript"></script>
      <!-- FastClick -->
      <script src='<?php echo assets_url();?>plugins/fastclick/fastclick.min.js'></script>
      <!-- AdminLTE App -->
      <script src="<?php echo assets_url();?>dist/js/app.min.js" type="text/javascript"></script>
      <script src="<?php echo assets_url();?>plugins/jQuery/jquery.validate.min.js"></script>
      <script src="<?php echo assets_url();?>plugins/jQuery/additional-methods.min.js"></script>
      <script src="<?php echo assets_url();?>plugins/select2/js/select2.min.js"></script>
      <script>
        var base_url = '<?php echo base_url();?>';
        $('button').addClass('disabled');
      </script>
      <?php 
      if(isset($cjs)) {
        foreach ($cjs as $js) {
         echo '<script src="'.assets_url().'theme/js/'.$js.'.js" type="text/javascript"></script>';
        }
      }
      ?>
    </body>
  </html>