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
									  <form action="<?php echo base_url(); ?>index.php/Admin/Edit_quotation_data_bill/<?php echo $tablename; ?>/<?php echo $invoice_new; ?>" method="post">
                                        <?php 
										$profiles = $this->Admin_model->table_column_group_val_whr($tablename="quotation_add", $column="invoice_new", $val=$invoice_new);
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
														<select name="customer_id" id="customer_id" style="width: 230px;" class="form-control" tabindex="-1" title="">
															<?php $profile = $this->Admin_model->table_column($tablename="customer");
																if (count($profile) > 0) 
																	{ 
																		foreach($profile as $row)
																		{ ?>
																    <option value="<?php echo $row['id']; ?>" <?php if($row['id'] == $rows['customer_id']) { ?> selected <?php } ?>><?php echo $row['customer_name']; ?></option>
																<?php } } ?>
														</select>
															<br>
															<span style="font-weight:bold; color:black"></span>
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
                                                    <h5 style="color:#f14a24">DATE :<input class="form-control" type="date" value="<?php echo $rows['date']; ?>" name="date"/></h5>
                                                    <h5 style="color:#f14a24">QNO : <input class="form-control" type="text" name="invoice_no" value="<?php echo $rows['invoice_no']; ?>"/></h5>
													<?php
													$invoice_no = $rows['invoice_no'];
													$afterunderscore = substr($invoice_no, strpos($invoice_no, "/") + 1);
													$invoice_no_new = ($afterunderscore); 
													?>
													<h5 style="color:#f14a24;display:none">QNO : <input class="form-control" type="text" name="invoice_new" value="<?php echo $invoice_no_new; ?>"/></h5>
                                                </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td rowspan="2" class="sno" style="color:#f14a24">S.NO</td>
                                                <td rowspan="2" style="color:#f14a24">DESCRIPTION</td>
                                                <td colspan="2" style="color:#f14a24">SIZE</td>
                                                <td rowspan="2" style="color:#f14a24">IN SOFT</td>
                                                <td rowspan="2" style="color:#f14a24">QTY</td>
												<td rowspan="2" style="color:#f14a24;display:none">QTY_act</td>
												<td rowspan="2" style="color:#f14a24;display:none">QTY_new</td>
                                                <td rowspan="2" style="color:#f14a24">TOTAL SQFT</td>
                                                <td rowspan="2" style="color:#f14a24">RATE</td>
                                                <td rowspan="2" style="color:#f14a24">TOTAL AMOUNT</td>
                                            </tr>
                                            <tr>
                                                <td style="color:#f14a24">WIDTH</td>
                                                <td style="color:#f14a24">HEIGHT</td>
                                            </tr>
											<?php 
												$profile1 = $this->Admin_model->table_column($tablename="quotation_add", $column="invoice_new", $val=$invoice_new);
													if (count($profile1) > 0) 
													{ 
														foreach($profile1 as $row1)
														{ ?>
											<tr id="mytable">
                                                <td style="width: 40px;"> <input class="form-control sub_id" value="<?php echo $row1['sub_id']; ?>" type="text" name="sub_id[]"/> </td>
												<td style="width: 40px;display:none"> <input class="form-control id" value="<?php echo $row1['id']; ?>" type="text" name="id[]"/> </td>
												<td> 
													<select name="product_id[]" id="product_id" class="form-control product_id" tabindex="-1" title="">

														<?php $profiles1 = $this->Admin_model->table_column($tablename="product");
															if (count($profiles1) > 0) 
																{ 
																	foreach($profiles1 as $rows1)
																	{ ?>
																<option value="<?php echo $rows1['id']; ?>" <?php if($rows1['id'] == $row1['product_id']) { ?> selected <?php } ?>><?php echo $rows1['product_name']; ?></option>
															<?php } } ?>
													</select>
												</td>
                                                <td> <input class="form-control width" type="text" value="<?php echo $row1['width']; ?>" name="width[]"/> </td>
                                                <td> <input class="form-control height" type="text" value="<?php echo $row1['height']; ?>" name="height[]"/> </td>
                                                <td> <input class="form-control sqft" type="text" value="<?php echo $row1['sqft']; ?>" name="sqft[]"/> </td>
                                                <td> <input class="form-control quantity" type="text" value="<?php echo $row1['quantity']; ?>" name="quantity[]"/> </td>
												<td style="display:none"> <input class="form-control quantity_act" type="text" /> </td>
												<td style="display:none"> <input class="form-control quantity_new" type="text" /> </td>
                                                <td> <input class="form-control total_sqft" type="text" value="<?php echo $row1['total_sqft']; ?>" name="total_sqft[]"/> </td>
                                                <td> <input class="form-control price_per1" type="text" value="<?php echo $row1['price_per1']; ?>" name="price_per1[]"/> </td>
                                                <td> <input class="form-control amount" type="text" value="<?php echo $row1['amount']; ?>" name="amount[]"/> </td>
                                            </tr>
													<?php } } ?>
                                            <tr>
                                                <td colspan="5" style="color:#f14a24">TOTAL NO.OF SQFT</td>
                                                <td style="color:#f14a24"><input type="text" class="form-control" value="<?php echo $rows['no_qty']; ?>" id="no_qty" name="no_qty"/></td>
                                                <td style="color:#f14a24"><input type="text" class="form-control" value="<?php echo $rows['no_sqft']; ?>" id="no_sqft" name="no_sqft"/></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td colspan="8" style="color:#f14a24">TOTAL</td>
                                                <td><input type="text" class="form-control" value="<?php echo $rows['total_amount']; ?>" id="total_amount" name="total_amount"/></td>
                                            </tr>
                                            <tr>
                                                <td colspan="8" style="color:#f1b4bf">GST 18%</td>
                                                <td><input type="text" class="form-control" value="<?php echo $rows['gst']; ?>" id="gst" name="gst"/></td>
                                            </tr>
                                            <tr>
                                                <td colspan="8" style="color:black">ROUND OFF</td>
                                                <td><input type="text" class="form-control" value="<?php echo $rows['round_off']; ?>" id="round_off" name="round_off"/></td>
                                            </tr>
                                            <tr>
                                                <td colspan="8" style="color:#f14a24">NET AMOUNT</td>
                                                <td><input type="text" class="form-control" value="<?php echo $rows['net_amount']; ?>" id="net_amount" name="net_amount"/></td>
                                            </tr>
											<tr>
                                                <td colspan="8" style="color:black">AVERAGE PER SQFT</td>
                                                <td><input type="text" class="form-control" value="<?php echo $rows['avg_sqft']; ?>" id="avg_sqft" name="avg_sqft"/></td>
                                            </tr>

                                        </table>
										<div style="margin-top:20px;float:right">
										   <a href="<?php echo base_url();?>index.php/Admin/View/add_quotation">
												<button type="button" class="btn btn-danger">cancel</button>
											</a>
												<button type="submit" name="submit" class="btn btn-info">Save</button>
									    </div>
											<?php } } ?>
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
			<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
			<script type="text/javascript"></script>
			<script>
				$(document).ready(function(){
					$(".addCF").click(function(){
						$('<tr><td> <input class="form-control sub_id" type="text" name="sub_id[]"/> </td><td> <select name="product_id[]" id="product_id" class="form-control product_id" tabindex="-1" title=""><option>Select Product Name</option><?php $profiles = $this->Admin_model->table_column($tablename="product");if (count($profiles) > 0){ foreach($profiles as $rows){ ?><option value="<?php echo $rows['id']; ?>"><?php echo $rows['product_name']; ?></option><?php } } ?></select> </td><td> <input class="form-control width" type="text" name="width[]"/> </td><td> <input class="form-control height" type="text" name="height[]"/> </td><td> <input class="form-control sqft" type="text" name="sqft[]"/> </td><td> <input class="form-control quantity" type="text"  name="quantity[]"/> </td><td style="display:none"> <input class="form-control quantity_act" type="text" /> </td><td style="display:none"> <input class="form-control quantity_new" type="text" /> </td><td> <input class="form-control total_sqft" type="text" name="total_sqft[]"/> </td><td> <input class="form-control price_per1" type="text" name="price_per1[]"/> </td><td> <input class="form-control amount" type="text" name="amount[]"/> </td><td> <a href="javascript:void(0);" class="remove_tr btn btn-danger btn-flat add"><i class="fa fa-trash" aria-hidden="true"></i></a></td></tr>').insertAfter($(this).closest('tr'));
					});
				});
				$(document).on('click', "a.remove_tr", function() { 
					$(this).parent().parent().remove();
				});
			</script>
			<script>
				$(document).on('focus', ".sqft", function() {
					var $width = $(this).parents("tr").find("input[name^='width']");
					var $height = $(this).parents("tr").find("input[name^='height']");
					var $sqft = $(this).parents("tr").find("input[name^='sqft']");
					var a = 0;
					if ($width.val() == '' || $height.val() == '') {
					  console.log("No values found.");
					  return false;
					} else {
					  console.log("Converting: ", $width.val(), $height.val());
					  var q = parseFloat($width.val());
					  var p = parseFloat($height.val());
					  console.log("Values found: ", q, p);
					}
					a = q * p;
					$sqft.val(Math.round(a * 100) / 100);
				  });
			</script>
			<script>
				  $(document).on('focus', ".total_sqft", function() {
					var $sqft = $(this).parents("tr").find("input[name^='sqft']");
					var $quantity = $(this).parents("tr").find("input[name^='quantity']");
					var $total_sqft = $(this).parents("tr").find("input[name^='total_sqft']");
					var b = 0;
					
					if ($sqft.val() == '' || $quantity.val() == '') {
					  console.log("No values found.");
					  return false;
					} else {
					  console.log("Converting: ", $sqft.val(), $quantity.val());
					  var r = parseFloat($sqft.val());
					  var s = parseFloat($quantity.val());
					  console.log("Values found: ", r, s);
					}
					b = r * s;
					$total_sqft.val(Math.round(b * 100) / 100);
				  });
				  $(document).on('focus', ".amount", function() {
						var $total_sqft = $(this).parents("tr").find("input[name^='total_sqft']");
						var $price_per1 = $(this).parents("tr").find("input[name^='price_per1']");
						var $amount = $(this).parents("tr").find("input[name^='amount']");
						var c = 0;
						
						if ($total_sqft.val() == '' || $price_per1.val() == '') {
						  console.log("No values found.");
						  return false;
						} else {
						  console.log("Converting: ", $total_sqft.val(), $price_per1.val());
						  var t = parseFloat($total_sqft.val());
						  var u = parseFloat($price_per1.val());
						  console.log("Values found: ", t, u);
						}
						c = t * u;
						$amount.val(Math.round(c * 100) / 100);
				  });
				  $(document).on("blur", ".quantity", function() {
						var total = 0;
						$(".quantity").each(function() {
						  if (!$(this).val() == '') {
							total = total + parseFloat($(this).val());
						  }
						})
						$("#no_qty").val(total);
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
						var total_amount = 0;
						$(".amount").each(function() {
						  if (!$(this).val() == '') {
							total_amount = total_amount + parseFloat($(this).val());
						  }
						})
						$("#total_amount").val(total_amount);
				  });
				  $('#gst').click(function(){
						var total_amount = Number($('#total_amount').val());
						var balance = ((18/100)*total_amount);
						var balance_gst = (total_amount+balance);
						$('#gst').val(balance.toFixed(2));
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
									// $('.quantity_act').val(qty);
									$(product_id_div).parent('td').next("td").next("td").next("td").next("td").next("td").find('input').val(qty);
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
					$('#avg_sqft').click(function(){
						var no_sqft_val = Number($('#no_sqft').val());
						var total_amount_val = Number($('#total_amount').val());
						var balance_val = (total_amount_val/no_sqft_val);
						$('#avg_sqft').val(balance_val.toFixed(2));
					});
			</script>