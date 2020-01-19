<div id="event_div_get">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col">
            <h3>1. Event Details <span style="color:red; font-size: 20px; cursor :pointer;" class="event_div"><i class="fa fa-chevron-circle-down"></i></span>
                <span class="float-right remove_event" style="font-size: 12px; cursor :pointer;">Remove Event &nbsp;<i class="fa fa-times"></i></span></h3>
        </div>
    </div>
    <div class="event_div_hide">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="form-group input-group">
                        <span class="input-group-text "><i class="fa fa-calendar"></i></span>
                        <input type="text" name="event_setup_date[0]" placeholder="Setup Date" class="form-control datepicker event_setup_date" required="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="form-group input-group">
                        <span class="input-group-text "><i class="fa fa-calendar"></i></span>
                        <input type="text" name="event_start_date[0]" placeholder="Event Start Date" class="form-control datepicker event_start_date datepickerstart" required="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="form-group input-group">
                        <span class="input-group-text "><i class="fa fa-calendar"></i></span>
                        <input type="text" name="event_end_date[0]" placeholder="Event End Date" class="form-control datepicker event_end_date datepickerend" required="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker3'>
                            <input type='time' name="event_time[0]" class="form-control event_time" placeholder="Event Time" value="01:10"/>
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
                                <input type="text" name="event_venue[0]" placeholder="Venue" class="form-control event_venue">
                        </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="form-group">
                                <input type="text" name="event_function[0]" placeholder="Function" class="form-control event_function">
                        </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="form-group">
                                <input type="text" name="event_artist[0]" placeholder="Artist" class="form-control event_artist">
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
                                <select class="form-control select2 parent event_category" id="parent" name="q" data-cat="0">
                                    <option value="">--Select--</option>
                                    <?php foreach($category_parents as $category_parent): if($category_parent['parent_id']==0){?>
                                    <option value="<?=$category_parent['id']?>"><?=$category_parent['category_name']?></option>
                                    <?php }endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="form-group">
                                <select class="form-control select2 child" data-cat="0" id="child">
                                    <option value="">--Select--</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="form-group">
                                <select class="form-control select2 brand" id="brand">
                                    <option value="">--Select--</option>
                                    <?php foreach($brands as $brand): ?>
                                        <option value="<?=$brand['id']?>"><?=$brand['brand_name']?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="form-group">
                                <select class="select2-multiple21 form-control select2 item" multiple id="item">

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
                    <table class="table table-striped hide_this main_table" >
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
                            <tr>
                                <td>Comment</td>
                                <td>    
                                    <input type="text" class="form-control event_category_comment" name="event_category_comment[0][]">
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
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-striped" id="requirements_table">
                            <tbody id="add_requirement">
                            <!-- add requirement on click add -->
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
