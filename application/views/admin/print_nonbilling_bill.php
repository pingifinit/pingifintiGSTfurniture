<style>
	@media print {
    html, body{
        width:210mm;
        height:297mm;
    }
</style>
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
                <div class="printableArea" id="printable">  
				<div class="row media">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="quotation_main">
                                    <div class="header_part">
                                        <div class="logo_part">
                                            <img style="padding-top: 5px;" src="<?php echo base_url();?>assets/images/newlook_logo.jpg" alt="" width="100%" height="100%">
                                            <h3>All Kinds Of Interior Works</h3>
                                            <p>142/2,Aruna Complex,Old DSP Office,Perundurai,Erode-638052<br>Mobile No : 9566339994<br>GST : 33AMAPV1960G1Z5</p>
                                        </div>
                                    </div>
                                    <?php $profiles = $this->Admin_model->table_column_group_name($tablename="invoice_add", $column="invoice_non", $val=$invoice_non);
										if (count($profiles) > 0) 
										{ 
											foreach($profiles as $rows)
											{ ?>
									<div class="table_part">
                                        <table class="table_cont">
                                            <tr>
                                                <td colspan="8" style="border:none;border-bottom:2px solid black;color:#f14a24;font-weight:bold">ESTIMATE</td>
                                            </tr>
                                            <tr>
                                                <?php $profile = $this->Admin_model->table_column($tablename="customer", $column="id", $val=$rows['customer_id']);
													if (count($profile) > 0) 
													{ 
														foreach($profile as $row)
														{ ?>
												<th colspan="6">
                                                    <div class="to2">
                                                        <h5 style="padding-left:10px;margin-top:25px">TO :</h5>
                                                        <p style="padding-left:10px;margin-top:20px">Mr/Ms <span style="margin-left:10px;color:purple"><?php echo strtoupper($row['customer_name']); ?></span><br><span style="margin-left:38px;color:purple"><?php echo strtoupper($row['address']); ?></span></p> 
                                                    </div>
                                                    <?php $profile3 = $this->Admin_model->table_column($tablename="invoice_add", $column="customer_id", $val=$rows['customer_id']);
														if (count($profile3) > 0) 
														{ 
															foreach($profile3 as $row3)
																{ $invoice_num = $row3['invoice_no']; $date = $row3['date']; $gst_num = $row3['gst_num'];} } ?>
													<h5 style="padding-left:10px;margin:0px;margin-bottom:25px">PHONE : <span><?php echo $gst_num; ?></span></h5>
														
												</th>
													
                                                <th style="">
                                                <div class="to1">
                                                </div>
                                                </th>
                                                <th style="border-left:2px solid black;">
                                                <div class="to1">
                                                    <h4>DATE : </h4>
													<span style="margin-left:45px"><?php echo $date; ?></span>
                                                </div>
                                                </th>
												<?php } } ?>
                                            </tr>
                                            <tr>
                                                <td rowspan="2" class="sno">S.NO</td>
                                                <td rowspan="2">DESCRIPTION OF GOODS</td>
                                                <td colspan="2">SIZE</td>
                                                <td rowspan="2">QTY</td>
                                                <td rowspan="2">TOTAL SQFT</td>
                                                <td rowspan="2">RATE</td>
                                                <td rowspan="2">TOTAL AMOUNT</td>
                                            </tr>
                                            <tr>
                                                <td>WIDTH</td>
                                                <td>HEIGHT</td>
                                            </tr>
                                            
                                            <?php $profile1 = $this->Admin_model->table_column($tablename="invoice_add", $column="customer_id", $val = $rows['customer_id']);
												$i = 1;
												if (count($profile1) > 0) 
												{ 
													foreach($profile1 as $row1)
													{ ?>
											<tr>
                                                <td><?php echo $i; ?></td>
												<?php $profile2 = $this->Admin_model->table_column($tablename="product", $column="id", $val = $row1['product_id']);
												if (count($profile2) > 0) 
												{ 
													foreach($profile2 as $row2)
													{ ?>
                                                <td><?php echo $row2['product_name']; ?></td>
												<?php } } ?>
                                                <td><?php echo $row1['width']; ?></td>
                                                <td><?php echo $row1['height']; ?></td>
                                                <td><?php echo $row1['quantity']; ?></td>
                                                <td><?php echo $row1['total_sqft']; ?></td>
                                                <td><?php echo $row1['price_per1']; ?></td>
                                                <td><?php echo $row1['amount']; ?></td>
                                            </tr>
											<?php $i++; } } ?>	
                                            <tr>
                                                <td></td>
                                                <td colspan="4">TOTAL NO.OF SQFT</td>
                                                <td> <?php echo $rows['no_sqft']; ?></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td colspan="7">TOTAL AMOUNT</td>
                                                <td><?php echo $rows['total_amount']; ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="7">CGST 9%</td>
                                                <td> <?php echo $rows['cgst']; ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="7">SGST 9%</td>
                                                <td> <?php echo $rows['sgst']; ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="7">ROUND OFF</td>
                                                <td> <?php echo $rows['round_off']; ?></td>
                                            </tr>
											<?php if($rows['type'] == "Non GST") { ?>
											<tr>
                                                <td colspan="7">DISCOUNT</td>
                                                <td> <?php echo $rows['discount']; ?>.00</td>
                                            </tr>
											<?php } ?>
                                            <tr>
                                                <td colspan="7">GRAND TOTAL</td>
                                                <td> <?php echo $rows['net_amount']; ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="8" style="text-align:left;padding-left:20px;">
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
                                    <div class="conclude">
                                        <div class="footer_base" style="width:100%;">
                                        
                                            <div class="base" style="width:100%;height:100%;">
                                                <h6 style="float:right;width:30%;margin-top:50px;">For NEWLOOK WINDOORS</h6>
                                            </div>

                                           
                                        </div>
                                    </div>
                                    </div>
										<?php } } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				</div>
				<div style="float:right" id="print">
					<button type="submit" name="submit" class="btn btn-info">Print</button>
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
			<script type="text/javascript">
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