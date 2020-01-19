<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Quotation extends MY_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('customer_model');
		$this->load->model('categories_model');
		$this->load->model('brand_model');
		$this->load->model('genset_model');
		$this->load->model('boat_model');
		$this->load->model('item_model');
		$this->load->model('bank_model');
		$this->load->model('other_charge_model');
		$this->load->model('city_model');
		$this->load->model('tc_model');
<<<<<<< HEAD
		$this->load->model('footer_content_model');
		$this->load->model('footer_service_model');
=======
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
		$this->load->library('Pdf');
		$this->load->model('QuotationModel','Quotation');
	}

//Create section
//--------------------------------------------------------------------------------------------
	public function create()
	{
		if($this->session->userdata['user_rights']['permission'] == 0)
		{
			redirect(base_url('admin/unauthorized'));
		}
		
		$voucher_no = $this->Quotation->getVoucherNos();
		$data['title'] = 'Create Quotation';
		$result['customers']=$this->customer_model->getCustomers();
		$result['category_parents']=$this->categories_model->get();
		$result['brands']=$this->brand_model->get();
		$result['boats']=$this->boat_model->get();
		$result['gensets']=$this->genset_model->get();
		$result['banks']=$this->bank_model->get();
		$result['charges']=$this->other_charge_model->get();
		$result['terms']=$this->tc_model->get();
		$result['city']=$this->city_model->city_get();
<<<<<<< HEAD
		$result['voucher_no']=$voucher_no;
=======
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
		$this->load->view('templates/header',$data);
		$this->load->view('quotation/index',$result);
		$this->load->view('templates/footer');
	}
	
	
	public function createnew()
	{
		if($this->session->userdata['user_rights']['permission'] == 0)
		{
			redirect(base_url('admin/unauthorized'));
		}
		
		$voucher_no = $this->Quotation->getVoucherNos();
		$data['title'] = 'Create Quotation';
		$result['customers']=$this->customer_model->getCustomers();
		$result['category_parents']=$this->categories_model->get();
		$result['brands']=$this->brand_model->get();
		$result['boats']=$this->boat_model->get();
		$result['gensets']=$this->genset_model->get();
		$result['banks']=$this->bank_model->get();
		$result['charges']=$this->other_charge_model->get();
		$result['terms']=$this->tc_model->get();
		$result['contents']=$this->footer_content_model->get();
		$result['services']=$this->footer_service_model->get();
		$result['city']=$this->city_model->city_get();
		$result['voucher_no']=$voucher_no;
		$this->load->view('templates/header',$data);
		$this->load->view('quotation/indexnew',$result);
		$this->load->view('templates/footer');
	}

	public function step_2()
	{
		if($this->input->post('id'))
		{
			$bank_desc=$this->bank_model->get($this->input->post('id'));
			if($bank_desc)
				echo json_encode($bank_desc);
			else
				echo 0;
		}
		if($this->input->post('c_id'))
		{
			$charge_desc=$this->other_charge_model->get($this->input->post('c_id'));
			if($charge_desc)
				echo json_encode($charge_desc);
			else
				echo 0;
		}
	}

	public function step_2()
	{
		if($this->input->post('id'))
		{
			$bank_desc=$this->bank_model->get($this->input->post('id'));
			if($bank_desc)
				echo json_encode($bank_desc);
			else
				echo 0;
		}
		if($this->input->post('c_id'))
		{
			$charge_desc=$this->other_charge_model->get($this->input->post('c_id'));
			if($charge_desc)
				echo json_encode($charge_desc);
			else
				echo 0;
		}
	}

	public function customerDetails()
	{
		if($this->input->post('id'))
		{
			$customers=$this->customer_model->getCustomers($this->input->post('id'));
			echo json_encode($customers);
		}
	}

	public function category_child()
	{
		if($this->input->post('parent'))
		{
			$childs=$this->categories_model->get();
			$result='<option value="">---Select---</option>';
			foreach ($childs as $child) {
				if($child['parent_id']==$this->input->post('parent')){
				$result.='<option value="'.$child['id'].'">'.$child['category_name'].'</option>';
				}
			}
			echo $result;
		}
	}

	public function setupItems()
	{
		if($this->input->post('brand_id') && $this->input->post('category_id'))
		{
<<<<<<< HEAD
			//$items=$this->item_model->get();
			$items=$this->item_model->getItems($this->input->post('brand_id'), $this->input->post('category_id'));
=======
			$items=$this->item_model->get();
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
			//$result='<option value="">---Select---</option>';
			$result='';
			foreach ($items as $item) {
				$result .= '<option value="'.$item->id.'">'.$item->item_name.'</option>';
			}
			echo $result;
		}
	}
	
	public function setupItemsRows(){
<<<<<<< HEAD
		$item_id = $this->input->post('item_id');
		if(!empty($item_id)){
			$select_items = array();
			$one_item = '';
			foreach($item_id as $key=>$item){
				$get_item = $this->item_model->getItemById($item);
				/*$one_item = array(
					'brand_id'=>$get_item->brand_id,
					'category_id'=>$get_item->category_id,
					'name'=>$get_item->item_name,
					'discription'=>$get_item->description,
					'price'=>$get_item->cost,
				);
				$select_items[] = $one_item;
				*/
				$count = $key+1;
				 $one_item .= "<tr>
				 <td width='5%'>$count</td>
				 <td width='45%'><input type='hidden' value='$get_item->id' name='event_category_item[][][]'>$get_item->item_name</td>
				 <td width='5%'>
					 <div class='input-group'>
						 
						 <input type='text' name='event_category_quant[][][]' class='form-control input-number txtAcrescimo quantityClass' value='1' min='1'>
						 
						 
					 </div>
				 </td>
				 <td width='5%'><input type='text' class='form-control calDays'  name='event_category_day[][][]'></td>
				 <td  width='15%'><input type='hidden'  class='priceClass' value='$get_item->cost' name='event_category_price[][][]'>Rs. $get_item->cost</td>
				 <td  width='25%'><input type='text' class='form-control total' readonly name='q'></td>
			 </tr>";
			}
			echo $one_item;
		}
	}

	//file call then apeend
	public function getCloneTag(){
		$type = $this->input->post('type');
		$result['customers']=$this->customer_model->getCustomers();
		$result['category_parents']=$this->categories_model->get();
		$result['brands']=$this->brand_model->get();
		$result['boats']=$this->boat_model->get();
		$result['gensets']=$this->genset_model->get();
		$result['banks']=$this->bank_model->get();
		$result['charges']=$this->other_charge_model->get();
		$result['terms']=$this->tc_model->get();
		$result['city']=$this->city_model->city_get();
		$result['event_id'] = $this->input->post('event_id');
		if($type == 'category'){
			$this->load->view('quotation/category_ajax',$result);
		}else if($type == 'event'){
			$this->load->view('quotation/event_ajax',$result);
		}
	}
	
	public function getCloneTagnew(){
		$type = $this->input->post('type');
		$result['customers']=$this->customer_model->getCustomers();
		$result['category_parents']=$this->categories_model->get();
		$result['brands']=$this->brand_model->get();
		$result['boats']=$this->boat_model->get();
		$result['gensets']=$this->genset_model->get();
		$result['banks']=$this->bank_model->get();
		$result['charges']=$this->other_charge_model->get();
		$result['terms']=$this->tc_model->get();
		$result['city']=$this->city_model->city_get();
		$result['event_id'] = $this->input->post('event_id');
		if($type == 'category'){
			$this->load->view('quotation/category_ajax_new',$result);
		}else if($type == 'event'){
			$this->load->view('quotation/event_ajax_new',$result);
		}
=======
	    
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
	}
//Create section end
//---------------------------------------------------------------------------------------
//View section

	public function list_view()
	{
		$data['title'] = 'View Quotations';
		$getQuotationsData['quationsDatas'] = $this->Quotation->getQuotations();
//print_r($getQuotations);exit;
		$this->load->view('templates/header',$data);
		$this->load->view('quotation/list',$getQuotationsData);
		$this->load->view('templates/footer');
	}

	public function view($id=null)
	{
	    $id  =  $this->uri->segment('3');
	    $getQuotationsData['quationsDatas'] = $this->Quotation->getQuotationView($id);
	    $getQuotationsData['event_rows'] = $this->Quotation->getEventRows($id);
	    $getQuotationsData['event_total'] = $this->Quotation->getEventTotal($id);
	    $getQuotationsDataIDS = $this->Quotation->getEventRowId($id);
	    $getQuotationsData['event_detail_rows'] = $this->Quotation->getEventDetails($getQuotationsDataIDS);
	    $getQuotationsData['req_rows'] = $this->Quotation->getReqRows($getQuotationsDataIDS);
	    $getQuotationsData['footer_services'] = $this->Quotation->getFooterService();
	    $getQuotationsData['footer_contents'] = $this->Quotation->getFooterContent();
		$data['title'] = 'View Quotation';
		$this->load->view('templates/header',$data);
		$this->load->view('quotation/view',$getQuotationsData);
		$this->load->view('templates/footer');
	}

	public function pdf($id=null)
	{
	    $id  =  $this->uri->segment('3');
	    $data['id'] =$id;
	  //  echo $id;exit;
		$this->load->view('quotation/pdf_convert',$data);
		
	}

	public function generatePdf($id=null)
	{
       $getQuotationsData['quationsDatas'] = $this->Quotation->getQuotationView($id);
	    $getQuotationsData['event_rows'] = $this->Quotation->getEventRows($id);
	    $getQuotationsData['event_total'] = $this->Quotation->getEventTotal($id);
	    $getQuotationsDataIDS = $this->Quotation->getEventRowId($id);
	    $getQuotationsData['event_detail_rows'] = $this->Quotation->getEventDetails($getQuotationsDataIDS);
	    $getQuotationsData['req_rows'] = $this->Quotation->getReqRows($getQuotationsDataIDS);
	    $getQuotationsData['footer_services'] = $this->Quotation->getFooterService();
	    $getQuotationsData['footer_contents'] = $this->Quotation->getFooterContent();
	    
 		$this->load->view('quotation/pdf_view',$getQuotationsData);
	}
	
	public function revision($id)
	{
	    $data['title'] = 'Revision';
	    $result['customers']=$this->customer_model->getCustomers();
	    $result['category_parents']=$this->categories_model->get();
		$result['brands']=$this->brand_model->get();
		$result['charges']=$this->other_charge_model->get();
	    $result['quotations'] = $this->Quotation->getQuotationView($id);
	    $result['banks']=$this->bank_model->get();
	    $result['terms']=$this->tc_model->get();
	    $result['city']=$this->city_model->city_get();
	    $result['boats']=$this->boat_model->get();
		$result['gensets']=$this->genset_model->get();
	    $result['contents']=$this->footer_content_model->get();
		$result['services']=$this->footer_service_model->get();
		$result['events'] = $this->Quotation->getEventRows($id);
		$getQuotationsDataIDS = $this->Quotation->getEventRowId($id);
	    $result['setups'] = $this->Quotation->getEventDetails($getQuotationsDataIDS);
	    $this->load->view('templates/header',$data);
		$this->load->view('quotation/revision',$result);
		$this->load->view('templates/footer');
	}
}
 ?>