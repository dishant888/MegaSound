
<div id="main_div_category_get" class="main_div_category_get">
<div class="row">
    <div class="col-lg-10 col-md-10 col-sm-10">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2">
                <label class="pull-right">Setup</label>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2">
                <div class="form-group">
                    <select class="form-control select2 parent event_category" id="parent" name="event_category[<?= $event_id ?>][]">
                        <option value="">--Select--</option>
                       <?php foreach($category_parents as $category_parent): if($category_parent['parent_id']==0){?>
                        <option value="<?=$category_parent['id']?>"><?=$category_parent['category_name']?></option>
                       <?php }endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2">
                <div class="form-group">
                    <select class="form-control select2 child" id="child">
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
        <span class="ml-2" style="color:red; font-size: 20px;"><a class="rem_setup" href="javascript:void(0)"><i class="fa fa-times"></i></a></span>
    </div>
</div>
    <div class="row hide_this">
    <div class="col-lg-12 col-md-12 col-sm-12 table-responsive">
        <table class="table table-striped main_table">
            <thead>
                <tr>
                    <th style="width: 10%;">No.</th>
                    <th style="width: 40%;">Item Description</th>
                    <th style="width: 15%;">Qty</th>
                    <th style="width: 15%;">Days</th>
                    <th style="width: 15%;">Price</th>
                    <th style="width: 15%;">Sub Total</th>
                    <th style="width: 5%;"></th>
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
                    <!--            <input type="text" class="form-control event_category_total event" name="event_category_total[0][]">-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</td>-->
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
</div>
