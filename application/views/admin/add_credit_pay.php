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
						  <form action="<?php echo base_url();?>index.php/Admin/Edit_Credit_Data/<?php echo $tablename; ?>/<?php echo $id; ?>" method="post">
                            <?php $profile = $this->Admin_model->table_column($tablename="credit_table", $column="id", $val=$id);
								$i=1;
								if (count($profile) > 0) 
								{ 
									foreach($profile as $row)
									{ ?>
							<div class="card-body">
                                <h5 class="card-title">Form Elements</h5>
                                <div class="form-group row">
                                    <label class="col-md-3 m-t-15">Name</label>
                                    <div class="col-sm-9">
										<input type="text" class="form-control" id="category_name" value="<?php echo $row['category_name']; ?>" name="category_name" placeholder="Enter Name Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">Sub Name</label>
                                    <div class="col-sm-9">
										<input type="text" class="form-control" id="sub_name" value="<?php echo $row['sub_name']; ?>" name="sub_name" placeholder="Enter Sub Name Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">Pay</label>
                                    <div class="col-sm-9">
										<input type="text" class="form-control" id="pay" name="pay" placeholder="Enter Pay Here">
									</div>
                                </div>
								<?php $profiles = $this->Admin_model->table_column_val($tablename="credit_history", $column="credit_id", $val=$id);
								if (count($profiles) > 0) 
								{ 
									foreach($profiles as $rows)
									{ ?>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">Paid Total Amount</label>
                                    <div class="col-sm-9">
										<input type="text" class="form-control" value="<?php echo $rows['total']; ?>" id="total" name="total" placeholder="Enter Total amount Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">Paid Date</label>
                                    <div class="col-sm-9">
										<input type="date" class="form-control" id="date" value="<?php echo $rows['date']; ?>" name="date" placeholder="Enter Total amount Here">
									</div>
                                </div>
								<?php } } ?>
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
				var total = Number($('#total').val());
				$('#pay').on('change', function(){
					var pay = Number($('#pay').val());
					var value = (pay+total);
					$('#total').val(value);
				});
			});
			</script>