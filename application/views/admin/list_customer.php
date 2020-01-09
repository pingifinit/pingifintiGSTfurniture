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
                                                <th style="color:black">Name</th>
                                                <th style="color:black">Contact</th>
                                                <th style="color:black">Secondary Contact</th>
                                                <th style="color:black">Address</th>
                                                <th style="color:black">Business Category</th>
												<th style="color:black">Type</th>
												<th style="color:black">Reference Name</th>
												<th style="color:black">Staff Name</th>
												<th style="color:black">Gst Number</th>
												<th style="color:black">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										  <?php $profile = $this->Admin_model->table_column($tablename="customer");
											$i=1;
											if (count($profile) > 0) 
											{ 
												foreach($profile as $row)
												{ ?>
											<tr>
                                                <td><?php echo $i; ?></td>
                                                <td style="color:blue"><?php echo $row['customer_name']; ?></td>
                                                <td><?php echo $row['contact']; ?></td>
                                                <td><?php echo $row['contact_sec']; ?></td>
                                                <td><?php echo $row['address']; ?></td>
												<?php $profiles = $this->Admin_model->table_column($tablename="category_table", $column="id", $val=$row['category_name']);
													if (count($profiles) > 0) 
													{ 
														foreach($profiles as $rows)
														{ ?>
                                                <td style="color:red"><?php echo $rows['category_name']; ?></td>
													<?php } } ?>
												<td><?php echo $row['type']; ?></td>
												<td><?php echo $row['refer_name']; ?></td>
												<td><?php echo $row['staff_name']; ?></td>
												<td><?php echo $row['gst_num']; ?></td>
												<td style="display:flex">
													<a href="<?php echo base_url();?>index.php/Admin/Edit_Cutomer/<?php echo $tablename="customer"; ?>/<?php echo $row['id']; ?>">
														<button type="button" class="btn btn-danger">Edit</button>
													</a>
													<a href="<?php echo base_url();?>index.php/Admin/Delete_Customer/<?php echo $tablename="customer"; ?>/<?php echo $row['id']; ?>">
														<button type="button" style="margin-left:5px" class="btn btn-info">Delete</button>
													</a>
												</td>
                                            </tr>
											<?php $i++; } } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th style="color:black">S.No</th>
                                                <th style="color:black">Name</th>
                                                <th style="color:black">Contact</th>
                                                <th style="color:black">Secondary Contact</th>
                                                <th style="color:black">Address</th>
                                                <th style="color:black">Business Category</th>
												<th style="color:black">Type</th>
												<th style="color:black">Reference Name</th>
												<th style="color:black">Staff Name</th>
												<th style="color:black">Gst Number</th>
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