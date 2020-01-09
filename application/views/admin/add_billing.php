<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">GST Quotation</h4>
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
                        <div class="card">
                            <div class="card-body">
                                <div class="quotation_main">
                                    <div class="header_part">
                                        <div class="logo_part">
                                            <img src="<?php echo base_url();?>assets/images/newlook_logo.jpg" alt="" width="100%" height="100%">
                                            <h3>All Kinds Of Interior Works</h3>
                                            <p>142/2,Aruna Complex,Old DSP Office,Perundurai,Erode-638052<br>Mobile No : 9566339994<br>GST : 33AMAPV1960G1Z5</p>
                                        </div>
                                    </div>
                                    <div class="table_part">
									  <form action="<?php echo base_url(); ?>index.php/Admin/Add_billing_data" method="post">
                                        <table class="table_cont">
                                            <tr>
                                                <td colspan="8" style="border:none;border-bottom:2px solid black;color:#f14a24;font-weight:bold">TAX INVOICE</td>
                                            </tr>
                                            <tr>
                                                <th colspan="6">
                                                    <div class="to2">
                                                        <h5 style="padding-left:10px;">INVOICE TO :</h5>
                                                        <p style="padding-left:10px;">M/S</p>
														<select name="customer_id" id="customer_id" style="width: 230px;margin-left:40px" class="form-control" tabindex="-1" title="">
															<option>Select Customer Name</option>
															<?php $profile = $this->Admin_model->table_column($tablename="customer");
																if (count($profile) > 0) 
																	{ 
																		foreach($profile as $row)
																		{ ?>
																    <option value="<?php echo $row['id']; ?>"><?php echo $row['customer_name']; ?></option>
																<?php } } ?>
														</select>
														<br>
                                                    </div>
                                                    <h5 style="padding-left:10px;margin:0px;">GSTIN :<span> <input style="width: 230px;margin-left: 75px;margin-top: -26px"  class="form-control" type="text" name="gst_num"/> </span></h5>
                                                </th>
                                                <th style="border-left:2px solid black;">
                                                <div class="to1" style="display:none">
                                                <h4>INVOICE NO</h4>
												<input class="form-control" id="invoice_no" type="text" name="invoice_no"/>
                                                </div>
                                                </th>
                                                <th style="border-left:2px solid black;">
                                                <div class="to1">
                                                    <h4>DATE :</h4>
													<input class="form-control" value="<?php echo date('Y-m-d'); ?>" id="date" type="date" name="date"/>
                                                </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td rowspan="2" class="sno">S.NO</td>
                                                <td rowspan="2">DESCRIPTION OF GOODS</td>
                                                <td colspan="2">SIZE</td>
                                                <td rowspan="2">QTY</td>
												<td rowspan="2" style="display:none">QTY1</td>
												<td rowspan="2" style="display:none">QTY2</td>
                                                <td rowspan="2">TOTAL SQFT</td>
                                                <td rowspan="2">RATE</td>
                                                <td rowspan="2">TOTAL AMOUNT</td>
                                            </tr>
                                            <tr>
                                                <td>WIDTH</td>
                                                <td>HEIGHT</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td colspan="6"></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td> <input class="form-control sub_id" type="text" name="sub_id[]"/> </td>
                                                <td> 
													<select name="product_id[]" id="product_id" class="form-control product_id" tabindex="-1" title="">
														<option>Select Product Name</option>
														<?php $profiles = $this->Admin_model->table_column($tablename="product");
															if (count($profiles) > 0) 
																{ 
																	foreach($profiles as $rows)
																	{ ?>
																<option value="<?php echo $rows['id']; ?>"><?php echo $rows['product_name']; ?></option>
															<?php } } ?>
													</select>
												</td>
                                                <td> <input class="form-control width" type="text" name="width[]"/> </td>
                                                <td> <input class="form-control height" type="text" name="height[]"/> </td>
                                                <td> <input class="form-control quantity" type="text" name="quantity[]"/> </td>
												<td style="display:none"> <input class="form-control quantity_act" type="text" /> </td>
												<td style="display:none"> <input class="form-control quantity_new" name="quantity_new[]" type="text" /> </td>
                                                <td> <input class="form-control total_sqft" type="text" name="total_sqft[]"/> </td>
                                                <td> <input class="form-control price_per1" type="text" name="price_per1[]"/> </td>
                                                <td> <input class="form-control amount" type="text" name="amount[]"/> </td>
												<td> 
													 <a href="javascript:void(0);" class="addCF">
														 <button type="button" style="float:right" id="btn1" class="btn btn-info btn-flat add"><i class="fa fa-plus-circle" aria-hidden="true"></i>
														 </button> 
													 </a>
												</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td colspan="4">TOTAL NO.OF SQFT</td>
                                                <td> <input class="form-control no_sqft" id="no_sqft" type="text" name="no_sqft"/> </td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td colspan="7">TOTAL AMOUNT</td>
                                                <td> <input class="form-control total_amount" id="total_amount" type="text" name="total_amount"/> </td>
                                            </tr>
                                            <tr>
                                                <td colspan="7">CGST 9%</td>
                                                <td> <input class="form-control cgst" id="cgst" type="text" name="cgst"/> </td>
                                            </tr>
                                            <tr>
                                                <td colspan="7">SGST 9%</td>
                                                <td> <input class="form-control sgst" id="sgst" type="text" name="sgst"/> </td>
                                            </tr>
                                            <tr>
                                                <td colspan="7">ROUND OFF</td>
                                                <td> <input class="form-control round_off" id="round_off" type="text" name="round_off"/> </td>
                                            </tr>
                                            <tr>
                                                <td colspan="7">GROUND TOTAL</td>
                                                <td> <input class="form-control net_amount" id="net_amount" type="text" name="net_amount"/> </td>
                                            </tr>
                                        </table>
                                    <div class="conclude">
                                        <div class="details">
                                            <div class="details_head">
                                            <h4 style="padding-top:5px;">BANK DETAILS</h4>
                                            </div>
                                            <?php $profile_new = $this->Admin_model->table_column_val($tablename="bank");
												if (count($profile_new) > 0) 
													{ 
														foreach($profile_new as $row_new)
														{ ?>
                                            <div class="bank_details">
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <h6>NAME <span style="margin-left:40px">:</span></h6>
                                                </div>
                                                <div class="col-md-6">
                                                    <p> <input style="margin-left: -70px;height: 24px; width:140%" value="<?php echo $row_new['name']; ?>" class="form-control" id="name_bank" type="text" name="name_bank"/> </p>
                                                </div>
                                                </div>
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <h6>BANK <span style="margin-left:40px">:</span></h6>
                                                </div>
                                                <div class="col-md-6">
                                                    <p> <input style="margin-left: -70px;height: 24px; width:140%" class="form-control" id="bank" value="<?php echo $row_new['bank']; ?>" type="text" name="bank"/> </p>
                                                </div>
                                                </div>
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <h6>A/C NO <span style="margin-left:30px">:</span></h6>
                                                </div>
                                                <div class="col-md-6">
                                                    <p> <input style="margin-left: -70px;height: 24px; width:140%" class="form-control" id="bank_ac_no" type="text" value="<?php echo $row_new['ac_num']; ?>" name="bank_ac_no"/> </p>
                                                </div>
                                                </div>
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <h6>IFSC CODE  <span style="margin-left:9px">:</span></h6>
                                                </div>
                                                <div class="col-md-6">
                                                    <P> <input style="margin-left: -70px;height: 24px; width:140%" class="form-control" value="<?php echo $row_new['ifsc_num']; ?>" id="bank_ifsc" type="text" name="bank_ifsc"/> </P>
                                                </div>
                                                </div>
                                            </div>
													<?php } }  ?>
                                        </div>
                                        <div class="footer_base">
                                            <div class="base_empty">

                                            </div>
                                            <div class="base">
                                                <h6 style="margin-left:60%;width:100%;">For NEWLOOK WINDOORS</h6>
                                            </div>
                                        </div>
                                    </div>
									<div style="margin-top:20px;float:right">
										   <a href="<?php echo base_url();?>index.php/Admin/View/add_billing">
												<button type="button" class="btn btn-danger">cancel</button>
											</a>
												<button type="submit" name="submit" id="save_qty" class="btn btn-info">Save</button>
									    </div>
									</form>
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
			<script type="text/javascript"></script>
			<script>
				$(document).ready(function(){
					$(".addCF").click(function(){
						$('<tr><td> <input class="form-control sub_id" type="text" name="sub_id[]"/> </td><td> <select name="product_id[]" id="product_id" class="form-control product_id" tabindex="-1" title=""><option>Select Product Name</option><?php $profiles = $this->Admin_model->table_column($tablename="product");if (count($profiles) > 0) { foreach($profiles as $rows){ ?><option value="<?php echo $rows['id']; ?>"><?php echo $rows['product_name']; ?></option><?php } } ?></select> </td><td> <input class="form-control width" type="text" name="width[]"/> </td><td> <input class="form-control height" type="text" name="height[]"/> </td><td> <input class="form-control quantity" type="text" name="quantity[]"/> </td><td style="display:none"> <input class="form-control quantity_act" type="text" /> </td><td style="display:none"> <input class="form-control quantity_new" name="quantity_new[]" type="text" /> </td><td> <input class="form-control total_sqft" type="text" name="total_sqft[]"/> </td><td> <input class="form-control price_per1" type="text" name="price_per1[]"/> </td><td> <input class="form-control amount" type="text" name="amount[]"/> </td><td> <a href="javascript:void(0);" class="remove_tr btn btn-danger btn-flat"><i class="fa fa-trash" aria-hidden="true"></a></td></tr>').insertAfter($(this).closest('tr'));
					});
				});
				$(document).on('click', "a.remove_tr", function() { 
					$(this).parent().parent().remove();
				});
			</script>
			<script>
				$(document).on('focus', ".total_sqft", function() {
					var $width = $(this).parents("tr").find("input[name^='width']");
					var $height = $(this).parents("tr").find("input[name^='height']");
					var $quantity = $(this).parents("tr").find("input[name^='quantity']");
					var $total_sqft = $(this).parents("tr").find("input[name^='total_sqft']");
					var a = 0;
					if ($width.val() == '' || $height.val() == '' || $quantity.val() == '') {
					  console.log("No values found.");
					  return false;
					} else {
					  console.log("Converting: ", $width.val(), $height.val(), $quantity.val());
					  var q = parseFloat($width.val());
					  var p = parseFloat($height.val());
					  var r = parseFloat($quantity.val());
					  console.log("Values found: ", q, p, r);
					}
					a = ((q * p)*r);
					$total_sqft.val(Math.round(a * 100) / 100);
				  });
			</script>
			<script>
				$(document).on('focus', ".amount", function() {
					var $total_sqft = $(this).parents("tr").find("input[name^='total_sqft']");
					var $price_per1 = $(this).parents("tr").find("input[name^='price_per1']");
					var $amount = $(this).parents("tr").find("input[name^='amount']");
					var b = 0;
					if ($total_sqft.val() == '' || $price_per1.val() == '') {
					  console.log("No values found.");
					  return false;
					} else {
					  console.log("Converting: ", $total_sqft.val(), $price_per1.val());
					  var r = parseFloat($total_sqft.val());
					  var s = parseFloat($price_per1.val());
					  console.log("Values found: ", r, s);
					}
					b = (r * s);
					$amount.val(Math.round(b * 100) / 100);
				});
				$(document).on("blur", ".total_sqft", function() {
						var total_val = 0;
						$(".total_sqft").each(function() {
						  if (!$(this).val() == '') {
							total_val = total_val + parseFloat($(this).val());
						  }
						})
						$("#no_sqft").val(total_val);
				 });
				 $(document).on("blur", ".amount", function() {
						var total = 0;
						$(".amount").each(function() {
						  if (!$(this).val() == '') {
							total = total + parseFloat($(this).val());
						  }
						})
						$("#total_amount").val(total);
				 });
				 $(document).on("blur", ".product_id", function() {						
							var product_id = $(this).val();
							var product_id_div = $(this);
							var base_url = "<?php echo base_url(); ?>";
							$.ajax({
								url: base_url+'index.php/Admin/Check_Stock',
								dataType: 'json',
								type: 'POST',
								data: "product_id=" + product_id,
								success: function(data) {
									var qty = (data.quantity);
									alert(qty +" "+"Stock Available");
									// $('.quantity_act').val(qty);
									 $(product_id_div).parent('td').next("td").next("td").next("td").next("td").find('input').val(qty);
								}
							});
						});
					$(document).on("blur", ".quantity", function() {	
						var quantity = $(this).val();
						var quantity_div = $(this);
						var quantity_act = $(this).parents("td").next("td").find("input").val();
						var new_qty = (quantity_act - quantity);
				//		alert(new_qty);
						$(quantity_div).parent('td').next("td").next("td").find('input').val(new_qty);
					});
				 $('#cgst').click(function(){
						var total_amount = Number($('#total_amount').val());
						var balance = ((18/100)*total_amount);
						var balance_gst_val = (balance/2)
						$('#cgst').val(balance_gst_val.toFixed(2));
						$('.sgst').val(balance_gst_val.toFixed(2));
						var balance_gst = (total_amount+balance);       // 
						var n = balance;
						$whole = Math.floor(n);
						$fraction = n - $whole; 
						if($fraction >= 0.50){
							var round_off = (100-$fraction);
							$whole_round_off = Math.floor(round_off);
							$fraction_val = round_off - $whole_round_off; 
							$("#round_off").val($fraction_val.toFixed(2));
						}else{
							var round = "-"
							$("#round_off").val(round);
						}
						var net_amount = balance_gst;
						$whole_net = Math.floor(net_amount);
						$fraction_amount = net_amount - $whole_net;
						if($fraction_amount >= .50){
						$('#net_amount').val($whole_net+1+".00");
						} else{
							$('#net_amount').val($whole_net+".00");
						}
				});
				
			</script>
			