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
						  <form action="<?php echo base_url();?>index.php/Admin/Insert_Purchase" method="post">
                            <div class="card-body">
                                <h5 class="card-title">Purchase Form Elements</h5>
                                <div class="form-group row">
                                    <label class="col-md-3 m-t-15">Supplier Name</label>
                                    <div class="col-sm-9">
										<input type="text" class="form-control" id="supplier_name" name="supplier_name" placeholder="Enter Supplier Name Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">Address</label>
                                    <div class="col-sm-9">
										<input type="text" class="form-control" id="supplier_address" name="supplier_address" placeholder="Enter Supplier Address Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">Phone</label>
                                    <div class="col-sm-9">
										<input type="text" class="form-control" id="supplier_phone" name="supplier_phone" placeholder="Enter Supplier Phone No Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">Product Name</label>
                                    <div class="col-sm-9">
										<input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter Product Name Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">Quantity</label>
                                    <div class="col-sm-9">
										<input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">Price Per 1 Product</label>
                                    <div class="col-sm-9">
										<input type="text" class="form-control" id="price" name="price" placeholder="Enter Price Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">Total</label>
                                    <div class="col-sm-9">
										<input type="text" class="form-control" id="total" name="total" placeholder="Enter Total Price Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">Purchase Date</label>
                                    <div class="col-sm-9">
										<input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" id="purchase_date" name="purchase_date" placeholder="Enter Purchase Date Here">
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

	<script>
	$('#total').click(function(){
			var total_amount = Number($('#quantity').val());
			var paid_amount = Number($('#price').val());
			var balance = (total_amount*paid_amount);
			$('#total').val(balance);
					
		});
	</script>
</body>