<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Quotation</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Quotation</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid table-responsive">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row media">
                    <div class="col-12">
                        <div class="card" style="margin-left:30px">
                            <div class="card-body table-resonsive">
                                <div class="quotation_main">
                                    <div class="header_part">
                                        <div class="logo_part">
                                            <img src="<?php echo base_url();?>assets/images/newlook_logo.jpg" alt="" width="100%" height="100%">
                                            <h3>All Kinds Of Interior Works</h3>
                                            <p>142/2,Aruna Complex,Old DSP Office,Perundurai,Erode-638052<br>Mobile No : 9566339994<br>GST : 33AMAPV1960G1Z5</p>
                                        </div>
                                    </div>
                                    <div class="table_part">
                                        <table class="table_cont">
                                            <tr>
                                                <th colspan="3">
                                                    <div class="to">
                                                        <h4>TO</h4>
														<div class="adress">
															<?php $profile = $this->Admin_model->table_column($tablename="customer", $column="id", $val=$customer_id);
																if (count($profile) > 0) 
																{ 
																	foreach($profile as $row)
																	{ ?>
															<span style="font-weight:bold; color:black"><?php echo strtoupper($row['customer_name']); ?></span>
															<br>
															<span style="font-weight:bold; color:black"><?php echo strtoupper($row['address']); ?></span>
																<?php } } ?>
														</div>
                                                    </div>
                                                </th>
                                                <th colspan="4">
                                                <div class="title">
                                                    <h4 style="color:orange">QUOTATION</h4>
                                                </div>
                                                </th>
                                                <th colspan="3">
                                                <div class="date">
                                                    <h5 style="color:#f14a24">DATE :<?php echo date('Y-m-d'); ?></h5>
                                                    <h5 style="color:#f14a24">QNO : 1</h5>
                                                </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td rowspan="2" class="sno" style="color:#f14a24">S.NO</td>
                                                <td rowspan="2" style="color:#f14a24">DESCRIPTION</td>
                                                <td colspan="2" style="color:#f14a24">SIZE</td>
                                                <td rowspan="2" style="color:#f14a24">IN SOFT</td>
                                                <td rowspan="2" style="color:#f14a24">QTY</td>
                                                <td rowspan="2" style="color:#f14a24">TOTAL SQFT</td>
                                                <td rowspan="2" style="color:#f14a24">RATE</td>
                                                <td rowspan="2" style="color:#f14a24">TOTAL AMOUNT</td>
                                            </tr>
                                            <tr>
                                                <td style="color:#f14a24">WIDTH</td>
                                                <td style="color:#f14a24">HEIGHT</td>
                                            </tr>
                                            <?php $profiles = $this->Admin_model->table_column($tablename="quotation_add", $column="customer_id", $val=$customer_id);
												$i=1;
												if (count($profiles) > 0) 
												{ 
													foreach($profiles as $rows)
													{ ?>
											<tr>
                                                <td> <?php echo $i; ?> </td>
                                                <td> <?php echo $rows['product_id']; ?> </td>
                                                <td> <?php echo $rows['width']; ?> </td>
                                                <td> <?php echo $rows['height']; ?> </td>
                                                <td> <?php echo $rows['sqft']; ?> </td>
                                                <td> <?php echo $rows['quantity']; ?> </td>
                                                <td> <?php echo $rows['total_sqft']; ?> </td>
                                                <td> <?php echo $rows['price_per1']; ?>.00 </td>
                                                <td> <?php echo $rows['amount']; ?>.00 </td>
                                            </tr>
												<?php $i++; } } ?>
                                            <tr>
                                                <td colspan="5" style="color:#f14a24">TOTAL NO.OF SQFT</td>
                                                <td style="color:#f14a24">0</td>
                                                <td style="color:#f14a24">0</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td colspan="8" style="color:#f14a24">TOTAL</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td colspan="8" style="color:#f1b4bf">GST</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td colspan="8" style="color:black">ROUND OFF</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td colspan="8" style="color:#f14a24">NET AMOUNT</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td colspan="9" style="text-align:left;padding-left:20px;color:#39dc39">AMOUNT IN WORDS</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="general">
                                        <h5>General Terms & Conditions</h5>
                                        <div class="row">
                                        <p class="col-md-3">Orders to be placed to </p>
                                        <p class="col-md-3">: M/s.NewLook windows</p>
                                        </div>
                                        <div class="row">
                                        <p class="col-md-3">Payment</p>
                                        <p class="col-md-3">: 50% advance along with order.</p>
                                        </div>
                                        <div class="row">
                                        <p class="col-md-3"> </p>
                                        <p class="col-md-3">: 40% Against delivery at site.</p>
                                        </div>
                                        <div class="row">
                                        <p class="col-md-3"> </p>
                                        <p class="col-md-3">: 10% after completion of work.</p>
                                        </div>
                                        <div class="row">
                                        <p class="col-md-3">Transport</p>
                                        <p class="col-md-3">: At actual pay by client</p>
                                        </div>
                                        <div class="row">
                                        <p class="col-md-3">Delivery Time</p>
                                        <p class="col-md-3">: 3 Days from the date of purchase order.</p>
                                        </div>
                                        <div class="row">
                                        <p class="col-md-3">Validity</p>
                                        <p class="col-md-3">: 30 days from the date of this offer.</p>
                                        </div>
                                        <div class="row">
                                        <p class="col-md-3">Civil works</p>
                                        <p class="col-md-3">: All the civil, scaffolding and any other works carrier by client.</p>
                                        </div>
                                        <p>We hope ,expecting your valuable orders at the earliest.</p>
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