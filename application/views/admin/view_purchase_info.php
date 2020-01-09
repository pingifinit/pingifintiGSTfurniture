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
                                <h5 class="card-title">Purchase Datatable</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="color:black">S.No</th>
												<th style="color:black">Supplier Name</th>
												<th style="color:black">Address</th>
												<th style="color:black">Phone Number</th>
												<th style="color:black">Product Name</th>
                                                <th style="color:black">Quantity</th>
                                                <th style="color:black">Price Per 1</th>
												<th style="color:black">Total</th>
                                                <th style="color:black">Purchase Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php $profile = $this->Admin_model->table_column($tablename="purchase", $column="id", $val=$id);
											$i=1;
											if (count($profile) > 0) 
											{ 
												foreach($profile as $row)
												{ ?>
											<tr>
                                                <td> <?php echo $i; ?> </td>
												<td style="color:red"> <?php echo $row['supplier_name']; ?> </td>
												<td> <?php echo $row['supplier_address']; ?> </td>
												<td> <?php echo $row['supplier_name']; ?> </td>
                                                <td style="color:blue"> <?php echo $row['product_name']; ?> </td>
												<?php $profiles = $this->Admin_model->table_column_val($tablename="quantity_list", $column="product_id", $val=$row['id']);
													if (count($profiles) > 0) 
													{ 
														foreach($profiles as $rows)
														{ ?>
                                                <td> <?php echo $rows['quantity']; ?> </td>
													<?php } } ?>
                                                <td> <?php echo $row['price']; ?> </td>
												<td> <?php echo $row['total']; ?> </td>
                                                <td> <?php echo $row['purchase_date']; ?> </td>
                                            </tr>
											<?php $i++; } } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th style="color:black">S.No</th>
												<th style="color:black">Supplier Name</th>
												<th style="color:black">Address</th>
												<th style="color:black">Phone Number</th>
                                                <th style="color:black">Product Name</th>
                                                <th style="color:black">Quantity</th>
                                                <th style="color:black">Price Per 1</th>
												<th style="color:black">Total</th>
                                                <th style="color:black">Purchase Date</th>
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