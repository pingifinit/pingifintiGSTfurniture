<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Tables</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Basic Datatable</h5>
                                <div class="table-responsive">
								<?php $profiles = $this->Admin_model->table_column($tablename="credit_table", $column="id", $val=$id);
									$i=1;
									if (count($profiles) > 0) 
									{ 
										foreach($profiles as $rows)
										{ ?>
								<div class="row">
									<h4 style="margin-left:150px">Name:<span style="color:blue"><?php echo $rows['category_name']; ?></span></h4>
									<h4 style="margin-left:30%;float:right">Sub Name:<span style="color:blue"><?php echo $rows['sub_name']; ?></span></h4>
								</div>
								<?php } } ?>
								<br>
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="color:black">S.No</th>
                                                <th style="color:black">Pay</th>
                                                <th style="color:black">Total Paid</th>
                                                <th style="color:black">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										  <?php $profile = $this->Admin_model->table_column($tablename="credit_history", $column="credit_id", $val=$id);
											$i=1;
											if (count($profile) > 0) 
											{ 
												foreach($profile as $row)
												{ ?>
											<tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row['pay']; ?></td>
                                                <td><?php echo $row['total']; ?></td>
												<td><?php echo $row['date']; ?></td>
                                            </tr>
											<?php $i++; } } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th style="color:black">S.No</th>
                                                <th style="color:black">Pay</th>
                                                <th style="color:black">Total Paid</th>
                                                <th style="color:black">Date</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->