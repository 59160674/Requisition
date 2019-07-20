<body class="animated-content">
    <header id="topnav" class="navbar navbar-default navbar-fixed-top" role="banner">
        <div class="logo-area">
            <span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
			<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
				<span class="icon-bg">
					<i class="ti ti-menu"></i>
				</span>
            </a>
            </span>
            <!--        <img style="height:58px;" src="<?php echo base_url();?>images/site-logo.png">-->
            <a class="navbar-brand" href="<?php echo base_url();?>req/Home"></a>
        </div>
        <ul class="nav navbar-nav toolbar pull-right">
            <li class="dropdown toolbar-icon-bg">
                <a href="#" class="dropdown-toggle username" data-toggle="dropdown">
				<img class="img-circle" src="http://placehold.it/300&text=Placeholder" alt="" />
			</a>
                <ul class="dropdown-menu userinfo arrow">
                    <!--
				<li><a href="#/"><i class="ti ti-user"></i><span>Profile</span><span class="badge badge-info pull-right">80%</span></a></li>
				<li><a href="#/"><i class="ti ti-panel"></i><span>Account</span></a></li>
				<li><a href="#/"><i class="ti ti-settings"></i><span>Settings</span></a></li>
				<li class="divider"></li>
				<li><a href="#/"><i class="ti ti-stats-up"></i><span>Earnings</span></a></li>
				<li><a href="#/"><i class="ti ti-view-list-alt"></i><span>Statement</span></a></li>
				<li><a href="#/"><i class="ti ti-money"></i><span>Withdrawals</span></a></li>
				<li class="divider"></li>
-->
                    <li><a href="<?php echo base_url();?>Requisition/logout"><i class="ti ti-shift-right"></i><span>ออกจากระบบ</span></a></li>
                </ul>
            </li>
        </ul>
    </header>
    <div id="wrapper">
        <div id="layout-static">
            <div class="static-sidebar-wrapper sidebar-default">
                <div class="static-sidebar">
                    <div class="sidebar">
                        <div class="widget">
                            <div class="widget-body">
                                <div class="userinfo">
                                    <div class="avatar">
                                        <img src="http://placehold.it/300&text=Placeholder" class="img-responsive img-circle">
                                    </div>
                                    <div class="info">
                                        <span class="username"><?php echo $this->session->userdata('use_name') ?></span><br>
                                        <span class="useremail"><?php echo $this->session->userdata('use_fullname') ?></span><br>
                                        <span class="useremail">ตำแหน่ง : <?php echo $this->session->userdata('position_name_th') ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget stay-on-collapse" id="widget-sidebar">
                            <nav role="navigation" class="widget-body">
                                <ul class="acc-menu">
                                    <li class="nav-separator"><span>Explore</span></li>
                                    <li><a href="<?php echo base_url();?>req/Home"><i class="ti ti-home"></i><span>หน้าแรก</span></a></li>
                                    <li><a href="javascript:;"><i class="ti ti-view-list-alt"></i><span>เมนู</span></a>
                                        <ul class="acc-menu">
                                            <li><a href="<?php echo base_url();?>req/Borrow_equipment">ขอยืมอุปกรณ์</a></li>
                                            <li><a href="<?php echo base_url();?>req/Return_equipment">ขอคืนอุปกรณ์</a></li>
                                            <li><a href="<?php echo base_url();?>req/Equipment">จัดการอุปกรณ์</a></li>
                                            <li><a href="<?php echo base_url();?>req/Payment">ชำระเงิน</a></li>
                                            <li><a href="<?php echo base_url();?>req/Repair">แจ้งซ่อม</a></li>
                                        </ul>
                                    </li>
                                    <?php if($this->session->userdata('use_level') == 1 || $this->session->userdata('use_level') == 2){ ?>
                                    <li><a href="javascript:;"><i class="ti ti-settings"></i><span>การตั้งค่า</span></a>
                                        <ul class="acc-menu">
                                            <li><a href="<?php echo base_url();?>req/User">เพิ่มเจ้าหน้าที่</a></li>
                                            <li><a href="#">จำกัดสิทธ์</a></li>
                                        </ul>
                                    </li>
                                    <?php } ?>
                                    <li><a href="<?php echo base_url();?>req/Home/dashboard"><i class="ti ti-stats-up"></i><span>รายงาน</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="static-content-wrapper">
                <div class="static-content">
                    <div class="page-content">
                        <!--
                        <ol class="breadcrumb">
                            <li class=""><a href="">Home</a></li>
                            <li class="active"><a href="">Dashboard</a></li>
                        </ol>
                        <div class="container-fluid">-->
