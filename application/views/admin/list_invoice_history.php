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
                                <h5 class="card-title m-b-0">Customer Quotation Data</h5>
                            </div>
							<?php $profiles = $this->Admin_model->table_column_group_name($tablename="quotation_add", $column="invoice_new", $val=$invoice_new);
								if (count($profiles) > 0) 
								{ 
									foreach($profiles as $rows)
									{ $gst = $rows['gst']; $round_off = $rows['round_off']; $net_amount = $rows['net_amount']; ?>
							<?php $profile = $this->Admin_model->table_column($tablename="customer", $column="id", $val=$rows['customer_id']);
								if (count($profile) > 0) 
								{ 
									foreach($profile as $row)
								{  $customer_name = $row['customer_name'];} } ?>
							<div class="row">
							<h4 style="margin-left:20%"> Customer Name: <span style="color:blue"><?php echo $customer_name; ?></span></h4>
							<h4 style="margin-left:20%"> Invoice Number: <span style="color:blue"><?php echo $rows['invoice_no']; ?></span></h4>
							</div>
							<br>
							<div class="table-responsive">
							<table class="table">
                                  <thead>
                                            <tr>
                                                <th style="color:#777">S.No</th>
                                                <th style="color:#777">Product Name</th>
                                                <th style="color:#777">Height</th>
                                                <th style="color:#777">Width</th>
												<th style="color:#777">SQFT</th>
												<th style="color:#777">Quantity</th>
												<th style="color:#777">Total SQFT</th>
												<th style="color:#777">Price</th>
												<th style="color:#777">Total Amount</th>
                                            </tr>
                                        </thead>
                                  <tbody>
                                    <?php 
									$profile = $this->Admin_model->table_column($tablename="quotation_add", $column="invoice_new", $val=$invoice_new);
											$i=1;
											if (count($profile) > 0) 
											{ 
												foreach($profile as $row)
												{ ?>
											<tr>
                                                <td><?php echo $i; ?></td>
                                                <td style="color:#4c32e9">
													<?php $profile1 = $this->Admin_model->table_column($tablename="product", $column="id", $val=$row['product_id']);
														if (count($profile1) > 0) 
														{ 
															foreach($profile1 as $row1)
															{ ?>
																<?php echo $row1['product_name']; ?>
													<?php } } ?>
												</td>
                                                <td><?php echo $row['height']; ?></td>			
                                                <td><?php echo $row['width']; ?></td>
												<td><?php echo $row['sqft']; ?></td>
												<td><?php echo $row['quantity']; ?></td>
												<td><?php echo $row['total_sqft']; ?></td>
												<td><?php echo $row['price_per1']; ?></td>
												<td><?php echo $row['amount']; ?></td>
												
                                            </tr>
											<?php $i++; } } ?>
                                  </tbody>
								  <tfoot>
									  <tr>
									   <th colspan="8"><span style="float:right">GST: </span></th>
									   <th id="total_order"><?php echo $gst; ?></th>
									  </tr>
									  <tr>
									   <th colspan="8"><span style="float:right">Round Off: </span></th>
									   <th id="total_order"><?php echo $round_off; ?></th>
									  </tr>
									  <tr>
									   <th colspan="8"><span style="float:right;font-weight:bold">Net Amount: </span></th>
									   <th id="total_order"><span style="color:red">&#x20b9; <?php echo $net_amount; ?></span></th>
									  </tr>
								  </tfoot>
                            </table>
							<div style="display:flex; float:right">
								<a href="<?php echo base_url();?>index.php/Admin/Print_Invoice/<?php echo $tablename="quotation_add"; ?>/<?php echo $invoice_new; ?>">
									<button type="button" class="btn btn-danger">Print</button>
								</a>
							</div>
							</div>
								<?php } } ?>
								<br>
								<br>
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