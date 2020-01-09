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
                                <h5 class="card-title m-b-0">Customer Billing Data</h5>
                            </div>
							<?php $profiles = $this->Admin_model->table_column_group_name($tablename="invoice_add", $column="customer_id", $val=$customer_id);
								if (count($profiles) > 0) 
								{ 
									foreach($profiles as $rows)
									{ $sgst = $rows['sgst']; $cgst = $rows['cgst']; $discount = $rows['discount']; $type = $rows['type']; $round_off = $rows['round_off']; $net_amount = $rows['net_amount']; ?>
							<?php $profile = $this->Admin_model->table_column($tablename="customer", $column="id", $val=$rows['customer_id']);
								if (count($profile) > 0) 
								{ 
									foreach($profile as $row)
								{  $customer_name = $row['customer_name'];} } ?>
							<div class="row">
							<h4 style="margin-left:30%"> Customer Name: <span style="color:blue"><?php echo $customer_name; ?></span></h4>
							</div>
							<br>
							<div class="table-responsive">
							<table class="table">
                                  <thead>
                                            <tr>
                                                <th style="color:#777">S.No</th>
												<th style="color:#777">Type</th>
                                                <th style="color:#777">Invoice Number</th>
												<th style="color:#777">Product Name</th>
                                                <th style="color:#777">Height</th>
                                                <th style="color:#777">Width</th>
												<th style="color:#777">Quantity</th>
												<th style="color:#777">Total SQFT</th>
												<th style="color:#777">Price</th>
												<th style="color:#777">Discount</th>
                                            </tr>
                                        </thead>
                                  <tbody>
                                    <?php 
									$profile = $this->Admin_model->table_column($tablename="invoice_add", $column="customer_id", $val=$customer_id);
											$i=1;
											if (count($profile) > 0) 
											{ 
												foreach($profile as $row)
												{ ?>
											<tr>
                                                <td><?php echo $i; ?></td>
												<td style="color:blue"><?php echo $row['type']; ?></td>
												<td><?php echo $row['invoice_no']; ?></td>
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
												<td><?php echo $row['quantity']; ?></td>
												<td><?php echo $row['total_sqft']; ?></td>
												<td><?php echo $row['amount']; ?></td>
												<td><?php echo $row['discount']; ?></td>
												
                                            </tr>
											<?php $i++; } } ?>
                                  </tbody>
                            </table>
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