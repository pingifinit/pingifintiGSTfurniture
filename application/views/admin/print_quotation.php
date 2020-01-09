<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<div class="container-fluid table-responsive">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="printableArea" id="printable">        
				<div class="row media">
                    <div class="col-12">
                        <div class="card" style="margin-left:30px">
                            <div class="card-body table-resonsive">
                                <div class="quotation_main">
                                    <div class="header_part">
                                        <div class="logo_part">
                                            <img src="<?php echo base_url();?>assets/images/newlook_logo.jpg" alt="" width="100%" height="100%">
                                            <h3>All Kinds Of Interior Works</h3>
                                            <p>142/2,Aruna Complex,Old DSP Office,Perundurai,Erode-638052<br>Mobile No : 9566339994<br>GST : 33AAPFN0411K1ZF</p>
                                        </div>
                                    </div>
                                    <div class="table_part">
                                        <?php $profiles = $this->Admin_model->get_id($tablename="quotation_add");
												if (count($profiles) > 0) 
												{ 
													foreach($profiles as $rows)
													{ ?>
										<table class="table_cont">
                                            <tr>
                                                <th colspan="3">
                                                    <div class="to">
                                                        <h4>TO</h4>
														<div class="adress">
															<?php $profile = $this->Admin_model->table_column($tablename="customer", $column="id", $val=$rows['customer_id']);
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
                                            <?php $profile1 = $this->Admin_model->table_column($tablename="quotation_add", $column="customer_id", $val = $rows['customer_id']);
												$i = 1;
												if (count($profile1) > 0) 
												{ 
													foreach($profile1 as $row1)
													{ ?>
											<tr>
                                                <td> <?php echo $i; ?> </td>
                                                <td> <?php echo $row1['product_id']; ?> </td>
                                                <td> <?php echo $row1['width']; ?> </td>
                                                <td> <?php echo $row1['height']; ?> </td>
                                                <td> <?php echo $row1['sqft']; ?> </td>
                                                <td> <?php echo $row1['quantity']; ?> </td>
                                                <td> <?php echo $row1['total_sqft']; ?> </td>
                                                <td> <?php echo $row1['price_per1']; ?>.00 </td>
                                                <td> <?php echo $row1['amount']; ?>.00 </td>
                                            </tr>
												<?php $i++; } } ?>	
                                            <tr>
                                                <td colspan="5" style="color:#f14a24">TOTAL NO.OF SQFT</td>
                                                <td style="color:#f14a24"> <?php echo $rows['no_qty']; ?> </td>
                                                <td style="color:#f14a24"> <?php echo $rows['no_sqft']; ?> </td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td colspan="8" style="color:#f14a24">TOTAL</td>
                                                <td style="color:#985fd6"> <?php echo $rows['total_amount']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td colspan="8" style="color:#f1b4bf">GST 18%</td>
                                                <td> <?php echo $rows['gst']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td colspan="8" style="color:black">ROUND OFF</td>
                                                <td> <?php echo $rows['round_off']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td colspan="8" style="color:#f14a24">NET AMOUNT</td>
                                                <td style="color:#985fd6"> <?php echo $rows['net_amount']; ?> </td>
                                            </tr>
											<tr>
                                                <td colspan="8" style="color:black">AVERAGE PER SQFT</td>
                                                <td> <?php echo $rows['avg_sqft']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td colspan="9" style="text-align:left;padding-left:20px;color:#39dc39">
												<div style="width:100%;height:40px;">AMOUNT IN WORDS
												<?php
												   $number =  $rows['net_amount']; 
												   $no = round($number);
												   $point = round($number - $no, 2) * 100;
												   $hundred = null;
												   $digits_1 = strlen($no);
												   $i = 0;
												   $str = array();
												   $words = array('0' => '', '1' => 'One', '2' => 'Two',
													'3' => 'Three', '4' => 'Four', '5' => 'Five', '6' => 'Six',
													'7' => 'Seven', '8' => 'Eight', '9' => 'Nine',
													'10' => 'Ten', '11' => 'Eleven', '12' => 'Twelve',
													'13' => 'Thirteen', '14' => 'Fourteen',
													'15' => 'Fifteen', '16' => 'Sixteen', '17' => 'Seventeen',
													'18' => 'Eighteen', '19' =>'Nineteen', '20' => 'Twenty',
													'30' => 'Thirty', '40' => 'Forty', '50' => 'Fifty',
													'60' => 'Sixty', '70' => 'Seventy',
													'80' => 'Eighty', '90' => 'Ninety');
												   $digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
												   while ($i < $digits_1) {
													 $divider = ($i == 2) ? 10 : 100;
													 $number = floor($no % $divider);
													 $no = floor($no / $divider);
													 $i += ($divider == 10) ? 1 : 2;
													 if ($number) {
														$plural = (($counter = count($str)) && $number > 9) ? 's' : null;
														$hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
														$str [] = ($number < 21) ? $words[$number] .
															" " . $digits[$counter] . $plural . " " . $hundred
															:
															$words[floor($number / 10) * 10]
															. " " . $words[$number % 10] . " "
															. $digits[$counter] . $plural . " " . $hundred;
													 } else $str[] = null;
												  }
												  $str = array_reverse($str);
												  $result = implode('', $str);
												  $number_val =  "(".$result . "Rupees Only)";

												?>
												<br>
												<p style="color:black;margin-left:120px;"><?php echo $number_val; ?></p></div></td>

                                            </tr>
                                        </table>
										<?php $i++; } } ?>
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
				</div>
				<div style="float:right" id="print">
					<a href="<?php echo base_url();?>index.php/Admin/Print_Quotation"><button type="submit" name="submit" class="btn btn-info">Print</button></a>
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