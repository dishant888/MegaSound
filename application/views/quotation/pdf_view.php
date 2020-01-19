<?php
 //require_once(ROOT . DS  .'vendor' . DS  . 'dompdf' . DS . 'autoload.inc.php');
use Dompdf\Dompdf;
use Dompdf\Options;
$options = new Options();
$options->set('defaultFont', 'Courier');
$options->set('isRemoteEnabled', FALSE);
$options->set('debugKeepTemp', FALSE);
$options->set('isHtml5ParserEnabled', FALSE);
$dompdf = new Dompdf($options);

$dompdf = new Dompdf();

function numberTowords($num)
{ 
$ones = array( 
1 => "one", 
2 => "two", 
3 => "three", 
4 => "four", 
5 => "five", 
6 => "six", 
7 => "seven", 
8 => "eight", 
9 => "nine", 
10 => "ten", 
11 => "eleven", 
12 => "twelve", 
13 => "thirteen", 
14 => "fourteen", 
15 => "fifteen", 
16 => "sixteen", 
17 => "seventeen", 
18 => "eighteen", 
19 => "nineteen" 
); 
$tens = array( 
1 => "ten",
2 => "twenty", 
3 => "thirty", 
4 => "forty", 
5 => "fifty", 
6 => "sixty", 
7 => "seventy", 
8 => "eighty", 
9 => "ninety" 
); 
$hundreds = array( 
"hundred", 
"thousand", 
"million", 
"billion", 
"trillion", 
"quadrillion" 
); //limit t quadrillion 
$num = number_format($num,2,".",","); 
$num_arr = explode(".",$num); 
$wholenum = @$num_arr[0]; 
$decnum = @$num_arr[1]; 
$whole_arr = array_reverse(explode(",",@$wholenum)); 
krsort($whole_arr); 
$rettxt = ""; 
foreach(@$whole_arr as $key => $i){ 
if($i < 20){ 
$rettxt .= @$ones[$i]; 
}elseif($i < 100){ 
$rettxt .= @$tens[substr($i,0,1)]; 
$rettxt .= " ".@$ones[substr($i,1,1)]; 
}else{ 
$rettxt .= @$ones[substr($i,0,1)]." ".$hundreds[0]; 
$rettxt .= " ".@$tens[substr($i,1,1)]; 
$rettxt .= " ".@$ones[substr($i,2,1)]; 
} 
if($key > 0){ 
$rettxt .= " ".@$hundreds[$key]." "; 
} 
} 
if(@$decnum > 0){ 
@$rettxt .= " and "; 
if(@$decnum < 20){ 
$rettxt .= @$ones[$decnum]; 
}elseif(@$decnum < 100){ 
$rettxt .= @$tens[substr(@$decnum,0,1)]; 
$rettxt .= " ".@$ones[substr(@$decnum,1,1)]; 
} 
} 
return @$rettxt; 
} 


// set some text to print
$html='
<style>
 
 @page { margin: 130px 15px 100px 30px; }
 
table{
		page-break-inside: avoid;
	}
	
	
	.table_rows {
	    border-left: 0.01em solid #020202;
    border-right:0.01em solid #020202;;
    border-top: 0.01em solid #020202;
    border-bottom: 0.01em solid #020202;;
   
	}
	 .table_rows th, .table_rows td{
    border-left:0.01em solid #020202;
    border-right: 0.01em solid #020202;
    border-top: 0;
    border-bottom: 0.01em solid #020202;
    
    
}


</style>

<table style="width: 100%;">
    <tbody>
    <tr ><td><img src="http://ecotourismrajasthan.com/megasound/h2.png" alt=""/></td></tr>
        <tr>
            <td>
                <table style="border:1px solid black; padding:2px;width: 100%;">
                    <tbody>
                        <tr>
                            <td>
                                <table width="100%" style="margin:0">
                                    <tr>
                                    <th colspan="3" align="center">
                                    <b>QUOTATION</b>
                                    </th>
                                    </tr>
                                        <tr>
                                            <td width="50%">
                                                Client Name: '.$quationsDatas->custname.'
                                            </td>
                                            <td>
                                            </td>
                                            <td width="25%" align="left">
                                                Date: '.date('d-m-Y',strtotime($quationsDatas->transaction_date)).'
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="50%">
                                               Company: '.$quationsDatas->custcom.'
                                            </td>
                                            <td>
                                            </td>
                                            <td width="25%" align="left">
                                                Quoatation No:'.$quationsDatas->voucher_no.'
                                            </td>
                                        </tr>
                                         <tr>
                                            <td width="50%">
                                                Address: '.$quationsDatas->custadd.'
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="50%">
                                                GST: '.$quationsDatas->custgst.'
                                            </td>
                                        </tr>
                                         <tr>
                                            <td width="50%">
                                               Email: '.$quationsDatas->custemail.'
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="50%">
                                                Contact: '.$quationsDatas->custcon.'
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="25%" align="">
                                                Event City: '.$quationsDatas->city_name.'
                                             </td>
                                        </tr>
                                        <tr>
                                            <td width="25%" align="">
                                                Event Dates: '.date('d-m-Y',strtotime($quationsDatas->event_from_date)).' to '.date('d-m-Y',strtotime($quationsDatas->event_to_date)).'
                                             </td>
                                        </tr>
                                </table>
                              </td>
                        </tr>
                        
                    </tbody>
                </table>
            </td>
        </tr>
           ';
                           $j=1;  $event_tot=[]; $eventNames=[]; $event_tot1=[]; $event_cost=[]; $requirements=[];
                           foreach($event_rows as $event_row){  
                            
                                
                               
                            
                    $html.='  
                     <tr>
                                <td>
                                    <table  style="border:1px solid black;padding: 5px;width: 100%;">
                                        <thead>
                                            <tr>
                                            <th align="center" colspan="2" style="background-color:#BFF7C3" >
                                                <b>EVENT NO: '.$j.'</b>
                                            </th>
                                        </tr>
                                        </thead>
                                        
                                        <tr class="odd">
                                            <td style="width:13%"><b>Event Date:</b></td>
                                            <td>'.date('d-m-Y',strtotime($event_row->event_start_date)).' to '.date('d-m-Y',strtotime($event_row->event_end_date)).'</td>
                                        </tr>
                                        <tr class="odd">
                                            <td><b>Setup Date:</b></td>
                                            <td>'.date('d-m-Y',strtotime($event_row->setup_date)).'</td>
                                        </tr>
                                        <tr class="odd">
                                            <td><b>Event Venue:</b></td>
                                            <td>'.ucwords($event_row->venue) .'</td>
                                        </tr>
                                         <tr class="odd">
                                            <td><b>Event Time: </b></td>
                                            <td>'. $event_row->event_time.'</td>
                                        </tr>
                                        <tr class="odd">
                                            <td><b>Function:</b></td>
                                            <td>'.ucwords($event_row->function_name) .'</td>
                                        </tr>
                                        <tr class="odd">
                                            <td><b>Artist: </b></td>
                                            <td>'.ucwords($event_row->artist_name) .'</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>';
                             
                            $this->db->select('quotation_event_detail_rows.quotation_event_detail_id,quotation_event_detail_rows.category_id,categories.category_name,categories.id,quotation_event_detail_rows.comments,quotation_event_detail_rows.id as qids,quotation_event_detail_rows.cost');
                            $this->db->join('categories','categories.id = quotation_event_detail_rows.category_id');
                            $this->db->where('quotation_event_detail_rows.quotation_event_detail_id',$event_row->id);
                            $query = $this->db->get('quotation_event_detail_rows')->result();
                            $event_detail_rows =   $query;
                            $comments=[];
                            $data=[];$even='';$event_cate_name=[];$category_Datas=[];$ctrs=[];$event_cost_show=[];
                            foreach($event_detail_rows as $event){ 

                                $this->db->select('quotation_event_detail_row_items.id as IDS ,quotation_event_detail_row_items.days,quotation_event_detail_row_items.qty,quotation_event_detail_row_items.price,quotation_event_detail_row_items.sub_total');
                                $this->db->select('items.id as ItemDS ,items.item_name,items.description');
                                $this->db->select('brands.id as IbrandDS ,brands.brand_name');
                                $this->db->select('categories.category_name,categories.id as catid');
                                
                                $this->db->join('categories','categories.id = quotation_event_detail_row_items.sub_category_id');
                                $this->db->join('brands','brands.id = quotation_event_detail_row_items.brand_id');
                                $this->db->join('items','items.id = quotation_event_detail_row_items.item_id');
                                $this->db->where('quotation_event_detail_row_items.quotation_event_detail_row_id',$event->qids);
                                $query11 = $this->db->get('quotation_event_detail_row_items')->result();
                            
                                $event_cate_name[$event_row->id][] =$event->category_name;
                                $comments[$event->category_name][] =$event->comments;
                                $event_cost_show[$event->category_name] =$event->cost;
                            
                                foreach($query11 as $datas){  
                                $category_Datas[$event->category_name][]=$datas;
                                
                                }
                            } 
                            $abcd=  array_unique($event_cate_name[$event_row->id]);
                            $html .='
                                 <tr>
                                <td>';
                                $comm=[];
                                        foreach($abcd as $catname){
                                           foreach(@$comments[$catname] as $comment){
                                               @$comm[@$catname] .= $comment.' ';
                                           }
                                          
                                
                                    $html .=' <table border="1" class="table_rows classtr" style="border:1px solid black;padding: 5px;width: 100%;">
                                        <thead>
                                        <tr>
                                             <th align="center" style="padding-bottom:10px;" colspan="8">';
                                            if($even != $catname){ 
                                                $even = $catname; 
                                               
                                                     $html.='<b>'.strtoupper($catname).'</b>';
                                            }
                                            $html.='</th>
                                        </tr>
                                        <tr>
                                            <th align="center" width="14%">Category</th>
                                            <th align="center" width="5%">S.No.</th>
                                            <th align="left" width="15%">Brand</th>
                                            <th align="center" width="30%">Description</th>
                                            <th align="center" width="8%">Qty</th>
                                            <th align="center" width="8%">Days</th>
                                            <th align="center" width="10%">Cost</th>
                                            <th align="center" width="10%">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody style="color:#2d2d2e;">';
                                        $it='';  $i=1;$k=0; $tot=0;$ids=[]; 
                                            
                                            $count11=1;$ctr11=[];
                                            
                                              foreach($category_Datas[$catname] as $dats11){ 
                                                @$ctr11[@$dats11->catid] +=$count11;
                                                
                                            }
                                          
                                            foreach($category_Datas[$catname] as $dats){
                                                 
                                                $html .= '<tr>';
                                                if($it != $dats->category_name){
                                                    $html .='
                                                     <td align="center">'.$dats->category_name.'</td>';
                                                        } 
                                                        $tot= $tot+$dats->sub_total; 
                                                   $html.= '
                                                   <td align="center">'.$i.'</td>
                                                    <td>'.$dats->brand_name.'</td>
                                                    <td>'.$dats->description.'</td>
                                                    <td align="center">'.$dats->qty.'</td>
                                                    <td align="center">'.$dats->days.'</td>
                                                    <td align="center">'.$dats->price.'</td>
                                                    <td align="center">'.$dats->sub_total.'</td>
                                                </tr>';
                                          $i++;
                                       
                                            }  @$event_cost[$j] += @$tot; $event_tot[$catname] = $tot;
                                             
                                    $html .='
                                    <tr>
                                            <td colspan="4"></td>
                                            <td colspan="3" style="color:black;">Total '. $catname.' Cost</td>
                                            <td style="color:black;" align="center">'.$tot.'</td>
                                        </tr>
                                         <tr>
                                            <td colspan="2">Comment</td>
                                            <td colspan="8">'.$comm[$catname].' </td>
                                        </tr>
                                    </tbody>
                                    </table>';
                                          $eventNames[] = $catname; $event_tot1[$catname] = $event_tot[$catname];}
                                $html.='
                                </td>
                                </tr>
                                <tr>
                           <td align="right" style="color:black;font-size:18px;"><b>Total of Event No. '.$j.' &nbsp;&nbsp;&nbsp;'.$event_cost[$j].'</b></td>
                                           
                       </tr>';
                          $j++; }
                           $html .=' 
                               
                               <tr>
                                <td>
                                    <table border="1" style="padding: 5px;width: 100%;border-collapse:collapse;">
                                        <tfoot align="right">
                                            <tr>
                                                <td colspan="6" align="center" style="padding:8px;">
                                                    <b>Amount Summary of all Events</b>
                                                </td>
                                            </tr>';
                                            $repeat='';foreach(array_unique($eventNames) as $name){ 
                                                $html .= '
                                            <tr>
                                                <td colspan="5" align="right" style="background-color:#BFF7C3">
                                                    <label><b>'.$name.' Total Amount</b></label>
                                                </td>
                                                <td style="background-color:#BFF7C3">
                                                    <label class="float-right"><b>'.$event_tot1[$name].'</b></label>
                                                </td>
                                            </tr>';
                                             }
                                             $html .='
                                             <tr>
                                                <td colspan="5" align="right" style="background-color:#BFF7C3">
                                                    <label><b>Total Amount</b></label>
                                                </td>
                                                <td style="background-color:#BFF7C3">
                                                    <label class="float-right"><b>'.$quationsDatas->total_amount.'</b></label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" align="right" style="background-color:#BFF7C3">
                                                    <label><b>Package Discount</b></label>
                                                </td>
                                                <td style="background-color:#BFF7C3">
                                                    <label class="float-right"><b>'.$quationsDatas->package_discount.'</b></label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" align="right" style="background-color:#BFF7C3">
                                                    <label><b>Net Total Amount</b></label>
                                                </td>
                                                <td style="background-color:#BFF7C3">
                                                    <label class="float-right"><b>'.$quationsDatas->net_amount.'</b></label>
                                                </td>
                                            </tr>';
                                            if($quationsDatas->transportation_amt >0 && $quationsDatas->cargo_boats_amt >0 && @$quationsDatas->team_travel_charge_amt > 0 && @$quationsDatas->food_stay_amt > 0){
                                            $html .='<tr>
                                                <td colspan="8" align="center" style="background-color:#BFF7C3">
                                                    Other Expenses (outsourced)
                                                </td>
                                            </tr>
                                             <tr>
                                                <td colspan="5" align="right" style="background-color:#BFF7C3">
                                                    <label><b>Transportation</b></label>
                                                </td>
                                                <td style="background-color:#BFF7C3">
                                                    <label class="float-right"><b>'.@$quationsDatas->transportation_amt.'</b></label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" align="right" style="background-color:#BFF7C3">
                                                    <label><b>Cargo Boats</b></label>
                                                </td>
                                                <td style="background-color:#BFF7C3">
                                                    <label class="float-right"><b>'.@$quationsDatas->cargo_boats_amt.'</b></label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" align="right" style="background-color:#BFF7C3">
                                                    <label><b>Team Travel Charges</b></label>
                                                </td>
                                                <td style="background-color:#BFF7C3">
                                                    <label class="float-right"><b>'.@$quationsDatas->team_travel_charge_amt.'</b></label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" align="right" style="background-color:#BFF7C3">
                                                    <label><b>Food & Stay</b></label>
                                                </td>
                                                <td style="background-color:#BFF7C3">
                                                    <label class="float-right"><b>'.@$quationsDatas->food_stay_amt.'</b></label>
                                                </td>
                                            </tr>';
                                            }
                                             $html .='<tr>
                                                <td colspan="5" align="right" style="background-color:#BFF7C3">
                                                    <label><b>Grand Total</b></label>
                                                </td>
                                                <td style="background-color:#BFF7C3">
                                                    <label class="float-right"><b>'.$quationsDatas->grand_total.'</b></label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="6" style="text-align:right;" style="background-color:#BFF7C3">
                                                    <label ><b> Rupees'.ucwords(numberTowords($quationsDatas->grand_total)).'only</b></label>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table border="1" style="padding: 10px;width: 100%;border-collapse:collapse;">
                                        <tr>
                                            <td style="color:red;" >
                                                '.$quationsDatas->footer_content.'
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                             <tr>
                                 <td>
                                     <table border="1" style="padding-bottom: 5px;width: 100%;border-collapse:collapse;">';
                                       $html .= '<tr>
                                            <td>
                                                <b>Bank Details</b>
                                            <br/>
                                            <label style="color:#2d2d2e">'.$quationsDatas->description.'</label>
                                            </td>
                                        </tr>
                                           
                                	</table>
                                </td>
                            </tr>
                            <tr>
                                            <td>
                                                <table border="1" class="table_rows" border="1" style="border:1px solid black;padding: 5px;width: 100%;">
                                                    <thead>
                                                        <tr>
                                                            <td colspan="7" style="padding:8px;" align="center"><b>Our Requirements</b></td>
                                                        </tr>
                                                        
                                                    </thead>
                                                    <tbody style="background-color:#F2E8D5">
                                                        ';$tot=0; $totBoat=0; $gensets=[]; $boats=[]; $totgenset=0; 
                                            foreach($req_rows as $requirement){ 
                                                foreach($requirement as $req){ 
                                                if($req->type == 2){ 
                                                    $gensets[] = $req;
                                                }else{
                                                    $boats[] = $req;
                                                }
                                              } 
                                            } 
                                            if(!empty($gensets)){
                                                            $html .='
                                                             <tr>
                                                <td colspan="8" align="center">
                                                   <b> Gensets</b>
                                                </td>
                                            </tr>
                                             <tr  align="center" style="background-color: #f5c6cb;">
                                                 <th>Date</th>
                                                <th>Description</th>
                                                <th>Venue Name</th>
                                                <th>Qty</th>
                                                <th>Days</th>
                                                <th>Cost</th>
                                                <th>Total</th>
                                            </tr>';
                                            foreach($gensets as $genset){ 
                                                
                                            $tot = $tot+$genset->cost_total;
                                                            
                                                    $html .= '<tr class="text-center">
                                                <td>'.date('d-m-Y',strtotime($genset->re_date)).'</td> 
                                                <td>'.$genset->name.'</td>
                                                <td>'.$genset->venue_name.'</td>
                                                <td>'.$genset->qty.'</td>
                                                <td>'.$genset->days.'</td>
                                                <td>'.$genset->cost.'</td>
                                                <td>'.$genset->cost_total.'</td>
                                            </tr>';
                                            }}
                                             
                                            if(!empty($boats)){ 
                                                  $html .='
                                              <tr>
                                                <td colspan="8" align="center">
                                                  <b>  Boats </b>
                                                </td>
                                            </tr>
                                             <tr align="center" style="background-color: #f5c6cb;">
                                                <th>Date</th>
                                                <th>Description</th>
                                                <th>Venue Name</th>
                                                <th>Qty</th>
                                                <th>Days</th>
                                                <th>Cost</th>
                                                <th>Total</th>
                                            </tr>';
                                            
                                             foreach($boats as $boat){ 
                                               
                                              $tot = $tot+$boat->cost_total;
                                             $html .='
                                             
                                            <tr align="center">
                                                <td>'.date('d-m-Y',strtotime($boat->re_date)).'</td> 
                                                <td>'.$boat->name.'</td>
                                                <td>'.$boat->venue_name.'</td>
                                                <td>'.$boat->qty.'</td>
                                                <td>'.$boat->days.'</td>
                                                <td>'.$boat->cost.'</td>
                                                <td>'.$boat->cost_total.'</td>
                                            </tr>
                                             
                                             ';
                                             }} 
                                             $html .='
                                             <tr>
                                                <td colspan="6" style="background-color: #f5c6cb;" align="right"> <b>Total</b></td>
                                                <td colspan="2" style="background-color: #f5c6cb;" align="center">'.$tot.'</td>
                                             </tr>
                                             <tr>
                                            <td colspan="7" style="padding:8px;" align="center"><b>Note - We do not share our gensets power with Video/LED/Fireworks.</b></td>
                                        </tr>
                                                    </tbody>
                                                </table>    
                                            </td>
                                        </tr>
                                        
                                         <tr>
        	<td>
        	<table border="1" style="padding: 5px;width: 100%;border-collapse:collapse;">
        	<tr>
            <td align="center">
                <b>We Do Not Provide following Items/Services</b>
            </td>
            </tr><tr>
            <td  style="background-color: #bee5eb;" align="center">
            '.$quationsDatas->footer_service.'
            </td>
            </tr>';
            $html .='</table>
            </td>
        </tr>
        	<tr>
                <td>
                     <table border="1" style="padding:8px;border-collapse:collapse;">
                        <tr>
                            <th align="center">
                                <b>Terms & Conditions</b>
                            </th>
                         </tr>
                            <tr>
                                <td>
                                    '.$quationsDatas->terms_condition.'
                                    </td>
                            </tr>
                        </table>
                    </td>
                </tr>    
        <tr>
             <td align="center">
              <b>This is computer generated document and hence does not require a signature.</b>
            </td>
        </tr>
        </tbody>
</table>';

//echo $html;exit;
//$html = preg_replace('/>\s+</', "><", $html);
//$name='Invoice-'.h(($invoice->in1.'_IN'.str_pad($invoice->in2, 3, '0', STR_PAD_LEFT).'_'.$invoice->in3.'_'.$invoice->in4));
$name="quotation";
$dompdf->loadHtml($html);
$dompdf->set_paper('letter', 'landscape');
//$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
//$domPdf->output(['isRemoteEnabled' => true]);
$output = $dompdf->output(); //echo $name; exit;
file_put_contents($name.'.pdf', $output);
//ini_set('display_errors',true);
$dompdf->stream($name,array('Attachment'=>0));
exit(0);
