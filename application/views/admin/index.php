<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
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
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
					<?php 
					$quantity = 0;
					$profile = $this->Admin_model->table_column($tablename="invoice_add");
						if (count($profile) > 0) 
						{ 
							foreach($profile as $row)
							{ $quantity += $row['quantity'];} }?>
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class=""></i><span style="font-weight:bold"><?php echo $quantity; ?></span></h1>
                                <h6 class="text-white">Total Orders</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
					<?php 
					$profile = $this->Admin_model->table_column($tablename="customer");
					$count = count($profile); ?>
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class=""></i><span style="font-weight:bold"><?php echo $count; ?></span></h1>
                                <h6 class="text-white">Total Customers</h6>
                            </div>
                        </div>
                    </div>
                     <!-- Column -->
					<?php 
					$net_amount = 0;
					$profile = $this->Admin_model->invoice_group($tablename="invoice_add");
						if (count($profile) > 0) 
						{ 
							foreach($profile as $row)
							{ $net_amount += $row['net_amount'];} }?>
					  <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class=""></i><?php echo $net_amount; ?></h1>
                                <h6 class="text-white">Month Income</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Today Sold Products</h5>
                            </div>
                            <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Customer Name</th>
                                      <th scope="col">Invoice Number</th>
                                      <th scope="col">Net Amount</th>
									  <th scope="col">Date</th>
                                    </tr>
                                  </thead>
                                  <tbody> 
                                    <?php 
										$i = 1;
										$profile = $this->Admin_model->invoice_group_date($tablename="invoice_add");
											if (count($profile) > 0) 
											{ 
												foreach($profile as $row)
												{ ?>
									<tr>
                                      <th scope="row"><?php echo $i; ?></th>
									  <?php 
										$profiles = $this->Admin_model->table_column($tablename="customer", $column="id", $val=$row['customer_id']);
											if (count($profiles) > 0) 
											{ 
												foreach($profiles as $rows)
													{ $customer_name = $rows['customer_name']; } }?>
                                      <td><?php echo $customer_name; ?></td>
                                      <td><?php echo $row['invoice_no']; ?></td>
									  <td><?php echo $row['net_amount']; ?></td>
									  <td><?php echo $row['date']; ?></td>
                                    </tr>
											<?php $i++; } } ?>
                                  </tbody>
                            </table>
                        </div>
					</div>
				</div>
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>