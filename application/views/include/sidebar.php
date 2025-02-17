<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
         <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>  -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li >
          <a href="<?php echo site_url('admin/dashboard');?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
           </a>
        </li>
        <li>
          <a href="<?php echo site_url('admin/categories');?>">
            <i class="fa fa-dashboard"></i> <span>Categories</span>
            
           </a>
        </li>

        <li>
          <a href="<?php echo site_url('admin/brands'); ?>">
            <i class="fa fa-dashboard"></i> <span>Brands</span>
            
           </a>
        </li>

        <li>
          <a href="<?php echo site_url('admin/products'); ?>">
            <i class="fa fa-dashboard"></i> <span>Products</span>
            
           </a>
        </li>

        <li>
          <a href="<?php echo site_url('admin/orders'); ?>">
            <i class="fa fa-dashboard"></i> <span>Orders</span>
            
           </a>
        </li>

        <li>
          <a href="<?php echo site_url('admin/reports'); ?>">
            <i class="fa fa-dashboard"></i> <span>Reports</span>
            
           </a>
        </li>
        
        <li class="treeview">
          <a href="javascript:void(0)">
            <i class="fa fa-share"></i> <span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('admin/profile-settings'); ?>"><i class="fa fa-circle-o"></i>Profile Setting</a></li>
            <li><a href="<?php echo site_url('admin/currency-settings'); ?>"><i class="fa fa-circle-o"></i>Currency Setting</a></li>
            <li><a href="<?php echo site_url('admin/product-image-settings'); ?>"><i class="fa fa-circle-o"></i>Products Setting</a></li>
            <li><a href="<?php echo site_url('admin/footer-settings'); ?>"><i class="fa fa-circle-o"></i>Footer Setting</a></li>
         
    </section>
    <!-- /.sidebar -->
  </aside>