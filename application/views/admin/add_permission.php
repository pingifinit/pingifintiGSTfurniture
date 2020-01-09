<style>
/* Customize the label (the container) */
.container1 {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container1 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #7fa2ab52;
}

/* On mouse-over, add a grey background color */
.container1:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container1 input:checked ~ .checkmark {
  background-color: BLUE;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container1 input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container1 .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>
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
               <!---------Permission Add---------->
				<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Customer Quotation Data</h5>
                            </div>
							<div class="table-responsive">
							<table class="table border">
                                  <thead>
                                            <tr>
                                                <th style="text-align:center">Page Name</th>
												<?php $profile = $this->Admin_model->table_column($tablename="customer");
													if (count($profile) > 0) 
													{ 
														foreach($profile as $row)
														{ $id = $row['id'];?> 
												<th colspan = "4" style="text-align:center"><?php echo $row['customer_name']; ?></th>
													<?php } } ?>
                                            </tr>
											<tr>
                                                <th style="text-align:center"></th>
												<?php $profile = $this->Admin_model->table_column($tablename="customer");
													if (count($profile) > 0) 
													{ 
														foreach($profile as $row)
														{ $id = $row['id'];?> 
												<th style="text-align:center">View</th>
												<th style="text-align:center">Add</th>
												<th style="text-align:center">Edit</th>
												<th style="text-align:center">Delete</th>
													<?php } } ?>
                                            </tr>
                                        </thead>
                                  <tbody>
											 <?php $profile1 = $this->Admin_model->table_column($tablename="permission_table");
													if (count($profile1) > 0) 
													{ 
														foreach($profile1 as $row1)
														{ $id = $row['id'];?>
											<tr>
                                                
												<td style="text-align:center"><?php echo $row1['pages']; ?></td>
												
												<?php $profile = $this->Admin_model->table_column($tablename="customer");
													if (count($profile) > 0) 
													{ 
														foreach($profile as $row)
														{ $id = $row['id'];?> 
												<td style="text-align:center">
													<label class="container1">
													  <input type="checkbox" style="background-color:green" name="view" value="0" style="margin-left:30px">  <span style="font-weight:bold;font-size:15px"></span><br>
													  <span class="checkmark"></span>
													</label>
												</td>
												<td style="text-align:center">
												<label class="container1">
													  <input type="checkbox" style="background-color:green" name="add" value="0" style="margin-left:30px">  <span style="font-weight:bold;font-size:15px"></span><br>
													  <span class="checkmark"></span>
													</label>
												</td>
												<td style="text-align:center">
													<label class="container1">
													  <input type="checkbox" style="background-color:green" name="edit" value="0" style="margin-left:30px">  <span style="font-weight:bold;font-size:15px"></span><br>
													  <span class="checkmark"></span>
													</label>
												</td>
												<td style="text-align:center">
													<label class="container1">
													  <input type="checkbox" style="background-color:green" name="delete" value="0" style="margin-left:30px">  <span style="font-weight:bold;font-size:15px"></span><br>
													  <span class="checkmark"></span>
													</label>
												</td>
													<?php } } ?>
                                            </tr>
												<?php } } ?>
                                  </tbody>
                            </table>

							</div>
                        </div>
                    </div>
                </div>
			   <!---------End permission---------->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->