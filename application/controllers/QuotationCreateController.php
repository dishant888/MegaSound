<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QuotationCreateController extends MY_controller{

    public function __construct()
	{
		parent::__construct();
		$this->load->model('tc_model');
		$this->load->model('QuotationModel','Quotation');
		$this->load->library('Pdf');
    }
    
    //new create quotation submit
    public function createQut(){
        $cust_id = $this->input->post('customer_id');
        $str_date = $this->input->post('cust_evt_dt_str');
        $end_date = $this->input->post('cust_evt_dt_end');
        $city_id = $this->input->post('city_id');
        $total = $this->input->post('total');
        $quotation_no = $this->input->post('quotation_no');
        $discount = $this->input->post('package_discount');
        $net_total = $this->input->post('net_amount');
        $other_charges = $this->input->post('other_charges');
        $discType = $this->input->post('discType');
        $grand_total = $this->input->post('grand_total');
        $transportation_amt = $this->input->post('transportation_amt');
        $cargo_boats_amt = $this->input->post('cargo_boats_amt');
        $food_stay_amt = $this->input->post('food_stay_amt');
        $team_travel_charge_amt = $this->input->post('team_travel_charge_amt');
        $customer_date = $this->input->post('customer_date');
        $customer_dates = explode("-",$customer_date);
       
      $str_date =  $customer_dates[0];
      $end_date =  $customer_dates[1];
    //     foreach($other_charges as $key=>$other_charge){
    //          $otherChrg = array(
    //                     'other_charge_id'=> $other_charge['other_charge_id'],
    //                     'chargeAmt'=>$other_charge['chargeAmt'],
    //                 );
    //                 $otherChrgs[] = $otherChrg;
    //     }
    // $otherChrgs_json = json_encode($otherChrgs);
      //  print_r($otherChrgs_json);exit;
        
        $quotation = array(
            'customer_id'=>$cust_id,
            'city_id'=>$city_id,
            'transaction_date'=>date('Y-m-d'),
            'event_to_date'=>date('Y-m-d',strtotime($str_date)),
            'total_amount'=>$total,
            'package_discount'=>$discount,
            'net_amount'=>$net_total,
            'event_from_date'=>date('Y-m-d',strtotime($end_date)),
            'bank_id'=>$this->input->post('bank'),
            'terms_condition'=>$this->input->post('tc_content'),
            'footer_content'=>$this->input->post('footer_content'),
            'footer_service'=>$this->input->post('footer_service'),
            'voucher_no'=>$quotation_no,
            'created_by'=>$this->session->userdata('id'),
            //'other_charges'=>$otherChrgs_json,
            'grand_total'=>$grand_total,
            'transportation_amt'=>$transportation_amt,
            'cargo_boats_amt'=>$cargo_boats_amt,
            'team_travel_charge_amt'=>$team_travel_charge_amt,
            'food_stay_amt'=>$food_stay_amt,
            'discType'=>$discType,
        );
        $quotation_add = $this->Quotation->quotationAdd($quotation);
        
        if($quotation_add){
            $events = $this->input->post('event');
            $requirement_date = $this->input->post('event_requirement_date');
            $requirement_item = $this->input->post('event_requirement_item');
            $event_requirement_venue = $this->input->post('event_requirement_venue');
            $requirement_qty = $this->input->post('event_requirement_qty');
            $requirement_cost = $this->input->post('event_requirement_cost');
            $requirement_days = $this->input->post('event_requirement_days');
            $event_requirement_cost_total = $this->input->post('event_requirement_cost_total');
              //print_r($requirement_date);exit;
            foreach($events as $key=>$event){
                
                $event_setup_dt = $event['event_setup_date'];
                $event_str_dt = $event['event_start_date'];
                $event_end_dt = $event['event_end_date'];
                $event_time = $event['event_time'];
                $event_venue = $event['event_venue'];
                $event_function = $event['event_function'];
                $event_artist = $event['event_artist'];
                
                $quotationEvent = array(
                    'quotation_id'=>$quotation_add,
                    'setup_date'=>date('Y-m-d', strtotime($event_setup_dt)),
                    'event_start_date'=>date('Y-m-d', strtotime($event_str_dt)),
                    'event_end_date'=>date('Y-m-d', strtotime($event_end_dt)),
                    'event_time'=>date('H:i', strtotime($event_time)),
                    'venue'=>$event_venue,
                    'function_name'=>$event_function,
                    'artist_name'=>$event_artist,
                );
               
               $event_add = $this->Quotation->eventAdd($quotationEvent); 
               
               
               
               if(!empty($requirement_date)){
                foreach($requirement_date[$key] as $key2=>$requr){
                    $requir = array(
                        'quotation_event_detail_id'=> $event_add,
                        're_date'=> date('Y-m-d',strtotime($requirement_date[$key][$key2])),
                        'genset_id'=>$requirement_item[$key][$key2],
                        'venue_name'=>$event_requirement_venue[$key][$key2],
                        'qty'=>$requirement_qty[$key][$key2],
                        'venue_name'=>$event_venue,
                        'cost'=>$requirement_cost[$key][$key2],
                        'cost_total'=>$event_requirement_cost_total[$key][$key2],
                        'days'=>$requirement_days[$key][$key2],
                    );
                    $event_add_rqur = $this->Quotation->eventRequiremnet($requir); 
                }
                
            }   
               
                
            if($event_add){
               foreach($event['category'] as $category){  //print_r($category['event_category']);
                    @$event_category = @$category['event_category'];
                    @$sub_category_id = $category['category_id'];
                    @$brand_id = $category['brand_id'];
                    @$comment = $category['comment'];
                    @$cost = $category['cost'];
                      @$itemS = $category['item'];
                      
                    $quotationEventDetail = array(
                    'quotation_event_detail_id'=>$event_add,
                    'category_id'=>$event_category,
                    'cost'=>$cost,
                    'comments'=>$comment
                );
                 $quotationEventDetail_ID = $this->Quotation->eventItemsAdd($quotationEventDetail); 
                 
                if($quotationEventDetail_ID){
                if($itemS){
                    foreach(@$itemS as $item_Value){ //print_r($item_Value['item_id']);
                        $item_id = $item_Value['item_id'];
                        $qty = $item_Value['qty'];
                        $days = $item_Value['days'];
                        $price = $item_Value['price'];
                        $sub_total = $item_Value['sub_total'];
                        
                       $quotationEventDetailItems = array(
                            'quotation_event_detail_row_id'=>$quotationEventDetail_ID,
                            'item_id'=>$item_id,
                            'qty'=>$qty,
                            'price'=>$price,
                            'days'=>$days,
                            'brand_id'=>$brand_id,
                            'sub_category_id'=>$sub_category_id,
                            'sub_total'=>$sub_total
                        ); 
                         $quotationEventDetailItems1 = $this->Quotation->eventItemsAllAdd($quotationEventDetailItems); 
                    }
                } 
               } 
               } 
            }    
                 
           }
        }else{
           redirect(base_url('quotation/list_view')); 
        }
        
        
        // if($quotation_add){
        //     $events = $this->input->post('event');
        //     $requirement_date = $this->input->post('event_requirement_date');
        //     $requirement_item = $this->input->post('event_requirement_item');
        //     $requirement_descrip = $this->input->post('event_requirement_des');
        //     $requirement_qty = $this->input->post('event_requirement_qty');
              
        //     foreach($events as $key=>$event){
               
        //         $event_setup_dt = $event['event_setup_date'];
        //         $event_str_dt = $event['event_start_date'];
        //         $event_end_dt = $event['event_end_date'];
        //         $event_time = $event['event_time'];
        //         $event_venue = $event['event_venue'];
        //         $event_function = $event['event_function'];
        //         $event_artist = $event['event_artist'];
              
        //         $req = array();$requirement_json=[];
        //     if(!empty($requirement_date)){
        //         foreach($requirement_date[$key] as $key2=>$requr){
        //             $requir = array(
        //                 'date'=> $requirement_date[$key][$key2],
        //                 'item'=>$requirement_item[$key][$key2],
        //                 'description'=>$requirement_descrip[$key][$key2],
        //                 'qty'=>$requirement_qty[$key][$key2]
        //             );
        //             $req[] = $requir;
        //         }
        //          $requirement_json = json_encode($req);
        //     }    
                
               
        //         $event_table = array(
        //             'quotation_id'=>$quotation_add,
        //             'setup_date'=>date('Y-m-d', strtotime($event_setup_dt)),
        //             'event_start_date'=>date('Y-m-d', strtotime($event_str_dt)),
        //             'event_end_date'=>date('Y-m-d', strtotime($event_end_dt)),
        //             'event_time'=>date('H:i', strtotime($event_time)),
        //             'venue'=>$event_venue,
        //             'function_name'=>$event_function,
        //             'artist_name'=>$event_artist,
        //             'requirements'=>$requirement_json,
        //         );
                
                 
        //         $event_add = $this->Quotation->eventAdd($event_table);
               
                
        //     /****start code for save data items ****/    
           
        //         foreach($event['category'] as $category){
        //             // print_r($category);exit;
        //             $sub_category_id = $category['category_id'];
        //             $brand_id = $category['brand_id'];
        //             $item = $category['item'];
        //             $comment = $category['comment'];
                    
        //             foreach($item as $item_Value){
        //                 $item_id = $item_Value['item_id'];
        //                 $qty = $item_Value['qty'];
        //                 $days = $item_Value['days'];
        //                 $price = $item_Value['price'];
        //                 $sub_total = $item_Value['sub_total'];
        //                 $itemData = array(
        //                     'item_id' => $item_id,
        //                     'qty'=>$qty,
        //                     'days'=>$days,
        //                     'price' => $price,
        //                     'row_total'=> $sub_total
        //                 );
        //             $itemDatas[] = $itemData;    
                        
        //             }
                    
        //             $item_json = json_encode($itemDatas);
                   
        //             $event_item_table = array(
        //                     'quotation_event_detail_id' => $event_add,
        //                     'category_id' => $sub_category_id,
        //                     'brand_id' => $brand_id,
        //                     'items'=>$item_json,
        //                     'comment'=>$comment
        //                 );
        //             $event_add = $this->Quotation->eventItemsAdd($event_item_table);
        //         }
        //   // print_r($event_item_table);exit;
           
          
        //     }
        // }else{
        //   redirect(base_url('quotation/list_view')); 
        // }
        
         redirect(base_url('quotation/list_view')); 

    }
    
    
     public function createQutOld(){
        $cust_id = $this->input->post('customer_id');
        $str_date = $this->input->post('cust_evt_dt_str');
        $end_date = $this->input->post('cust_evt_dt_end');
        $city_id = $this->input->post('city_id');
        $total = $this->input->post('total');
        $quotation_no = $this->input->post('quotation_no');
        $discount = $this->input->post('discount');
        $net_total = $this->input->post('net_total');
        $other_charges = $this->input->post('other_charges');
        $grand_total = $this->input->post('grand_total');
         $customer_date = $this->input->post('customer_date');
       $customer_dates = explode("-",$customer_date);
      $str_date =  $customer_dates[0];
      $end_date =  $customer_dates[1];
        foreach($other_charges as $key=>$other_charge){
             $otherChrg = array(
                        'other_charge_id'=> $other_charge['other_charge_id'],
                        'chargeAmt'=>$other_charge['chargeAmt'],
                    );
                    $otherChrgs[] = $otherChrg;
        }
    $otherChrgs_json = json_encode($otherChrgs);
      //  print_r($otherChrgs_json);exit;
        
        $quotation = array(
            'customer_id'=>$cust_id,
            'city_id'=>$city_id,
            'transaction_date'=>date('Y-m-d'),
            'event_to_date'=>date('Y-m-d',strtotime($str_date)),
            'total_amount'=>$total,
            'package_discount'=>$discount,
            'net_amount'=>$net_total,
            'event_from_date'=>date('Y-m-d',strtotime($end_date)),
            'bank_id'=>$this->input->post('bank'),
            'terms_condition'=>$this->input->post('tc_content'),
            'voucher_no'=>$quotation_no,
            'created_by'=>$this->session->userdata('id'),
            'other_charges'=>$otherChrgs_json,
            'grand_total'=>$grand_total
        );
        $quotation_add = $this->Quotation->quotationAdd($quotation);
        
       
        
        
        if($quotation_add){
            $events = $this->input->post('event');
            $requirement_date = $this->input->post('event_requirement_date');
            $requirement_item = $this->input->post('event_requirement_item');
            $requirement_descrip = $this->input->post('event_requirement_des');
            $requirement_qty = $this->input->post('event_requirement_qty');
              
            foreach($events as $key=>$event){
               
                $event_setup_dt = $event['event_setup_date'];
                $event_str_dt = $event['event_start_date'];
                $event_end_dt = $event['event_end_date'];
                $event_time = $event['event_time'];
                $event_venue = $event['event_venue'];
                $event_function = $event['event_function'];
                $event_artist = $event['event_artist'];
              
                $req = array();$requirement_json=[];
            if(!empty($requirement_date)){
                foreach($requirement_date[$key] as $key2=>$requr){
                    $requir = array(
                        'date'=> $requirement_date[$key][$key2],
                        'item'=>$requirement_item[$key][$key2],
                        'description'=>$requirement_descrip[$key][$key2],
                        'qty'=>$requirement_qty[$key][$key2]
                    );
                    $req[] = $requir;
                }
                 $requirement_json = json_encode($req);
            }    
                
               
                $event_table = array(
                    'quotation_id'=>$quotation_add,
                    'setup_date'=>date('Y-m-d', strtotime($event_setup_dt)),
                    'event_start_date'=>date('Y-m-d', strtotime($event_str_dt)),
                    'event_end_date'=>date('Y-m-d', strtotime($event_end_dt)),
                    'event_time'=>date('H:i', strtotime($event_time)),
                    'venue'=>$event_venue,
                    'function_name'=>$event_function,
                    'artist_name'=>$event_artist,
                    'requirements'=>$requirement_json,
                );
                
                 
                $event_add = $this->Quotation->eventAdd($event_table);
               
                
            /****start code for save data items ****/    
           
                foreach($event['category'] as $category){
                    // print_r($category);exit;
                    $sub_category_id = $category['category_id'];
                    $brand_id = $category['brand_id'];
                    $item = $category['item'];
                    $comment = $category['comment'];
                    
                    foreach($item as $item_Value){
                        $item_id = $item_Value['item_id'];
                        $qty = $item_Value['qty'];
                        $days = $item_Value['days'];
                        $price = $item_Value['price'];
                        $sub_total = $item_Value['sub_total'];
                        $itemData = array(
                            'item_id' => $item_id,
                            'qty'=>$qty,
                            'days'=>$days,
                            'price' => $price,
                            'row_total'=> $sub_total
                        );
                    $itemDatas[] = $itemData;    
                        
                    }
                    
                    $item_json = json_encode($itemDatas);
                   
                    $event_item_table = array(
                            'quotation_event_detail_id' => $event_add,
                            'category_id' => $sub_category_id,
                            'brand_id' => $brand_id,
                            'items'=>$item_json,
                            'comment'=>$comment
                        );
                    $event_add = $this->Quotation->eventItemsAdd($event_item_table);
                }
           // print_r($event_item_table);exit;
           
          
            }
        }else{
           redirect(base_url('quotation/list_view')); 
        }
        
         redirect(base_url('quotation/list_view')); 

    }
}
