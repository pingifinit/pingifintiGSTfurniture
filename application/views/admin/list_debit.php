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
								<a href="<?php echo base_url();?>index.php/Admin/View/add_debit"><button style="width: 119px;margin-left: 85%;margin-top: 20px;" type="button" class="btn btn-secondary">Add Debit</button></a>
								<div class="row" style="">
								<div class="mr15 DTTT_container col-md-12">
									<form action="" method="post" class="form-horizontal row">
										<div class="form-group col-md-6">
											<label class="col-lg-4 col-md-4 control-label">Minimum Date:</label>
											<div class="col-lg-8 col-md-8">
											<?php
												  $first_date = date('Y-m-01');
											?>
												<input type="date" value="<?php echo $first_date; ?>" class="form-control" id="min" name="min">
											</div>
										</div>
										<div class="form-group col-md-6">
											<label class="col-lg-4 col-md-4 control-label">Maximum Date:</label>
											<div class="col-lg-8 col-md-8">
											<?php
												  $last_date = date('Y-m-t');
											?>
											<input type="date" value="<?php echo $last_date; ?>" class="form-control" id="max" name="max">
											</div>
										</div>
									  </form>
								</div>
								</div>
                                <div class="table-responsive">
                                    <table id="mytable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="color:black">S.No</th>
                                                <th style="color:black">Category Name</th>
												<th style="color:black">Sub Name</th>
                                                <th style="color:black">Pay</th>
                                                <th style="color:black">Total</th>
												<th style="color:black">Date</th>
												<th style="color:black">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										  <?php $profile = $this->Admin_model->table_column($tablename="debit_table");
											$i=1;
											if (count($profile) > 0) 
											{ 
												foreach($profile as $row)
												{ ?>
											<tr>
                                                <td><?php echo $i; ?></td>
                                                <td style="color:blue"><?php echo $row['category_name']; ?></td>
                                                <td style="color:green"><?php echo $row['sub_name']; ?></td>
												<td><?php echo $row['pay1']; ?></td>
                                                <td><?php echo $row['total']; ?></td>
												<td><?php echo $row['date']; ?></td>
												<td style="display:flex">
													<a href="<?php echo base_url();?>index.php/Admin/Edit_Debit/<?php echo $tablename="debit_info"; ?>/<?php echo $row['id']; ?>">
														<button type="button" class="btn btn-danger">Edit</button>
													</a>
													<a href="<?php echo base_url();?>index.php/Admin/Delete_Debit/<?php echo $tablename="debit_info"; ?>/<?php echo $row['id']; ?>">
														<button type="button" style="margin-left:5px" class="btn btn-info">Delete</button>
													</a>
												</td>
                                            </tr>
											<?php $i++; } } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th style="color:black">S.No</th>
                                                <th style="color:black">Category Name</th>
												<th style="color:black">Sub Name</th>
                                                <th style="color:black">Pay</th>
                                                <th style="color:black">Total</th>
												<th style="color:black">Date</th>
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
			<script type="text/javascript" src="<?php echo base_url(); ?>assets/moment/moment.min.js"></script>
			<script type="text/javascript">
			$(document).ready(function() {
				$.fn.dataTable.ext.search.push(
					function (settings, data, dataIndex) {
						var min = $('#min').val();
						var max = $('#max').val();
						var createdAt = data[5] || 0;
						if (
							  (min == "" || max == "") ||
							  (moment(createdAt).isSameOrAfter(min) && moment(createdAt).isSameOrBefore(max))
							) {
							  return true;
							}
							return false;
					}
					);
						var table = $('#mytable').DataTable( {
							dom: 'Bfrtip',
							buttons: [
								  'copy',
								  'csv',
							]
						} );

						// Event listener to the two range filtering inputs to redraw on input
						$('#min, #max').change(function () {
							table.draw();
						});
			});
			</script>