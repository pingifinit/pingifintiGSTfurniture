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
						  <form action="<?php echo base_url();?>index.php/Admin/Edit_Bank_Info_Data/<?php echo $tablename; ?>/<?php echo $id; ?>" method="post">
                            <?php $profile = $this->Admin_model->table_column($tablename="bank", $column="id", $val=$id);
								if (count($profile) > 0) 
								{ 
									foreach($profile as $row)
									{ ?>
							<div class="card-body">
                                <h5 class="card-title">Form Elements</h5>
                                <div class="form-group row">
                                    <label class="col-md-3 m-t-15">Name</label>
                                    <div class="col-sm-9">
										<input type="text" class="form-control" value="<?php echo $row['name']; ?>" id="bank_name" name="name" placeholder="Enter Name Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">Bank</label>
                                    <div class="col-sm-9">
										<input type="text" class="form-control" value="<?php echo $row['bank']; ?>" id="" name="bank" placeholder="Enter Bank Name Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">Account Number</label>
                                    <div class="col-sm-9">
										<input type="text" class="form-control" value="<?php echo $row['ac_num']; ?>" id="" name="ac_num" placeholder="Enter Account Number Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">IFSC Code</label>
                                    <div class="col-sm-9">
										<input style="height: 130%;" type="text" value="<?php echo $row['ifsc_num']; ?>" class="form-control" id="" name="ifsc_num" placeholder="Enter IFSC Code Here">
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