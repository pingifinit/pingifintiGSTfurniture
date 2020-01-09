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
                                                <th style="color:black">Address</th>
                                                <th style="color:black">Email</th>
												<th style="color:black">Designation</th>
												<th style="color:black">Salary</th>
												<th style="color:black">Date Of Joining</th>
												<th style="color:black">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php $profile = $this->Admin_model->table_column($tablename="employee");
											$i=1;
											if (count($profile) > 0) 
											{ 
												foreach($profile as $row)
												{ ?>
											<tr>
                                                <td> <?php echo $i; ?> </td>
                                                <td style="color:blue"> <?php echo $row['name']; ?> </td>
                                                <td> <?php echo $row['contact']; ?> </td>
                                                <td> <?php echo $row['address']; ?> </td>
                                                <td> <?php echo $row['email']; ?> </td>
                                                <td style="color:green"> <?php echo $row['designation']; ?> </td>
												<td> <?php echo $row['salary']; ?> </td>
												<td> <?php echo $row['joining_date']; ?> </td>
												<td style="display:flex">
													<a href="<?php echo base_url();?>index.php/Admin/Edit_Employee/<?php echo $tablename="employee"; ?>/<?php echo $row['id']; ?>">
														<button type="button" class="btn btn-danger">Edit</button>
													</a>
													<a href="<?php echo base_url();?>index.php/Admin/Delete_Employee/<?php echo $tablename="employee"; ?>/<?php echo $row['id']; ?>">
														<button type="button" class="btn btn-info">Delete</button>
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
                                                <th style="color:black">Address</th>
                                                <th style="color:black">Email</th>
												<th style="color:black">Designation</th>
												<th style="color:black">Salary</th>
												<th style="color:black">Date Of Joining</th>
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