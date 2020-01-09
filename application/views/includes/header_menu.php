    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="#">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url();?>assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                           
                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="<?php echo base_url();?>assets/images/newlook_logo.jpg" alt="homepage" style="height: 41px;width: 198px;" class="light-logo" />
                            
                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->
                            
                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"><span style="color:yellow">*</span></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                             <!-- Message -->
                                            <?php $profiles = $this->Admin_model->table_column($tablename="product");
													if (count($profiles) > 0) 
													{ 
														foreach($profiles as $rows)
														{
														$profile = $this->Admin_model->table_column_val($tablename="stock_product", $column="product_id", $val=$rows['id']);
															if (count($profile) > 0) 
															{ 
																foreach($profile as $row)
																{ $quantity = $row['quantity']; } }?>
																<?php if($quantity <= 2) { ?>
																	<a href="javascript:void(0)" class="link border-top">
																		<div class="d-flex no-block align-items-center p-10">
																			<span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
																			<div class="m-l-10">
																				<h5 class="m-b-0"><?php echo $rows['product_name']; ?></h5> 
																				<span class="mail-desc">Available<span style="color:red"><?php echo $quantity; ?></span></span> 
																			</div>
																		</div>
																</a><?php } ?>
													<?php } } ?>
                                            <!-- Message -->
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url();?>assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url();?>index.php/Admin/Signin"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>

                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url();?>index.php/Admin/Dashboard" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Customer </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo base_url();?>index.php/Admin/View/add_customer" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Add Customer </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo base_url();?>index.php/Admin/View/list_customer" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> List Customer </span></a></li>
                            </ul>
                        </li>
						<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-cart-outline"></i><span class="hide-menu">Purchase </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo base_url();?>index.php/Admin/Add_purchase" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Add Purchase </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo base_url();?>index.php/Admin/View/list_purchase" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> List Purchase </span></a></li>
                            </ul>
                        </li>
						<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-cart-plus"></i><span class="hide-menu">Products </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo base_url();?>index.php/Admin/Add_Product" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Add Products </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo base_url();?>index.php/Admin/View/list_product" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> List Products </span></a></li>
								<li class="sidebar-item"><a href="<?php echo base_url();?>index.php/Admin/View1/product_stock" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Products Stock List </span></a></li>
                            </ul>
                        </li>
						<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-cash"></i><span class="hide-menu">Quotation </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo base_url();?>index.php/Admin/View/add_quotation" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Add Quotation </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo base_url();?>index.php/Admin/View/list_quotation" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> List Quotation </span></a></li>
                            </ul>
                        </li>
						<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-cart-plus"></i><span class="hide-menu">Billing </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
									<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Add Billing </span></a>
										<ul aria-expanded="false" class="collapse  first-level">
											<li class="sidebar-item"><a href="<?php echo base_url();?>index.php/Admin/View/add_billing" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Gst Billing </span></a></li>
												
											<li class="sidebar-item"><a href="<?php echo base_url();?>index.php/Admin/View/add_nongst_billing" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Non Gst Billing </span></a></li>
										</ul>
									</li>
								<li class="sidebar-item"><a href="<?php echo base_url();?>index.php/Admin/View/list_billing" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> List Billing </span></a></li>
                            </ul>
                        </li>
						<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Employee </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo base_url();?>index.php/Admin/View/add_employee" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Add Employee </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo base_url();?>index.php/Admin/View/list_employee" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> List Employee </span></a></li>
                            </ul>
                        </li>
						<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-cash-usd"></i><span class="hide-menu">Expenses </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
							    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-cash-usd"></i><span class="hide-menu">Category </span></a>
									<ul aria-expanded="false" class="collapse  first-level">
										<li class="sidebar-item"><a href="<?php echo base_url();?>index.php/Admin/Add_expense_category" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Add Category </span></a></li>
										<li class="sidebar-item"><a href="<?php echo base_url();?>index.php/Admin/View/list_expenses_category" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> List Category </span></a></li>
									</ul>
								</li>
								<li class="sidebar-item"><a href="<?php echo base_url();?>index.php/Admin/View/add_expenses" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Add Expenses </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo base_url();?>index.php/Admin/View/list_expenses" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> List Expenses </span></a></li>
                            </ul>
                        </li>
						<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-application"></i><span class="hide-menu">Expenses Report </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo base_url();?>index.php/Admin/Credit_Report" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Credit Report </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo base_url();?>index.php/Admin/Debit_Report" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Debit Report </span></a></li>
                            </ul>
                        </li>
						<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Settings </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo base_url();?>index.php/Admin/add_category" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Add Business Category </span></a></li>
								<li class="sidebar-item"><a href="<?php echo base_url();?>index.php/Admin/View/add_bank_info" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Bank Accounts Info </span></a></li>
								<li class="sidebar-item"><a href="<?php echo base_url();?>index.php/Admin/Invoice_Change" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Change Invoice </span></a></li>
								<li class="sidebar-item"><a href="<?php echo base_url();?>index.php/Admin/Terms_Add" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Terms Info </span></a></li>
                            </ul>
                        </li>
						
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->