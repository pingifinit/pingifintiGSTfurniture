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
                                <h5 class="card-title">Billing Datatable</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="color:black">S.No</th>
                                                <th style="color:black">Customer Name</th>
												<th style="color:black">Bill Type</th>
                                                <th style="color:black">Invoice Number</th>
                                                <th style="color:black">Date</th>
                                                <th style="color:black">Discount</th>
												<th style="color:black">Total Amount</th>
												<th style="color:black">Action</th>
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
												<?php $profiles = $this->Admin_model->table_column($tablename="customer", $column="id", $val=$row['customer_id']);
													if (count($profiles) > 0) 
													{ 
														foreach($profiles as $rows)
														{ ?>
                                                <td style="color:blue"><?php echo $rows['customer_name']; ?></td>
													<?php } } ?>
                                                <td style="color:red"><?php echo $row['type']; ?></td>
												<td style="color:green"><?php echo $row['invoice_no']; ?></td>
                                                <td><?php echo $row['date']; ?></td>
												<?php if($row['type'] == "Non GST") { ?>
                                                <td><?php echo $row['discount']; ?></td>
												<?php } elseif($row['type'] == "GST") { ?>
												<td><?php echo "-"; ?></td>
												<?php } ?>
												<td><?php echo $row['net_amount']; ?></td>
												<td style="display:flex;">
													<?php if($row['type'] == "GST") { ?>
													<a href="<?php echo base_url();?>index.php/Admin/List_Billing_History/<?php echo $tablename="invoice_add"; ?>/<?php echo $row['invoice_new']; ?>">
														<button type="button" class="btn btn-danger">View</button>
													</a>
													<?php } ?>
													<?php if($row['type'] == "Non GST") { ?>
													<a href="<?php echo base_url();?>index.php/Admin/List_NonBilling_History/<?php echo $tablename="invoice_add"; ?>/<?php echo $row['invoice_non']; ?>">
														<button type="button" class="btn btn-danger">View</button>
													</a>
													<?php } ?>
													<?php if($row['type'] == "GST") { ?>
													<a href="<?php echo base_url();?>index.php/Admin/Print_Invoice_Billing/<?php echo $tablename="invoice_add"; ?>/<?php echo $row['invoice_new']; ?>">
														<button style="margin-left:10px" type="button" class="btn btn-info">Print</button>
													</a>
													<?php } ?>
													<?php if($row['type'] == "Non GST") { ?>
													<a href="<?php echo base_url();?>index.php/Admin/Print_NonInvoice_Billing/<?php echo $tablename="invoice_add"; ?>/<?php echo $row['invoice_non']; ?>">
														<button style="margin-left:10px" type="button" class="btn btn-info">Print</button>
													</a>
													<?php } ?>
													<?php if($row['type'] == "GST") { ?>
													<a href="<?php echo base_url(); ?>index.php/Admin/Edit_Billing/<?php echo $tablename="invoice_add"; ?>/<?php echo $row['invoice_new']; ?>">
														<button type="button" style="margin-left:10px" class="btn btn-danger">Edit</button>
													</a>
													<?php } ?>
													<?php if($row['type'] == "Non GST") { ?>
													<a href="<?php echo base_url(); ?>index.php/Admin/Edit_Billing_GST/<?php echo $tablename="invoice_add"; ?>/<?php echo $row['invoice_non']; ?>">
														<button type="button" style="margin-left:10px" class="btn btn-danger">Edit</button>
													</a>
													<?php } ?>
													<?php if($row['type'] == "GST") { ?>
													<a href="<?php echo base_url(); ?>index.php/Admin/Delete_Billing_GST/<?php echo $tablename="invoice_add"; ?>/<?php echo $row['invoice_new']; ?>">
														<button style="margin-left:10px" type="button" class="btn btn-info">Delete</button>
													</a>
													<?php } ?>
													<?php if($row['type'] == "Non GST") { ?>
													<a href="<?php echo base_url(); ?>index.php/Admin/Delete_Billing_NonGST/<?php echo $tablename="invoice_add"; ?>/<?php echo $row['invoice_non']; ?>">
														<button style="margin-left:10px" type="button" class="btn btn-info">Delete</button>
													</a>
													<?php } ?>
												</td>
                                            </tr>
											<?php $i++; } } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th style="color:black">S.No</th>
                                                <th style="color:black">Customer Name</th>
												<th style="color:black">Bill Type</th>
                                                <th style="color:black">Invoice Number</th>
                                                <th style="color:black">Date</th>
                                                <th style="color:black">Discount</th>
												<th style="color:black">Total Amount</th>
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