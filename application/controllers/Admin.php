<?php
class Admin extends CI_Controller{
	public $CI = NULL;
	function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('admin/login');
	}
	function Login()
	{
		$this->load->library('session');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$check = $this->Admin_model->user($username,$password); 
			if($check->num_rows()>0)
			{
				$check	= $check->row();
				$this->session->set_userdata('username',$check->username);
				$this->session->set_userdata('admin_id',$check->admin_id);
				$this->session->set_userdata('user_type',$check->user_type);
				$this->session->set_userdata('suc','Successfully Logged in..!');
				redirect('Admin/Dashboard');
			}
			else
			{
				$this->session->set_userdata('err','The username or password you entered is incorrect.');
				redirect('Admin/index');
			}
	}
	public function Dashboard()
	{
		$this->load->library('session');
		if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
		$this->load->view('includes/header');
		$this->load->view('includes/header_menu');
		$this->load->view('admin/index');
		$this->load->view('includes/footer');
	}
	public function Add_purchase()
	{
		$this->load->library('session');
		if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
		$this->load->view('includes/header');
		$this->load->view('includes/header_menu');
		$this->load->view('admin/add_purchase');
		$this->load->view('includes/footer');
	}
	public function Terms_Add()
	{
		$this->load->library('session');
		if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
		$this->load->view('includes/header');
		$this->load->view('includes/header_menu');
		$this->load->view('admin/add_terms');
	}
	public function Add_Product()
	{
		$this->load->library('session');
		if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
		$this->load->view('includes/header');
		$this->load->view('includes/header_menu');
		$this->load->view('admin/add_product');
	}
	public function add_category()
	{
			$this->load->library('session');
			if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$this->load->view('admin/add_category');
	}
	public function Invoice_Change()
	{
			$this->load->library('session');
			if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$this->load->view('admin/change_invoice');
	}
	public function Add_expense_category()
	{
			$this->load->library('session');
			if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$this->load->view('admin/add_expense_category');
	}
	public function Debit_Report()
	{
			$this->load->library('session');
			if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
			$this->load->view('admin/debit_report');
	}
	public function Credit_Report()
	{
			$this->load->library('session');
			if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
			$this->load->view('admin/credit_report');
	}
	public function view($view = FALSE)
	{
			$this->load->library('session');
			if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$this->load->view('admin/'.$view.'');
			$this->load->view('includes/footer');
	}
	public function View1($view = FALSE)
	{
			$this->load->library('session');
			if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$this->load->view('admin/'.$view.'');
			$this->load->view('includes/footer_1');
	}
	public function List_Quotation_History($tablename, $invoice_new)
	{
			$this->load->library('session');
			if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$data['tablename'] = $tablename;
			$data['invoice_new'] = $invoice_new;
			$this->load->view('admin/list_invoice_history', $data);
			$this->load->view('includes/footer');
	}
	public function List_Billing_History($tablename, $invoice_new)
	{
			$this->load->library('session');
			if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$data['tablename'] = $tablename;
			$data['invoice_new'] = $invoice_new;
			$this->load->view('admin/list_Billing_history', $data);
			$this->load->view('includes/footer');
	}
	public function List_NonBilling_History($tablename, $invoice_non)
	{
			$this->load->library('session');
			if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$data['tablename'] = $tablename;
			$data['invoice_non'] = $invoice_non;
			$this->load->view('admin/list_NonBilling_history', $data);
			$this->load->view('includes/footer');
	}
	public function View_Purchase($tablename, $id)
	{
			$this->load->library('session');
			if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$data['tablename'] = $tablename;
			$data['id'] = $id;
			$this->load->view('admin/view_purchase_info', $data);
			$this->load->view('includes/footer');
	}
	public function Print_Invoice($tablename, $invoice_new)
	{
			$this->load->library('session');
			if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$data['tablename'] = $tablename;
			$data['invoice_new'] = $invoice_new;
			$this->load->view('admin/print_quotation_bill', $data);
			$this->load->view('includes/footer');
	}
	public function Edit_Quotation_Bill($tablename, $invoice_new)
	{
			$this->load->library('session');
			if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$data['tablename'] = $tablename;
			$data['invoice_new'] = $invoice_new;
		//	echo $invoice_new; exit;
		//	$invoice_no = str_replace('\\\\','/', $invoice_no);
		//	$invoice_no = str_replace('%2F', '/', urlencode($invoice_no));
			$this->load->view('admin/edit_quotation_bill', $data);
			$this->load->view('includes/footer');
	}
	public function Print_Invoice_Billing($tablename, $invoice_new)
	{
			$this->load->library('session');
			if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$data['tablename'] = $tablename;
			$data['invoice_new'] = $invoice_new;
			$this->load->view('admin/print_billing_bill', $data);
			$this->load->view('includes/footer');
	}
	public function Print_NonInvoice_Billing($tablename, $invoice_non)
	{
			$this->load->library('session');
			if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$data['tablename'] = $tablename;
			$data['invoice_non'] = $invoice_non;
			$this->load->view('admin/print_nonbilling_bill', $data);
			$this->load->view('includes/footer');
	}
	public function List_Customer_Info($tablename, $customer_id)
	{
			$this->load->library('session');
			if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$data['tablename'] = $tablename;
			$data['customer_id'] = $customer_id;
			$this->load->view('admin/list_customer_history', $data);
			$this->load->view('includes/footer');
	}
	function Insert_Category() 
	{
			$tablename = 'category_table';
			$columns = $fields['columns'] = $this->Admin_model->table($tablename);
			for($i=0;$i<count($columns);$i++)
				{
					if(($columns[$i]!="ticket_id")&&($columns[$i]!="photo"))
					{
						if($columns[$i]=="date_of_joining") {
							$date = date("Y-m-d", strtotime($this->input->post($columns[$i])));
							$data[$columns[$i]] = $date;
						} else{
							$data[$columns[$i]] = $this->input->post($columns[$i]);
						}
					}
				}
		    $insert = $this->Admin_model->create($tablename,$data);
			if($insert){
			    json_encode($data);
				redirect('admin/View/list_category');

			} else {
			    if($this->input->post('photo')){
			   	$file_element_name =  $this->input->post('photo');    
			    unlink('./assets/images/'.$file_element_name);
			    }
				redirect('admin/View/add_category');
			}
	}
	function Insert_Credit_Data() 
	{
			$tablename = 'credit_table';
			$columns = $fields['columns'] = $this->Admin_model->table($tablename);
			for($i=0;$i<count($columns);$i++)
				{
					if(($columns[$i]!="id")&&($columns[$i]!="photo"))
					{
						if($columns[$i]=="date_of_joining") {
							$date = date("Y-m-d", strtotime($this->input->post($columns[$i])));
							$data[$columns[$i]] = $date;
						} else{
							$data[$columns[$i]] = $this->input->post($columns[$i]);
						}
					}
				}
			$datas['sub_name'] = $data['sub_name'];
			$datas['category_name'] = $data['category_name'];
			$datas['date'] = $data['date'];
			$datas['pay'] = $data['pay'];
			$datas['total'] = $data['total'];
		    $datas['credit_id'] = $this->Admin_model->create($tablename,$data);
			$insert = $this->Admin_model->create($tablename = "credit_history",$datas);
			if($insert){
			    json_encode($data);
				redirect('admin/View/list_credit');

			} else {
			    if($this->input->post('photo')){
			   	$file_element_name =  $this->input->post('photo');    
			    unlink('./assets/images/'.$file_element_name);
			    }
				redirect('admin/View/add_credit');
			}
	}
	function Insert_Category_Expenses() 
	{
			$tablename = 'expense_category';
			$columns = $fields['columns'] = $this->Admin_model->table($tablename);
			for($i=0;$i<count($columns);$i++)
				{
					if(($columns[$i]!="ticket_id")&&($columns[$i]!="photo"))
					{
						if($columns[$i]=="date_of_joining") {
							$date = date("Y-m-d", strtotime($this->input->post($columns[$i])));
							$data[$columns[$i]] = $date;
						} else{
							$data[$columns[$i]] = $this->input->post($columns[$i]);
						}
					}
				}
		    $insert = $this->Admin_model->create($tablename,$data);
			if($insert){
			    json_encode($data);
				redirect('admin/View/list_expenses_category');

			} else {
			    if($this->input->post('photo')){
			   	$file_element_name =  $this->input->post('photo');    
			    unlink('./assets/images/'.$file_element_name);
			    }
				redirect('Admin/Add_expense_category');
			}
	}
	function Insert_Terms() 
	{
			$tablename = 'terms';
			$columns = $fields['columns'] = $this->Admin_model->table($tablename);
			for($i=0;$i<count($columns);$i++)
				{
					if(($columns[$i]!="ticket_id")&&($columns[$i]!="photo"))
					{
						if($columns[$i]=="date_of_joining") {
							$date = date("Y-m-d", strtotime($this->input->post($columns[$i])));
							$data[$columns[$i]] = $date;
						} else{
							$data[$columns[$i]] = $this->input->post($columns[$i]);
						}
					}
				}
		    $insert = $this->Admin_model->create($tablename,$data);
			if($insert){
			    json_encode($data);
				redirect('admin/View/list_terms');

			} else {
			    if($this->input->post('photo')){
			   	$file_element_name =  $this->input->post('photo');    
			    unlink('./assets/images/'.$file_element_name);
			    }
				redirect('Admin/Terms_Add');
			}
	}
	function Insert_Invoice() 
	{
			$tablename = 'invoice';
			$columns = $fields['columns'] = $this->Admin_model->table($tablename);
			for($i=0;$i<count($columns);$i++)
				{
					if(($columns[$i]!="ticket_id")&&($columns[$i]!="photo"))
					{
						if($columns[$i]=="date_of_joining") {
							$date = date("Y-m-d", strtotime($this->input->post($columns[$i])));
							$data[$columns[$i]] = $date;
						} else{
							$data[$columns[$i]] = $this->input->post($columns[$i]);
						}
					}
				}
			$profiles = $this->Admin_model->table_column_val($tablename="invoice");
			if (count($profiles) > 0) 
			{
				foreach($profiles as $rows)
				{
					$where_status['id'] = $rows['id'];
					$data_status['status'] = "0";
					$update = $this->Admin_model->update_all($tablename2 = "invoice",$data_status, $where_status);
				}
			}
			$data_insert['invoice'] = $data['invoice'];
			$data_insert['status'] = 1;
			
			$profile1 = $this->Admin_model->table_column_val($tablename3="quotation_add");
			if (count($profile1) > 0) 
			{
				foreach($profile1 as $row1)
				{
					$invoice_change = $row1['invoice_status'];
					$data1['invoice_status'] = "0";
					$where['id'] = $row1['id'];
				}
			}else{
				$data1['invoice_status'] = 1;
			}
			$update = $this->Admin_model->update_all($tablename3 = "quotation_add",$data1, $where);
			$insert = $this->Admin_model->create($tablename,$data_insert);
			if($insert){
			    json_encode($data);
				redirect('admin/View/list_invoice');

			} else {
			    if($this->input->post('photo')){
			   	$file_element_name =  $this->input->post('photo');    
			    unlink('./assets/images/'.$file_element_name);
			    }
				redirect('Admin/Invoice_Change');
			}
	}
	function Insert_Purchase() 
	{
			$tablename = 'purchase';
			$columns = $fields['columns'] = $this->Admin_model->table($tablename);
			for($i=0;$i<count($columns);$i++)
				{
					if(($columns[$i]!="ticket_id")&&($columns[$i]!="photo"))
					{
						if($columns[$i]=="date_of_joining") {
							$date = date("Y-m-d", strtotime($this->input->post($columns[$i])));
							$data[$columns[$i]] = $date;
						} else{
							$data[$columns[$i]] = $this->input->post($columns[$i]);
						}
					}
				}
			$datas['quantity'] = $data['quantity'];
		    $datas['product_id'] = $this->Admin_model->create($tablename,$data);
			$insert = $this->Admin_model->create($tablename = "quantity_list",$datas);
			if($insert){
			    json_encode($data);
				redirect('admin/View/list_purchase');

			} else {
			    if($this->input->post('photo')){
			   	$file_element_name =  $this->input->post('photo');    
			    unlink('./assets/images/'.$file_element_name);
			    }
				redirect('admin/View/add_purchase');
			}
	}
	function Insert_Customer() 
	{
			$tablename = 'customer';
			$columns = $fields['columns'] = $this->Admin_model->table($tablename);
			for($i=0;$i<count($columns);$i++)
				{
					if(($columns[$i]!="ticket_id")&&($columns[$i]!="photo"))
					{
						if($columns[$i]=="date_of_joining") {
							$date = date("Y-m-d", strtotime($this->input->post($columns[$i])));
							$data[$columns[$i]] = $date;
						} else{
							$data[$columns[$i]] = $this->input->post($columns[$i]);
						}
					}
				}
		    $insert = $this->Admin_model->create($tablename,$data);
			if($insert){
			    json_encode($data);
				redirect('admin/View/list_customer');

			} else {
			    if($this->input->post('photo')){
			   	$file_element_name =  $this->input->post('photo');    
			    unlink('./assets/images/'.$file_element_name);
			    }
				redirect('admin/View/add_customer');
			}
	}
	function Insert_Billing() 
	{
			$tablename = 'quotation_add';
			$columns = $fields['columns'] = $this->Admin_model->table($tablename);
			for($i=0;$i<count($columns);$i++)
				{
					if(($columns[$i]!="id")&&($columns[$i]!="photo"))
					{
						if($columns[$i]=="date_of_joining") {
							$date = date("Y-m-d", strtotime($this->input->post($columns[$i])));
							$data[$columns[$i]] = $date;
						} else{
							$data[$columns[$i]] = $this->input->post($columns[$i]);
						}
					}
				}
		    $insert = $this->Admin_model->create($tablename,$data);
			if($insert){
			    json_encode($data);
				redirect('admin/View/list_quotation');

			} else {
				redirect('admin/View/add_quotation');
			}
	}
	function Insert_Debit_Info() 
	{
			$tablename = 'debit_table';
			$columns = $fields['columns'] = $this->Admin_model->table($tablename);
			for($i=0;$i<count($columns);$i++)
				{
					if(($columns[$i]!="id")&&($columns[$i]!="photo"))
					{
						if($columns[$i]=="date_of_joining") {
							$date = date("Y-m-d", strtotime($this->input->post($columns[$i])));
							$data[$columns[$i]] = $date;
						} else{
							$data[$columns[$i]] = $this->input->post($columns[$i]);
						}
					}
				}
		    $insert = $this->Admin_model->create($tablename,$data);
			if($insert){
			    json_encode($data);
				redirect('admin/View/list_debit');

			} else {
				redirect('admin/View/add_debit');
			}
	}
	function Insert_Employee() 
	{
			$tablename = 'employee';
			$columns = $fields['columns'] = $this->Admin_model->table($tablename);
			for($i=0;$i<count($columns);$i++)
				{
					if(($columns[$i]!="id")&&($columns[$i]!="photo"))
					{
						if($columns[$i]=="date_of_joining") {
							$date = date("Y-m-d", strtotime($this->input->post($columns[$i])));
							$data[$columns[$i]] = $date;
						} else{
							$data[$columns[$i]] = $this->input->post($columns[$i]);
						}
					}
				}
		    $insert = $this->Admin_model->create($tablename,$data);
			if($insert){
			    json_encode($data);
				redirect('admin/View/list_employee');

			} else {
				redirect('admin/View/add_employee');
			}
	}
	function Insert_Product() 
	{
			$tablename = 'product';
			$columns = $fields['columns'] = $this->Admin_model->table($tablename);
			for($i=0;$i<count($columns);$i++)
				{
					if(($columns[$i]!="id")&&($columns[$i]!="photo"))
					{
						if($columns[$i]=="date_of_joining") {
							$date = date("Y-m-d", strtotime($this->input->post($columns[$i])));
							$data[$columns[$i]] = $date;
						} else{
							$data[$columns[$i]] = $this->input->post($columns[$i]);
						}
					}
				}
			$datas['quantity'] = $data['quantity'];
		    $datas['product_id'] = $this->Admin_model->create($tablename,$data);
			$insert = $this->Admin_model->create($tablename1 = "stock_product",$datas);
			if($insert){
			    json_encode($data);
				redirect('admin/View/list_product');

			} else {
				redirect('admin/View/add_product');
			}
	}
	function Insert_Bank_Info() 
	{
			$tablename = 'bank';
			$columns = $fields['columns'] = $this->Admin_model->table($tablename);
			for($i=0;$i<count($columns);$i++)
				{
					if(($columns[$i]!="id")&&($columns[$i]!="photo"))
					{
						if($columns[$i]=="date_of_joining") {
							$date = date("Y-m-d", strtotime($this->input->post($columns[$i])));
							$data[$columns[$i]] = $date;
						} else{
							$data[$columns[$i]] = $this->input->post($columns[$i]);
						}
					}
				}
			$insert = $this->Admin_model->create($tablename,$data);
			if($insert){
			    json_encode($data);
				redirect('admin/View/list_info');

			} else {
				redirect('admin/View/add_bank_info');
			}
	}
	function Add_NonGst_billing_data_new()
		{
			{
			$tablename = 'invoice_add';
		    $columns = $fields['columns'] = $this->Admin_model->table($tablename); 
			for($i=0;$i<count($columns);$i++)
				{
					if($columns[$i]!="id")
					{
						$data[$columns[$i]] = $this->input->post($columns[$i]);
					}
					
					
				}
					$data['invoice_no'] = "";
					$data['invoice_new'] = "";
					$profiles = $this->Admin_model->table_column_val($tablename_new="invoice_add");
						if (count($profiles) > 0) 
						{
							foreach($profiles as $rows)
							{
								$invoice_new = $rows['invoice_non'];
								$data['invoice_non'] = $invoice_new+1;
							}
						}else{
							$data['invoice_non'] = 1;
						}
					$product_id = implode(',',$_POST['product_id']);  
					$sub_id = implode(',',$_POST['sub_id']); 
					$width = implode(',',$_POST['width']);
					$height = implode(',',$_POST['height']);
					$quantity = implode(',',$_POST['quantity']);
					$total_sqft = implode(',',$_POST['total_sqft']);
					$price_per1 = implode(',',$_POST['price_per1']);
					$amount = implode(',',$_POST['amount']);
					$quantity_new = implode(',',$_POST['quantity_new']);
					
					$product_id_exp = explode(',',$product_id);
					$sub_id_exp = explode(',',$sub_id);
					$width_exp = explode(',',$width);
					$height_exp = explode(',',$height);
					$quantity_exp = explode(',',$quantity);
					$total_sqft_exp = explode(',',$total_sqft);
					$price_per1_exp = explode(',',$price_per1);
					$amount_exp = explode(',',$amount);
					$quantity_new_exp = explode(',',$quantity_new);
					$count = count($product_id_exp); 
					
					for($w=0;$w<$count;$w++){
					if($product_id_exp[$w] != "") {
					$qty = $quantity_exp[$w];
					$data1['product_id'] = $data['product_id'] = $product_id_exp[$w];
				    $profile_new = $this->Admin_model->table_column_val($tablename1="stock_product", $column="product_id", $val=$product_id_exp[$w]);
						if (count($profile_new) > 0) 
							{ 
								foreach($profile_new as $row_new)
								{ 
									$product_id = $row_new['product_id'];
									$old_qty = $row_new['quantity'];
								//	echo $qty;
									$data1['quantity'] = $new_qty = ($old_qty - $quantity_exp[$w]);
								
								}
							}
					$data['sub_id'] = $sub_id_exp[$w];
					$data['width'] = $width_exp[$w];
					$data['height'] = $height_exp[$w];
					$data['quantity'] = $quantity_exp[$w];
					$data['total_sqft'] = $total_sqft_exp[$w];
					$data['price_per1'] = $price_per1_exp[$w];
					$data['amount'] = $amount_exp[$w];
					$data['type'] = "Non GST";
			
				    $insert = $this->Admin_model->create($tablename,$data);
				    $insert = $this->Admin_model->create($tablename1="stock_product",$data1);
				 	
					} 
					} 
			if($insert){
			  //  json_encode($data);
				redirect('admin/list_noninvoice_bill');
			//	$this->template->rander("attendance/index");

			} else {
			    $this->load->view('admin/add_billing');
			//	$this->template->rander("attendance/add_attendance");
			}
		  }
		}
	function Add_NonGst_billing_data()
		{
			{
			$tablename = 'invoice_add';
		    $columns = $fields['columns'] = $this->Admin_model->table($tablename); 
			for($i=0;$i<count($columns);$i++)
				{
					if($columns[$i]!="id")
					{
						$data[$columns[$i]] = $this->input->post($columns[$i]);
					}
					
					
				}
					$product_id = implode(',',$_POST['product_id']);  
					$sub_id = implode(',',$_POST['sub_id']); 
					$width = implode(',',$_POST['width']);
					$height = implode(',',$_POST['height']);
					$quantity = implode(',',$_POST['quantity']);
					$total_sqft = implode(',',$_POST['total_sqft']);
					$price_per1 = implode(',',$_POST['price_per1']);
					$amount = implode(',',$_POST['amount']);
					$quantity_new = implode(',',$_POST['quantity_new']);
					
					$product_id_exp = explode(',',$product_id);
					$sub_id_exp = explode(',',$sub_id);
					$width_exp = explode(',',$width);
					$height_exp = explode(',',$height);
					$quantity_exp = explode(',',$quantity);
					$total_sqft_exp = explode(',',$total_sqft);
					$price_per1_exp = explode(',',$price_per1);
					$amount_exp = explode(',',$amount);
					$quantity_new_exp = explode(',',$quantity_new);
					$count = count($product_id_exp); 
					
					// invoice number create
					$profiles = $this->Admin_model->table_column_val($tablename_new="invoice_add");
						if (count($profiles) > 0) 
						{
							foreach($profiles as $rows)
							{
								$invoice_new = $rows['invoice_non'];
								$data['invoice_non'] = $invoice_new+1;
							}
						}else{
							$data['invoice_non'] = 1;
						}
					
					for($w=0;$w<$count;$w++){
					if($product_id_exp[$w] != "") {
					$data1['product_id'] = $data['product_id'] = $product_id_exp[$w];
					$data['sub_id'] = $sub_id_exp[$w];
					$data['width'] = $width_exp[$w];
					$data['height'] = $height_exp[$w];
					$data['quantity'] = $quantity_exp[$w];
					$data['total_sqft'] = $total_sqft_exp[$w];
					$data['price_per1'] = $price_per1_exp[$w];
					$data['amount'] = $amount_exp[$w];
					$data1['quantity'] = $quantity_new_exp[$w];
					$data['type'] = "Non GST";
					$data['invoice_no'] = "";
					$data['invoice_new'] = "";
			
				    $insert = $this->Admin_model->create($tablename,$data);
					$insert = $this->Admin_model->create($tablename1="stock_product",$data1);
					}
					}
			if($insert){
			  //  json_encode($data);
				redirect('admin/list_noninvoice_bill');
			//	$this->template->rander("attendance/index");

			} else {
			    $this->load->view('admin/add_billing');
			//	$this->template->rander("attendance/add_attendance");
			}
		  }
		}
	function Add_billing_data()
		{
			{
			$tablename = 'invoice_add';
		    $columns = $fields['columns'] = $this->Admin_model->table($tablename); 
			for($i=0;$i<count($columns);$i++)
				{
					if($columns[$i]!="id")
					{
						$data[$columns[$i]] = $this->input->post($columns[$i]);
					}
					
					
				}
					$product_id = implode(',',$_POST['product_id']);  
					$sub_id = implode(',',$_POST['sub_id']); 
					$width = implode(',',$_POST['width']);
					$height = implode(',',$_POST['height']);
					$quantity = implode(',',$_POST['quantity']);
					$total_sqft = implode(',',$_POST['total_sqft']);
					$price_per1 = implode(',',$_POST['price_per1']);
					$amount = implode(',',$_POST['amount']); 
					$quantity_new = implode(',',$_POST['quantity_new']);
					
					$product_id_exp = explode(',',$product_id);
					$sub_id_exp = explode(',',$sub_id);
					$width_exp = explode(',',$width);
					$height_exp = explode(',',$height);
					$quantity_exp = explode(',',$quantity);
					$total_sqft_exp = explode(',',$total_sqft);
					$price_per1_exp = explode(',',$price_per1);
					$amount_exp = explode(',',$amount);
					$quantity_new_exp = explode(',',$quantity_new);
					$count = count($product_id_exp);
					// Invoice Number Generate
					$profiles = $this->Admin_model->table_column_val($tablename_new="invoice_add");
					//	echo count($profiles); exit;
						if (count($profiles) > 0) 
						{ 
							foreach($profiles as $rows) {
								if($rows['invoice_no'] !="") { 
									$invoice_no = $rows['invoice_no'];    //NLWD20-21/1
									$afterunderscore = substr($invoice_no, strpos($invoice_no, "/") + 1);
									$invoice_new = ($afterunderscore+1);
									$profiles1 = $this->Admin_model->table_column_val($tablename1="invoice");
										if (count($profiles1) > 0) 
										{
											foreach($profiles1 as $rows1)
											{ 
												$invoice = $rows1['invoice']; 
											} 
										}
									$data['invoice_no'] = $invoice."/".$invoice_new;
						    }
							else{
								$profile_data = $this->Admin_model->table_column_val($tablename_non="quotation_add");
								if (count($profile_data) > 0) 
									{
										foreach($profile_data as $row_data)
										{
											if($row_data['invoice_status'] != "0"){
												$invoice_no = $row_data['invoice_no'];    //NLWD20-21/3
												$afterunderscore = substr($invoice_no, strpos($invoice_no, "/") + 1);
												$invoice_new = ($afterunderscore+1);
												$profiles1 = $this->Admin_model->table_column_val($tablename1="invoice");
													if (count($profiles1) > 0) 
													{
														foreach($profiles1 as $rows1)
														{ 
															$invoice = $rows1['invoice']; 
														} 
													}
												$data['invoice_no'] = $invoice."/".$invoice_new;
											} else {
												$profiles1 = $this->Admin_model->table_column_val($tablename1="invoice");
													if (count($profiles1) > 0) 
													{
														foreach($profiles1 as $rows1)
														{ 															
															$invoice = $rows1['invoice']; 
														} 
													}
												$data['invoice_no'] = $invoice."/1";
											} 
										}
									} else{
										$profiles1 = $this->Admin_model->table_column_val($tablename1="invoice");
											if (count($profiles1) > 0) 
											{
												foreach($profiles1 as $rows1)
												{ 															
													$invoice = $rows1['invoice']; 
												} 
											}
										$data['invoice_no'] = $invoice."/1";
									}
								}
						   }
						}
						else{
								$profiles1 = $this->Admin_model->table_column_val($tablename1="invoice");
									if (count($profiles1) > 0) 
									{
										foreach($profiles1 as $rows1)
										{ 															
											$invoice = $rows1['invoice']; 
										} 
									}
								$data['invoice_no'] = $invoice."/1";
							}
					//invoice_new 
					$profiles = $this->Admin_model->table_column_val($tablename_new="invoice_add");
						if (count($profiles) > 0) 
						{
							foreach($profiles as $rows)
							{
								if($rows['invoice_new'] != ""){
									$invoice_new = $rows['invoice_new'];
									$data['invoice_new'] = $invoice_new+1;
								} else{
									$profile_data = $this->Admin_model->table_column_val($tablename_non="quotation_add");
									if (count($profile_data) > 0) 
										{
											foreach($profile_data as $row_data)
											{
												$invoice_new = $row_data['invoice_new'];
												$data['invoice_new'] = $invoice_new+1;
											}
										}
									else{
											$data['invoice_new'] = "1";
										}
								} 
							}
						}
						else{
								$data['invoice_new'] = "1";
							}
					//
					for($w=0;$w<$count;$w++){
					if($product_id_exp[$w] != "") {
					$data1['product_id'] = $data['product_id'] = $product_id_exp[$w];
					$data['sub_id'] = $sub_id_exp[$w];
					$data['width'] = $width_exp[$w];
					$data['height'] = $height_exp[$w];
					$data['quantity'] = $quantity_exp[$w];
					$data['total_sqft'] = $total_sqft_exp[$w];
					$data['price_per1'] = $price_per1_exp[$w];
					$data['amount'] = $amount_exp[$w];
					$data1['quantity'] = $quantity_new_exp[$w]; 
					$data['type'] = "GST";
					$data['discount'] = "";
					$data['invoice_non'] = "";

				    $insert = $this->Admin_model->create($tablename,$data);
					$insert = $this->Admin_model->create($tablename1="stock_product",$data1);
					}  }
			if($insert){
				redirect('admin/list_invoice_bill');

			} else {
			    $this->load->view('admin/add_billing');
			}
		  }
		}
	function Add_billing_data_new()
		{
			{
			$tablename = 'invoice_add';
		    $columns = $fields['columns'] = $this->Admin_model->table($tablename); 
			for($i=0;$i<count($columns);$i++)
				{
					if($columns[$i]!="id")
					{
						$data[$columns[$i]] = $this->input->post($columns[$i]);
					}
					
					
				}
					$product_id = implode(',',$_POST['product_id']);  
					$sub_id = implode(',',$_POST['sub_id']); 
					$width = implode(',',$_POST['width']);
					$height = implode(',',$_POST['height']);
					$quantity = implode(',',$_POST['quantity']);
					$total_sqft = implode(',',$_POST['total_sqft']);
					$price_per1 = implode(',',$_POST['price_per1']);
					$amount = implode(',',$_POST['amount']); 
					$quantity_new = implode(',',$_POST['quantity_new']);
					
					$product_id_exp = explode(',',$product_id);
					$sub_id_exp = explode(',',$sub_id);
					$width_exp = explode(',',$width);
					$height_exp = explode(',',$height);
					$quantity_exp = explode(',',$quantity);
					$total_sqft_exp = explode(',',$total_sqft);
					$price_per1_exp = explode(',',$price_per1);
					$amount_exp = explode(',',$amount);
					$quantity_new_exp = explode(',',$quantity_new);
					$count = count($product_id_exp); 
					
					for($w=0;$w<$count;$w++){
					if($product_id_exp[$w] != "") {
					$data1['product_id'] = $data['product_id'] = $product_id_exp[$w];
					$profile_new = $this->Admin_model->table_column_val($tablename1="stock_product", $column="product_id", $val=$product_id_exp[$w]);
						if (count($profile_new) > 0) 
							{ 
								foreach($profile_new as $row_new)
								{ 
								$old_qty = $row_new['quantity'];
							    $data1['quantity'] = $new_qty = ($old_qty - $quantity_exp[$w]);
								}
							}
					$data['sub_id'] = $sub_id_exp[$w];
					$data['width'] = $width_exp[$w];
					$data['height'] = $height_exp[$w];
					$data['quantity'] = $quantity_exp[$w];
					$data['total_sqft'] = $total_sqft_exp[$w];
					$data['price_per1'] = $price_per1_exp[$w];
					$data['amount'] = $amount_exp[$w];
			//		$data1['quantity'] = $quantity_new_exp[$w]; 
					$data['type'] = "GST";
					$data['discount'] = "";
					$data['invoice_non'] = "";
				    $insert = $this->Admin_model->create($tablename,$data);
				    $insert = $this->Admin_model->create($tablename1="stock_product",$data1);
					}  } 
			if($insert){
				redirect('admin/list_invoice_bill');

			} else {
			    $this->load->view('admin/add_billing');
			}
		  }
		}
	function Add_quotation_data()
		{
			{
			$tablename = 'quotation_add';
		    $columns = $fields['columns'] = $this->Admin_model->table($tablename); 
			for($i=0;$i<count($columns);$i++)
				{
					if($columns[$i]!="id")
					{
						$data[$columns[$i]] = $this->input->post($columns[$i]);
					}
					
					
				}
				    $data['customer_id'] = $_POST['customer_id'];
					$data['no_qty'] = $_POST['no_qty'];
					$data['no_sqft'] = $_POST['no_sqft'];
					$data['total_amount'] = $_POST['total_amount'];
					$data['gst'] = $_POST['gst'];
					$data['round_off'] = $_POST['round_off'];
					$data['net_amount'] = $_POST['net_amount'];
					$data['avg_sqft'] = $_POST['avg_sqft'];
					$product_id = implode(',',$_POST['product_id']);  
					$sub_id = implode(',',$_POST['sub_id']); 
					$width = implode(',',$_POST['width']);
					$height = implode(',',$_POST['height']);
					$sqft = implode(',',$_POST['sqft']);
					$quantity = implode(',',$_POST['quantity']);
					$total_sqft = implode(',',$_POST['total_sqft']);
					$price_per1 = implode(',',$_POST['price_per1']);
					$amount = implode(',',$_POST['amount']);
					$product_id_exp = explode(',',$product_id);
					$sub_id_exp = explode(',',$sub_id);
					$width_exp = explode(',',$width);
					$height_exp = explode(',',$height);
					$sqft_exp = explode(',',$sqft);
					$quantity_exp = explode(',',$quantity);
					$total_sqft_exp = explode(',',$total_sqft);
					$price_per1_exp = explode(',',$price_per1);
					$amount_exp = explode(',',$amount);
					$count = count($product_id_exp); 
					$profiles = $this->Admin_model->table_column_val($tablename_new="invoice_add");
					//	echo count($profiles); exit;
						if (count($profiles) > 0) 
						{ 
							foreach($profiles as $rows) {
								if($rows['invoice_no'] !="") { 
									$invoice_no = $rows['invoice_no'];    //NLWD20-21/1
									$afterunderscore = substr($invoice_no, strpos($invoice_no, "/") + 1);
									$invoice_new = ($afterunderscore+1);
									$profiles1 = $this->Admin_model->table_column_val($tablename1="invoice");
										if (count($profiles1) > 0) 
										{
											foreach($profiles1 as $rows1)
											{ 
												$invoice = $rows1['invoice']; 
											} 
										}
									$data['invoice_no'] = $invoice."/".$invoice_new;
						    }
							else{
								$profile_data = $this->Admin_model->table_column_val($tablename_non="quotation_add");
								if (count($profile_data) > 0) 
									{
										foreach($profile_data as $row_data)
										{
											if($row_data['invoice_status'] != "0"){
												$invoice_no = $row_data['invoice_no'];    //NLWD20-21/3
												$afterunderscore = substr($invoice_no, strpos($invoice_no, "/") + 1);
												$invoice_new = ($afterunderscore+1);
												$profiles1 = $this->Admin_model->table_column_val($tablename1="invoice");
													if (count($profiles1) > 0) 
													{
														foreach($profiles1 as $rows1)
														{ 
															$invoice = $rows1['invoice']; 
														} 
													}
												$data['invoice_no'] = $invoice."/".$invoice_new;
											} else {
												$profiles1 = $this->Admin_model->table_column_val($tablename1="invoice");
													if (count($profiles1) > 0) 
													{
														foreach($profiles1 as $rows1)
														{ 															
															$invoice = $rows1['invoice']; 
														} 
													}
												$data['invoice_no'] = $invoice."/1";
											} 
										}
									} else{
										$profiles1 = $this->Admin_model->table_column_val($tablename1="invoice");
											if (count($profiles1) > 0) 
											{
												foreach($profiles1 as $rows1)
												{ 															
													$invoice = $rows1['invoice']; 
												} 
											}
										$data['invoice_no'] = $invoice."/1";
									}
								}
						   }
						}
						else{
								$profiles1 = $this->Admin_model->table_column_val($tablename1="invoice");
									if (count($profiles1) > 0) 
									{
										foreach($profiles1 as $rows1)
										{ 															
											$invoice = $rows1['invoice']; 
										} 
									}
								$data['invoice_no'] = $invoice."/1";
							}
					//invoice_new 
					$profiles = $this->Admin_model->table_column_val($tablename_new="invoice_add");
						if (count($profiles) > 0) 
						{
							foreach($profiles as $rows)
							{
								if($rows['invoice_new'] != ""){
									$invoice_new = $rows['invoice_new'];
									$data['invoice_new'] = $invoice_new+1;
								} else{
									$profile_data = $this->Admin_model->table_column_val($tablename_non="quotation_add");
									if (count($profile_data) > 0) 
										{
											foreach($profile_data as $row_data)
											{
												$invoice_new = $row_data['invoice_new'];
												$data['invoice_new'] = $invoice_new+1;
											}
										}
									else{
											$data['invoice_new'] = "1";
										}
								} 
							}
						}
						else{
								$data['invoice_new'] = "1";
							}
		
					for($w=0;$w<$count;$w++){
					if($product_id_exp[$w] != "") {
					$data['product_id'] = $product_id_exp[$w];
					$data['sub_id'] = $sub_id_exp[$w];
					$data['width'] = $width_exp[$w];
					$data['height'] = $height_exp[$w];
					$data['sqft'] = $sqft_exp[$w];
					$data['quantity'] = $quantity_exp[$w];
					$data['total_sqft'] = $total_sqft_exp[$w];
					$data['price_per1'] = $price_per1_exp[$w];
					$data['amount'] = $amount_exp[$w];
					$data['invoice_status'] = "1";
				//	echo $data['invoice_no'];
				    $insert = $this->Admin_model->create($tablename,$data); 
					}
					}
			if($insert){
			  //  json_encode($data);
				redirect('admin/list_quotation_bill');
			//	$this->template->rander("attendance/index");

			} else {
			    $this->load->view('admin/add_quotation');
			//	$this->template->rander("attendance/add_attendance");
			}
    }
		}
	function Edit_Category($tablename, $id)
		{
			$data['tablename'] = $tablename;
			$data['id'] = $id;
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$this->load->view("admin/edit_category", $data);

		} 
	function Edit_Terms($tablename, $id)
		{
			$data['tablename'] = $tablename;
			$data['id'] = $id;
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$this->load->view("admin/edit_terms", $data);

		} 
	function Edit_Product($tablename, $id)
		{
			$data['tablename'] = $tablename;
			$data['id'] = $id;
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$this->load->view("admin/edit_product", $data);
		}
	function list_quotation_bill1($tablename, $customer_id)
		{
			$data['tablename'] = $tablename;
			$data['customer_id'] = $customer_id;
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$this->load->view("admin/list_quotation_bill", $data);
			$this->load->view('includes/footer');
		}
	function Edit_Bank_Info($tablename, $id)
		{
			$data['tablename'] = $tablename;
			$data['id'] = $id;
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$this->load->view("admin/edit_bank_info", $data);
			$this->load->view('includes/footer');
		}
	function list_quotation_bill()
		{
			$this->load->library('session');
			if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$this->load->view("admin/list_quotation_bill");
			$this->load->view('includes/footer');
		}
	function list_invoice_bill()
		{
			$this->load->library('session');
			if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$this->load->view("admin/list_invoice_bill");
			$this->load->view('includes/footer');
		}
	function list_noninvoice_bill()
		{
			$this->load->library('session');
			if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$this->load->view("admin/list_noninvoice_bill");
			$this->load->view('includes/footer');
		}
	function Edit_Cutomer($tablename, $id)
		{
			$data['tablename'] = $tablename;
			$data['id'] = $id;
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$this->load->view("admin/edit_customer", $data);
			$this->load->view('includes/footer');
		}
	function Edit_quotation($tablename, $id)
		{
			$data['tablename'] = $tablename;
			$data['id'] = $id;
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$this->load->view("admin/edit_quotation", $data);
			$this->load->view('includes/footer');
		}
	function Edit_Employee($tablename, $id)
		{
			$data['tablename'] = $tablename;
			$data['id'] = $id;
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$this->load->view("admin/edit_employee", $data);
			$this->load->view('includes/footer');
		}
	function Edit_Purchase($tablename, $id)
		{
			$data['tablename'] = $tablename;
			$data['id'] = $id;
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$this->load->view("admin/edit_purchase", $data);
			$this->load->view('includes/footer');
		}
	function Edit_Invoice($tablename, $id)
		{
			$data['tablename'] = $tablename;
			$data['id'] = $id;
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$this->load->view("admin/edit_invoice", $data);
		}
	function Edit_Debit($tablename, $id)
		{
			$data['tablename'] = $tablename;
			$data['id'] = $id;
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$this->load->view("admin/edit_debit", $data);
			$this->load->view('includes/footer');
		}
	public function Pay_Credit($tablename, $id)
	{
			$data['tablename'] = $tablename;
			$data['id'] = $id;
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$this->load->view('admin/add_credit_pay', $data);
			$this->load->view('includes/footer');
	}
	function Edit_Category_Expenses($tablename, $id)
		{
			$data['tablename'] = $tablename;
			$data['id'] = $id;
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$this->load->view("admin/edit_expenses_category", $data);
		}
	function Edit_Credit($tablename, $id)
		{
			$data['tablename'] = $tablename;
			$data['id'] = $id;
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$this->load->view("admin/edit_credit", $data);
			$this->load->view('includes/footer');
		}
	function Pay_History($tablename, $id)
		{
			$data['tablename'] = $tablename;
			$data['id'] = $id;
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$this->load->view("admin/pay_history", $data);
			$this->load->view('includes/footer');
		}
	function Edit_Billing($tablename, $invoice_new)
		{
			$data['tablename'] = $tablename;
			$data['invoice_new'] = $invoice_new;
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$this->load->view("admin/edit_invoice_data", $data);
			$this->load->view('includes/footer');
		}
	function Edit_Billing_Data($tablename, $invoice_new)
		{
			$data['tablename'] = $tablename;
			$data['invoice_new'] = $invoice_new;
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$this->load->view("admin/edit_invoice_data_new", $data);
			$this->load->view('includes/footer');
		}
	function Edit_NonBilling_Data($tablename, $invoice_new)
		{
			$data['tablename'] = $tablename;
			$data['invoice_new'] = $invoice_new;
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$this->load->view("admin/edit_noninvoice_data_new", $data);
			$this->load->view('includes/footer');
		}
	function Edit_Billing_GST($tablename, $invoice_non)
		{
			$data['tablename'] = $tablename;
			$data['invoice_non'] = $invoice_non;
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$this->load->view("admin/edit_invoice_data_nongst", $data);
			$this->load->view('includes/footer');
		}
	function Delete_Billing_GST($tablename, $invoice_new)
		{
			$data['tablename'] = $tablename;
			$data['invoice_new'] = $invoice_new;
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$this->load->view("admin/delete_invoice_data", $data);
			$this->load->view('includes/footer');
		}
	function Delete_Billing_NonGST($tablename, $invoice_non)
		{
			$data['tablename'] = $tablename;
			$data['invoice_non'] = $invoice_non;
			$this->load->view('includes/header');
			$this->load->view('includes/header_menu');
			$this->load->view("admin/delete_invoice_data_nongst", $data);
			$this->load->view('includes/footer');
		}
	public function Edit_Invoice_data_Nongst($tablename, $invoice_non)
        {
			$where = array();
			$columns = $fields['columns'] = $this->Admin_model->table($tablename);
			$fields['tablename'] = $tablename;
				for($i=0;$i<count($columns);$i++)
				{
 					{   
						if($columns[$i]=="date_of_joining") {
							$date = date('Y-m-d');
							$data[$columns[$i]] = $date;
						} else{
							$data[$columns[$i]] = $this->input->post($columns[$i]);
						}
					}
				}
				$id_arr = $data['id'];
				$data_update['customer_id'] = $data['customer_id'];
				$data_update['gst_num'] = $data['gst_num'];
				$data_update['no_sqft'] = $data['no_sqft'];
				$data_update['total_amount'] = $data['total_amount'];
				$data_update['cgst'] = $_POST['cgst'];
				$data_update['sgst'] = $_POST['sgst'];
				$data_update['round_off'] = $_POST['round_off'];
				$data_update['net_amount'] = $data['net_amount'];
				$data_update['invoice_non'] = $invoice_non;
				$data_update['invoice_new'] = "";
				$data_update['invoice_no'] = "";
		//		echo $data_update['invoice_non']; exit;
				$data_update['date'] = $data['date'];
				$data_update['type'] = $data['type'];
				$data_update['discount'] = $data['discount'];
				
				

				$u_sub_id = $data['sub_id'];
				$u_product_id = $data['product_id'];
				$u_width = $data['width'];
				$u_height = $data['height'];
				$u_quantity = $data['quantity'];
				$u_total_sqft = $data['total_sqft'];
				$u_price_per1 = $data['price_per1'];
				$u_amount = $data['amount'];
				$u_quantity_new = $_POST['quantity_new'];
				
			    $count_id = count($id_arr);
				for($x =0; $x<$count_id; $x++) {
					$data_update['sub_id'] = $u_sub_id[$x];
					$data_qty['product_id'] = $data_update['product_id'] = $u_product_id[$x];
					$data_update['width'] = $u_width[$x];
					$data_update['height'] = $u_height[$x];
					$data_update['quantity'] = $u_quantity[$x];
					$data_update['total_sqft'] = $u_total_sqft[$x];
					$data_update['price_per1'] = $u_price_per1[$x];
					$data_update['amount'] = $u_amount[$x];
					$data_qty['quantity'] = $u_quantity_new[$x];
					$where_update['id'] = $id_arr[$x];
					$data_update['type'] = "Non GST";
					$insert = $this->Admin_model->create($tablename1 = "stock_product",$data_qty);
				    $update_all = $this->Admin_model->update_all($tablename,$data_update,$where_update);  
					
				}
				
				if($update_all){
					if($this->input->post('id_prof_last')) {
 					$id_prof_last = $this->input->post('id_prof_last');
					unlink('./assets/images/'.$id_prof_last);
					}
					json_encode($data);
					redirect('admin/View/list_billing');
				} else {
				    if(isset($file_element_name)){
        			    unlink('./assets/images/'.$file_element_name);
        		    }
					redirect('admin/View/edit_invoice_data_nongst');
				}
        }
	public function Edit_Invoice_data($tablename, $invoice_new)
        {
			$where = array();
			$columns = $fields['columns'] = $this->Admin_model->table($tablename);
			$fields['tablename'] = $tablename;
				for($i=0;$i<count($columns);$i++)
				{
 					{   
						if($columns[$i]=="date_of_joining") {
							$date = date('Y-m-d');
							$data[$columns[$i]] = $date;
						} else{
							$data[$columns[$i]] = $this->input->post($columns[$i]);
						}
					}
				}
				$id_arr = $data['id'];
				$data_update['customer_id'] = $data['customer_id'];
				$data_update['gst_num'] = $data['gst_num'];
				$data_update['no_sqft'] = $data['no_sqft'];
				$data_update['total_amount'] = $data['total_amount'];
				$data_update['cgst'] = $_POST['cgst'];
				$data_update['sgst'] = $_POST['sgst'];
				$data_update['round_off'] = $_POST['round_off'];
				$data_update['net_amount'] = $data['net_amount'];
				$data_update['invoice_no'] = $invoice_no = $data['invoice_no'];
				//invoice new change
				$afterunderscore = substr($invoice_no, strpos($invoice_no, "/") + 1);
				$invoice_no_new = ($afterunderscore); 
				//
				$data_update['invoice_new'] = $invoice_no_new;
				$data_update['date'] = $data['date'];
				$data_update['type'] = $data['type'];
				$data_update['discount'] = "";
				
				

				$u_sub_id = $data['sub_id'];
				$u_product_id = $data['product_id'];
				$u_width = $data['width'];
				$u_height = $data['height'];
				$u_quantity = $data['quantity'];
				$u_total_sqft = $data['total_sqft'];
				$u_price_per1 = $data['price_per1'];
				$u_amount = $data['amount'];
				$u_quantity_new = $_POST['quantity_new'];
				
			    $count_id = count($id_arr);
				for($x =0; $x<$count_id; $x++) {
					$data_update['sub_id'] = $u_sub_id[$x];
					$data_qty['product_id'] = $data_update['product_id'] = $u_product_id[$x];
					$data_update['width'] = $u_width[$x];
					$data_update['height'] = $u_height[$x];
					$data_update['quantity'] = $u_quantity[$x];
					$data_update['total_sqft'] = $u_total_sqft[$x];
					$data_update['price_per1'] = $u_price_per1[$x];
					$data_update['amount'] = $u_amount[$x];
					$data_qty['quantity'] = $u_quantity_new[$x];
					$where_update['id'] = $id_arr[$x];
					$data_update['type'] = "GST";
					$insert = $this->Admin_model->create($tablename1 = "stock_product",$data_qty);
				    $update_all = $this->Admin_model->update_all($tablename,$data_update,$where_update);  
					
				}
				
				if($update_all){
					if($this->input->post('id_prof_last')) {
 					$id_prof_last = $this->input->post('id_prof_last');
					unlink('./assets/images/'.$id_prof_last);
					}
					json_encode($data);
					redirect('admin/View/list_billing');
				} else {
				    if(isset($file_element_name)){
        			    unlink('./assets/images/'.$file_element_name);
        		    }
					redirect('admin/View/edit_invoice_data');
				}
        }
	public function Edit_quotation_data_bill($tablename, $invoice_new)
        {
			$where = array();
			
			$columns = $fields['columns'] = $this->Admin_model->table($tablename);
			$fields['tablename'] = $tablename;
				for($i=0;$i<count($columns);$i++)
				{
 					{   
						if($columns[$i]=="date_of_joining") {
							$date = date('Y-m-d');
							$data[$columns[$i]] = $date;
						} else{
							$data[$columns[$i]] = $this->input->post($columns[$i]);
						}
					}
				}
				$id_arr = $data['id'];
				$data_update['customer_id'] = $data['customer_id'];
				$data_update['no_qty'] = $data['no_qty'];
				$data_update['total_amount'] = $data['total_amount'];
				$data_update['gst'] = $_POST['gst'];
				$data_update['round_off'] = $_POST['round_off'];
				$data_update['net_amount'] = $data['net_amount'];
				$data_update['avg_sqft'] = $data['avg_sqft'];
				$data_update['date'] = $data['date'];
				$data_update['invoice_no'] = $invoice_no = $data['invoice_no'];
				//invoice new change
				$afterunderscore = substr($invoice_no, strpos($invoice_no, "/") + 1);
				$invoice_no_new = ($afterunderscore); 
				//
				$data_update['invoice_new'] = $invoice_no_new;
				

				$u_sub_id = $data['sub_id'];
				$u_product_id = $data['product_id'];
				$u_width = $data['width'];
				$u_height = $data['height'];
				$u_sqft = $data['sqft'];
				$u_quantity = $data['quantity'];
				$u_total_sqft = $data['total_sqft'];
				$u_price_per1 = $data['price_per1'];
				$u_amount = $data['amount'];
				
			    $count_id = count($id_arr);
				for($x =0; $x<$count_id; $x++) {
					$data_update['sub_id'] = $u_sub_id[$x];
					$data_update['product_id'] = $u_product_id[$x];
					$data_update['width'] = $u_width[$x];
					$data_update['height'] = $u_height[$x];
					$data_update['sqft'] = $u_sqft[$x];
					$data_update['quantity'] = $u_quantity[$x];
					$data_update['total_sqft'] = $u_total_sqft[$x];
					$data_update['price_per1'] = $u_price_per1[$x];
					$data_update['amount'] = $u_amount[$x];
					$where_update['id'] = $id_arr[$x];
				    $update_all = $this->Admin_model->update_all($tablename,$data_update,$where_update);  
					
				}
				
				if($update_all){
					if($this->input->post('id_prof_last')) {
 					$id_prof_last = $this->input->post('id_prof_last');
					unlink('./assets/images/'.$id_prof_last);
					}
					json_encode($data);
					redirect('admin/View/list_quotation');
				} else {
				    if(isset($file_element_name)){
        			    unlink('./assets/images/'.$file_element_name);
        		    }
					redirect('admin/View/edit_quotation_bill');
				}
        }
	public function Edit_Credit_Data($tablename, $id)
        {
			$where = array();
			$where['id'] = $id;
			$columns = $fields['columns'] = $this->Admin_model->table($tablename);
			$fields['tablename'] = $tablename;
				for($i=0;$i<count($columns);$i++)
				{
					if(($columns[$i]!="id")&&($columns[$i]!="photo"))
					{
						if($columns[$i]=="date_of_joining") {
							$date = date('Y-m-d');
							$data[$columns[$i]] = $date;
						} else{
							$data[$columns[$i]] = $this->input->post($columns[$i]);
						}
					}
				}
		         $datas['credit_id'] = $id;
				 $datas['pay'] = $data['pay'];
				 $datas['category_name'] = $data['category_name'];
				 $datas['sub_name'] = $data['sub_name'];
				 $datas['total'] = $data['total'];
				 $datas['date'] = $data['date'];
				 $update_all = $this->Admin_model->update_all($tablename,$data,$where);
				 $insert = $this->Admin_model->create($tablename = "credit_history",$datas);
				 if($update_all){
					if($this->input->post('id_prof_last')) {
 					$id_prof_last = $this->input->post('id_prof_last');
					unlink('./assets/images/'.$id_prof_last);
					}
					json_encode($data);
					redirect("Admin/view/list_credit");
				} else {
				    if(isset($file_element_name)){
        			    unlink('./assets/images/'.$file_element_name);
        		    }
					redirect("Admin/Edit_Credit");
				}
        }
	public function Edit_Category_Expenses_Data($tablename, $id)
        {
			$where = array();
			$where['id'] = $id;
			$columns = $fields['columns'] = $this->Admin_model->table($tablename);
			$fields['tablename'] = $tablename;
				for($i=0;$i<count($columns);$i++)
				{
					if(($columns[$i]!="id")&&($columns[$i]!="photo"))
					{
						if($columns[$i]=="date_of_joining") {
							$date = date('Y-m-d');
							$data[$columns[$i]] = $date;
						} else{
							$data[$columns[$i]] = $this->input->post($columns[$i]);
						}
					}
				}
		         $update_all = $this->Admin_model->update_all($tablename,$data,$where);
				 if($update_all){
					if($this->input->post('id_prof_last')) {
 					$id_prof_last = $this->input->post('id_prof_last');
					unlink('./assets/images/'.$id_prof_last);
					}
					json_encode($data);
					redirect("Admin/view/list_expenses_category");
				} else {
				    if(isset($file_element_name)){
        			    unlink('./assets/images/'.$file_element_name);
        		    }
					redirect("Admin/Edit_Category_Expenses");
				}
        }
	public function Edit_Terms_Data($tablename, $id)
        {
			$where = array();
			$where['id'] = $id;
			$columns = $fields['columns'] = $this->Admin_model->table($tablename);
			$fields['tablename'] = $tablename;
				for($i=0;$i<count($columns);$i++)
				{
					if(($columns[$i]!="id")&&($columns[$i]!="photo"))
					{
						if($columns[$i]=="date_of_joining") {
							$date = date('Y-m-d');
							$data[$columns[$i]] = $date;
						} else{
							$data[$columns[$i]] = $this->input->post($columns[$i]);
						}
					}
				}
		         $update_all = $this->Admin_model->update_all($tablename,$data,$where);
				 if($update_all){
					if($this->input->post('id_prof_last')) {
 					$id_prof_last = $this->input->post('id_prof_last');
					unlink('./assets/images/'.$id_prof_last);
					}
					json_encode($data);
					redirect("Admin/view/list_terms");
				} else {
				    if(isset($file_element_name)){
        			    unlink('./assets/images/'.$file_element_name);
        		    }
					redirect("Admin/Edit_Terms");
				}
        }
	public function Edit_Bank_Info_Data($tablename, $id)
        {
			$where = array();
			$where['id'] = $id;
			$columns = $fields['columns'] = $this->Admin_model->table($tablename);
			$fields['tablename'] = $tablename;
				for($i=0;$i<count($columns);$i++)
				{
					if(($columns[$i]!="id")&&($columns[$i]!="photo"))
					{
						if($columns[$i]=="date_of_joining") {
							$date = date('Y-m-d');
							$data[$columns[$i]] = $date;
						} else{
							$data[$columns[$i]] = $this->input->post($columns[$i]);
						}
					}
				}
		         $update_all = $this->Admin_model->update_all($tablename,$data,$where);
				 if($update_all){
					if($this->input->post('id_prof_last')) {
 					$id_prof_last = $this->input->post('id_prof_last');
					unlink('./assets/images/'.$id_prof_last);
					}
					json_encode($data);
					redirect("Admin/view/list_info");
				} else {
				    if(isset($file_element_name)){
        			    unlink('./assets/images/'.$file_element_name);
        		    }
					redirect("Admin/Edit_Bank_Info");
				}
        }
	public function Edit_Debit_Info($tablename, $id)
        {
			$where = array();
			$where['id'] = $id;
			$columns = $fields['columns'] = $this->Admin_model->table($tablename);
			$fields['tablename'] = $tablename;
				for($i=0;$i<count($columns);$i++)
				{
					if(($columns[$i]!="id")&&($columns[$i]!="photo"))
					{
						if($columns[$i]=="date_of_joining") {
							$date = date('Y-m-d');
							$data[$columns[$i]] = $date;
						} else{
							$data[$columns[$i]] = $this->input->post($columns[$i]);
						}
					}
				}
		         $update_all = $this->Admin_model->update_all($tablename,$data,$where);
				 if($update_all){
					if($this->input->post('id_prof_last')) {
 					$id_prof_last = $this->input->post('id_prof_last');
					unlink('./assets/images/'.$id_prof_last);
					}
					json_encode($data);
					redirect("Admin/view/list_debit");
				} else {
				    if(isset($file_element_name)){
        			    unlink('./assets/images/'.$file_element_name);
        		    }
					redirect("Admin/Edit_Debit");
				}
        }
	public function Edit_Invoice_Data_New($tablename, $id)
        {
			$where = array();
			$where['id'] = $id;
			$columns = $fields['columns'] = $this->Admin_model->table($tablename);
			$fields['tablename'] = $tablename;
				for($i=0;$i<count($columns);$i++)
				{
					if(($columns[$i]!="id")&&($columns[$i]!="photo"))
					{
						if($columns[$i]=="date_of_joining") {
							$date = date('Y-m-d');
							$data[$columns[$i]] = $date;
						} else{
							$data[$columns[$i]] = $this->input->post($columns[$i]);
						}
					}
				}
				$data['status'] = "1";
		         $update_all = $this->Admin_model->update_all($tablename,$data,$where);
				 if($update_all){
					if($this->input->post('id_prof_last')) {
 					$id_prof_last = $this->input->post('id_prof_last');
					unlink('./assets/images/'.$id_prof_last);
					}
					json_encode($data);
					redirect("Admin/view/list_invoice");
				} else {
				    if(isset($file_element_name)){
        			    unlink('./assets/images/'.$file_element_name);
        		    }
					redirect("Admin/Edit_Invoice");
				}
        }
	public function Edit_Purchase_Data($tablename, $id)
        {
			$where = array();
			$where['id'] = $id;
			$columns = $fields['columns'] = $this->Admin_model->table($tablename);
			$fields['tablename'] = $tablename;
				for($i=0;$i<count($columns);$i++)
				{
					if(($columns[$i]!="id")&&($columns[$i]!="photo"))
					{
						if($columns[$i]=="date_of_joining") {
							$date = date('Y-m-d');
							$data[$columns[$i]] = $date;
						} else{
							$data[$columns[$i]] = $this->input->post($columns[$i]);
						}
					}
				}
		        $datas['product_id'] = $id;
				$datas['quantity'] = $data['quantity'];
		         $update_all = $this->Admin_model->update_all($tablename,$data,$where);
				 $insert = $this->Admin_model->create($tablename = "quantity_list",$datas);
				 if($update_all){
					if($this->input->post('id_prof_last')) {
 					$id_prof_last = $this->input->post('id_prof_last');
					unlink('./assets/images/'.$id_prof_last);
					}
					json_encode($data);
					redirect("Admin/view/list_purchase");
				} else {
				    if(isset($file_element_name)){
        			    unlink('./assets/images/'.$file_element_name);
        		    }
					redirect("Admin/Edit_Purchase");
				}
        }
	public function Edit_Employee_Data($tablename, $id)
        {
			$where = array();
			$where['id'] = $id;
			$columns = $fields['columns'] = $this->Admin_model->table($tablename);
			$fields['tablename'] = $tablename;
				for($i=0;$i<count($columns);$i++)
				{
					if(($columns[$i]!="id")&&($columns[$i]!="photo"))
					{
						if($columns[$i]=="date_of_joining") {
							$date = date('Y-m-d');
							$data[$columns[$i]] = $date;
						} else{
							$data[$columns[$i]] = $this->input->post($columns[$i]);
						}
					}
				}
		         $update_all = $this->Admin_model->update_all($tablename,$data,$where);
				 if($update_all){
					if($this->input->post('id_prof_last')) {
 					$id_prof_last = $this->input->post('id_prof_last');
					unlink('./assets/images/'.$id_prof_last);
					}
					json_encode($data);
					redirect("Admin/view/list_employee");
				} else {
				    if(isset($file_element_name)){
        			    unlink('./assets/images/'.$file_element_name);
        		    }
					redirect("Admin/Edit_Employee");
				}
        }
	public function Edit_quotation_data($tablename, $id, $quo_id)
        {
			
			echo $tablename; 
			echo $id; 
			echo $quo_id; exit;
			$where = array();
			$where['id'] = $id;
			$columns = $fields['columns'] = $this->Admin_model->table($tablename);
			$fields['tablename'] = $tablename;
				for($i=0;$i<count($columns);$i++)
				{
					if(($columns[$i]!="id")&&($columns[$i]!="photo"))
					{
						if($columns[$i]=="date_of_joining") {
							$date = date('Y-m-d');
							$data[$columns[$i]] = $date;
						} else{
							$data[$columns[$i]] = $this->input->post($columns[$i]);
						}
					}
				}
				if($data['gst'] == "NO"){
					$data['gst_num'] = "";
					$update_all = $this->Admin_model->update_all($tablename,$data,$where);
				}else{
		        $update_all = $this->Admin_model->update_all($tablename,$data,$where);
				} if($update_all){
					if($this->input->post('id_prof_last')) {
 					$id_prof_last = $this->input->post('id_prof_last');
					unlink('./assets/images/'.$id_prof_last);
					}
					json_encode($data);
					redirect("Admin/view/list_customer");
				} else {
				    if(isset($file_element_name)){
        			    unlink('./assets/images/'.$file_element_name);
        		    }
					redirect("Admin/Edit_Cutomer");
				}
        }
	public function Edit_Customer_Data($tablename, $id)
        {
			$where = array();
			$where['id'] = $id;
			$columns = $fields['columns'] = $this->Admin_model->table($tablename);
			$fields['tablename'] = $tablename;
				for($i=0;$i<count($columns);$i++)
				{
					if(($columns[$i]!="id")&&($columns[$i]!="photo"))
					{
						if($columns[$i]=="date_of_joining") {
							$date = date('Y-m-d');
							$data[$columns[$i]] = $date;
						} else{
							$data[$columns[$i]] = $this->input->post($columns[$i]);
						}
					}
				}
				if($data['gst'] == "NO"){
					$data['gst_num'] = "";
					$update_all = $this->Admin_model->update_all($tablename,$data,$where);
				}else{
		        $update_all = $this->Admin_model->update_all($tablename,$data,$where);
				} if($update_all){
					if($this->input->post('id_prof_last')) {
 					$id_prof_last = $this->input->post('id_prof_last');
					unlink('./assets/images/'.$id_prof_last);
					}
					json_encode($data);
					redirect("Admin/view/list_customer");
				} else {
				    if(isset($file_element_name)){
        			    unlink('./assets/images/'.$file_element_name);
        		    }
					redirect("Admin/Edit_Cutomer");
				}
        }
	public function Edit_Product_Data($tablename, $id)
        {
			$where = array();
			$where['id'] = $id;
			$columns = $fields['columns'] = $this->Admin_model->table($tablename);
			$fields['tablename'] = $tablename;
				for($i=0;$i<count($columns);$i++)
				{
					if(($columns[$i]!="id")&&($columns[$i]!="photo"))
					{
						if($columns[$i]=="date_of_joining") {
							$date = date('Y-m-d');
							$data[$columns[$i]] = $date;
						} else{
							$data[$columns[$i]] = $this->input->post($columns[$i]);
						}
					}
				}
				$datas['product_id'] = $id;
				$datas['quantity'] = $data['quantity'];
		        $update_all = $this->Admin_model->create($tablename1 = "stock_product",$datas);
				$update_all = $this->Admin_model->update_all($tablename,$data,$where);
				if($update_all){
					if($this->input->post('id_prof_last')) {
 					$id_prof_last = $this->input->post('id_prof_last');
					unlink('./assets/images/'.$id_prof_last);
					}
					json_encode($data);
					redirect("Admin/view/list_product");
				} else {
				    if(isset($file_element_name)){
        			    unlink('./assets/images/'.$file_element_name);
        		    }
					redirect("Admin/Edit_Product");
				}
        }
	public function Edit_Category_Data($tablename, $id)
        {
			$where = array();
			$where['id'] = $id;
			$columns = $fields['columns'] = $this->Admin_model->table($tablename);
			$fields['tablename'] = $tablename;
				for($i=0;$i<count($columns);$i++)
				{
					if(($columns[$i]!="id")&&($columns[$i]!="photo"))
					{
						if($columns[$i]=="date_of_joining") {
							$date = date('Y-m-d');
							$data[$columns[$i]] = $date;
						} else{
							$data[$columns[$i]] = $this->input->post($columns[$i]);
						}
					}
				}
		        $update_all = $this->Admin_model->update_all($tablename,$data,$where);
				if($update_all){
					if($this->input->post('id_prof_last')) {
 					$id_prof_last = $this->input->post('id_prof_last');
					unlink('./assets/images/'.$id_prof_last);
					}
					json_encode($data);
					redirect("Admin/view/list_category");
				} else {
				    if(isset($file_element_name)){
        			    unlink('./assets/images/'.$file_element_name);
        		    }
					redirect("Admin/Edit_Category");
				}
        }
	function fetch_gst()
		{
			 $customer_id = $this->input->post('customer_id');
			 $data = $this->Admin_model->get_gst($customer_id); 
			 $output = array();
				 foreach($data as $datas){ 
					$output['gst_num'] = $datas['gst_num'];
				 } 
			echo json_encode($output);
		}
	function fetch_product()
		{
			 $product_id = $this->input->post('product_id');
			 $data = $this->Admin_model->get_price($product_id); 
			 $output = array();
				 foreach($data as $datas){ 
					$output['price'] = $datas['price'];
				 } 
			echo json_encode($output);
		}
	function fetch_subname()
		{
			 $sub_name = $this->input->post('sub_name'); $output = array();
			 $data = $this->Admin_model->get_subname($sub_name); 
			 if(count($data)>0){
				 foreach($data as $datas){ 
				$output['category_name'] =	$datas['category_name'];
			 } }
			 echo json_encode($output);
		}
	function Check_Stock()
		{
			 $product_id = $this->input->post('product_id');
			 $data = $this->Admin_model->get_stock($product_id);  
			 if(count($data)>0){
			 foreach($data as $datas){ 
				$output['quantity'] = $datas['quantity'];
				} 
			 }
			 echo json_encode($output);
		}
	public function save_qty()
	{
		$data['quantity_new'] = $this->input->post('quantity_new');
		$data['product_id'] = $this->input->post('product_id');
		$tablename="stock_product";
		$sms = $this->Admin_model->save_data($tablename, $data);
	}
	function quantity_info()
		{
			 $product_id = $this->input->post('product_id');
			 $data = $this->Admin_model->get_quantity($product_id); 
			 $output = array();
				 foreach($data as $datas){ 
					$output['quantity'] = $datas['quantity'];
				 } 
			echo json_encode($output);
		}
	function Delete_Category($tablename, $delete_id)
	{ 
		$this->load->library('session');
		if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
		$delete = $this->Admin_model->delete_row($tablename, $delete_id);
		if(isset($delete)){
			redirect("Admin/view/list_category");
		}
	}
	function Delete_Terms($tablename, $delete_id)
	{ 
		$this->load->library('session');
		if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
		$delete = $this->Admin_model->delete_row($tablename, $delete_id);
		if(isset($delete)){
			redirect("Admin/view/list_terms");
		}
	}
	function Delete_Customer($tablename, $delete_id)
	{ 
		$this->load->library('session');
		if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
		$delete = $this->Admin_model->delete_row($tablename, $delete_id);
		if(isset($delete)){
			redirect("Admin/view/list_customer");
		}
	}
	function Delete_Product($tablename, $delete_id)
	{ 
		$this->load->library('session');
		if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
		$delete = $this->Admin_model->delete_row($tablename, $delete_id);
		if(isset($delete)){
			redirect("Admin/view/list_product");
		}
	}
	function Delete_Quotation_Bill($tablename, $delete_id)
	{ 
		$this->load->library('session');
		if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
		$delete = $this->Admin_model->delete_row_invoice($tablename, $delete_id);
		if(isset($delete)){
			redirect("Admin/View/list_quotation");
		}
	}
	function Delete_Billing($tablename, $invoice_new, $delete_id, $qty, $product_id)
	{ 
		$this->load->library('session');
		if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
		$profiles_qty = $this->Admin_model->table_column_data($tablename1="stock_product", $column="product_id", $val=$product_id);
			if (count($profiles_qty) > 0) 
				{ 
					foreach($profiles_qty as $rows_qty)
					 {  $qty_old = $rows_qty['quantity']; } } 
		$data_new['quantity'] = ($qty_old+$qty);
		$data_new['product_id'] = $product_id;
		$insert = $this->Admin_model->create($tablename1="stock_product",$data_new);
		$delete = $this->Admin_model->delete_row_invoice_id($tablename, $delete_id);
		if(isset($delete)){
			redirect('Admin/Delete_Billing_GST/'.$tablename.'/'.$invoice_new.'');
		}
	}
	function Delete_Billing_Ng($tablename, $invoice_non, $delete_id, $qty, $product_id)
	{ 
		$this->load->library('session');
		if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
		$profiles_qty = $this->Admin_model->table_column_data($tablename1="stock_product", $column="product_id", $val=$product_id);
			if (count($profiles_qty) > 0) 
				{ 
					foreach($profiles_qty as $rows_qty)
					 {  $qty_old = $rows_qty['quantity']; } } 
		$data_new['quantity'] = ($qty_old+$qty);
		$data_new['product_id'] = $product_id;
		$insert = $this->Admin_model->create($tablename1="stock_product",$data_new);
		$delete = $this->Admin_model->delete_row_invoice_id($tablename, $delete_id);
		if(isset($delete)){
			redirect('Admin/Delete_Billing_NonGST/'.$tablename.'/'.$invoice_non.'');
		}
	}
	function Delete_Employee($tablename, $delete_id)
	{ 
		$this->load->library('session');
		if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
		$delete = $this->Admin_model->delete_row($tablename, $delete_id);
		if(isset($delete)){
			redirect("Admin/view/list_employee");
		}
	}
	function Delete_Purchase($tablename, $delete_id)
	{ 
		$this->load->library('session');
		if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
		$delete = $this->Admin_model->delete_row($tablename, $delete_id);
		if(isset($delete)){
			redirect("Admin/view/list_purchase");
		}
	}
	function Delete_Credit($tablename, $delete_id)
	{ 
		$this->load->library('session');
		if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
		$delete = $this->Admin_model->delete_row($tablename, $delete_id);
		if(isset($delete)){
			redirect("Admin/view/list_credit");
		}
	}
	function Delete_Debit($tablename, $delete_id)
	{ 
		$this->load->library('session');
		if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
		$delete = $this->Admin_model->delete_row($tablename, $delete_id);
		if(isset($delete)){
			redirect("Admin/view/list_debit");
		}
	}
	function Delete_Category_Expenses($tablename, $delete_id)
	{ 
		$this->load->library('session');
		if($this->session->userdata('admin_id')==""){redirect('Admin/index');}
		$delete = $this->Admin_model->delete_row($tablename, $delete_id);
		if(isset($delete)){
			redirect("Admin/view/list_expenses_category");
		}
	}
	public function Ajax_exp_credit()
	{
		$date = $this->input->post('date');
		$state = $this->input->post('state');
		$date1 = $this->input->post('date1');
		$query = $this->Admin_model->report_month1_new($tablename= 'invoice_add', $column='date', $val=$date, $state, $date1);
		if(count($query) > 0)
		{
		$i=1;
		foreach($query as $row) {
		$rows = array();
			$rows[] =  $i;
			$rows[] = $row['date'];
			$rows[] = $row['invoice_no'];
			$rows[] = $row['type'];
			$rows[] = $row['net_amount'];
			$data[] = $rows;	
			$i++;
			} } else {
				$data = array();
			}
			$output = array(
				"draw" => $this->input->post('draw'),
				"recordsTotal" => $this->Admin_model->count_all_index1($tablename, $column, $val, $state, $date1),
				"recordsFiltered" => $this->Admin_model->count_filtered_index1($tablename, $column, $val, $state, $date1),
				"data" => $data,
			);
		echo json_encode($output);
	}
	public function Ajax_exp()
	{
		$date = $this->input->post('date');
		$state = $this->input->post('state');
		$date1 = $this->input->post('date1');
		$query = $this->Admin_model->report_month1($tablename= 'debit_table', $column='date', $val=$date, $state, $date1);
		if(count($query) > 0)
		{
		$i=1;
		foreach($query as $row) {
		$rows = array();
			$rows[] =  $i;
			$rows[] = $row['date'];
			$rows[] = $row['category_name'];
			$rows[] = $row['sub_name'];
			$rows[] = $row['total'];
			$data[] = $rows;	
			$i++;
			} } else {
				$data = array();
			}
			$output = array(
				"draw" => $this->input->post('draw'),
				"recordsTotal" => $this->Admin_model->count_all_index($tablename, $column, $val, $state, $date1),
				"recordsFiltered" => $this->Admin_model->count_filtered_index($tablename, $column, $val, $state, $date1),
				"data" => $data,
			);
		echo json_encode($output);
	}
	function Signin()
	    {
			$this->load->library('session');
			$user_data = $this->session->all_userdata();
				foreach ($user_data as $key => $value) {
					if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
						$this->session->unset_userdata($key);
					}
				}
			$this->session->unset_userdata['admin_id'];
			$this->session->unset_userdata['username'];
			$this->session->sess_destroy();
			redirect('Admin/index');
			
		}
	
}