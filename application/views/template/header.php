      <header class="main-header">
        <a href="<?php echo site_url(['dashboard']);?>" class="logo"><b><?php echo title();?></b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
              <?php
              $user = get_user_name();
              ?>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo assets_url();?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $user->user_name;?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo assets_url();?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $user->first_name.' '.$user->middle_name.' '.$user->last_name;?>
                      <!-- <small>Member since Nov. 2012</small> -->
                    </p>
                  </li>
                  <!-- Menu Body -->
           <!--        <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li> -->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo site_url(['logout']);?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>