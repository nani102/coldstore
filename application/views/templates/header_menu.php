<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('dashboard') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>CDS</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Cold Store</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
	  
	  
	  
	  <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

		<!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- <i class="fa fa-user-o" aria-hidden="true"></i> -->
              <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" class="user-image" alt="User Image"/>
              <!--<span class="hidden-xs"><?php echo $user_data['firstname']; ?></span>-->
			  <span class="hidden-xs">admin</span>

            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <!-- <i class="fa fa-user-o fa-5x" aria-hidden="true"></i> -->
                <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" class="img-circle" alt="User Image"/>
                <p>
                  <!--<?php echo $username; ?>-->
                  <!--<?php echo $user_data['firstname']; ?>
                  <small><?php echo $user_group['group_name']; ?></small>-->
				  Administration
				  <small>Developer</small>
                </p>
              </li>
			  
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url('users/profile/') ?>" class="btn btn-warning btn-flat"><i class="fa fa-user-circle"></i>Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('auth/logout') ?>" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i>Sign out</a>
                </div>
              </li>
            </ul>
          </li>
		  <!-- Control Sidebar Toggle Button -->
          <li><a href="<?php echo base_url('users/setting/') ?>"><i class="fa fa-gears"></i></a></li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  