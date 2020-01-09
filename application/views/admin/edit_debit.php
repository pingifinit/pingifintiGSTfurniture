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
						<a href="<?php echo base_url();?>index.php/Admin/View/list_debit"><button style="width: 119px;margin-left: 85%;margin-top: 20px;" type="button" class="btn btn-secondary">Manage Debit</button></a>
						  <form action="<?php echo base_url();?>index.php/Admin/Edit_Debit_Info/<?php echo $tablename;?>/<?php echo $id; ?>" method="post">
                            <?php $profiles = $this->Admin_model->table_column($tablename="debit_info", $column="id", $val=$id);
								if (count($profiles) > 0) 
								{ 
									foreach($profiles as $rows)
									{ ?>
							<div class="card-body">
                                <h5 class="card-title">Form Elements</h5>
								
                                <div class="form-group row">
                                    <label class="col-md-3 m-t-15">Sub Category Name</label>
                                    <div class="col-sm-9">
										<select class="select2 form-control custom-select" id="sub_name" name="sub_name" style="width: 100%; height:36px;">
                                            <option value="<?php echo $rows['sub_name'];?>"><?php echo $rows['sub_name']; ?></option>
                                            <optgroup label="">
                                                <?php $profile = $this->Admin_model->table_column($tablename="expense_category");
													if (count($profile) > 0) 
													{ 
														foreach($profile as $row)
														{ ?>
														
														<option value="<?php echo $row['sub_name'];?>"><?php echo $row['sub_name']; ?></option>
												<?php } } ?>
                                            </optgroup>
                                        </select>
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">Category Name</label>
                                    <div class="col-sm-9">
										<input type="text" class="form-control" id="category_name" name="category_name" placeholder="Enter Category Name Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15">Pay 1</label>
                                    <div class="col-sm-9">
										<input type="text" class="form-control" id="pay1" value="<?php echo $rows['pay1']; ?>" name="pay1" placeholder="Enter Pay 1 Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15 reference">Total</label>
                                    <div class="col-sm-9">
										<input type="text" class="form-control" value="<?php echo $rows['total']; ?>" id="total" name="total" placeholder="Enter Total Here">
									</div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-3 m-t-15 staff">Debited Date</label>
                                    <div class="col-sm-9">
										<input type="date" class="form-control" value="<?php echo $rows['date']; ?>" id="date" name="date" placeholder="Enter Date Here">
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
				$('#sub_name').bind('change', function(){
				   var sub_name = $(this).val();
					var base_url = "<?php echo base_url(); ?>";
					$.ajax({
						url: base_url+'index.php/Admin/fetch_subname',
						type: 'POST',
						dataType:'json',
						data: "sub_name=" + sub_name,
						success: function(data) {
							console.log(data);
							$('#category_name').val(data.category_name);
						}
						
					});
				});
			   $('#sub_name').trigger('change');
			   $('#total').click(function(){
						var pay1 = Number($('#pay1').val());
						var pay2 = Number($('#pay2').val());
						var pay3 = Number($('#pay3').val());
						var balance_val = (pay1+pay2+pay3);
						$('#total').val(pay1);
				});
			</script>