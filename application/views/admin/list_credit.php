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
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="color:black">S.No</th>
                                                <th style="color:black">Customer Name</th>
												<th style="color:black">Type</th>
                                                <th style="color:black">Invoice No</th>
                                                <th style="color:black">Net Amount</th>
                                                <th style="color:black">Discount</th>
												<th style="color:black">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										  <?php $profile = $this->Admin_model->invoice_group($tablename="invoice_add");
											$i=1;
											if (count($profile) > 0) 
											{ 
												foreach($profile as $row)
												{ ?>
											<tr>
                                                <td><?php echo $i; ?></td>
												<?php $profiles = $this->Admin_model->table_column_val($tablename="customer", $column="id", $val=$row['customer_id']);
													if (count($profiles) > 0) 
													{ 
														foreach($profiles as $rows)
														{ ?>
                                                <td style="color:blue"><?php echo $rows['customer_name']; ?></td>
													<?php  } } ?>
                                                <td><?php echo $row['type']; ?></td>
                                                
												<td><?php echo $row['invoice_no']; ?></td>
                                                <td style="color:red">Rs. <?php echo $row['net_amount']; ?></td>
												<td><?php echo $row['discount']; ?></td>
												<td><?php echo $row['date']; ?></td>
                                            </tr>
											<?php $i++; } } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th style="color:black">S.No</th>
                                                <th style="color:black">Name</th>
                                                <th style="color:black">Sub Name</th>
                                                <th style="color:black">Last Pay</th>
                                                <th style="color:black">Total Paid</th>
                                                <th style="color:black">Date</th>
												<th style="color:black">Action</th>
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