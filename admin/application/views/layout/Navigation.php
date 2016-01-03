<body class="skin-black sidebar-mini metro">
    <!-- Site wrapper -->
    <div class="wrapper">
      
      <header class="main-header">
          <a href="<?php echo base_url() ?>" class="logo"><img src="<?php echo base_url() ?>asset/img/justjawai.png" style="width: 115px"></a>
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
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!--<img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>-->
                  <span class="hidden-xs">Vikram Parihar</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <!--<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />-->
                    <p>
                      Vikram Parihar - Web Developer
                      <small>Member since Nov. 2013</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                        <a href="<?php echo base_url() ?>sign_out" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <!--<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />-->
            </div>
            <div class="pull-left info">
              <p>Vikram Parihar</p>
                 <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="<?php echo base_url() ?>category"><i class="fa fa-th"></i> <span>Category</span></a></li>
            <li><a href="<?php echo base_url() ?>customer"><i class="fa fa-users"></i> <span>Customer</span></a></li>
            <li><a href="<?php echo base_url() ?>news"><i class="fa fa-th"></i> <span>News</span></a></li>
            <li><a href="<?php echo base_url() ?>news_tag"><i class="fa fa-th"></i> <span>News Tag</span></a></li>

          <li class="treeview">
              <a href="#">
                  <i class="fa fa-file-text-o"></i>
                  <span>Pages</span>
                  <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu page-menu" style="display: none;">
                <li><a href="<?php echo base_url() ?>page/history"><i class="fa fa-th"></i> <span>History</span></a></li>
                <li><a href="<?php echo base_url() ?>page/politics"><i class="fa fa-th"></i> <span>Politics</span></a></li>
                <li><a href="<?php echo base_url() ?>page/about"><i class="fa fa-th"></i> <span>About us</span></a></li>
                <li><a href="<?php echo base_url() ?>page/privacy"><i class="fa fa-th"></i> <span>Privacy Policy</span></a></li>
                <li><a href="<?php echo base_url() ?>page/term"><i class="fa fa-th"></i> <span>Term Condition</span></a></li>
              </ul>
          </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- =============================================== -->

      
