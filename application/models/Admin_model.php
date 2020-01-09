<?php
class Admin_model extends CI_Model{
	var $column_search = array('id', 'date', 'category_name', 'sub_name', 'total'); //set column field database for datatable searchable 
	var $column_order = array(null, 'id', 'date', 'category_name', 'sub_name', 'total'); //set column field database for datatable orderable
	var $order = array('id' => 'desc'); // default order
	
	var $column_search1 = array('id', 'date', 'invoice_no', 'type', 'net_amount'); //set column field database for datatable searchable 
	var $column_order1 = array(null, 'id', 'date', 'invoice_no', 'type', 'net_amount'); //set column field database for datatable orderable
	public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
	public function table($table)
		{
			return $fields = $this->db->list_fields($table);
			$this->db->result_array();
			
		}
	function report_month1($tablename, $column, $val, $state, $date1)
		{
			$this->_get_datatables_query($tablename, $column, $val, $state, $date1);
			if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
            $query = $this->db->get();
			return $query->result_array();
		}
	function report_month1_new($tablename, $column, $val, $state, $date1)
		{
			$this->_get_datatables_query1($tablename, $column, $val, $state, $date1);
			if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
            $query = $this->db->get();
			return $query->result_array();
		}
	private function _get_datatables_query1($tablename, $column, $val, $state, $date1)
		{
			$this->db->select('id, date, invoice_no, type, net_amount');
			$this->db->from($tablename);
			if($state == "day"){
				$this->db->where("DATE_FORMAT(date,'%Y-%m-%d')", $val);
			} else if ($state == "month") {
				$this->db->where("DATE_FORMAT(date,'%Y-%m')", $val);
			} else if ($state == "week") {
				$this->db->where("DATE_FORMAT(date,'%Y-%m-%d') >=", $val);
				$this->db->where("DATE_FORMAT(date,'%Y-%m-%d') <=", $date1);
			}
			$i = 0;
			foreach ($this->column_search1 as $item) // loop column 
			{
				if(isset($_POST['search']['value'])) // if datatable send POST for search
				{
					
					if($i===0) // first loop
					{
						$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
						$this->db->like($item, $_POST['search']['value']);
					}
					else
					{
						$this->db->or_like($item, $_POST['search']['value']);
					}

					if(count($this->column_search1) - 1 == $i) //last loop
						$this->db->group_end(); //close bracket
				}
				$i++;
			}
			
			if(isset($_POST['order'])) // here order processing
			{
				$this->db->order_by($this->column_order1[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
			} 
			else if(isset($this->order))
			{
				$order = $this->order;
				$this->db->order_by(key($order), $order[key($order)]);
			}
		}
	private function _get_datatables_query($tablename, $column, $val, $state, $date1)
		{
			$this->db->select('id, date, category_name, sub_name, total');
			$this->db->from($tablename);
			if($state == "day"){
				$this->db->where("DATE_FORMAT(date,'%Y-%m-%d')", $val);
			} else if ($state == "month") {
				$this->db->where("DATE_FORMAT(date,'%Y-%m')", $val);
			} else if ($state == "week") {
				$this->db->where("DATE_FORMAT(date,'%Y-%m-%d') >=", $val);
				$this->db->where("DATE_FORMAT(date,'%Y-%m-%d') <=", $date1);
			}
			$i = 0;
			foreach ($this->column_search as $item) // loop column 
			{
				if(isset($_POST['search']['value'])) // if datatable send POST for search
				{
					
					if($i===0) // first loop
					{
						$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
						$this->db->like($item, $_POST['search']['value']);
					}
					else
					{
						$this->db->or_like($item, $_POST['search']['value']);
					}

					if(count($this->column_search) - 1 == $i) //last loop
						$this->db->group_end(); //close bracket
				}
				$i++;
			}
			
			if(isset($_POST['order'])) // here order processing
			{
				$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
			} 
			else if(isset($this->order))
			{
				$order = $this->order;
				$this->db->order_by(key($order), $order[key($order)]);
			}
		}
	public function count_all_index($tablename, $column, $val, $state, $date1)
		{
			$this->db->select('id, date, category_name, sub_name, total');
			$this->db->from($tablename);
			if($state == "day"){
				$this->db->where("DATE_FORMAT(date,'%Y-%m-%d')", $val);
			} else if ($state == "month") {
				$this->db->where("DATE_FORMAT(date,'%Y-%m')", $val);
			} else if ($state == "week") {
				$this->db->where("DATE_FORMAT(date,'%Y-%m-%d') >=", $val);
				$this->db->where("DATE_FORMAT(date,'%Y-%m-%d') <=", $date1);
			}
			return $this->db->count_all_results();
		}
	public function count_all_index1($tablename, $column, $val, $state, $date1)
		{
			$this->db->select('id, date, invoice_no, type, net_amount');
			$this->db->from($tablename);
			if($state == "day"){
				$this->db->where("DATE_FORMAT(date,'%Y-%m-%d')", $val);
			} else if ($state == "month") {
				$this->db->where("DATE_FORMAT(date,'%Y-%m')", $val);
			} else if ($state == "week") {
				$this->db->where("DATE_FORMAT(date,'%Y-%m-%d') >=", $val);
				$this->db->where("DATE_FORMAT(date,'%Y-%m-%d') <=", $date1);
			}
			return $this->db->count_all_results();
		}
	public function count_filtered_index($tablename, $column, $val, $state, $date1)
		{
			$this->_get_datatables_query($tablename, $column, $val, $state, $date1);
			$query = $this->db->get();
			return $query->num_rows();
		}
	public function count_filtered_index1($tablename, $column, $val, $state, $date1)
		{
			$this->_get_datatables_query1($tablename, $column, $val, $state, $date1);
			$query = $this->db->get();
			return $query->num_rows();
		}
	function user($username,$password)
		{
			$this->db->select('*');
			$this->db->from('admin');
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$query = $this->db->get();
		//  return $this->db->last_query();
			return $query;
		}
	public function create($tablename,$data=array())
		{
			$this->db->insert($tablename,$data);
		//	return $this->db->last_query();
			return $this->db->insert_id();
		}
	function table_column($tablename,$column=FALSE, $val=FALSE, $column1 = FALSE, $val1 = FALSE)
		{
			$return = array();
			$this->db->select('*');
			$this->db->from($tablename);
			if($column != FALSE) {
			$this->db->where($column, $val);
			}
			if($column1 != FALSE) {
			$this->db->where($column1, $val1);
			}
			$result = $this->db->get();
		//	return $this->db->last_query();
			return $result->result_array();
		}
	function table_column_val($tablename,$column=FALSE, $val=FALSE, $column1 = FALSE, $val1 = FALSE)
		{
			$return = array();
			$this->db->select('*');
			$this->db->from($tablename);
			if($column != FALSE) {
			$this->db->where($column, $val);
			}
			$this->db->order_by('id', "DESC");
			$this->db->limit('1');
			$result = $this->db->get();
		//	return $this->db->last_query();
			return $result->result_array();
		}
	public function get_stock($product_id)
		{
			$this->db->select('*');
			$this->db->from('stock_product');
			$this->db->where('product_id', $product_id);
			$this->db->order_by('id', "ASC");
			$result = $this->db->get();
		//	return $this->db->last_query();
			return $result->result_array();
		}
	public function save_data($tablename, $data = array())
		{
			$this->db->insert($tablename,$data);
		}
	function invoice_group($tablename)
		{
			$return = array();
			$this->db->select('*');
			$this->db->from($tablename);
			$this->db->group_by('invoice_no');
			$result = $this->db->get();
		//	return $this->db->last_query();
			return $result->result_array();
		}
	function invoice_group_date($tablename)
		{
			$return = array();
			$this->db->select('*');
			$this->db->from($tablename);
			$this->db->where('date', date('Y-m-d'));
			$this->db->group_by('invoice_no');
			$result = $this->db->get();
		//	return $this->db->last_query();
			return $result->result_array();
		}
	function table_column_group_name($tablename, $column, $val)
		{
			$return = array();
			$this->db->select('*');
			$this->db->from($tablename);
			$this->db->where($column, $val);
			$this->db->group_by('invoice_new');
			$result = $this->db->get();
		//	return $this->db->last_query();
			return $result->result_array();
		}
	function table_column_group_val_whr($tablename, $column = FALSE, $invoice_new)
		{
			$return = array();
			$this->db->select('*');
			$this->db->from($tablename);
			$this->db->where('invoice_new', $invoice_new);
			$this->db->group_by('invoice_new');
			$result = $this->db->get();
		//	return $this->db->last_query();
			return $result->result_array();
		}
	function table_column_group_val_whr1($tablename, $column = FALSE, $invoice_non)
		{
			$return = array();
			$this->db->select('*');
			$this->db->from($tablename);
			$this->db->where('invoice_non', $invoice_non);
			$this->db->group_by('invoice_non');
			$result = $this->db->get();
		//	return $this->db->last_query();
			return $result->result_array();
		}
	function table_column_data($tablename,$column=FALSE, $val=FALSE, $column1 = FALSE, $val1 = FALSE)
		{
			$return = array();
			$this->db->select('*');
			$this->db->from($tablename);
			$this->db->where($column, $val);
			$this->db->order_by('id', "DESC");
			$this->db->limit('1');
			$result = $this->db->get();
		//	return $this->db->last_query();
			return $result->result_array();
		}
	function get_id()
		{
			$return = array();
			$this->db->select('*');
			$this->db->from("quotation_add");
			$this->db->order_by('id', "DESC");
			$this->db->limit('1');
			$result = $this->db->get();
		 // return $this->db->last_query(); 
			return $result->result_array();
		}
	function get_id_val()
		{
			$return = array();
			$this->db->select('*');
			$this->db->from("invoice_add");
			$this->db->order_by('id', "DESC");
			$this->db->limit('1');
			$result = $this->db->get();
		 // return $this->db->last_query(); 
			return $result->result_array();
		}
	public function update_all($tablename, $data=array(),$where=array())
		{
			return $this->db->update($tablename,$data,$where);
		//	return $this->db->last_query();
			
		}
	public function get_gst($customer_id)
		{
			$this->db->select('*');
			$this->db->from('customer');
			$this->db->where('id', $customer_id);
			$result = $this->db->get();
		//	return $this->db->last_query();
			return $result->result_array();
		}
	public function get_price($product_id)
		{
			$this->db->select('*');
			$this->db->from('product');
			$this->db->where('id', $product_id);
			$result = $this->db->get();
		//	return $this->db->last_query();
			return $result->result_array();
		}
	public function get_quantity($product_id)
		{
			$this->db->select('*');
			$this->db->from('quantity_list');
			$this->db->where('id', $product_id);

			$result = $this->db->get();
		//	return $this->db->last_query();
			return $result->result_array();
		}
	public function get_subname($id = FALSE)
		{
			$this->db->select('*');
			$this->db->from('expense_category');
			$this->db->where('sub_name', $id);
			$result = $this->db->get();
		//	return $this->db->last_query();
			return $result->result_array();
		}
	function delete_row($tablename, $delete_id)
		{
			$this->db->where('id', $delete_id);
			return $query = $this->db->delete($tablename);
		}
	function delete_row_invoice($tablename, $delete_id)
		{
			$this->db->where('invoice_new', $delete_id);
			return $query = $this->db->delete($tablename);
		}
	function delete_row_invoice_id($tablename, $delete_id)
		{
			$this->db->where('id', $delete_id);
			return $query = $this->db->delete($tablename);
		}
}