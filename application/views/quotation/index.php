<link href="<?= base_url('dist/css/smart_wizard.css') ?>" rel="stylesheet" type="text/css" /> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css" /> 
<<<<<<< HEAD

<!--Event form in plz do not change any div and class other wise dynamic work is stop-->
=======
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
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
<<<<<<< HEAD
.sw-theme-default .step-anchor {
    margin-bottom: -1px !important;
}
.error{
    color: #ab3131 !important;
}
=======
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
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
<<<<<<< HEAD
                                                            <!--<ul>-->
                                                            <!--    <li><a href="#step-1">Event Details<br /><small>Client & Event Info.</small></a></li>-->
                                                            <!--    <li><a href="#step-2">Add Other Details<br /><small>Other details</small></a></li>-->
                                                                <!--<li><a href="#step-3">Step Title<br /><small>Step description</small></a></li>
                                                            <!--    <li><a href="#step-4">Step Title<br /><small>Step description</small></a></li>-->
                                                            <!--</ul>-->

                                                            <div> 
                                                            
=======
                                                            <ul>
                                                                <li><a href="#step-1">Event Details<br /><small>Client & Event Info.</small></a></li>
                                                                <li><a href="#step-2">Add Other Details<br /><small>Other details</small></a></li>
                                                                <!--<li><a href="#step-3">Step Title<br /><small>Step description</small></a></li>
                                                                <li><a href="#step-4">Step Title<br /><small>Step description</small></a></li>-->
                                                            </ul>

                                                            <div>
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
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
<<<<<<< HEAD
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
=======
                                                                                <input type="text" name="daterange" class="form-control" value="01/01/2018 - 01/15/2018" />
                                                                            </div>
                                                                        </div>
																		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                                            <div class="form-group">
                                                                                <label>Event City</label>
                                                                                <select class="form-control select2" >
																					<option value="">--Select City--</option>
																					<?php
																					foreach($city as $name){
																						echo "<option value='$name->city_code'>$name->city_name</option>";
																					}
																					?>
																				</select>
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                <div class="" id="event1">
                                                                    <div class="row">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col">
<<<<<<< HEAD
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
                                                                                        <input type="text" name="event[0][event_start_date]" id="start_date" placeholder="Event Start Date" class="form-control start_date datepicker datepickerstart" required>
=======
                                                                            <h3>1. Event Details <span class="float-right" style="font-size: 12px;">Remove Event &nbsp;<i class="fa fa-times"></i></span></h3>
                                                                        </div>
                                                                    </div>
																	<div class="row">
																		<div class="col-lg-5 col-md-5 col-sm-5">
																			<div class="row">
                                                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                                                    <div class="form-group input-group">
                                                                                        <span class="input-group-text "><i class="fa fa-calendar"></i></span>
                                                                                        <input type="text" name="" placeholder="Date" class="form-control datepicker">
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
                                                                                    </div>
                                                                                    <label id="start_date-error" class="error" for="start_date"></label>
                                                                                </div>
<<<<<<< HEAD
                                                                                <div class="col-lg-3 col-md-3 col-sm-6">
                                                                                    <div class="form-group input-group">
                                                                                        <span class="input-group-text "><i class="fa fa-calendar"></i></span>
                                                                                        <input type="text" name="event[0][event_end_date]" id="end_date" placeholder="Event End Date" class="form-control end_date datepicker datepickerend" required>
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
=======
                                                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                                                    <div class="form-group input-group">
                                                                                        <span class="input-group-text "><i class="fa fa-calendar"></i></span>
                                                                                        <input type="text" name="daterange" class="form-control" value="01/01/2018 - 01/15/2018" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
																		</div>
																		<div class="col-lg-7 col-md-7 col-sm-7">
																			<div class="row">
																				<div class="col-lg-4 col-md-4 col-sm-4">
																					<div class="form-group">
																						<input type="text" name="" placeholder="Venue" class="form-control ">
																					</div>
																				</div>
																				<div class="col-lg-4 col-md-4 col-sm-4">
																					<div class="form-group">
																						<input type="text" name="" placeholder="Function" class="form-control ">
																					</div>
																				</div>
																				<div class="col-lg-4 col-md-4 col-sm-4">
																					<div class="form-group">
																						<input type="text" name="" placeholder="Artist" class="form-control ">
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
                                                                    <div class="row">
                                                                       <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col">&nbsp;</div>
                                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
                                                                            <div class="row">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                                                    <a href="javascript:void(0)" id="" class="add_cate text-success float-right ">Add Category <span class="badge badge-success"><i class="fa fa-plus"></i></span></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
<<<<<<< HEAD
                                                                   
                                                                    <!--Fix div start -->
                                                                    <div >
                                                                        <div id="" class="main_div_category">
                                                                            <div class="row">
                                                                                <div class="col-lg-10 col-md-10 col-sm-10">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-2 col-md-2 col-sm-2">
                                                                                            <label class="pull-right">Setup</label>
=======
                                                                    <!--Fix div start-->
                                                                    <table style="width: 100%;max-height :800px; overflow-y:scroll;" class="main_table">
                                                                        <tbody class="main_tbody">
                                                                            <tr class="main_tr">
                                                                                <td>
                                                                            <div class="row">
                                                                            <div class="col-lg-10 col-md-10 col-sm-10">
                                                                                <div class="row">
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                                                                        <label>Setup</label>
                                                                                    </div>
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                                                                        <div class="form-group">
                                                                                            <select class="form-control select2" id="parent">
                                                                                                <option value="">--Select--</option>
                                                                                               <?php foreach($category_parents as $category_parent): if($category_parent['parent_id']==0){?>
                                                                                                <option value="<?=$category_parent['id']?>"><?=$category_parent['category_name']?></option>
                                                                                               <?php }endforeach; ?>
                                                                                            </select>
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
                                                                                        </div>
                                                                                        <div class="col-lg-2 col-md-2 col-sm-2">
                                                                                            <div class="form-group">
                                                                                                <select class="form-control select2 parent event_category" id="event_category" required name="event[0][category][0][event_category]">
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
<<<<<<< HEAD
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
=======
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                                                                        <div class="form-group">
                                                                                           <select class="select2-multiple2" multiple id="item">
                                                                                               
                                                                                            </select>
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
                                                                                <table class="table table-striped hide_this">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th style="width: 10%;">No.</th>
                                                                                            <th style="width: 40%;">Item Description</th>
                                                                                            <th style="width: 15%;">Qty</th>
                                                                                            <th style="width: 15%;">Days</th>
                                                                                            <th style="width: 15%;">Price</th>
                                                                                            <th style="width: 5%;"></th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>1</td>
                                                                                            <td>K2 w/LA12X Amps WST 3-way Line Array Dual 12 inch Top</td>
                                                                                            <td>
                                                                                                <div class="input-group">
                                                                                                    <span class="input-group-btn">
                                                                                                        <button type="button" class="btn btn-default altera decrescimo" data-id="1">
                                                                                                            <span class="fa fa-minus"></span>
                                                                                                        </button>
                                                                                                    </span>
                                                                                                    <input type="text" name="quant[1]" class="form-control input-number txtAcrescimo1" value="1" min="1" max="10">
                                                                                                    <span class="input-group-btn">
                                                                                                        <button type="button" class="btn btn-default altera acrescimo" data-id="1">
                                                                                                            <span class="fa fa-plus"></span>
                                                                                                        </button>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td>1</td>
                                                                                            <td>Rs. 2500</td>
                                                                                            <td><i class="fa fa-times"></i></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>2</td>
                                                                                            <td>K2 w/LA12X Amps WST 3-way Line Array Dual 12 inch Top</td>
                                                                                            <td>
                                                                                                <div class="input-group">
                                                                                                    <span class="input-group-btn">
                                                                                                        <button type="button" class="btn btn-default altera decrescimo" data-id="2">
                                                                                                            <span class="fa fa-minus"></span>
                                                                                                        </button>
                                                                                                    </span>
                                                                                                    <input type="text" name="quant[1]" class="form-control input-number txtAcrescimo2" value="1" min="1" max="10">
                                                                                                    <span class="input-group-btn">
                                                                                                        <button type="button" class="btn btn-default altera acrescimo" data-id="2">
                                                                                                            <span class="fa fa-plus"></span>
                                                                                                        </button>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td>1</td>
                                                                                            <td>Rs. 2500</td>
                                                                                            <td><i class="fa fa-times"></i></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                    <tfoot>
                                                                                        <tr>
                                                                                            <td>Comment</td>
                                                                                            <td>    
                                                                                                <input type="text" class="form-control">
                                                                                            </td>
                                                                                            <td></td>
                                                                                            
                                                                                            <td colspan="2">
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-2 col-md-2 col-xs-2">
                                                                                                        <span>Total</span>  
                                                                                                    </div>
                                                                                                    <div class="col-lg-10 col-sm-10 col-md-10">
                                                                                                        <input type="text" class="form-control">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                    </tfoot>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                        <tfoot>
                                                                            <tr>
                                                                                <td>
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
                                                                                                    <input style="font-size: 12px; margin-left: -14px; margin-right: -14px;" type="text" class="form-control input-number txtAcrescimoadd112" value="1" min="1" max="10" id="requre_qty">
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
                                                                                        <span class="btn-sm btn-success" style="cursor: pointer;" id="requre_add"><i class="fa fa-plus"></i></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                                <div class="table-responsive">
                                                                                    <table class="table table-striped" id="requirements_table">
                                                                                        <tbody id="add_requirement">
<!--                                                                                            <tr>
                                                                                                <td>1</td>
                                                                                                <td>31 Aug 2019</td>
                                                                                                <td>Boats 125 KA</td>
                                                                                                <td>Transporting To destination</td>
                                                                                                <td>3</td>
                                                                                                <td><i class="fa fa-times"></i></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>2</td>
                                                                                                <td>09 Sep 2019</td>
                                                                                                <td>Boats 125 KA</td>
                                                                                                <td>Transporting To destination</td>
                                                                                                <td>3</td>
                                                                                                <td><i class="fa fa-times"></i></td>
                                                                                            </tr>-->
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                                </td>    
                                                                            </tr>
                                                                        </tfoot>
                                                                    </table><hr>
                                                                </div>
                                                                <!--Add more event click then add event-->
                                                                <div id="event_add"></div>
                                                                    <div class="" style="width: 100%; height: 600px; overflow-y: scroll; overflow-x: hidden; display:none;">
                                                                        <div class="row">
                                                                            <div class="col-lg-10 col-md-10 col-sm-10">
                                                                                <div class="row">
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                                                                        <label>Setup</label>
                                                                                    </div>
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                                                                        <div class="form-group">
                                                                                            <select class="form-control select2" id="parent">
                                                                                                <option value="">--Select--</option>
                                                                                               <?php foreach($category_parents as $category_parent): if($category_parent['parent_id']==0){?>
                                                                                                <option value="<?=$category_parent['id']?>"><?=$category_parent['category_name']?></option>
                                                                                               <?php }endforeach; ?>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                                                                        <div class="form-group">
                                                                                            <select class="form-control select2" id="child">
                                                                                                <option value="">--Select--</option>
                                                                                               
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                                                                        <div class="form-group">
                                                                                           <select class="form-control select2" id="brand">
                                                                                                <option value="">--Select--</option>
                                                                                                <?php foreach($brands as $brand): ?>
                                                                                                    <option value="<?=$brand['id']?>"><?=$brand['brand_name']?></option>
                                                                                                <?php endforeach; ?>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                                                                        <div class="form-group">
                                                                                           <select class="select2-multiple2 item" multiple>
                                                                                               
                                                                                            </select>
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
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
                                                                                                <th style="width: 5%;"><input type="hidden"></th>
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
                                                                                    <label style="font-size: 18px;"><b class="h5">Requirements</b></label>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
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
<<<<<<< HEAD
                                                                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                                                                    <label>Description</label>
                                                                                                </div>
                                                                                                <div class="col-lg-9 col-sm-9 col-md-9">
                                                                                                    <input type="text" name="" placeholder="Description" class="form-control " id="requre_discription">
                                                                                                </div>
=======
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
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                                                                    <label>Cost</label>
                                                                                                </div>
                                                                                                <div class="col-lg-9 col-sm-2 col-md-2">
                                                                                                    <input type="text" name="" placeholder="Cost" class="form-control " id="requre_cost">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                                                                    <label>Days</label>
                                                                                                </div>
                                                                                                <div class="col-lg-9 col-sm-2 col-md-2">
                                                                                                    <input type="text" name="" placeholder="Days" class="form-control " id="requre_days">
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
                                                                                                        <!--<span class="input-group-btn">-->
                                                                                                        <!--    <button type="button" class="btn btn-default altera decrescimo" data-id="add112">-->
                                                                                                        <!--        <span class="fa fa-minus"></span>-->
                                                                                                        <!--    </button>-->
                                                                                                        <!--</span>-->
                                                                                                        <input style="font-size: 12px; margin-left: -14px; margin-right: -14px;" type="text" class="form-control input-number txtAcrescimo" value="1" min="1" max="10" id="requre_qty">
                                                                                                        <!--<span class="input-group-btn">-->
                                                                                                        <!--    <button type="button" class="btn btn-default altera acrescimo" data-id="add112">-->
                                                                                                        <!--        <span class="fa fa-plus"></span>-->
                                                                                                        <!--    </button>-->
                                                                                                        <!--</span>-->
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
<<<<<<< HEAD
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
=======
                                                                        </div>
                                                                        <!--Requirements div end-->
                                                                        <!--Requirements table start-->
                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                                <div class="table-responsive">
                                                                                    <table class="table table-striped" id="requirements_table">
                                                                                        <tbody id="">
<!--                                                                                            <tr>
                                                                                                <td>1</td>
                                                                                                <td>31 Aug 2019</td>
                                                                                                <td>Boats 125 KA</td>
                                                                                                <td>Transporting To destination</td>
                                                                                                <td>3</td>
                                                                                                <td><i class="fa fa-times"></i></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>2</td>
                                                                                                <td>09 Sep 2019</td>
                                                                                                <td>Boats 125 KA</td>
                                                                                                <td>Transporting To destination</td>
                                                                                                <td>3</td>
                                                                                                <td><i class="fa fa-times"></i></td>
                                                                                            </tr>-->
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--Requirements table end-->
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
                                                                    </div>
                                                                </div>
                                                                    <hr>
<<<<<<< HEAD
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
=======
                                                                    <div class="row">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                                            <div class="row">
                                                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                                                    <label style="color:red; cursor:pointer;" id="more_events" >ADD MORE EVENTS +</label>
                                                                                </div>
                                                                                <div class="col-lg-9 col-md-9 col-sm-9">
                                                                                    &nbsp;
                                                                                </div>
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
<<<<<<< HEAD
                                                                <div class="row">
                                                                    <div class="col-12 text-center form-error" id="error-list-1">
                                                                        
                                                                    </div>
=======
                                                                <div id="step-2" class="">
                                                                    <table class="table">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td colspan="">
                                                                                    <label>Total Amount</label>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control w-50 float-right">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="">
                                                                                    <label>Package Discount</label>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control w-50 float-right">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="">
                                                                                    <label>Net Total Amount</label>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" class="form-control w-50 float-right">
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
                                                                                    <select class="form-control select2" id="charge">
                                                                                        <option value="0">---Select---</option>
                                                                                        <?php foreach($charges as $charge): ?>
                                                                                            <option value="<?=$charge['id']?>"><?=$charge['charge_name']?></option>
                                                                                        <?php endforeach; ?>
                                                                                    </select>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" id="charge_desc" class="form-control">
                                                                                </td>
                                                                                <td>
                                                                                    <a href="javascript:void(0)" class="btn-sm btn-success add_charges">+</a>
                                                                                    <a href="javascript:void(0)" class="btn-sm btn-danger rem_charges">-</a>
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
                                                                                    <select class="form-control select2" name="bank" id="bank">
                                                                                        <option value="0">---Select---</option>
                                                                                        <?php foreach($banks as $bank): ?>
                                                                                            <option value="<?=$bank['id']?>"><?=$bank['bank_name']?></option>
                                                                                        <?php endforeach; ?>
                                                                                    </select>
                                                                                </td>
                                                                                <td>
                                                                                    <textarea class="form-control" id="bank_desc"></textarea>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <b>T & C</b>
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <button class="btn btn-sm rounded-0" data-toggle="modal" data-target="#mod">Select</button>
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
                                                                                <td colspan="3">
                                                                                    <textarea style="height: 220px;" class="form-control" id="tc_content"></textarea>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
                                                                </div>
                                                                <!--Fix div end-->
                                                                </div>
                                                               
                                                                <div id="step-2" class="">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th colspan="10" style="text-align:center;"><b><h6>Amount Summary of All Events</h6></b></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td colspan="8" style="text-align:right;">
                                                                                    <label>Transportation Charges</label>
                                                                                </td>
                                                                                <td colspan="2" >
                                                                                    <input type="text" class="form-control w-50 float-right transportation_amt" name="transportation_amt">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="8" style="text-align:right;">
                                                                                    <label>Cargo Boats</label>
                                                                                </td>
                                                                                <td colspan="2" >
                                                                                    <input type="text" class="form-control w-50 float-right cargo_boats_amt" name="cargo_boats_amt">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="8" style="text-align:right;">
                                                                                    <label>Team Travel Charges</label>
                                                                                </td>
                                                                                <td colspan="2" >
                                                                                    <input type="text" class="form-control w-50 float-right team_travel_charge_amt" name="team_travel_charge_amt">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="8" style="text-align:right;">
                                                                                    <label>Food & Stay</label>
                                                                                </td>
                                                                                <td colspan="2" >
                                                                                    <input type="text" class="form-control w-50 float-right food_stay_amt" name="food_stay_amt">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="8" align="right" style="text-align:right;">
                                                                                    <label>Total Amount</label>
                                                                                </td>
                                                                                <td colspan="2" >
                                                                                    <input type="text" class="form-control w-50 float-right totalAmt" name="total">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="8" style="text-align:right;">
                                                                                    <label>Package Discount (in %)</label>
                                                                                </td>
                                                                                <td colspan="2" >
                                                                                    <input type="text" class="form-control w-50 float-right package_discount" name="package_discount">
                                                                                </td>
                                                                            </tr>
                                                                             <tr>
                                                                                <td colspan="8" style="text-align:right;">
                                                                                    <label>Net Amount</label>
                                                                                </td>
                                                                                <td colspan="2" >
                                                                                    <input type="text" class="form-control w-50 float-right net_amount" name="net_amount">
                                                                                </td>
                                                                            </tr>
                                                                             
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
                                                                                                    <div class="row"  style=" overflow: auto; height: 450px;">
                                                                                                        
                                                                                                        <table class="table table-hover tabl_tc">
                                                                                                            <thead>
                                                                                            				<tr>
                                                                                            					<th>
                                                                                            						<label>
                                                                                            					    	<input type="checkbox" id="select_all"/> Select All
                                                                                            						</label>
                                                                                            					</th>
                                                                                            				</tr>
                                                                                            				</thead>
                                                                                            				<tbody>
                                                                                                      <?php foreach($terms as $term): ?>
                                                                                                       
                                                                                                                <tr>
                                                                                                                    <td>
                                                                                                                        <div class="checkbox-list">
				                                                                                                			<label>
                                                                                                                        <input type="checkbox" value="<?=$term['description']?>" class="tc_check" name="dummy"><?=wordwrap($term['description'],100,'<br/>',true)?>
                                                                                                                        </label> 
				                                                                                                		 </div>
                                                                                                                    </td>
                                                                                                                   
                                                                                                                </tr>
                                                                                                            
                                                                                                        
                                                                                                      <?php endforeach; ?>
                                                                                                      </tbody>
                                                                                                      </table>
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
<<<<<<< HEAD

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>


=======
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
<script type="text/javascript">
    $(document).ready(function () {
        
        CKEDITOR.replace('tc_content');
        $('#Quotation_form').validate();
    });
    
<<<<<<< HEAD
    $('.select2').select2();
        
=======
    
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
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

<<<<<<< HEAD
	    var SelectionAdapter = Utils.Decorate(
=======
		var SelectionAdapter = Utils.Decorate(
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
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
    
<<<<<<< HEAD
	var base_element = $('.select2-multiple2')
=======
		var base_element = $('.select2-multiple2')
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
    $(base_element).select2({
    	placeholder: 'Select multiple items',
      dropdownAdapter: DropdownAdapter,
     allowClear: true,
     
      templateResult: function (data) {

        if (!data.id) { return data.text; }

        var $res = $('<div></div>');

        $res.text(data.text);
        $res.addClass('wrap');
<<<<<<< HEAD
=======

>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
        return $res;
      },
      templateSelection: function (data) {
      	if (!data.id) { return data.text; }
        var selected = ($(base_element).val() || []).length;
        var total = $('option', $(base_element)).length;
<<<<<<< HEAD
        
        //console.log(data);
        //return "Selected " + selected + " of " + total;
        return data.text;
=======
        //alert(data.id);
      //return $(base_element).select2().val(data.id).trigger("change")
        
        //console.log(data);
        //return "Selected " + selected + " of " + total;
      
            return data.text;
        
        
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
      }
    })
  
  });
  
});
</script>

<script>
<<<<<<< HEAD

=======
    $('#bank').on('change', function(event) {
        var id = $(this).val();
        if(id!='0')
        {
            $.ajax({
                url: '<?=base_url('quotation/step_2')?>',
                type: 'POST',
                data: {id: id},
                success:function(data){
                    if(data!=0)
                    {
                    data = JSON.parse(data);
                    $('#bank_desc').text(data.description);
                    }
                }
            });
            
        }else{
            $('#bank_desc').text('');
        }
    });
    $('#charge').on('change', function(event) {
        var c_id = $(this).val();
        if(c_id!='0')
        {
             $.ajax({
                url: '<?=base_url('quotation/step_2')?>',
                type: 'POST',
                data: {c_id: c_id},
                success:function(data){
                    if(data!=0)
                    {
                    data = JSON.parse(data);
                    $('#charge_desc').val(data.charge_name);
                    }
                }
            });

        }else{
            $('#charge_desc').val('');
        }
    });
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
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
<<<<<<< HEAD

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


    
    $('#add_tc').click(function(event) {
        var text='';
        var inc=0;
        var tc_li = '';
        $(".tabl_tc tbody tr").each(function(){
			var v=$(this).find('td:nth-child(1)  input[type="checkbox"]:checked').val();
		
			if(v){
				var tc=$(this).find('td:nth-child(1) .tc_check').val();
				 v
				tc_li += '<li>'+tc+'</li>';
			}
		});
	
       $('#tc_content').append('<ol>'+ tc_li  +'</ol>');
       var terms_conditions=$("#tc_content").html();
       CKEDITOR.instances.tc_content.execCommand( 'numberedlist' );
        CKEDITOR.instances['tc_content'].setData(terms_conditions)
    });
    
    $("#select_all").change(function(){ 
		$(".tc_check").prop('checked', $(this).prop("checked"));
	//	$.uniform.update(); 
	});
    
    
    
=======
    $(document).on('click','.rem_setup',function(){
        if(confirm('Are you sure?'))
       $(this).closest('tr').remove();
    });
    $(document).on('click','.add_charges',function(){
        var tr = $('#charges_tr').clone(); 
        $('table#charges_table tbody').append(tr);
    }); 
    $(document).on('click','.add_cate',function(){
       tr = $('table#second_table tbody#second_tbody tr.second_tr').clone();
       $('table.main_table tbody.main_tbody').append(tr);
       //$(this).closest('table').find('tbody.main_tbody').append(tr);
       //$(this).parent().parent().parent().parent().next('table').find('tbody').append(tr);
    });
    $('#add_tc').click(function(event) {
        var text='';
        $('input.tc_check[type=checkbox]').each(function(index, el) {
            if($(this).is(':checked'))
                text+=$(this).val()+'\r\n\r\n';
        });
        $('#tc_content').val(text);
    });
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
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
<<<<<<< HEAD

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
            var ttg = 
            $(this).find('select.parent').attr({"data-cat":""+i+"","name":"event["+event_id+"][category]["+i+"][event_category]","id":"event["+event_id+"][category]["+i+"][event_category]"}).rules("add", "required");
            $(this).find('select.child').attr({"data-cat":""+i+"","name":"event["+event_id+"][category]["+i+"][category_id]","id":"event["+event_id+"][category]["+i+"][category_id]"}).rules("add", "required");
            $(this).find('select.brand').attr({"data-cat":""+i+"","name":"event["+event_id+"][category]["+i+"][brand_id]","id":"event["+event_id+"][category]["+i+"][brand_id]"}).rules("add", "required");;
            $(this).find('input.event_category_comment').attr({"name":"event["+event_id+"][category]["+i+"][comment]","id":"event["+event_id+"][category]["+i+"][comment]"});
            i++;       
        }); 
    }
        var req_date = '';
=======
    var req_date = '';
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
        var req_item = '';
        var req_des = '';
        var req_qty = '';
        var req_item_name='';
    $(document).on('click',".requre_add", function(){
        req_date = $(this).parent().parent().find("input#requre_date").val();
        req_item = $(this).parent().parent().find("input#requre_item").val();
        req_item_name = $(this).parent().parent().find("#requre_item option:selected").data('name');
        req_item_id = $(this).parent().parent().find("#requre_item option:selected").val();
        req_des = $(this).parent().parent().find("input#requre_discription").val();
        req_cost = $(this).parent().parent().find("input#requre_cost").val();
        req_days = $(this).parent().parent().find("input#requre_days").val();
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
<<<<<<< HEAD
        $(current).parent().parent().parent().parent().parent().parent().find("table tbody#add_requirement").append('<tr class="req_tr">\n\
=======
        $("#add_requirement").append('<tr class="req_tr">\n\
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
                <td>1</td>\n\
                <td><input type="hidden" value="'+req_date+'">'+req_date+'</td>\n\
                <td><input type="hidden" value="'+req_item_id+'">'+req_item_name+'</td>\n\
                <td><input type="hidden" value="'+req_des+'">'+req_des+'</td>\n\
                <td><input type="hidden" value="'+req_cost+'">'+req_cost+'</td>\n\
                <td><input type="hidden" value="'+req_days+'">'+req_days+'</td>\n\
                <td><input type="hidden" value="'+req_qty+'">'+req_qty+'</td>\n\
                <td><i class="fa fa-times rem"></i></td>\n\
            </tr>');
           
    }
    
<<<<<<< HEAD
   
    function requirements_rename(current)
=======
    function requirements_rename()
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
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
            $(this).find('td:nth-child(5) input').attr({name: "event_requirement_cost["+event_no+"][]"});    
            $(this).find('td:nth-child(6) input').attr({name: "event_requirement_days["+event_no+"][]"});    
            $(this).find('td:nth-child(7) input').attr({name: "event_requirement_qty["+event_no+"][]"});        
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
            $(this).find('td:nth-child(5) input').attr({name: "event_requirement_cost["+event_no+"][]"});    
            $(this).find('td:nth-child(6) input').attr({name: "event_requirement_days["+event_no+"][]"});    
            $(this).find('td:nth-child(7) input').attr({name: "event_requirement_qty["+event_no+"][]"});          
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
<<<<<<< HEAD
                $('.loading').hide();
                itm.html(data);
=======
                 console.log(data);
                $('#item').html(data);
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
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
    var da = tt.find('div.row.hide_this div table thead tr th:nth-child(7) input[type=hidden]').val();
    
   $('.loading').show();
   $.ajax({
        url: '<?= base_url('quotation/setupItemsRows')?>',
        type: 'POST',
        data: {item_id: item_id},
        success:function(data){
                $('.loading').hide();
               insert_tr.html(data);
               event_category(cate,da);
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

$(document).on('blur','.transportation_amt',function(){ 
    calculateT();
});

$(document).on('blur','.cargo_boats_amt',function(){ 
    calculateT();
});

$(document).on('blur','.team_travel_charge_amt',function(){ 
    calculateT();
});

$(document).on('blur','.food_stay_amt',function(){ 
    calculateT();
});

$(document).on('blur','.package_discount',function(){ 
    calculateT();
});


$(document).on('blur','.quantityClass',function(){
    var tot=0;
      $('table.main_table tbody#table tr').each(function() {
            var vals = $(this).find('td:nth-child(3) input.quantityClass').val();    
            var days = $(this).find('td:nth-child(4) input.calDays').val();    
            var price = $(this).find('td:nth-child(5) input.priceClass').val();    
            var sub_total = vals*days*price;
           var subToalVal =  $(this).find('td:nth-child(6) input.total').val(sub_total);
          tot = tot+sub_total;
            //alert(tot);
            
          
            
        });
         $('.totalAmt').val(tot);
       
       // $('.event_category_total').val(tot);
        
  // caluculate_total();
});

function calculateT(){
     var total = $('.totalAmt').val();
    var transportation_amt= $('.transportation_amt').val();
    if(transportation_amt){
        transportation_amt = transportation_amt;
    }else{
        transportation_amt =0;
    }
    
    
    var cargo_boats_amt= $('.cargo_boats_amt').val();
    
     if(cargo_boats_amt){
        cargo_boats_amt = cargo_boats_amt;
    }else{
        cargo_boats_amt =0;
    }
    var team_travel_charge_amt= $('.team_travel_charge_amt').val();
    
    if(team_travel_charge_amt){
        team_travel_charge_amt = team_travel_charge_amt;
    }else{
        team_travel_charge_amt =0;
    }
    var food_stay_amt= $('.food_stay_amt').val();
    
    if(food_stay_amt){
        food_stay_amt = food_stay_amt;
    }else{
        food_stay_amt =0;
    }
    
    var othercharge = parseFloat(transportation_amt)+parseFloat(cargo_boats_amt)+parseFloat(team_travel_charge_amt)+parseFloat(food_stay_amt);
    
    if(othercharge){
        othercharge = othercharge;
    }else{
        othercharge =0;
    }
    
    var per =  $('.package_discount').val();
       var netAmount = total*per/100;
       //$('.after_dis').val(netAmount);
       var tot_Amts = total-netAmount;
       $('.net_amount').val(tot_Amts+parseFloat(othercharge));
        $('.grand_total').val(tot_Amts+parseFloat(othercharge));
}

function event_category(current,da)
    {
        var tr = current.find('table tbody tr');
        var tt = $(current).parentsUntil('div.event_div_hide');
        var event_id = tt.parent().parent().find('div h3 input').val();
        //var category_id = current.parent().parent().parent().find('select.event_category').data('cat');
        var category_id = current.find('select.child').data('cat');
       // console.log(category_id);
        i=0;
        j=0;
        tr.each(function() {
            $(this).find('td:nth-child(1)').html(++j);
            $(this).find('td:nth-child(2) input').attr({name: "event["+event_id+"][category]["+category_id+"][item]["+i+"][item_id]"});    
            $(this).find('td:nth-child(3) input').attr({name: "event["+event_id+"][category]["+category_id+"][item]["+i+"][qty]"});    
            $(this).find('td:nth-child(4) input').attr({name: "event["+event_id+"][category]["+category_id+"][item]["+i+"][days]"});    
            $(this).find('td:nth-child(4) input').val(da);    
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
$(document).on('change', '.item' , function() {
    var item_id = $('#item').val();
    
    //var brand_id = $(this).val();
    if(item_id!='')
    {
        $.ajax({
            url: '<?=base_url('quotation/setupItemsRows')?>',
            type: 'POST',
            data: {item_id: item_id},
            success:function(data){
                 console.log(data);
                $('#item').html(data);
            }
        });
        
    }else{
        $('#item').html('<option value="">---Select---</option>');
    }
});
</script>
<script>
$(document).on('click','.header',function(){
   //$(this).find('span').text(function(_, value){return value=='-'?'+':'-'});
    // $(this).nextUntil('tr.header').slideToggle(100, function(){
    // });
    $(this).parent().next('div.hide_this').slideToggle();
});
</script>
<table style="display:none;" id="second_table">
    <tbody id="second_tbody">
        <tr class="second_tr">
            <td>
                <div class="row">
        <div class="col-lg-10 col-md-10 col-sm-10">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <label>Setup</label>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <div class="form-group">
                        <select class="form-control select2" id="parent">
                            <option value="">--Select--</option>
                           <?php foreach($category_parents as $category_parent): if($category_parent['parent_id']==0){?>
                            <option value="<?=$category_parent['id']?>"><?=$category_parent['category_name']?></option>
                           <?php }endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <div class="form-group">
                        <select class="form-control select2" id="child">
                            <option value="">--Select--</option>
                           
                        </select>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <div class="form-group">
                       <select class="form-control select2" id="brand">
                            <option value="">--Select--</option>
                            <?php foreach($brands as $brand): ?>
                                <option value="<?=$brand['id']?>"><?=$brand['brand_name']?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="form-group">
                       <select class="select2-multiple2 item" multiple>
                           
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 header">
            <span style="color:red; font-size: 20px;"><i class="fa fa-chevron-circle-down"></i></span>
            <span class="ml-2" style="color:red; font-size: 20px;"><a class="rem_setup" href="javascript:void(0)"><i class="fa fa-times"></i></a></span>
        </div>
    </div>
    <div class="row hide_this">
        <div class="col-lg-12 col-md-12 col-sm-12 table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10%;">No.</th>
                        <th style="width: 40%;">Item Description</th>
                        <th style="width: 15%;">Qty</th>
                        <th style="width: 15%;">Days</th>
                        <th style="width: 15%;">Price</th>
                        <th style="width: 5%;"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>K2 w/LA12X Amps WST 3-way Line Array Dual 12 inch Top</td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default altera decrescimo" data-id="1">
                                        <span class="fa fa-minus"></span>
                                    </button>
                                </span>
                                <input type="text" name="quant[1]" class="form-control input-number txtAcrescimo1" value="1" min="1" max="10">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default altera acrescimo" data-id="1">
                                        <span class="fa fa-plus"></span>
                                    </button>
                                </span>
                            </div>
                        </td>
                        <td>1</td>
                        <td>Rs. 2500</td>
                        <td><i class="fa fa-times"></i></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>K2 w/LA12X Amps WST 3-way Line Array Dual 12 inch Top</td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default altera decrescimo" data-id="2">
                                        <span class="fa fa-minus"></span>
                                    </button>
                                </span>
                                <input type="text" name="quant[1]" class="form-control input-number txtAcrescimo2" value="1" min="1" max="10">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default altera acrescimo" data-id="2">
                                        <span class="fa fa-plus"></span>
                                    </button>
                                </span>
                            </div>
                        </td>
                        <td>1</td>
                        <td>Rs. 2500</td>
                        <td><i class="fa fa-times"></i></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>Comment</td>
                        <td>    
                            <input type="text" class="form-control">
                        </td>
                        <td></td>
                        
                        <td colspan="2">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-xs-2">
                                    <span>Total</span>  
                                </div>
                                <div class="col-lg-10 col-sm-10 col-md-10">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
            </td>
        </tr>
    </tbody>
</table>


<script>
$(function() {
  $('input[name="daterange"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});
</script>


<script>
    $(document).ready(function(){
        var i = 2;
        $('#more_events').on('click', function(){
<<<<<<< HEAD
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
                    renameMainCategory();
                    $('.select2').select2(); 
                }
            });
        }
            
        });
        var end ="";
        var start ="";
        $(document).on('change','.datepickerstart',function(){
             start = $(this).val();
        });
        $(document).on('change','.datepickerend',function(){
             end = $(this).val();
             var startD = new Date(start);
             var endD = new Date(end);
             var days = (endD - startD) / (1000 * 60 * 60 * 24);
             $(this).parent().parent().parent().parent().parent().next('div').next('div').find('div div table thead tr th:nth-child(7) input[type=hidden]').val(days);
             //let tr = $(this).parent().parent().parent().parent().parent().next('div').next('div').find('div div table tbody tr');
            //  tr.each(function(){
            //      $(this).find('td:nth-child(4) input').val(days);
            //  });
            // alert(days);
        });
    });

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
            
           
            
                j++; i++;
                
                
                
        });
        
     }
     
     function renameMainCategory(){
          var i=1;
          $('div#event_add div#event_div_get').each(function() { 
                $(this).find('div.event_div_hide select.parent').attr({name:"event["+i+"][category][0][event_category]"});
                var event_cat = $(this).find('div.event_div_hide select.child');
                event_cat.attr({name:"event["+i+"][category][0][category_id]"});
                $(this).find('div.event_div_hide select.brand').attr({name:"event["+i+"][category][0][brand_id]"});
                
                var event_comt = $(this).find('div.event_div_hide input.event_category_comment');
                event_comt.attr({name:"event["+i+"][category][0][comment]"});
                 i++;
          });
     }
     
     
    //  function renameMainCategory(){
    //       var i=1;
    //       $('div.main_div_category').each(function() { 
    //             $(this).find('div select.parent').attr({name:"event["+i+"]category[0][event_category]"});
    //             var event_cat = $(this).find('div select.child');
    //             event_cat.attr({name:"event["+i+"]category[0][category_id]"});
    //             $(this).find('div select.brand').attr({name:"event["+i+"]category[0][brand_id]"});
                
    //             var event_comt = $(this).find('div.event_div_hide input.event_category_comment');
    //             event_comt.attr({name:"event["+i+"][category][0][comment]"});
                
    //             i++;
    //       });
    //  }


</script>

<script type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                    }
                });
                
            });
        </script>
=======
            alert('New event add');
            //$('#event_add').append();
           var tr = $('#event1').clone();
        //$('#event_add').append(tr);
        
        $('#event_add').append('<div class="" id="event1">\n\
                                    <div class="row">\n\
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col">\n\
                                            <h3>'+i+'. Event Details <span class="float-right" style="font-size: 12px;">Remove Event &nbsp;<i class="fa fa-times"></i></span></h3>\n\
                                        </div>\n\
                                    </div>\n\
									<div class="row">\n\
										<div class="col-lg-5 col-md-5 col-sm-5">\n\
											<div class="row">\n\
                                                <div class="col-lg-6 col-md-6 col-sm-6">\n\
                                                    <div class="form-group input-group">\n\
                                                        <span class="input-group-text "><i class="fa fa-calendar"></i></span>\n\
                                                        <input type="text" name="" placeholder="Date" class="form-control datepicker">\n\
                                                    </div>\n\
                                                </div>\n\
                                                <div class="col-lg-6 col-md-6 col-sm-6">\n\
                                                    <div class="form-group input-group">\n\
                                                        <span class="input-group-text "><i class="fa fa-calendar"></i></span>\n\
                                                        <input type="text" name="daterange" class="form-control" value="01/01/2018 - 01/15/2018" />\n\
                                                    </div>\n\
                                                </div>\n\
                                            </div>\n\
										</div>\n\
										<div class="col-lg-7 col-md-7 col-sm-7">\n\
											<div class="row">\n\
												<div class="col-lg-4 col-md-4 col-sm-4">\n\
													<div class="form-group">\n\
														<input type="text" name="" placeholder="Venue" class="form-control ">\n\
													</div>\n\
												</div>\n\
												<div class="col-lg-4 col-md-4 col-sm-4">\n\
													<div class="form-group">\n\
														<input type="text" name="" placeholder="Function" class="form-control ">\n\
													</div>\n\
												</div>\n\
												<div class="col-lg-4 col-md-4 col-sm-4">\n\
													<div class="form-group">\n\
														<input type="text" name="" placeholder="Artist" class="form-control ">\n\
													</div>\n\
												</div>\n\
											</div>\n\
										</div>\n\
									</div>\n\
                                    <div class="row">\n\
                                       <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col">&nbsp;</div>\n\
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">\n\
                                            <div class="row">\n\
                                                <div class="col-lg-12 col-md-12 col-sm-12">\n\
                                                    <a href="javascript:void(0)" id="" class="add_cate text-success float-right ">Add Category <span class="badge badge-success"><i class="fa fa-plus"></i></span></a>\n\
                                                </div>\n\
                                            </div>\n\
                                        </div>\n\
                                    </div>\n\
                                    <!--Fix div start-->\n\
                                    <table style="width: 100%;max-height :800px; overflow-y:scroll;" class="main_table">\n\
                                        <tbody class="main_tbody">\n\
                                            <tr class="main_tr">\n\
                                                <td>\n\
                                            <div class="row">\n\
                                            <div class="col-lg-10 col-md-10 col-sm-10">\n\
                                                <div class="row">\n\
                                                    <div class="col-lg-2 col-md-2 col-sm-2">\n\
                                                        <label>Setup</label>\n\
                                                    </div>\n\
                                                    <div class="col-lg-2 col-md-2 col-sm-2">\n\
                                                        <div class="form-group">\n\
                                                            <select class="form-control select2" id="parent">\n\
                                                                <option value="">--Select--</option>\n\
                                                               <?php foreach($category_parents as $category_parent): if($category_parent['parent_id']==0){?>\n\
                                                                <option value="<?=$category_parent['id']?>"><?=$category_parent['category_name']?></option>\n\
                                                               <?php }endforeach; ?>\n\
                                                            </select>\n\
                                                        </div>\n\
                                                    </div>\n\
                                                    <div class="col-lg-2 col-md-2 col-sm-2">\n\
                                                        <div class="form-group">\n\
                                                            <select class="form-control select2" id="child">\n\
                                                                <option value="">--Select--</option>\n\
                                                               \n\
                                                            </select>\n\
                                                        </div>\n\
                                                    </div>\n\
                                                    <div class="col-lg-2 col-md-2 col-sm-2">\n\
                                                        <div class="form-group">\n\
                                                           <select class="form-control select2" id="brand">\n\
                                                                <option value="">--Select--</option>\n\
                                                                <?php foreach($brands as $brand): ?>\n\
                                                                    <option value="<?=$brand['id']?>"><?=$brand['brand_name']?></option>\n\
                                                                <?php endforeach; ?>\n\
                                                            </select>\n\
                                                        </div>\n\
                                                    </div>\n\
                                                    <div class="col-lg-4 col-md-4 col-sm-4">\n\
                                                        <div class="form-group">\n\
                                                           <select class="select2-multiple2" multiple id="item">\n\
                                                               \n\
                                                            </select>\n\
                                                        </div>\n\
                                                    </div>\n\
                                                </div>\n\
                                            </div>\n\
                                            <div class="col-lg-2 col-md-2 col-sm-2 header">\n\
                                                <span style="color:red; font-size: 20px;"><i class="fa fa-chevron-circle-down"></i></span>\n\
                                            </div>\n\
                                        </div>\n\
                                        <div class="row hide_this">\n\
                                            <div class="col-lg-12 col-md-12 col-sm-12 table-responsive">\n\
                                                <table class="table table-striped hide_this">\n\
                                                    <thead>\n\
                                                        <tr>\n\
                                                            <th style="width: 10%;">No.</th>\n\
                                                            <th style="width: 40%;">Item Description</th>\n\
                                                            <th style="width: 15%;">Qty</th>\n\
                                                            <th style="width: 15%;">Days</th>\n\
                                                            <th style="width: 15%;">Price</th>\n\
                                                            <th style="width: 5%;"></th>\n\
                                                        </tr>\n\
                                                    </thead>\n\
                                                    <tbody>\n\
                                                        <tr>\n\
                                                            <td>1</td>\n\
                                                            <td>K2 w/LA12X Amps WST 3-way Line Array Dual 12 inch Top</td>\n\
                                                            <td>\n\
                                                                <div class="input-group">\n\
                                                                    <span class="input-group-btn">\n\
                                                                        <button type="button" class="btn btn-default altera decrescimo" data-id="1">\n\
                                                                            <span class="fa fa-minus"></span>\n\
                                                                        </button>\n\
                                                                    </span>\n\
                                                                    <input type="text" name="quant[1]" class="form-control input-number txtAcrescimo1" value="1" min="1" max="10">\n\
                                                                    <span class="input-group-btn">\n\
                                                                        <button type="button" class="btn btn-default altera acrescimo" data-id="1">\n\
                                                                            <span class="fa fa-plus"></span>\n\
                                                                        </button>\n\
                                                                    </span>\n\
                                                                </div>\n\
                                                            </td>\n\
                                                            <td>1</td>\n\
                                                            <td>Rs. 2500</td>\n\
                                                            <td><i class="fa fa-times"></i></td>\n\
                                                        </tr>\n\
                                                    </tbody>\n\
                                                    <tfoot>\n\
                                                        <tr>\n\
                                                            <td>Comment</td>\n\
                                                            <td>    \n\
                                                                <input type="text" class="form-control">\n\
                                                            </td>\n\
                                                            <td></td>\n\
                                                            \n\
                                                            <td colspan="2">\n\
                                                                <div class="row">\n\
                                                                    <div class="col-lg-2 col-md-2 col-xs-2">\n\
                                                                        <span>Total</span>  \n\
                                                                    </div>\n\
                                                                    <div class="col-lg-10 col-sm-10 col-md-10">\n\
                                                                        <input type="text" class="form-control">\n\
                                                                    </div>\n\
                                                                </div>\n\
                                                            </td>\n\
                                                            <td></td>\n\
                                                        </tr>\n\
                                                    </tfoot>\n\
                                                </table>\n\
                                            </div>\n\
                                        </div>\n\
                                                </td>\n\
                                            </tr>\n\
                                        </tbody>\n\
                                        <tfoot>\n\
                                            <tr>\n\
                                                <td>\n\
                                                    <div class="row mt-5">\n\
                                            <div class="col-lg-12 col-md-12 col-sm-12">\n\
                                                <label style="font-size: 18px;">Requirements</label>\n\
                                            </div>\n\
                                        </div>\n\
                                        <div class="row">\n\
                                            <div class="col-lg-12 col-md-12 col-sm-12 col">\n\
                                                <div class="row">\n\
                                                    <div class="col-lg-1 col-md-1 col-sm-1">\n\
                                                        <span>No.</span>\n\
                                                    </div>\n\
                                                    <div class="col-lg-2 col-md-2 col-sm-2">\n\
                                                        <div class="row">\n\
                                                            <div class="col-lg-3 col-md-3 col-sm-3">\n\
                                                                <label>Date</label>\n\
                                                            </div>\n\
                                                            <div class="col-lg-9 col-sm-9 col-md-9">\n\
                                                                <div class="form-group input-group">\n\
                                                                    <span class="input-group-text "><i class="fa fa-calendar"></i></span>\n\
                                                                    <input type="text" name="" placeholder="Date" class="form-control datepicker" id="requre_date">\n\
                                                                </div>\n\
                                                            </div>\n\
                                                        </div>\n\
                                                    </div>\n\
                                                    <div class="col-lg-3 col-md-3 col-sm-3">\n\
                                                        <div class="row">\n\
                                                            <div class="col-lg-3 col-md-3 col-sm-3">\n\
                                                                <label>Item</label>\n\
                                                            </div>\n\
                                                            <div class="col-lg-9 col-sm-9 col-md-9">\n\
                                                                <select class="form-control select2 multiple" id="requre_item">\n\
                                                                    <option value="">--Select--</option>\n\
                                                                    <?php foreach($boats as $boat): ?>\n\
                                                                        <option data-name="<?=$boat['name']?>" value="<?=$boat['id']?>"><?=$boat['name']?></option>\n\
                                                                    <?php endforeach; ?>\n\
                                                                    <?php foreach($gensets as $genset): ?>\n\
                                                                        <option data-name="<?=$genset['name']?>" value="<?=$genset['id']?>"><?=$genset['name']?></option>\n\
                                                                    <?php endforeach; ?>\n\
                                                                </select>\n\
                                                            </div>\n\
                                                        </div>\n\
                                                    </div>\n\
                                                    <div class="col-lg-3 col-md-3 col-sm-3">\n\
                                                        <div class="row">\n\
                                                            <div class="col-lg-3 col-md-3 col-sm-3">\n\
                                                                <label>Description</label>\n\
                                                            </div>\n\
                                                            <div class="col-lg-9 col-sm-9 col-md-9">\n\
                                                                <input type="text" name="" placeholder="Description" class="form-control " id="requre_discription">\n\
                                                            </div>\n\
                                                        </div>\n\
                                                    </div>\n\
                                                    <div class="col-lg-2 col-md-2 col-sm-2">\n\
                                                        <div class="row">\n\
                                                            <div class="col-lg-3 col-md-3 col-sm-3">\n\
                                                                <label>Qty</label>\n\
                                                            </div>\n\
                                                            <div class="col-lg-9 col-sm-9 col-md-9">\n\
                                                                <div class="input-group">\n\
                                                                    <span class="input-group-btn">\n\
                                                                        <button type="button" class="btn btn-default altera decrescimo" data-id="add112">\n\
                                                                            <span class="fa fa-minus"></span>\n\
                                                                        </button>\n\
                                                                    </span>\n\
                                                                    <input style="font-size: 12px; margin-left: -14px; margin-right: -14px;" type="text" class="form-control input-number txtAcrescimoadd112" value="1" min="1" max="10" id="requre_qty">\n\
                                                                    <span class="input-group-btn">\n\
                                                                        <button type="button" class="btn btn-default altera acrescimo" data-id="add112">\n\
                                                                            <span class="fa fa-plus"></span>\n\
                                                                        </button>\n\
                                                                    </span>\n\
                                                                </div>\n\
                                                            </div>\n\
                                                        </div>\n\
                                                    </div>\n\
                                                    <div class="col-lg-1 col-md-1 col-sm-1">\n\
                                                        <span class="btn-sm btn-success" style="cursor: pointer;" id="requre_add"><i class="fa fa-plus"></i></span>\n\
                                                    </div>\n\
                                                </div>\n\
                                            </div>\n\
                                        </div>\n\
                                                </td>    \n\
                                            </tr>\n\
                                        </tfoot>\n\
                                    </table><hr>\n\
                                </div>');
            i++;
        });
    });
</script>
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
