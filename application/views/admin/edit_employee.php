<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Form Basic</h4>
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
                    <div class="col-md-12">
                        <div class="card">
						  <form action="<?php echo base_url();?>index.php/Admin/Edit_Employee_Data/<?php echo $tablename; ?>/<?php echo $id; ?>" method="post">
                            <?php $profile = $this->Admin_model->table_column($tablename="employee");
								if (count($profile) > 0) 
								{ 
									foreach($profile as $row)
									{ ?>
							<div class="card-body">
                                <h5 class="card-title">Employee Form Elements</h5>
                                <div class="form-group row">
                                    <label class="col-md-3 m-t-15">Employee Name</label>
                                    <div class="col-sm-9">
										<input type="text" class="form-control" value="<?php echo $row['name']; ?>" id="name" name="name" placeholder="Enter Employee Name Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">Contact</label>
                                    <div class="col-sm-9">
										<input type="text" class="form-control" value="<?php echo $row['contact']; ?>" id="contact" name="contact" placeholder="Enter Contact Number Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">Address</label>
                                    <div class="col-sm-9">
										<input style="height: 130%;" value="<?php echo $row['address']; ?>" type="text" class="form-control" id="address" name="address" placeholder="Enter Customer Address Here">
									</div>
                                </div>
								<br>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">Email</label>
                                    <div class="col-sm-9">
										<input type="email" class="form-control" value="<?php echo $row['email']; ?>" id="email" name="email" placeholder="Enter Email Address Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">Designation</label>
                                    <div class="col-sm-9">
										<input type="text" class="form-control" value="<?php echo $row['designation']; ?>" id="designation" name="designation" placeholder="Enter Designation Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">Salary</label>
                                    <div class="col-sm-9">
										<input type="text" class="form-control" value="<?php echo $row['salary']; ?>" id="salary" name="salary" placeholder="Enter Salary Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">Date Of Joining</label>
                                    <div class="col-sm-9">
										<input type="date" class="form-control" value="<?php echo $row['joining_date']; ?>" id="joining_date" name="joining_date" placeholder="Enter Joining Date Here">
									</div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
								<?php } } ?>
						  </form>
                        </div>
                </div>
                <!-- editor -->
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
			<!-- footer -->
            <!-- ============================================================== -->
			<script src="<?php echo base_url();?>assets/libs/jquery/dist/jquery.min.js"></script>
			<script>
			$(document).ready(function() {
				$('.gst_value').css("display", "none");
				$('.gst_yes').click(function() {
					$('.gst_value').css("display", "block");
				});
				$('.type').bind('click', function() {
				var radio = $('input[name=type]:checked').val();
				if(radio === "Reference"){
				$('.reference').css("display", "block");
				} else{
				$('.reference').css("display", "none");
				}
				if(radio === "Staff"){
				$('.staff').css("display", "block");
				} else{
				$('.staff').css("display", "none");
				}
				});
				$('.type').trigger('click');
			});
			</script>