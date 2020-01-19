<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class QuotationModel extends CI_Model{

    //quotation add data in mail table
    public function quotationAdd($data){
        $this->db->insert('quotations', $data);
        $id = $this->db->insert_id();
        return $id;
    }
    //quotation add data in mail table
    public function eventAdd($event_table){
        //print_r($event_table);exit;
        $this->db->insert('quotation_event_details', $event_table);
        $id = $this->db->insert_id();
        return $id;
    }
    
    public function eventItemsAdd($event_item_table){
        $this->db->insert('quotation_event_detail_rows', $event_item_table);
        $id = $this->db->insert_id();
        return $id;
    }
    
    
     public function eventItemsAllAdd($event_item_all_table){
        $this->db->insert('quotation_event_detail_row_items', $event_item_all_table);
        $id = $this->db->insert_id();
        return $id;
    }
    
     public function eventRequiremnet($requir){
        $this->db->insert('qutation_requiremnets', $requir);
        $id = $this->db->insert_id();
        return $id;
    }
    
    
    public function getQuotations(){
         $this->db->select('customers.id as custid,customers.company as custcom,customers.name as custname,quotations.id as quo_id,quotations.net_amount,quotations.discType,quotations.transaction_date,quotations.voucher_no,quotations.total_amount,quotations.package_discount,quotations.grand_total,quotations.transportation_amt,quotations.cargo_boats_amt,quotations.team_travel_charge_amt,food_stay_amt');
        $this->db->from('quotations');
        $this->db->join('customers', 'customers.id = quotations.customer_id');
        $this->db->order_by('quotations.id', 'DESC');
        $query = $this->db->get()->result();
         return $query;
    }
    
    // public function getQuotationView($id){
    //     $order = $this->db->select('customers.id as custid,customers.gst_no as custgst,quotations.other_charges,other_charge.id,other_charge.charge_name,customers.name as custname,customers.address as custadd,customers.email as custemail,customers.contact as custcon,quotations.id as quo_id,quotations.net_amount,quotations.transaction_date,quotations.voucher_no,quotations.terms_condition');
    //     $this->db->select('all_cities.city_name');
    //     $this->db->select('quotation_event_details.event_start_date,quotation_event_details.event_end_date,quotation_event_details.setup_date,quotation_event_details.event_time,quotation_event_details.function_name,quotation_event_details.artist_name,quotation_event_details.requirements,quotation_event_details.total,quotation_event_details.comment');
    //     $this->db->from('quotations');
    //     $this->db->join('customers', 'customers.id = quotations.customer_id');
    //     $this->db->join('all_cities','all_cities.city_code = quotations.city_id');
    //     $this->db->join('quotation_event_details','quotation_event_details.quotation_id = quotations.id');
    //     $this->db->join('other_charge','other_charge.id = quotations.other_charges');
    //     $this->db->where(['quotations.id'=>$id]);
    //      $this->db->order_by('quotations.id', 'DESC');
    //     $query = $this->db->get()->result();
    //   print_r ($order);exit;
    //     print_r($query);exit;
    //      return $query;
    // }
    
    public function getQuotationView($id){
        $this->db->select('customers.id as custid,customers.gst_no as custgst,quotations.city_id,quotations.bank_id,customers.company as custcom,quotations.total_amount,quotations.discType,quotations.package_discount,quotations.grand_total,quotations.transportation_amt,quotations.cargo_boats_amt,quotations.team_travel_charge_amt,food_stay_amt,quotations.id as quotationsID,quotations.grand_total,customers.name as custname,customers.address as custadd,customers.email as custemail,customers.contact as custcon,quotations.id as quo_id,quotations.net_amount,quotations.transaction_date,quotations.total_amount,quotations.net_amount,quotations.package_discount,quotations.voucher_no,quotations.terms_condition,quotations.footer_content,quotations.footer_service,quotations.event_to_date,quotations.event_from_date');
        $this->db->select('all_cities.city_name');
        $this->db->select('bank_details.bank_name,bank_details.description');
        $this->db->join('customers', 'customers.id = quotations.customer_id','inner');
        $this->db->join('all_cities','all_cities.city_code = quotations.city_id','inner');
        $this->db->join('bank_details','bank_details.id = quotations.bank_id','inner');
        $this->db->where('quotations.id',$id);
        $query = $this->db->get('quotations')->row();
        return $query;
    }
    
    public function getEventRows($id){
        $this->db->select('*');
        $this->db->where('quotation_event_details.quotation_id',$id);
        $query = $this->db->get('quotation_event_details')->result();
        return $query;
    }
    
    public function getEventTotal($id){
        $this->db->select('count(id) as event');
        $this->db->where('quotation_event_details.quotation_id',$id);
        $query = $this->db->get('quotation_event_details')->row();
        return $query;
    }
    
    public function getEventRowId($id){
        $this->db->select('quotation_event_details.id');
        $this->db->where('quotation_event_details.quotation_id',$id);
        $ids = $this->db->get('quotation_event_details')->result_array();
        return $ids;
    }
    
    public function getReqRows($getQuotationsDataIDS){
        $data=[];
       
        foreach($getQuotationsDataIDS as $id){ 
            $this->db->select('qutation_requiremnets.*,gensets.id as gensetsId,gensets.name,gensets.description,gensets.type,gensets.genset_cost,gensets.boat_cost');
            $this->db->where('qutation_requiremnets.quotation_event_detail_id',$id['id']);
            $this->db->join('gensets','gensets.id = qutation_requiremnets.genset_id','INNER');
            $query = $this->db->get('qutation_requiremnets');
            //print_r($this->db->last_query());
            $data[] = $query->result();
        }
        //print_r($data);exit;
         return $data;
    }
    
    public function getEventDetails($getQuotationsDataIDS){
        $data=[];
        foreach($getQuotationsDataIDS as $id){
            $this->db->select('quotation_event_detail_rows.quotation_event_detail_id,categories.category_name,categories.id');
            $this->db->join('categories','categories.id = quotation_event_detail_rows.category_id');
            $this->db->where('quotation_event_detail_rows.quotation_event_detail_id',$id['id']);
            $query = $this->db->get('quotation_event_detail_rows');
            $data[] = $query->result();
        }
       //print_r($data);exit;
        return $data;
    }
    
    public function getFooterService()
	{
	//	$this->db->order_by('id','DESC');
		$query=$this->db->get('quotation_footer_service');
		if($query){
		    return $query->result();
		}
				
		
	}
	
	public function getFooterContent()
	{
		//$this->db->order_by('id','DESC');
		$query=$this->db->get('quotation_footer_content');
		if($query)
		{
				return $query->result();
	    }
	}
    
    public function getVoucherNos(){
        $this->db->select('voucher_no');
        $this->db->from('quotations');
        $this->db->order_by('voucher_no', 'DESC');
        $query = $this->db->get()->row();
        
    if(!empty($query->voucher_no)){
        $str = explode("19-20/QT-",$query->voucher_no);
     //   print_r();exit;
        if(!empty($str[1])){
            $voucehr_no = $str[1]+1;
        }else{
            $voucehr_no = 1;
        }
    }else{
        $voucehr_no = 1;
    }    
        
        
        return $voucehr_no;
    }
}