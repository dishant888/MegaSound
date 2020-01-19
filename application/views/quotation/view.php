<?php 

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

 
?>
<style type="text/css">
table.table-bordered  thead tr th, tbody tr td{
    color: black;
}
.header_img{
    height: 150px;
    width: 100%;
    margin-bottom: 10px;
}
table.header-table thead tr td{
    width: 50%;
    background-color: black;
}

@media print { 
 /* All your print styles go here */
 .navbar-wrapper { display: none !important; } 
 .print_btn { display: none !important; } 
 
}
@media print{@page {
  size: A4 landscape;
}

/* Size in mm */    
@page {
  size: 100mm 200mm landscape;
}

/* Size in inches */    
@page {
  size: 4in 6in landscape;
}

}
</style>
<div class="pcoded-main-container">
<div class="pcoded-wrapper">
    <div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
            <div class="col-md-12">
            <div class="page-header-title">
                <h3 class="m-b-10"></h3>
            </div>
            <div class="row">
                        
                <div class="col-sm-12 table-responsive">
                    <table class="w-100 header-table mb-2">
                        <thead>
                            <tr>
                                <td>
                                    <img src="<?=base_url('assets/images/h2.jpg')?>" class="header_img">
                                </td>
                                <td>
                                    <h1 class="text-center display-4 text-white-50">Quotation</h1>
                                </td>
                            </tr>
                        </thead>
                    </table>
                    
                    <table class="w-100" border="1" id="main_tab">
                        <tbody>
                            <tr>
                                <td style="display:flex">
                                    <table width="80%" style="margin:0">
                                        <tr>
                                            <td>
                                                Client Name: <?=$quationsDatas->custname?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Company: <?=$quationsDatas->custcom?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Address: <?=$quationsDatas->custadd?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                GST: <?=$quationsDatas->custgst?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               Email: <?=$quationsDatas->custemail?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Contact: <?=$quationsDatas->custcon?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               Event City: <?=$quationsDatas->city_name?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Event Dates: <?=date('d-m-Y',strtotime($quationsDatas->event_from_date))?> to <?=date('d-m-Y',strtotime($quationsDatas->event_to_date))?>
                                            </td>
                                        </tr>
                                    </table>
                                    <table width="20%" style="margin:0">
                                        <tr>
                                            <td align="left">
                                                <b>Date:</b>
                                            </td>
                                            <td>
                                                <?php echo date('d-m-Y',strtotime($quationsDatas->transaction_date)); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>Quotation No:</b>
                                            </td>
                                            <td>
                                                <?php echo $quationsDatas->voucher_no; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <!--<td>-->
                                            <!--    <b>No. of Events :</b>-->
                                            <!--</td>-->
                                            <!--<td>-->
                                            <!--    <?php  echo $event_total->event; ?>-->
                                            <!--</td>-->
                                        </tr>
                                        <tr>
                                            <!--<td>-->
                                            <!--    <b>Event City :</b>-->
                                            <!--</td>-->
                                            <!--<td>-->
                                            <!--    <?=$quationsDatas->city_name?>-->
                                            <!--</td>-->
                                        </tr>
                                        <tr>
                                            <!--<td>-->
                                            <!--    <b>Event Dates :</b>-->
                                            <!--</td>-->
                                            <!--<td>-->
                                            <!--    <?=date('d-m-Y',strtotime($quationsDatas->event_from_date))?><br><?=date('d-m-Y',strtotime($quationsDatas->event_to_date))?>-->
                                            <!--</td>-->
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <?php $j=1;  $event_tot=[]; $eventNames=[]; $event_tot1=[]; $event_cost=[]; $requirements=[]; foreach($event_rows as $event_row){  
                            
                            ?>
                            <tr>
                                <td>
                                    <table class="w-100">
                                        <thead>
                                            <tr>
                                            <th colspan="2" class="text-center table-success"  style="border-bottom: 1px solid;">
                                                <h6><b>EVENT NO: <?php echo $j; ?></b></h6>
                                            </th>
                                        </tr>
                                        </thead>
                                        
                                        <tr>
                                            <td style="width:13%"><b>Event Date: </b> </td>
                                            <td><?= date('d-m-Y',strtotime($event_row->event_start_date)).' to '.date('d-m-Y',strtotime($event_row->event_end_date)); ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Setup Date:</b></td>
                                            <td><?= date('d-m-Y',strtotime($event_row->setup_date)) ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Event Venue:</b></td>
                                            <td><?= ucwords($event_row->venue) ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Event Time: </b></td>
                                            <td><?= $event_row->event_time; ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Function:</b></td>
                                            <td><?= ucwords($event_row->function_name) ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Artist: </b></td>
                                            <td><?= ucwords($event_row->artist_name) ?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <?php 
                            
                                    $this->db->select('quotation_event_detail_rows.quotation_event_detail_id,quotation_event_detail_rows.category_id,categories.category_name,categories.id,quotation_event_detail_rows.comments,quotation_event_detail_rows.id as qids,quotation_event_detail_rows.cost');
                                    $this->db->join('categories','categories.id = quotation_event_detail_rows.category_id');
                                    $this->db->where('quotation_event_detail_rows.quotation_event_detail_id',$event_row->id);
                                   // $this->db->group_by('quotation_event_detail_rows.category_id');
                                    $query = $this->db->get('quotation_event_detail_rows')->result();
                                    $event_detail_rows =   $query;
                                     $comments=[];
                                     $data=[];$even='';$event_cate_name=[];$category_Datas=[];$ctrs=[];$event_cost_show=[];
                                     foreach($event_detail_rows as $event){ 
                                           //$count1=1;
                                           
                                            $this->db->select('quotation_event_detail_row_items.id as IDS ,quotation_event_detail_row_items.days,quotation_event_detail_row_items.qty,quotation_event_detail_row_items.price,quotation_event_detail_row_items.sub_total');
                                            $this->db->select('items.id as ItemDS ,items.item_name,items.description');
                                            $this->db->select('brands.id as IbrandDS ,brands.brand_name');
                                            $this->db->select('categories.category_name,categories.id as catid');
                                            
                                            $this->db->join('categories','categories.id = quotation_event_detail_row_items.sub_category_id');
                                            $this->db->join('brands','brands.id = quotation_event_detail_row_items.brand_id');
                                            $this->db->join('items','items.id = quotation_event_detail_row_items.item_id');
                                            $this->db->where('quotation_event_detail_row_items.quotation_event_detail_row_id',$event->qids);
                                            $query11 = $this->db->get('quotation_event_detail_row_items')->result();

                                   //  echo'<pre>';  print_r($query11); echo'</pre>'; 
                                             $event_cate_name[$event_row->id][] =$event->category_name;
                                             $comments[$event->category_name][] =$event->comments;
                                             $event_cost_show[$event->category_name] =$event->cost;
                                            
                                              foreach($query11 as $datas){  
                                                 $category_Datas[$event->category_name][]=$datas;
                                               
                                             }
                            } 
                            
                          $a=  array_unique($event_cate_name[$event_row->id]);
                          //print_r($comments);
                                    
                            ?>
                            
                            <tr>
                                <td> 
                                    <?php  $comm=[];
                                        foreach($a as $catname){
                                           
                                           foreach(@$comments[$catname] as $comment){
                                               @$comm[@$catname] .= $comment.' ';
                                           }
                                           
                                // echo'<pre>';print_r($category_Datas);echo'</pre>';
                                // print_r($catname);
                                             if($event_cost_show[$catname] == 'show'){
                                    ?>
                                    <table class="w-100 table-bordered">
                                        <thead>
                                        <tr>
                                            <td colspan="8" style="padding-top:5px;" class="text-center"><h6><b><?php if($even != $catname){ $even = $catname; ?><?php echo strtoupper($catname); } ?></b></h6></td>
                                        </tr>
                                        <tr class="text-center">
                                            <th>Category</th>
                                            <th>S.No.</th>
                                            <th>Brand</th>
                                            <th>Description</th>
                                            <th>Qty</th>
                                            <th>Days</th>
                                            <th>Cost</th>
                                            <th>Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php 
                                            $it='';  $i=1;$k=0; $tot=0;$ids=[]; 
                                            
                                            $count11=1;$ctr11=[];
                                           // echo '<pre>';print_r($category_Datas[$catname]); echo'</pre>';
                                            foreach($category_Datas[$catname] as $dats11){ //echo '<pre>';print_r($dats11); echo'</pre>';
                                                @$ctr11[@$dats11->catid] +=$count11;
                                                //$count11++;
                                            }
                                           // print_r($ctr11);
                                            foreach($category_Datas[$catname] as $dats1){
                                               
                                                
                                           ?>
                                         <tr>
                                           <?php if($it != $dats1->category_name){ ?>  <td class="text-center" rowspan="<?php echo $ctr11[$dats1->catid]?>"><?php $it= $dats1->category_name; echo $dats1->category_name; ?></td> <?php } ?>
                                            <td class="text-center"><?= $i; ?></td>
                                            <td><?= $dats1->brand_name; ?></td>
                                            <td><?= $dats1->description; ?></td>
                                            <td class="text-center"><?= $dats1->qty; ?></td>
                                            <td class="text-center"><?= $dats1->days; ?></td>
                                            <td class="text-center"><?= $dats1->price; ?></td>
                                            <td class="text-center" ><?= $dats1->sub_total;  $tot= $tot+$dats1->sub_total;  ?></td>
                                        </tr>
                                        
                                        <?php $i++; }  @$event_cost[$j] += @$tot; $event_tot[$catname] = $tot; ?>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="3"><b>Total <?php echo  $catname;   ?> Cost</b></td>
                                            <td align="center"><b><?= $tot;  ?></b></td>
                                        </tr>
                                         <tr>
                                            <td colspan="2" >Comment</td>
                                            <td colspan="8"><?php echo  $comm[$catname]; ?> </td>
                                            
                                        </tr>
                                        </tbody>
                                    </table>
                                    <?php }else{ ?>
                                    <table class="w-100 table-bordered">
                                        <thead>
                                        <tr>
                                             <td colspan="8" style="padding-top:5px;" class="text-center"><h6><b><?php if($even != $catname){ $even = $catname; ?><?php echo strtoupper($catname); } ?></b></h6></td>
                                        </tr>
                                        <tr class="text-center">
                                            <th>Category</th>
                                            <th>S.No.</th>
                                            <th>Brand</th>
                                            <th>Description</th>
                                            <th>Qty</th>
                                            <th>Days</th>
                                        </tr>
                                        </thead>
                                       <?php   $it='';  $i=1;$k=0; $tot=0;$ids=[]; 
                                            
                                            $count11=1;$ctr11=[];
                                           // echo '<pre>';print_r($category_Datas[$catname]); echo'</pre>';
                                            foreach($category_Datas[$catname] as $dats11){ //echo '<pre>';print_r($dats11); echo'</pre>';
                                                @$ctr11[@$dats11->catid] +=$count11;
                                                //$count11++;
                                            }
                                           // print_r($ctr11);
                                            foreach($category_Datas[$catname] as $dats1){
                                               
                                                
                                           ?>
                                         <tr>
                                           <?php if($it != $dats1->category_name){ ?>  <td class="text-center" rowspan="<?php echo $ctr11[$dats1->catid]?>"><?php $it= $dats1->category_name; echo $dats1->category_name; ?></td> <?php } ?>
                                            <td class="text-center"><?= $i; ?></td>
                                            <td><?= $dats1->brand_name; ?></td>
                                            <td><?= $dats1->description; ?></td>
                                            <td class="text-center"><?= $dats1->qty; ?></td>
                                            <td class="text-center"><?= $dats1->days; ?></td>
                                            
                                        </tr>
                                        
                                        <?php $i++; }  @$event_cost[$j] += @$tot; $event_tot[$catname] = $tot; ?>
                                        <tr>
                                            <td colspan="3"></td>
                                            <td colspan="1"><b>Total <?php echo  $catname;   ?> Cost</b></td>
                                            <td colspan="2" align="center"><b><?= $tot;  ?></b></td>
                                        </tr>
                                         <tr>
                                            <td colspan="2" >Comment</td>
                                            <td colspan="4"><?php echo  $comm[$catname]; ?> </td>
                                            
                                        </tr>
                                        </tbody>
                                    </table>
                                    <?php }  @$event_tot1[@$catname] += @$event_tot[$catname]; $eventNames[] = $catname;  } ?>
                                </td>
                            </tr>
                           <tr>
                           <td align="right" style="font-size:18px;"><b>Total of Event No. <?=$j?>&nbsp;&nbsp;&nbsp;<?= $event_cost[$j] ?></b></td>
                                           
                       </tr>
                       <?php $j++; } ?>
                        
                       <?php       //print_r($eventNames);  ?>
                       
                            
                            <tr>
                                <td>
                                    <table class="w-100 table-bordered">
                                        <tfoot>
                                            <tr>
                                                <td colspan="6" align="center">
                                                    <b>Amount Summary of all Events</b>
                                                </td>
                                            </tr>
                                            <?php $repeat=''; foreach(array_unique($eventNames) as $name){ ?>
                                            <tr>
                                                <td style="width:80%" align="right" class="table-success">
                                                    <label><b><?= $name; ?> Total Amount</b></label>
                                                </td>
                                                <td class="table-success">
                                                    <label class="float-right"><b><?= $event_tot1[$name];?></b></label>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                           
                                            
                                            <tr>
                                                <td style="width:80%" align="right" class="table-success">
                                                    <label><b>Total Amount</b></label>
                                                </td>
                                                <td class="table-success">
                                                    <label class="float-right"><b><?php echo $quationsDatas->total_amount; ?></b></label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width:80%" align="right" class="table-success">
                                                    <label><b>Package Discount</b></label>
                                                </td>
                                                <td class="table-success">
                                                    <label class="float-right"><b><?php 
                                                    $amtDis=0;
                                                    if($quationsDatas->discType == "per"){
                                                       $amtDis =  $quationsDatas->total_amount*$quationsDatas->package_discount/100;
                                                    }else{
                                                        $amtDis =  $quationsDatas->package_discount;
                                                    }
                                                    echo $amtDis; ?></b></label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width:80%" align="right" class="table-success">
                                                    <label><b>Net Total Amount</b></label>
                                                </td>
                                                <td class="table-success">
                                                    <label class="float-right"><b><?php echo $quationsDatas->net_amount; ?></b></label>
                                                </td>
                                            </tr>
                                             <?php if($quationsDatas->transportation_amt >0 && $quationsDatas->cargo_boats_amt >0 && @$quationsDatas->team_travel_charge_amt > 0 && @$quationsDatas->food_stay_amt > 0){ ?>
                                            <tr>
                                                <td colspan="2" align="center" class="table-success">
                                                    Other Expenses (outsourced)
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width:80%" align="right" class="table-success">
                                                    <label><b>Transportation</b></label>
                                                </td>
                                                <td class="table-success">
                                                    <label class="float-right"><b><?php echo @$quationsDatas->transportation_amt; ?></b></label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width:80%" align="right" class="table-success">
                                                    <label><b>Cargo Boats</b></label>
                                                </td>
                                                <td class="table-success">
                                                    <label class="float-right"><b><?php echo @$quationsDatas->cargo_boats_amt ?></b></label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width:80%" align="right" class="table-success">
                                                    <label><b>Team Travel Charges</b></label>
                                                </td>
                                                <td class="table-success">
                                                    <label class="float-right"><b><?php echo @$quationsDatas->team_travel_charge_amt ?></b></label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width:80%" align="right" class="table-success">
                                                    <label><b>Food & Stay</b></label>
                                                </td>
                                                <td class="table-success">
                                                    <label class="float-right"><b><?php echo @$quationsDatas->food_stay_amt ?></b></label>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                           
                                            <!--<?php foreach(json_decode($quationsDatas->other_charges) as $other_charge){ ?>-->
                                            <!--<tr>-->
                                            <!--    <td colspan="6" class="table-success">-->
                                            <!--        <label class="float-left"><b><?php echo $other_charge->other_charge_id; ?></b></label>-->
                                            <!--        <label class="float-right"><b><?php echo $other_charge->chargeAmt; ?></b></label>-->
                                            <!--    </td>-->
                                            <!--</tr>-->
                                            <!--<?php } ?>-->
                                           
                                            <tr>
                                                <td style="width:80%" align="right" class="table-success">
                                                    <label><b>Grand Total</b></label>
                                                </td>
                                                <td class="table-success">
                                                    <label class="float-right"><b><?php echo $quationsDatas->grand_total; ?></b></label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="6" style="text-align:center;" class="table-success">
                                                    <label ><b><?php echo 'Rupees '.ucwords(numberTowords($quationsDatas->grand_total)).'only'; ?></b></label>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </td>
                            </tr>
                            <!--  <?php foreach($footer_contents as $footer_content){  ?>-->
                            <!--<tr>-->
                            <!--    <td class="text-danger">-->
                            <!--        <?php echo $footer_content->description;  ?>-->
                            <!--    </td>-->
                            <!--</tr>-->
                            <!--<?php } ?>-->
                            <tr>
                                <td class="text-danger">
                                    <?=$quationsDatas->footer_content?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Bank Details
                                    <br>
                                    Account Name: <?= $quationsDatas->bank_name ;?>
                                    <br/>
                                    <?= $quationsDatas->description ;?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table class="w-100 table-bordered">
                                        <thead>
                                            <tr>
                                                <td colspan="8" class="text-center"><h6><b>Our Requirements</b></h6></td>
                                            </tr>
                                            
                                        </thead>
                                        <tbody class=" table-danger">
                                            <?php $tot=0;  $totBoat=0; $gensets=[]; $boats=[]; $totgenset=0; 
                                             
                                            foreach($req_rows as $requirement){ 
                                                foreach($requirement as $req){ //print_r($req);
                                                if($req->type == 2){ 
                                                    $gensets[] = $req;
                                                }else{
                                                    $boats[] = $req;
                                                }
                                              } 
                                            } 
                                            if(!empty($gensets)){ ?>
                                            
                                            <tr>
                                                <td colspan="8"  class="text-center">
                                                   <b> Gensets</b>
                                                </td>
                                            </tr>
                                             <tr class="text-center table-danger">
                                                <th>Date</th>
                                                <th>Description</th>
                                                <th>Venue Name</th>
                                                <th>Qty</th>
                                                <th>Days</th>
                                                <th>Cost</th>
                                                <th>Total</th>
                                            </tr>
                                                
                                           <?php  foreach($gensets as $genset){ 
                                                
                                            $tot = $tot+$genset->cost_total; ?>
                                            
                                            <tr class="text-center">
                                                <td><?= date('d-m-Y',strtotime($genset->re_date)) ?></td> 
                                                <td><?= $genset->name ?></td>
                                                <td><?= $genset->venue_name ?></td>
                                                <td><?= $genset->qty ?></td>
                                                <td><?= $genset->days ?></td>
                                                <td><?= $genset->cost ?></td>
                                                <td><?= $genset->cost_total ?></td>
                                            </tr>
                                                
                                             <?php }}
                                             
                                            if(!empty($boats)){ ?>
                                                 <tr>
                                                <td colspan="8"  class="text-center">
                                                  <b>  Boats </b>
                                                </td>
                                            </tr>
                                             <tr class="text-center table-danger">
                                                <th>Date</th>
                                                <th>Description</th>
                                                <th>Venue Name</th>
                                                <th>Qty</th>
                                                <th>Days</th>
                                                <th>Cost</th>
                                                <th>Total</th>
                                            </tr>
                                             <?php foreach($boats as $boat){ 
                                               
                                             $tot = $tot+$boat->cost_total;?>
                                             
                                            <tr class="text-center">
                                                <td><?= date('d-m-Y',strtotime($boat->re_date)) ?></td> 
                                                <td><?= $boat->name ?></td>
                                                <td><?= $boat->description ?></td>
                                                <td><?= $boat->qty ?></td>
                                                <td><?= $boat->days ?></td>
                                                <td><?= $boat->cost ?></td>
                                                <td><?= $boat->cost_total ?></td>
                                            </tr>
                                             
                                             <?php }} ?>    
                                            <tr>
                                               <td colspan="6" class="text-right table-danger"><b>Total</b></td>
                                               <td colspan="2" class="text-center table-danger"><?php echo  $tot; ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="7" class="table-danger" style="padding:8px;" align="center"><b>Note - We do not share our gensets power with Video/LED/Fireworks.</b></td>
                                            </tr>
                                            <tr>
                                               <td colspan="8" class="text-center table-danger">Note-we don't share our genset power with Video/LED/Fireworks</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <b style="color:black;">We Do Not Provide following Items/Services</b>
                                </td>
                            </tr>
                            <!--<?php foreach($footer_services as $footer_service){  ?>-->
                            <!--<tr>-->
                            <!--    <td class="text-center table-info">-->
                            <!--        <?php echo $footer_service->description; ?>-->
                            <!--    </td>-->
                            <!--</tr>-->
                            <!--<?php } ?>-->
                            <tr>
                                <td class="text-center table-info">
                                    <?=$quationsDatas->footer_service?>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center">
                                    <b style="color:black;">Terms & Conditions</b>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <?=$quationsDatas->terms_condition?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <h6>This is computer generated document and hence does not require a signature.</h6>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 text-center">
                    <br>
                    <a href="<?=base_url('quotation/pdf/').$quationsDatas->quotationsID?>" target="_blank" class="btn btn-primary print_btn">Pdf</a>
                </div>
            </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</div>r