<link href="<?= base_url('dist/css/smart_wizard.css') ?>" rel="stylesheet" type="text/css" /> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css" /> 


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
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div id="smartwizard">
                                                            <ul>
                                                                <li><a href="#step-1">Event Details<br /><small>Client & Event Info.</small></a></li>
                                                                <li><a href="#step-2">Add Other Details<br /><small>Other details</small></a></li>
                                                                <!--<li><a href="#step-3">Step Title<br /><small>Step description</small></a></li>
                                                                <li><a href="#step-4">Step Title<br /><small>Step description</small></a></li>-->
                                                            </ul>

                                                            <div>
                                                                <div id="step-1" class="container-fluid">
                                                                    <div class="row">
                                                                        <div class="col-sm-3">
                                                                            <div class="form-group">
                                                                                <label>Select Customer</label>
                                                                                <select class="select2 form-control" id="customer">
                                                                                    <option value="">---Select Customer---</option>
                                                                                    <?php foreach ($customers as $customer): ?>
                                                                                        <option value="<?=$customer->id?>" ><?=$customer->name?></option>
                                                                                    <?php endforeach ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="form-group">
                                                                                <label>Company</label>
                                                                                <input type="text" name="" class="form-control" readonly id="cust_company">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="form-group">
                                                                                <label>Address</label>
                                                                                <input type="text" name="" class="form-control" readonly id="cust_address">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="form-group">
                                                                                <label>Quotation No.</label>
                                                                                <input type="text" name="" class="form-control" readonly>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                                            <div class="form-group">
                                                                                <label>Select Event Dates</label>
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
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                <div class="" id="event1">
                                                                    <div class="row">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col">
                                                                            <h3>1. Event Details <span class="float-right" style="font-size: 12px;">Remove Event &nbsp;<i class="fa fa-times"></i></span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                                            <div class="row">
                                                                                <div class="col-lg-3 col-md-3 col-sm-6">
                                                                                    <div class="form-group input-group">
                                                                                        <span class="input-group-text "><i class="fa fa-calendar"></i></span>
                                                                                        <input type="text" name="" placeholder="Setup Date" class="form-control datepicker" required="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-3 col-md-3 col-sm-6">
                                                                                    <div class="form-group input-group">
                                                                                        <span class="input-group-text "><i class="fa fa-calendar"></i></span>
                                                                                        <input type="text" name="" placeholder="Event Start Date" class="form-control datepicker" required="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-3 col-md-3 col-sm-6">
                                                                                    <div class="form-group input-group">
                                                                                        <span class="input-group-text "><i class="fa fa-calendar"></i></span>
                                                                                        <input type="text" name="" placeholder="Event End Date" class="form-control datepicker" required="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-3 col-md-3 col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <div class='input-group date' id='datetimepicker3'>
                                                                                            <input type='time' class="form-control" placeholder="Event Time" value="01:10"/>
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
                                                                                                <input type="text" name="" placeholder="Venue" class="form-control ">
                                                                                        </div>
                                                                                </div>
                                                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                                                        <div class="form-group">
                                                                                                <input type="text" name="" placeholder="Function" class="form-control ">
                                                                                        </div>
                                                                                </div>
                                                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                                                        <div class="form-group">
                                                                                                <input type="text" name="" placeholder="Artist" class="form-control ">
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
                                                                    <hr>
                                                                
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
                                                                </div>
                                                                <div id="step-3" class="">

                                                                </div>
                                                                <div id="step-4" class="">

                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <!-- view End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('.select2').select2();
        $('#smartwizard').smartWizard({
        });
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
        //alert(data.id);
      //return $(base_element).select2().val(data.id).trigger("change")
        
        //console.log(data);
        //return "Selected " + selected + " of " + total;
      
            return data.text;
      }
    })
  
  });
  
});
</script>

<script>
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
// Aumenta ou diminui o valor sendo 0 o mais baixo possível
$(".altera").click(function(){
    var div_id = $(this).data('id');
    var $input = $(".txtAcrescimo"+div_id);
    if ($(this).hasClass('acrescimo'))
        $input.val(parseInt($input.val())+1);
    else if ($input.val()>=1)
        $input.val(parseInt($input.val())-1);
});

</script>

<script>
$(document).ready(function(){
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
    var req_date = '';
        var req_item = '';
        var req_des = '';
        var req_qty = '';
        var req_item_name='';
    $("#requre_add").on('click', function(){
         req_date = $("#requre_date").val();
         req_item = $("#requre_item").val();
         req_item_name = $("#requre_item option:selected").data('name');
         req_des = $("#requre_discription").val();
         req_qty = $("#requre_qty").val();
        if((req_date == '') || (req_item == '') || (req_des == '') || (req_qty == 0)){
            alert('Fill all Fields');
        }else{
            requirements_row();
            requirements_rename();
        }
    });
    $(document).on('click', '.rem', function() {
            if(confirm('Are You Sure Want to Delete'))
            {       
                $(this).closest('tr').remove();
                requirements_rename();
            }
        });
    function requirements_row()
    {
        $("#add_requirement").append('<tr class="req_tr">\n\
                <td>1</td>\n\
                <td><input type="hidden" value="'+req_date+'">'+req_date+'</td>\n\
                <td><input type="hidden" value="'+req_item+'">'+req_item_name+'</td>\n\
                <td><input type="hidden" value="'+req_des+'">'+req_des+'</td>\n\
                <td><input type="hidden" value="'+req_qty+'">'+req_qty+'</td>\n\
                <td><i class="fa fa-times rem"></i></td>\n\
            </tr>');
           
    }
    
    function requirements_rename()
    {
        i=0;
        j=0;
        $('table#requirements_table tbody#add_requirement tr.req_tr').each(function() {
            $(this).find('td:nth-child(1)').html(++j);
            $(this).find('td:nth-child(2)').attr({name: "req_rows["+i+"][date]"});    
            $(this).find('td:nth-child(3)').attr({name: "req_rows["+i+"][item_id]"});    
            $(this).find('td:nth-child(4)').attr({name: "req_rows["+i+"][qty]"});        
            i++;
        });
    }
});
$('#customer').on('change', function() {
    var id = $(this).val();
    if(id!='')
    {
        $.ajax({
            url: '<?=base_url('quotation/customerDetails')?>',
            type: 'POST',
            data: {id: id},
            success:function(data){
                var det=JSON.parse(data);
                // console.log(det);
                $('#cust_company').val(det.company);
                $('#cust_address').val(det.address);
            }
        });
    }else{
                $('#cust_company').val('');
                $('#cust_address').val('');
    }
});
$('#parent').on('change', function(event) {
    var parent = $(this).val();
    if(parent!='')
    {
        $.ajax({
            url: '<?=base_url('quotation/category_child')?>',
            type: 'POST',
            data: {parent: parent},
            success:function(data){
                //console.log(data)
                $('#child').html(data);
            }
        });
    }else{
        $('#child').html('<option>---Select---</option>');
    }
});
$('#brand').on('change', function() {
    var category_id = $('#child').val();
    var brand_id = $(this).val();
    if(brand_id!='' && category_id!='')
    {
        $.ajax({
            url: '<?=base_url('quotation/setupItems')?>',
            type: 'POST',
            data: {category_id: category_id,brand_id: brand_id},
            success:function(data){
                 console.log(data);
                $('#item').html(data);
            }
        });
        
    }else{
        $('#item').html('<option value="">---Select---</option>');
    }
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

<script type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            });
        </script>