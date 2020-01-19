<link href="<?= base_url('dist/css/smart_wizard.css') ?>" rel="stylesheet" type="text/css" /> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css" /> 

<!--Event form in plz do not change any div and class other wise dynamic work is stop-->
<style>
    .select2-results__option .wrap:before{
    font-family:fontAwesome;
    color:#999;
    content:"\f096";
    width:25px;
    height:25px;
    padding-right: 10px;
    
}
.select2-results__option[aria-selected=true] .wrap:before{
    content:"\f14a";
}

/* not required css */

.select2-multiple, .select2-multiple2
{
  width: 50%
}
.sw-theme-default .step-anchor {
    margin-bottom: -1px !important;
}
.error{
    color: #ab3131 !important;
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
                                    <!--<h3 class="m-b-10">Quotation</h3>-->
                                </div>
                               
                                <div class="row">
                                    
                                    <!-- View Start -->
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Create Quotation</h5>
                                            </div>
                                            <div class="card-body">
                                                <form action="<?= site_url('QuotationCreateController/createQut'); ?>" id="Quotation_form" method="POST" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div id="smartwizard">
                                                            <!--<ul>-->
                                                            <!--    <li><a href="#step-1">Event Details<br /><small>Client & Event Info.</small></a></li>-->
                                                            <!--    <li><a href="#step-2">Add Other Details<br /><small>Other details</small></a></li>-->
                                                                <!--<li><a href="#step-3">Step Title<br /><small>Step description</small></a></li>
                                                            <!--    <li><a href="#step-4">Step Title<br /><small>Step description</small></a></li>-->
                                                            <!--</ul>-->

                                                            <div> 
                                                            
                                                                <div id="step-1" class="container-fluid">
                                                                    <div class="row">
                                                                        <div class="col-sm-3">
                                                                            <div class="form-group">
                                                                                <label>Select Customer</label>
                                                                                <select class="select2 form-control" id="customer" required name="customer_id">
                                                                                    <option value="">---Select Customer---</option>
                                                                                    <?php foreach ($customers as $customer): ?>
                                                                                        <option value="<?=$customer->id?>" ><?=$customer->name?></option>
                                                                                    <?php endforeach ?>
                                                                                </select>
                                                                                 <label id="customer-error" class="error" for="customer"></label>
                                                                            </div>
                                                                           
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="form-group">
                                                                                <label>Company</label>
                                                                                <input type="text" class="form-control" readonly id="cust_company">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="form-group">
                                                                                <label>Address</label>
                                                                                <input type="text" class="form-control" readonly id="cust_address">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="form-group">
                                                                                <label>Quotation No.</label>
                                                                                <input type="text" name="quotation_no" class="form-control" value="<?php echo '19-20/QT-0'.$voucher_no; ?>" readonly>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                                            <div class="form-group">
                                                                                <label>Select Event Dates</label>
                                                                                <input type="hidden" name="cust_evt_dt_str" id="cust_evt_dt_str">
                                                                                <input type="hidden" name="cust_evt_dt_end" id="cust_evt_dt_end">
                                                                                <input type="text" required name="customer_date" class="form-control"/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                                            <div class="form-group">
                                                                                <label>Event City</label>
                                                                                <select class="form-control select2" required name="city_id">
                                                                                        <option value="">--Select City--</option>
                                                                                        <?php
                                                                                        foreach($city as $name){
                                                                                            echo "<option value='$name->city_code'>$name->city_name</option>";
                                                                                        }
                                                                                        ?>
                                                                                </select>
                                                                                <label id="city_id-error" class="error" for="city_id"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                <div class="" id="event1">
                                                                    <div class="row">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col">
                                                                            <h3>1. Event Details <input type="hidden" name="event[0]" value="0"><span style="color:red; font-size: 20px; cursor :pointer;" class="event_div"><i class="fa fa-chevron-circle-down"></i></span>
                                                                                <!--<span class="float-right" style="font-size: 12px;">Remove Event &nbsp;<i class="fa fa-times"></i></span>--></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="event_div_hide">
                                                                    <div class="row">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                                            <div class="row">
                                                                                <div class="col-lg-3 col-md-3 col-sm-6">
                                                                                    <div class="form-group input-group">
                                                                                        <span class="input-group-text "><i class="fa fa-calendar"></i></span>
                                                                                        <input type="text" name="event[0][event_setup_date]" id="setup_date" placeholder="Setup Date" class="form-control datepicker setup_date" required>
                                                                                    </div>
                                                                                    <label id="setup_date-error" class="error" for="setup_date"></label>
                                                                                </div>
                                                                                <div class="col-lg-3 col-md-3 col-sm-6">
                                                                                    <div class="form-group input-group">
                                                                                        <span class="input-group-text "><i class="fa fa-calendar"></i></span>
                                                                                        <input type="text" name="event[0][event_start_date]" id="start_date" placeholder="Event Start Date" class="form-control start_date datepicker" required>
                                                                                    </div>
                                                                                    <label id="start_date-error" class="error" for="start_date"></label>
                                                                                </div>
                                                                                <div class="col-lg-3 col-md-3 col-sm-6">
                                                                                    <div class="form-group input-group">
                                                                                        <span class="input-group-text "><i class="fa fa-calendar"></i></span>
                                                                                        <input type="text" name="event[0][event_end_date]" id="end_date" placeholder="Event End Date" class="form-control end_date datepicker" required>
                                                                                    </div>
                                                                                    <label id="end_date-error" class="error" for="end_date"></label>
                                                                                </div>
                                                                                <div class="col-lg-3 col-md-3 col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <div class='input-group date' id='datetimepicker3'>
                                                                                            <input type='time' name="event[0][event_time]" id="event_time" class="form-control event_time" placeholder="Event Time" value="01:10" required/>
                                                                                            <span class="input-group-addon">
                                                                                                <span class="glyphicon glyphicon-time"></span>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-9 col-md-9 col-sm-9">
                                                                            <div class="row">
                                                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                                                        <div class="form-group">
                                                                                                <input type="text" name="event[0][event_venue]" id="event_venue" placeholder="Venue" class="form-control event_venue" required>
                                                                                        </div>
                                                                                        
                                                                                </div>
                                                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                                                        <div class="form-group">
                                                                                                <input type="text" name="event[0][event_function]" id="event_function" placeholder="Function" class="form-control event_function" required>
                                                                                        </div>
                                                                                </div>
                                                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                                                        <div class="form-group">
                                                                                                <input type="text" name="event[0][event_artist]" id="event_artist" placeholder="Artist" class="form-control event_artist" required>
                                                                                        </div>
                                                                                </div>
                                                                               
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-3 col-sm-9">
                                                                            <div class="row">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                                                    <a href="javascript:void(0)" id="" class="add_cate text-success float-right ">Add Category <span class="badge badge-success"><i class="fa fa-plus"></i></span></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                   
                                                                    <!--Fix div start -->
                                                                    <div >
                                                                        <div id="" class="main_div_category">
                                                                            <div class="row">
                                                                                <div class="col-lg-10 col-md-10 col-sm-10">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-2 col-md-2 col-sm-2">
                                                                                            <label class="pull-right">Setup</label>
                                                                                        </div>
                                                                                        <div class="col-lg-2 col-md-2 col-sm-2">
                                                                                            <div class="form-group">
                                                                                                <select class="form-control select2 parent event_category" id="event_category" required name="event_category[0][]">
                                                                                                    <option value="">--Select--</option>
                                                                                                   <?php foreach($category_parents as $category_parent): if($category_parent['parent_id']==0){?>
                                                                                                    <option value="<?=$category_parent['id']?>"><?=$category_parent['category_name']?></option>
                                                                                                   <?php }endforeach; ?>
                                                                                                </select>
                                                                                                <label id="event_category-error" class="error" for="event_category"></label>
                                                                                            </div>
                                                                                            
                                                                                        </div>
                                                                                        <div class="col-lg-2 col-md-2 col-sm-2">
                                                                                            <div class="form-group">
                                                                                                <select class="form-control select2 child" data-cat="0" id="category_id" required  name="event[0][category][0][category_id]">
                                                                                                    <option value="">--Select--</option>
                                                                                                </select>
                                                                                                <label id="category_id-error" class="error" for="category_id"></label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-2 col-md-2 col-sm-2">
                                                                                            <div class="form-group">
                                                                                               <select class="form-control select2 brand" name="event[0][category][0][brand_id]" required id="brand">
                                                                                                    <option value="">--Select--</option>
                                                                                                    <?php foreach($brands as $brand): ?>
                                                                                                        <option value="<?=$brand['id']?>"><?=$brand['brand_name']?></option>
                                                                                                    <?php endforeach; ?>
                                                                                                </select>
                                                                                                <label id="brand-error" class="error" for="brand"></label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                                                                            <div class="form-group">
                                                                                               <select class="select2-multiple21 form-control select2 item" multiple id="item" required>
                                                                                                </select>
                                                                                                <label id="item-error" class="error" for="item"></label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-2 col-md-2 col-sm-2 header">
                                                                                    <span style="color:red; font-size: 20px;"><i class="fa fa-chevron-circle-down"></i></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row hide_this">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 table-responsive">
                                                                                    <table class="table table-striped hide_this main_table">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th style="width: 10%;">No.</th>
                                                                                                <th style="width: 40%;">Item Description</th>
                                                                                                <th style="width: 20%;">Qty</th>
                                                                                                <th style="width: 10%;">Days</th>
                                                                                                <th style="width: 15%;">Price</th>
                                                                                                <th style="width: 15%;">Sub Total</th>
                                                                                                <th style="width: 5%;"></th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody class="selected_item_add" id="table">
                                                                                            
                                                                                        </tbody>
                                                                                        <tfoot>
                                                                                            <tr class="main_tr">
                                                                                                <td>Comment</td>
                                                                                                <td>    
                                                                                                    <input type="text" class="form-control event_category_comment" name="event[0][category][0][comment]">
                                                                                                </td>
                                                                                                <td></td>

                                                                                                <!--<td colspan="2">-->
                                                                                                <!--    <div class="row">-->
                                                                                                <!--        <div class="col-lg-2 col-md-2 col-xs-2">-->
                                                                                                <!--            <span>Total</span>  -->
                                                                                                <!--        </div>-->
                                                                                                <!--        <div class="col-lg-10 col-sm-10 col-md-10">-->
                                                                                                <!--            <input type="text" class="form-control event_category_total" name="event_category_total[0][]">-->
                                                                                                <!--        </div>-->
                                                                                                <!--    </div>-->
                                                                                                <!--</td>-->
                                                                                                <td></td>
                                                                                            </tr>
                                                                                        </tfoot>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <div id="main_div_category_add" class="main_div_category_add"></div>
                                                                        </div>
                                                                        <!--Fix event in requirement-->
                                                                        <div id="requirement" class="requirement">
                                                                            <div class="row mt-5">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                                                    <label style="font-size: 18px;">Requirements</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-1 col-md-1 col-sm-1">
                                                                                            <span>No.</span>
                                                                                        </div>
                                                                                        <div class="col-lg-2 col-md-2 col-sm-2">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                                                                    <label>Date</label>
                                                                                                </div>
                                                                                                <div class="col-lg-9 col-sm-9 col-md-9">
                                                                                                    <div class="form-group input-group">
                                                                                                        <span class="input-group-text "><i class="fa fa-calendar"></i></span>
                                                                                                        <input type="text" name="" placeholder="Date" class="form-control datepicker" id="requre_date">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                                                                    <label>Item</label>
                                                                                                </div>
                                                                                                <div class="col-lg-9 col-sm-9 col-md-9">
                                                                                                    <select class="form-control select2 multiple" id="requre_item">
                                                                                                        <option value="">--Select--</option>
                                                                                                        <?php foreach($boats as $boat): ?>
                                                                                                            <option data-name="<?=$boat['name']?>" value="<?=$boat['id']?>"><?=$boat['name']?></option>
                                                                                                        <?php endforeach; ?>
                                                                                                        <?php foreach($gensets as $genset): ?>
                                                                                                            <option data-name="<?=$genset['name']?>" value="<?=$genset['id']?>"><?=$genset['name']?></option>
                                                                                                        <?php endforeach; ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                                                                    <label>Description</label>
                                                                                                </div>
                                                                                                <div class="col-lg-9 col-sm-9 col-md-9">
                                                                                                    <input type="text" name="" placeholder="Description" class="form-control " id="requre_discription">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-2 col-md-2 col-sm-2">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                                                                    <label>Qty</label>
                                                                                                </div>
                                                                                                <div class="col-lg-9 col-sm-9 col-md-9">
                                                                                                    <div class="input-group">
                                                                                                        <span class="input-group-btn">
                                                                                                            <button type="button" class="btn btn-default altera decrescimo" data-id="add112">
                                                                                                                <span class="fa fa-minus"></span>
                                                                                                            </button>
                                                                                                        </span>
                                                                                                        <input style="font-size: 12px; margin-left: -14px; margin-right: -14px;" type="text" class="form-control input-number txtAcrescimo" value="1" min="1" max="10" id="requre_qty">
                                                                                                        <span class="input-group-btn">
                                                                                                            <button type="button" class="btn btn-default altera acrescimo" data-id="add112">
                                                                                                                <span class="fa fa-plus"></span>
                                                                                                            </button>
                                                                                                        </span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-1 col-md-1 col-sm-1">
                                                                                            <span class="btn-sm btn-success requre_add" style="cursor: pointer;" id="requre_add"><i class="fa fa-plus"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table table-striped" id="requirements_table">
                                                                                            <tbody id="add_requirement">
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                    <hr>
                                                                </div>
                                                                <!--Add more event click then add event-->
                                                                <div id="event_add"></div>
                                                                
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                                        <div class="row">
                                                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                                                <label style="color:red; cursor:pointer;" id="more_events" >ADD MORE EVENTS +</label>
                                                                            </div>
                                                                            <div class="col-lg-9 col-md-9 col-sm-9">
                                                                                &nbsp;
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12 text-center form-error" id="error-list-1">
                                                                        
                                                                    </div>
                                                                </div>
                                                                <!--Fix div end-->
                                                                </div>
                                                               
                                                                <div id="step-2" class="">
                                                                    <table class="table">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td colspan="">
                                                                                    <label>Total Amount</label>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control w-50 float-right totalAmt" name="total">
                                                                                </td>
                                                                                <td colspan="">
                                                                                    <label>Package Discount (Only in Percentage)</label>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control w-50 float-right discount" name="discount">
                                                                                </td>
                                                                                 <td colspan="">
                                                                                    <label>After Discount Amount</label>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control w-50 float-right after_dis" name="after_dis">
                                                                                </td>
                                                                                <td colspan="">
                                                                                    <label>Net Total Amount</label>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control w-50 float-right net_total" name="net_total">
                                                                                </td>
                                                                            </tr>
                                                                            
                                                                            </table>
                                                                            <table class="table" id="charges_table">
                                                                                <tbody>
                                                                                    
                                                                                <tr id="charges_tr">
                                                                                  
                                                                                <td>
                                                                                    <b>Other Charges</b>
                                                                                </td>
                                                                                
                                                                                <td>
                                                                                    <select class="form-control select2" id="charge" required>
                                                                                        <option value="0">---Select---</option>
                                                                                        <?php foreach($charges as $charge): ?>
                                                                                            <option value="<?=$charge['charge_name']?>"><?=$charge['charge_name']?></option>
                                                                                        <?php endforeach; ?>
                                                                                    </select>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" id="charge_desc" name="chargesAmt" class="form-control float-right input-sm">
                                                                                </td>
                                                                                <td>
                                                                                    <a href="javascript:void(0)" class="btn-sm btn-success add_charges">+</a>
                                                                                    <a href="javascript:void(0)" class="btn-sm btn-danger rem_charges">-</a>
                                                                                </td>
                                                                                <td colspan="">
                                                                                    <label></label>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="hidden" class="form-control w-50 float-right after_other_chards" name="after_other_chards">
                                                                                </td>
                                                                                </tr>
                                                                               
                                                                                </tbody>
                                                                                </table>
                                                                            <table class="table">
                                                                           
                                                                            <tr>
                                                                                  <td>
                                                                                    <b>Bank Details</b>
                                                                                </td>
                                                                                <td>
                                                                                    <select class="form-control select2" name="bank" id="bank" required>
                                                                                        <option value="0">---Select---</option>
                                                                                        <?php foreach($banks as $bank): ?>
                                                                                            <option value="<?=$bank['id']?>"><?=$bank['bank_name']?></option>
                                                                                        <?php endforeach; ?>
                                                                                    </select>
                                                                                </td>
                                                                                <td>
                                                                                    <b>T & C</b>
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <button type="button" class="btn btn-sm rounded-0" data-toggle="modal" data-target="#mod">Select</button>
                                                                                    <div class="modal fade" id="mod">
                                                                                        <div class="modal-dialog modal-lg shadow">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <h4 class="modal-title">Terms & Conditions</h4>
                                                                                                    <button class="close" data-dismiss="modal">
                                                                                                        &times;
                                                                                                    </button>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                    <div class="row"  style="height: 400px; overflow-y: scroll;">
                                                                                                      <?php foreach($terms as $term): ?>
                                                                                                        <div class="col-sm-12">
                                                                                                            <table class="w-100">
                                                                                                                <tr>
                                                                                                                    <td>
                                                                                                                        <input type="checkbox" value="<?=$term['description']?>" class="tc_check" name="">
                                                                                                                    </td>
                                                                                                                    <td class="content">
                                                                                                                        <?=wordwrap($term['description'],100,'<br>',true)?>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                        </div>
                                                                                                      <?php endforeach; ?>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="modal-footer">
                                                                                                    <button class="float-left btn btn-primary rounded-0" id="add_tc" data-dismiss="modal">Insert</button>
                                                                                                    <button class="btn btn-danger rounded-0" data-dismiss="modal">Close</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td id="tc_count" class="text-center"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5">
                                                                                    <textarea style="height: 220px;" name="tc_content" class="form-control" id="tc_content"></textarea>
                                                                                </td>
                                                                            </tr>
                                                                             <tr>
                                                                                <td colspan="">
                                                                                    <label>Grand Total</label>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control w-50 float-right grand_total" name="grand_total">
                                                                                </td>
                                                                                </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <input type="submit" value="Submit" class="btn btn-success pull-right">
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                    </form>
                                        </div>
                                    </div>
                                    <!-- view End -->
                                </div> <!--Form div close-->
                            
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>



<script type="text/javascript">
    $(document).ready(function () {
        
        $('#Quotation_form').validate();
  
        
        // $('#smartwizard').smartWizard({
        //     transitionEffect: "fade",
        //     transitionSpeed: 1000,
        // });

        // $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
        //     var err = 0;
        //     if($('#customer').val()==''||$('.setup_date').val()==''||$('.start_date').val()==''||$('.end_date').val()==''||$('.event_venue').val()==''||$('.event_artist').val()==''||$('.event_function').val()==''||$('.event_time').val()=='')
        //     {
        //         var msg = '';
        //         if($('#customer').val()=='')
        //             msg += "*Select Customer<br>";
        //         if($('.setup_date').val()=='')
        //             msg+="*Select Setup Date<br>";
        //         if($('.event_time').val()=='')
        //             msg+="*Select event Time<br>";
        //         if($('.start_date').val()=='')
        //             msg+="*Select event Start Date<br>";
        //         if($('.end_date').val()=='')
        //             msg+="*Select event End Date<br>";
        //         if($('.event_venue').val()=='')
        //             msg+="*Select event Venue<br>";
        //         if($('.event_artist').val()=='')
        //             msg+="*Select event Artist<br>";
        //         if($('.event_function').val()=='')
        //             msg+="*Select event Function<br>";

        //         $('#error-list-1').html(msg);
        //         err = 1;
        //         return false;
        //     }
        // });
        
    });
    
    $('.select2').select2();
        
    jQuery(function($) {
	$.fn.select2.amd.require([
    'select2/selection/single',
    'select2/selection/placeholder',
    'select2/selection/allowClear',
    'select2/dropdown',
    'select2/dropdown/search',
    'select2/dropdown/attachBody',
    'select2/utils'
  ], function (SingleSelection, Placeholder, AllowClear, Dropdown, DropdownSearch, AttachBody, Utils) {

	    var SelectionAdapter = Utils.Decorate(
      SingleSelection,
      Placeholder
    );
    
    SelectionAdapter = Utils.Decorate(
      SelectionAdapter,
      AllowClear
    );
          
    var DropdownAdapter = Utils.Decorate(
      Utils.Decorate(
        Dropdown,
        DropdownSearch
      ),
      AttachBody
    );
    
	var base_element = $('.select2-multiple2')
    $(base_element).select2({
    	placeholder: 'Select multiple items',
      dropdownAdapter: DropdownAdapter,
     allowClear: true,
     
      templateResult: function (data) {

        if (!data.id) { return data.text; }

        var $res = $('<div></div>');

        $res.text(data.text);
        $res.addClass('wrap');
        return $res;
      },
      templateSelection: function (data) {
      	if (!data.id) { return data.text; }
        var selected = ($(base_element).val() || []).length;
        var total = $('option', $(base_element)).length;
        
        //console.log(data);
        //return "Selected " + selected + " of " + total;
        return data.text;
      }
    })
  
  });
  
});
</script>

<script>
    // $('#bank').on('change', function(event) {
    //     var id = $(this).val();
    //     if(id!='0')
    //     {
    //         $('.loading').show();
    //         $.ajax({
    //             url: '<?=base_url('quotation/step_2')?>',
    //             type: 'POST',
    //             data: {id: id},
    //             success:function(data){
    //                 $('.loading').hide();
    //                 if(data!=0)
    //                 {
    //                     data = JSON.parse(data);
    //                     $('#bank_desc').text(data.description);
    //                 }
    //             }
    //         });
            
    //     }else{
    //         $('#bank_desc').text('');
    //     }
    // });
    // $('#charge').on('change', function(event) {
    //     var c_id = $(this).val();
    //     if(c_id!='0')
    //     {
    //         $('.loading').show();
    //          $.ajax({
    //             url: '<?=base_url('quotation/step_2')?>',
    //             type: 'POST',
    //             data: {c_id: c_id},
    //             success:function(data){
    //                 $('.loading').hide();
    //                 if(data!=0)
    //                 {
    //                 data = JSON.parse(data);
    //                 $('#charge_desc').val(data.charge_name);
    //                 }
    //             }
    //         });

    //     }else{
    //         $('#charge_desc').val('');
    //     }
    // });
// Aumenta ou diminui o valor sendo 0 o mais baixo possível
$(document).on('click',".altera", function(){
    var $input = $(this).parent().parent().parent().find("div.input-group input.txtAcrescimo");
    if ($(this).hasClass('acrescimo'))
        $input.val(parseInt($input.val())+1);
    else if ($input.val()>=1)
        $input.val(parseInt($input.val())-1);
});

</script>

<script>
$(document).ready(function(){

    $('#customer').on('change', function() {
        var id = $(this).val();
        if(id!='')
        {
            $('.loading').show();
            $.ajax({
                url: '<?=base_url('quotation/customerDetails')?>',
                type: 'POST',
                data: {id: id},
                success:function(data){
                    var det=JSON.parse(data);
                    $('.loading').hide();
                    $('#cust_company').val(det.company);
                    $('#cust_address').val(det.address);
                }
            });
        }else{
                    $('#cust_company').val('');
                    $('#cust_address').val('');
        }
    });

    $(document).on('click','.add_charges',function(){
        var tr = $('#charges_tr').clone(); 
        $('table#charges_table tbody').append(tr);
        renameOtherCahrges();
    }); 
    renameOtherCahrges();
    
    $(document).on("click",".rem_charges",function() {
		var l=$(this).closest("#charges_table tbody").find("tr#charges_tr").length;
		if (confirm("Are you sure to remove row ?") == true) {
			if(l>2){
		        $(this).closest("tr").remove();
				renameOtherCahrges();
			}
		} 
	});
	
    
    function renameOtherCahrges(){
        var r=1;

		$("#charges_table tbody tr#charges_tr").each(function(){
		    $(this).find('td:nth-child(2) select#charge').attr({ name:"other_charges["+r+"][other_charge_id]"});
		    $(this).find('td:nth-child(3) input#charge_desc').attr({ name:"other_charges["+r+"][chargeAmt]"});
		    
		    r++;
		});
    }
    
    $('#add_tc').click(function(event) {
        var text='';
        $('input.tc_check[type=checkbox]').each(function(index, el) {
            if($(this).is(':checked'))
                text+=$(this).val()+'\r\n\r\n';
        });
        $('#tc_content').val(text);
    });
    var checked=0;
    $('#tc_count').text(checked+' selected');
    $('input.tc_check[type=checkbox]').on('change', function(event) {
        $(this).each(function(index, el) {
            if($(this).is(':checked'))
            {
                checked++;
            }
            else{
                $('#tc_content').val('');
                checked--;
            }
        });
        $('#tc_count').text(checked+' selected');
    });

    $(document).on('click','.rem_setup',function(){
        if(confirm('Are you sure?')){
            var add_category = $(this).parent().parent().closest('div.main_div_category_add');
            $(this).parent().parent().closest('div.main_div_category_add div.main_div_category_get').remove();
            category_rename(add_category);
        }
        
    });
    
    $(document).on('click','.add_cate',function(){
       $('div.hide_this').hide();
       var add_category = $(this).parent().parent().parent().parent().parent().find('div.main_div_category_add');
       var tt = $(this).parentsUntil('div.event_div_hide');
        var event_id = tt.parent().parent().find('div h3 input').val();
        
       $('.loading').show();
       $.ajax({
           url:'<?=base_url('quotation/getCloneTag')?>',
           type:'post',
           data:{type:'category',event_id:event_id},
           success:function(category){
                $('.loading').hide();
               add_category.append(category);
               category_rename(add_category,event_id);
               $('.select2').select2(); 
           }
       });
    });

    function category_rename(current,event_id)
    {
        var tt = current.find('div.main_div_category_get');
        //console.log(tt);
        i=1;
        tt.each(function() {
            var ttg = $(this).find('select.child').attr({"data-cat":""+i+"","name":"event["+event_id+"][category]["+i+"][category_id]","id":"event["+event_id+"][category]["+i+"][category_id]"}).rules("add", "required");
            $(this).find('select.brand').attr({"data-cat":""+i+"","name":"event["+event_id+"][category]["+i+"][brand_id]","id":"event["+event_id+"][category]["+i+"][brand_id]"}).rules("add", "required");;
            $(this).find('input.event_category_comment').attr({"name":"event["+event_id+"][category]["+i+"][comment]","id":"event["+event_id+"][category]["+i+"][comment]"});
            i++;       
        }); 
    }
        var req_date = '';
        var req_item = '';
        var req_des = '';
        var req_qty = '';
        var req_item_name='';
    $(document).on('click',".requre_add", function(){
        req_date = $(this).parent().parent().find("input#requre_date").val();
        req_item = $(this).parent().parent().find("input#requre_item").val();
        req_item_name = $(this).parent().parent().find("#requre_item option:selected").data('name');
        req_des = $(this).parent().parent().find("input#requre_discription").val();
        req_qty = $(this).parent().parent().find("input#requre_qty").val();
         
        if((req_date == '') || (req_item == '') || (req_des == '') || (req_qty == 0)){
            alert('Fill all Fields');
        }else{
            requirements_row(this);
            requirements_rename(this);
        }
    });
    $(document).on('click', '.rem', function() {
            if(confirm('Are You Sure Want to Delete'))
            {     
                var dd = $(this).parent().parent().parent().parent().parent().parent().find('table#requirements_table tbody#add_requirement');
                $(this).closest('tr').remove();
                requirements_rename_delete(dd);
            }
        });
    $(document).on('click', '.remove_event', function() {
            if(confirm('Are You Sure Want to Delete'))
            {     
                var evt = $(this).parent().parent().parent().parent().parent();
                requirements_rename_if_event_delete(evt);
                var yy = $(this).parent().parent().parent().parent().closest('div#event_div_get').remove();
                div_number();
                
            }
        });
    function requirements_row(current)
    {
        $(current).parent().parent().parent().parent().parent().parent().find("table tbody#add_requirement").append('<tr class="req_tr">\n\
                <td>1</td>\n\
                <td><input type="hidden" value="'+req_date+'">'+req_date+'</td>\n\
                <td><input type="hidden" value="'+req_item_name+'">'+req_item_name+'</td>\n\
                <td><input type="hidden" value="'+req_des+'">'+req_des+'</td>\n\
                <td><input type="hidden" value="'+req_qty+'">'+req_qty+'</td>\n\
                <td><i class="fa fa-times rem"></i></td>\n\
            </tr>');
    }
    
   
    function requirements_rename(current)
    {
        var tt = $(current).parentsUntil('div.event_div_hide');
        var event_no = tt.parent().parent().find('div h3 input').val();
        console.log(event_no);
        i=0;
        j=0;
        $(current).parent().parent().parent().parent().parent().parent().find('table#requirements_table tbody#add_requirement tr.req_tr').each(function() {
            $(this).find('td:nth-child(1)').html(++j);
            $(this).find('td:nth-child(2) input').attr({name: "event_requirement_date["+event_no+"][]"});    
            $(this).find('td:nth-child(3) input').attr({name: "event_requirement_item["+event_no+"][]"});    
            $(this).find('td:nth-child(4) input').attr({name: "event_requirement_des["+event_no+"][]"});    
            $(this).find('td:nth-child(5) input').attr({name: "event_requirement_qty["+event_no+"][]"});        
            i++;
        });
    }

    function requirements_rename_if_event_delete(current)
    {
        var tt = current.find('table#requirements_table tbody#add_requirement tr.req_tr');
        var event_no = current.find('div h3 input').val();
        i=0;
        j=0;
        tt.each(function() {
            $(this).find('td:nth-child(1)').html(++j);
            $(this).find('td:nth-child(2) input').attr({name: "event_requirement_date["+event_no+"][]"});    
            $(this).find('td:nth-child(3) input').attr({name: "event_requirement_item["+event_no+"][]"});    
            $(this).find('td:nth-child(4) input').attr({name: "event_requirement_des["+event_no+"][]"});    
            $(this).find('td:nth-child(5) input').attr({name: "event_requirement_qty["+event_no+"][]"});          
            i++; event_no++;
        });
    }
    
    function requirements_rename_delete(current) //never work
    {
        var tt = $(current).parent().parent().parent().parent().parent().parent();
        var j=0;
        current.find('tr.req_tr').each(function() {
            $(this).find('td:nth-child(1)').html(++j);
        });
       
    }
});


$(document).on('change','.parent', function(event) {
    var parent = $(this).val();
    var chld = $(this).parent().parent().parent().parent().find('select.child');
               
    if(parent != '')
    {
        $('.loading').show();
        $.ajax({
            url: '<?=base_url('quotation/category_child')?>',
            type: 'POST',
            data: {parent: parent},
            success:function(data){
                $('.loading').hide();
                //var tt = $(this).parent().parent().parent().parent().find('div div select.child').html(data);
                chld.html(data);
            }
        });
    }else{
        chld.html('<option>---Select---</option>');
    }
});
$(document).on('change','.brand', function() {
    //var category_id = $('#child').val();
    var category_id = $(this).parent().parent().parent().parent().find('select.child :selected').val();
    var brand_id = $(this).val();
    var itm = $(this).parent().parent().parent().parent().find('select.item');
    if(brand_id!='' && category_id!='')
    {
        $('.loading').show();
        $.ajax({
            url: '<?=base_url('quotation/setupItems')?>',
            type: 'POST',
            data: {category_id: category_id,brand_id: brand_id},
            success:function(data){
                $('.loading').hide();
                itm.html(data);
            }
        });
        
    }else{
        itm.html('<option value="">---Select---</option>');
    }
});
var total = 0;
$(document).on('change','.item', function(){
    var item_id = $(this).val();
    var tt = $(this).parent().parent().parent().parent().parent().parent();
    var insert_tr = tt.find('div.row.hide_this div table tbody');
    var tt = $(this).parentsUntil('div.event_div_hide');
    var event_id = tt.parent().parent().find('div h3 input').val();
    var cate = $(this).parent().parent().parent().parent().parent().parent();
    
   $('.loading').show();
   $.ajax({
        url: '<?= base_url('quotation/setupItemsRows')?>',
        type: 'POST',
        data: {item_id: item_id},
        success:function(data){
                $('.loading').hide();
               insert_tr.html(data);
               event_category(cate);
        }
    });
    // var trs =  $(this).parent().parent().parent().parent().parent().parent().find('div.row.hide_this div table tbody tr');
    // var total_inp = $(this).parent().parent().parent().parent().parent().parent().find('div.row.hide_this div table tfoot tr td:nth-child(4) div input.event_category_total');
    // trs.each(function(index, el) {
    //     var qty = $(this).find('td:nth-child(3) div input').val();
    //     var price = $(this).find('td:nth-child(5) input').val();
    //     total += qty*price;
    //     //total += 3*8;
    // });
    // total_inp.val(total);
});

$(document).on('blur','.quantityClass',function(){
    var tot=0;
      $('table.main_table tbody#table tr').each(function() {
            var vals = $(this).find('td:nth-child(3) input.quantityClass').val();    
            var price = $(this).find('td:nth-child(5) input.priceClass').val();    
            var sub_total = vals*price;
           var subToalVal =  $(this).find('td:nth-child(6) input.total').val(sub_total);
          tot = tot+sub_total;
            //alert(tot);
            
          
            
        });
         $('.totalAmt').val(tot);
       
       // $('.event_category_total').val(tot);
        
  // caluculate_total();
});

$(document).on('blur','.discount',function(){ 
    var total = $('.totalAmt').val();
    var per =  $(this).val();
       var netAmount = total*per/100;
       $('.after_dis').val(netAmount);
       var tot_Amts = total-netAmount;
       $('.net_total').val(tot_Amts);
       var chgValue=0;
       $("#charges_table tbody tr#charges_tr").each(function(){
		   // $(this).find('td:nth-child(2) select#charge').attr({ name:"other_charges["+r+"][other_charge_id]"});
		    var Cahgrdvals = $(this).find('td:nth-child(3) input#charge_desc').val();
		     chgValue = Cahgrdvals+tot_Amts;
		   
		});
		
});

$(document).on('blur','#charge_desc',function(){
  
    var tot_charge = 0;
     $("#charges_table tbody tr#charges_tr").each(function(){
         var vals = $(this).find('td:nth-child(3) input#charge_desc').val();
         tot_charge = parseInt(tot_charge)+parseInt(vals);
     });
    var net_total = $('.net_total').val();
    var grand_total = parseInt(net_total)+parseInt(tot_charge);
    $('.grand_total').val(grand_total);
});

function event_category(current)
    {
        var tr = current.find('table tbody tr');
        var tt = $(current).parentsUntil('div.event_div_hide');
        var event_id = tt.parent().parent().find('div h3 input').val();
        //var category_id = current.parent().parent().parent().find('select.event_category').data('cat');
        var category_id = current.find('select.child').data('cat');
        console.log(category_id);
        i=0;
        j=0;
        tr.each(function() {
            $(this).find('td:nth-child(1)').html(++j);
            $(this).find('td:nth-child(2) input').attr({name: "event["+event_id+"][category]["+category_id+"][item]["+i+"][item_id]"});    
            $(this).find('td:nth-child(3) input').attr({name: "event["+event_id+"][category]["+category_id+"][item]["+i+"][qty]"});    
            $(this).find('td:nth-child(4) input').attr({name: "event["+event_id+"][category]["+category_id+"][item]["+i+"][days]"});    
            $(this).find('td:nth-child(5) input').attr({name: "event["+event_id+"][category]["+category_id+"][item]["+i+"][price]"});          
            $(this).find('td:nth-child(6) input').attr({name: "event["+event_id+"][category]["+category_id+"][item]["+i+"][sub_total]"});          
            i++;
        });
    }
    
     function caluculate_total(){
        var tot=0;
        var tr = $('table.main_table tbody#table tr');
        tr.each(function() {
            var vals = $(this).find('td:nth-child(3) input.quantityClass').val();    
            var price = $(this).find('td:nth-child(5) input.priceClass').val();    
            var sub_total = vals*price;
           var subToalVal =  $(this).find('td:nth-child(6) input.total').val(sub_total);
           tot = tot + sub_total;
            alert(tot);
        });
        
        var total = $('.total').val(tot);
       var per =  $('.discount').val();
       var netAmount = round(total*per/100,2);
       $('.net_total').val(netAmount);
        
    }
    
</script>

<script>
$(document).on('click','.header',function(){
   $(this).parent().next('div.hide_this').slideToggle();
});
$(document).on('click','.event_div',function(){
    $(this).parent().parent().parent().next('div.event_div_hide').slideToggle();
});
</script>


<script src="<?= base_url(); ?>assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
<script>
$(function() {
  $('input[name="customer_date"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {
      $('#cust_evt_dt_str').val(start.format('YYYY-MM-DD'));
      $('#cust_evt_dt_end').val(end.format('YYYY-MM-DD'));
    //console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});
</script>


<script>
    $(document).ready(function(){
        var i = 2;
        $('#more_events').on('click', function(){
        if(confirm('New event add')){
            $('.event_div_hide').hide();
            $('.loading').show();
            $.ajax({
                url:'<?=base_url('quotation/getCloneTag')?>',
                type:'post',
                data:{type:'event'},
                success:function(event){
                    $('.loading').hide();
                    $('#event_add').append(event);
                    $('.datepicker').datepicker();
                    div_number();
                    $('.select2').select2(); 
                }
            });
        }
            
        });
    });
   // div_number();

    function div_number(){ 
        var j=2;
        var i=1;
        $('div#event_add div#event_div_get').each(function() {
            $(this).find('div.row div h3').html(j +'. Event Details <input type="hidden" name="event['+i+']" value="'+i+'"><span style="color:red; font-size: 20px; cursor :pointer;" class="event_div"><i class="fa fa-chevron-circle-down"></i></span>\n\
                                <span class="float-right remove_event" style="font-size: 12px; cursor :pointer;">Remove Event &nbsp;<i class="fa fa-times"></i></span>');
            var event_dt = $(this).find('div.event_div_hide div.row');
            event_dt.find('input.event_setup_date').attr({name:"event["+i+"][event_setup_date]"});
            event_dt.find('input.event_start_date').attr({name:"event["+i+"][event_start_date]"});
            event_dt.find('input.event_end_date').attr({name:"event["+i+"][event_end_date]"});
            event_dt.find('input.event_time').attr({name:"event["+i+"][event_time]"});
            event_dt.find('input.event_venue').attr({name:"event["+i+"][event_venue]"});
            event_dt.find('input.event_function').attr({name:"event["+i+"][event_function]"});
            event_dt.find('input.event_artist').attr({name:"event["+i+"][event_artist]"});
            
           var event_cat = $(this).find('div.event_div_hide select.child');
            event_cat.attr({name:"event_category["+i+"]category[0][category_id]"});
            $(this).find('div.event_div_hide select.brand').attr({name:"event_category["+i+"]category[0][brand_id]"});

            var event_comt = $(this).find('div.event_div_hide input.event_category_comment');
                event_comt.attr({name:"event_category_comment["+i+"][]"});
            // var event_totl = $(this).find('div.event_div_hide input.event_category_total');
            // event_totl.attr({name:"event_category_total["+i+"][]"});
            
            /// calulate days i for event 
            // var start =  event_dt.find('input.event_start_date').val();
            //  var end = event_dt.find('input.event_end_date').val();
            
            //  var diff = new Date(end - start);
                
            //     // get days
            //     var days = diff/1000/60/60/24;
                
            //  event_dt.find('input.event_days').val(days);
            
            // /// calulate days i for event 
            
                j++; i++;
        });
        
        
     
                // end - start returns difference in milliseconds 
               
        
    }

</script>

<script type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
                
            });
        </script>