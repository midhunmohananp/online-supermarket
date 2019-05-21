      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo assets_url();?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
             <?php
              $user = get_user_name();
              ?>
            <div class="pull-left info">
              <p><?php echo $user->user_name;?></p>

              <a href="<?php echo site_url(['dashboard']);?>"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="<?php echo site_url(['dashboard']);?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Shop</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url(['shop-add']);?>"><i class="fa fa-circle-o"></i>Add</a></li>
                <li>
                </li>
                <li><a href="<?php echo site_url(['shop-listing']);?>"><i class="fa fa-circle-o"></i>List</a></li>
              </ul>
            </li> 
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Category</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url(['category-add']);?>"><i class="fa fa-circle-o"></i>Add</a></li>
                <li>
                </li>
                <li><a href="<?php echo site_url(['category-listing']);?>"><i class="fa fa-circle-o"></i>List</a></li>
              </ul>
            </li>        
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Brand</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url(['brand-add']);?>"><i class="fa fa-circle-o"></i>Add</a></li>
                <li><a href="<?php echo site_url(['brand-listing']);?>"><i class="fa fa-circle-o"></i>List</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Tax</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url(['tax-add']);?>"><i class="fa fa-circle-o"></i>Add</a></li>
                <li>
                </li>
                <li><a href="<?php echo site_url(['tax-listing']);?>"><i class="fa fa-circle-o"></i>List</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Unit Of Measure</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url(['unit-add']);?>"><i class="fa fa-circle-o"></i>Add</a></li>
                <li>
                </li>
                <li><a href="<?php echo site_url(['unit-listing']);?>"><i class="fa fa-circle-o"></i>List</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Product</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url(['product-add']);?>"><i class="fa fa-circle-o"></i>Add</a></li>
                <li>
                </li>
                <li><a href="<?php echo site_url(['product-listing']);?>"><i class="fa fa-circle-o"></i>List</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Purchase</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url(['purchase-add']);?>"><i class="fa fa-circle-o"></i>Stock Add</a></li>
                <li>
                </li>
                <li><a href="<?php echo site_url(['purchase-listing']);?>"><i class="fa fa-circle-o"></i>Stock List</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Sale</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url(['pos']);?>"><i class="fa fa-circle-o"></i>New Sale</a></li>
                <li>
                </li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Customer</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url(['customer-add']);?>"><i class="fa fa-circle-o"></i>Add</a></li>
                <li>
                </li>
                <li><a href="<?php echo site_url(['customer-listing']);?>"><i class="fa fa-circle-o"></i>List</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>User</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url(['user-add']);?>"><i class="fa fa-circle-o"></i>Add</a></li>
                <li>
                </li>
                <li><a href="<?php echo site_url(['user-listing']);?>"><i class="fa fa-circle-o"></i>List</a></li>
              </ul>
            </li>  
            <!-- <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Access</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php //echo site_url(['access-add']);?>"><i class="fa fa-circle-o"></i>Add</a></li>
                <li>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i>List</a></li>
                <li><a href="<?php //echo site_url(['access-grand']);?>"><i class="fa fa-circle-o"></i>Grand Access</a></li>
              </ul>
            </li> -->
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
      <!-- <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li> -->