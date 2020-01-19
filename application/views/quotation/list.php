 
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
                <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Quotations</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 table-responsive" style="height: 287px;overflow-y: scroll;">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Client Name</th>
                                        <th>Date</th>
                                        <th>Voucher No</th>
                                        <th>Amount</th>
                                       
                                        <th><a href="#"><i class="fa fa-ellipsis-v float-right"></i></a></th>
                                    </tr>
                                </thead>
                                <tbody>
<<<<<<< HEAD
                                    <?php  $i=1; foreach($quationsDatas as $value){ ?>
                                    <tr>
                                        <td>
                                           <?php echo $i++; ?>
                                        </td>
                                        <td>
                                             <?php echo $value->custname; ?>
                                        </td>
                                        <td>
                                             <?php echo date('d-m-Y',strtotime($value->transaction_date)); ?>
                                        </td>
                                        <td>
                                            <?php echo $value->voucher_no; ?>
                                        </td>
                                        <td>
                                            <?php echo $value->net_amount; ?>
                                        </td>
                                        <td>
                                            <a target="_blank" href="<?=base_url('quotation/revision/'.$value->quo_id)?>">Revision</a>&nbsp;&nbsp;
                                            <a target="_blank" href="<?=base_url('quotation/view/'.$value->quo_id)?>">View</a>&nbsp;&nbsp;
                                        </td>
                                    </tr>
                                <?php } ?>    
                                   
=======
                                    <tr>
                                        <td>
                                            001/19
                                        </td>
                                        <td>
                                        Akshat Chouhan
                                        </td>
                                        <td>
                                            08/09/2019
                                        </td>
                                        <td>
                                            Ananta Resorts
                                        </td>
                                        <td>
                                            01
                                        </td>
                                        <td>
                                            520000/-
                                        </td>
                                        <td>
                                            Approve&nbsp&nbsp
                                            <a target="_blank" href="<?=base_url('quotation/view')?>">View</a>&nbsp&nbsp
                                            <i class="fa fa-pencil-alt"></i>&nbsp&nbsp
                                            <i class="fa fa-times"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            001/19
                                        </td>
                                        <td>
                                        Akash Saxena
                                        </td>
                                        <td>
                                            08/09/2019
                                        </td>
                                        <td>
                                            Ananta Resorts
                                        </td>
                                        <td>
                                            01
                                        </td>
                                        <td>
                                            720000/-
                                        </td>
                                        <td>
                                            Approve&nbsp&nbsp
                                            <a target="_blank" href="<?=base_url('quotation/view')?>">View</a>&nbsp&nbsp
                                            <i class="fa fa-pencil-alt"></i>&nbsp&nbsp
                                            <i class="fa fa-times"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            001/19
                                        </td>
                                        <td>
                                        Bhavesh Joshi
                                        </td>
                                        <td>
                                            08/09/2019
                                        </td>
                                        <td>
                                            Celebration Mall
                                        </td>
                                        <td>
                                            01
                                        </td>
                                        <td>
                                            1700000/-
                                        </td>
                                        <td>
                                            Approve&nbsp&nbsp
                                            <a target="_blank" href="<?=base_url('quotation/view')?>">View</a>&nbsp&nbsp
                                            <i class="fa fa-pencil-alt"></i>&nbsp&nbsp
                                            <i class="fa fa-times"></i>
                                        </td>
                                    </tr>
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-sm-12">
<<<<<<< HEAD
=======
                <div class="card">
                    <div class="card-header">
                        <h5>Approved Quotations</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 table-responsive" style="height: 287px;overflow-y: scroll;">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Client Name</th>
                                        <th>Date</th>
                                        <th>Venue</th>
                                        <th>Days</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            001/19
                                        </td>
                                        <td>
                                        Akshat Chouhan
                                        </td>
                                        <td>
                                            08/09/2019
                                        </td>
                                        <td>
                                            Ananta Resorts
                                        </td>
                                        <td>
                                            01
                                        </td>
                                        <td>
                                            520000/-
                                        </td>
                                        <td>
                                            <i class="fa fa-lock"></i>&nbsp&nbsp
                                            <a target="_blank" href="<?=base_url('quotation/view')?>">View</a>&nbsp&nbsp
                                            <i class="fa fa-pencil-alt"></i>&nbsp&nbsp
                                            <i class="fa fa-times"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            001/19
                                        </td>
                                        <td>
                                        Akash Saxena
                                        </td>
                                        <td>
                                            08/09/2019
                                        </td>
                                        <td>
                                            Ananta Resorts
                                        </td>
                                        <td>
                                            01
                                        </td>
                                        <td>
                                            720000/-
                                        </td>
                                        <td>
                                            <i class="fa fa-lock"></i>&nbsp&nbsp
                                            <a target="_blank" href="<?=base_url('quotation/view')?>">View</a>&nbsp&nbsp
                                            <i class="fa fa-pencil-alt"></i>&nbsp&nbsp
                                            <i class="fa fa-times"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            001/19
                                        </td>
                                        <td>
                                        Bhavesh Joshi
                                        </td>
                                        <td>
                                            08/09/2019
                                        </td>
                                        <td>
                                            Celebration Mall
                                        </td>
                                        <td>
                                            01
                                        </td>
                                        <td>
                                            1700000/-
                                        </td>
                                        <td>
                                            <i class="fa fa-lock"></i>&nbsp&nbsp
                                            <a target="_blank" href="<?=base_url('quotation/view')?>">View</a>&nbsp&nbsp
                                            <i class="fa fa-pencil-alt"></i>&nbsp&nbsp
                                            <i class="fa fa-times"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                    </div>
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
                </div>
            </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</div>