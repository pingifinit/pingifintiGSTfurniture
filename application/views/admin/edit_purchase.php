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
						  <form action="<?php echo base_url();?>index.php/Admin/Edit_Purchase_Data/<?php echo $tablename; ?>/<?php echo $id; ?>" method="post">
                            <?php $profile = $this->Admin_model->table_column($tablename="purchase");
								if (count($profile) > 0) 
								{ 
									foreach($profile as $row)
									{ ?>
							<div class="card-body">
                                <h5 class="card-title">Purchase Form Elements</h5>
                                <div class="form-group row">
                                    <label class="col-md-3 m-t-15">Product Name</label>
                                    <div class="col-sm-9">
										<input type="text" class="form-control" id="product_name" value="<?php echo $row['product_name']; ?>" name="product_name" placeholder="Enter Product Name Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">Quantity</label>
                                    <div class="col-sm-9">
										<input type="text" class="form-control" id="quantity" value="<?php echo $row['quantity']; ?>" name="quantity" placeholder="Enter Quantity Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">Price Per 1 Product</label>
                                    <div class="col-sm-9">
										<input type="text" class="form-control" id="price" value="<?php echo $row['price']; ?>" name="price" placeholder="Enter Price Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">Total</label>
                                    <div class="col-sm-9">
										<input type="text" class="form-control" id="total" value="<?php echo $row['total']; ?>" name="total" placeholder="Enter Total Price Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">Purchase Date</label>
                                    <div class="col-sm-9">
										<input type="date" class="form-control" id="purchase_date" value="<?php echo $row['purchase_date']; ?>" name="purchase_date" placeholder="Enter Purchase Date Here">
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
			<footer class="footer text-center" style="margin-top:35%">
                <strong>Copyright &copy; 2019 <a href="http://web.kitkatsoftwaretechnologies.com">Kitkat Software Technologies</a>.</strong> All rights
    reserved.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url();?>assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url();?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url();?>dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url();?>dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url();?>dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="<?php echo base_url();?>assets/libs/flot/excanvas.js"></script>
    <script src="<?php echo base_url();?>assets/libs/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url();?>assets/libs/flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url();?>assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url();?>assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="<?php echo base_url();?>assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url();?>dist/js/pages/chart/chart-page-init.js"></script>
	<!-- this page js -->
    <script src="<?php echo base_url();?>assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="<?php echo base_url();?>assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="<?php echo base_url();?>assets/extra-libs/DataTables/datatables.min.js"></script>
	<script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
	<script>
	$('#total').click(function(){
			var total_amount = Number($('#quantity').val());
			var paid_amount = Number($('#price').val());
			var balance = (total_amount*paid_amount);
			$('#total').val(balance);
					
		});
	</script>
</body>