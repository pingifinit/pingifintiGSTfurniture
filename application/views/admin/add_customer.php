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
						  <form action="<?php echo base_url();?>index.php/Admin/Insert_Customer" method="post">
                            <div class="card-body">
                                <h5 class="card-title">Form Elements</h5>
                                <div class="form-group row">
                                    <label class="col-md-3 m-t-15">Customer Name</label>
                                    <div class="col-sm-9">
										<input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Enter Customer Name Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">Contact</label>
                                    <div class="col-sm-9">
										<input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Contact Number Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">Secondary Contact</label>
                                    <div class="col-sm-9">
										<input type="text" class="form-control" id="contact_sec" name="contact_sec" placeholder="Enter Secondary Contact Number Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">Address</label>
                                    <div class="col-sm-9">
										<input style="height: 130%;" type="text" class="form-control" id="address" name="address" placeholder="Enter Customer Address Here">
									</div>
                                </div>
								<br>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">Business Category</label>
                                    <div class="col-sm-6">
										<select class="select2 form-control custom-select" name="category_name" style="width: 100%; height:36px;">
                                            <option>Select Business Category</option>
                                            <optgroup label="">
                                                <?php $profile = $this->Admin_model->table_column($tablename="category_table");
													if (count($profile) > 0) 
													{ 
														foreach($profile as $row)
														{ ?>
														<option value="<?php echo $row['id'];?>"><?php echo $row['category_name']; ?></option>
												<?php } } ?>
                                            </optgroup>
                                        </select>
									</div>
									<div class="col-sm-3">
										<a href="<?php echo base_url();?>index.php/Admin/add_category"><button type="button" name="submit" class="btn btn-primary">Add Business Categroy</button></a>
									</div>
                                </div>
								
								<br>
                                <div class="form-group row">
                                    <label class="col-md-3">Type</label>
                                    <div class="col-md-9 row type">
                                        <div class="custom-control custom-radio col-md-4">
                                            <input type="radio" class="custom-control-input" value="Direct" id="customControlValidation1" name="type">
                                            <label class="custom-control-label" for="customControlValidation1" id="direct">Direct</label>
                                        </div>
                                         <div class="custom-control custom-radio col-md-4">
                                            <input type="radio" class="custom-control-input" value="Reference" id="customControlValidation2" name="type">
                                            <label class="custom-control-label" for="customControlValidation2" id="reference">Reference</label>
                                        </div>
                                         <div class="custom-control custom-radio col-md-4">
                                            <input type="radio" class="custom-control-input" value="Staff" id="customControlValidation3" name="type">
                                            <label class="custom-control-label" for="customControlValidation3" id="staff">Staff</label>
                                        </div>
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15 reference">Reference Name</label>
                                    <div class="col-sm-9">
										<input style="height: 130%;" type="text" class="form-control reference" id="refer_name" name="refer_name" placeholder="Enter Reference Name Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15 staff">Staff Name</label>
                                    <div class="col-sm-9">
										<input style="height: 130%;" type="text" class="form-control staff" id="staff_name" name="staff_name" placeholder="Enter Staff Name Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15 gst_value">GST Number</label>
                                    <div class="col-sm-9">
										<input style="height: 130%;" type="text" class="form-control gst_value" id="gst_num" name="gst_num" placeholder="Enter GST Number Here">
									</div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
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