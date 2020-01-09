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
                                
                                <div class="table-responsive">
                                    <div class="printableArea" id="printable"> 
									<h5 class="card-title" style="text-align:center">Product Stock Datatable</h5>
									<table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="color:black">S.No</th>
                                                <th style="color:black">Product Name</th>
                                                <th style="color:black">Quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php $profile = $this->Admin_model->table_column($tablename="product");
											$i=1;
											if (count($profile) > 0) 
											{ 
												foreach($profile as $row)
												{ ?>
											<tr>
                                                <td> <?php echo $i; ?> </td>
                                                <td style="color:blue"> <?php echo $row['product_name']; ?> </td>
												<?php $profiles = $this->Admin_model->table_column_data($tablename="stock_product", $column="product_id", $val=$row['id']);
													if (count($profiles) > 0) 
													{ 
														foreach($profiles as $rows)
														{ ?>
															<td> <?php echo $rows['quantity']; ?> </td>
												<?php } }?>
                                                
                                            </tr>
											<?php $i++; } } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th style="color:black">S.No</th>
                                                <th style="color:black">Product Name</th>
                                                <th style="color:black">Quantity</th>
                                            </tr>
                                        </tfoot>
                                    </table>
									</div>
									<div id="print" style="float:left">
										<button type="submit" class="btn btn-danger"><i class="fa fa-print" aria-hidden="true"></i> <span style="margin-left:10px">Print</span></button>
									</div>
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
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script src="<?php echo base_url();?>assets/printThis.js"></script>
			<script>
				$(document).ready(function(){
				  $("#print").click(function(){
					var base_url = "<?php echo base_url(); ?>";
					$(".printableArea").printThis({
					//	debug: true,
						importCSS: true,
						importStyle: true,//thrown in for extra measure
					//    loadCSS: base_url+'assets/chart.css'
						});
					});
				});
			</script>