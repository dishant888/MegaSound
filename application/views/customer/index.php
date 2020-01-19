<div class="pcoded-main-container">
<div class="pcoded-wrapper">
<div class="pcoded-content">
<div class="pcoded-inner-content">
<!-- ADD Start -->
<div class="page-header">
<div class="page-block">
<div class="row align-items-center">
<div class="col-md-12">
<div class="page-header-title">
<h3 class="m-b-10">Customers</h3>
</div>

<!-- <ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="#">Form Components</a></li>
<li class="breadcrumb-item"><a href="#">Form Elements</a></li>
</ul> -->
</div>
</div>
</div>
</div>

<div class="main-body">
<div class="page-wrapper">

<div class="row">

<div class="col-sm-12">
    <?php if($this->session->flashdata('deleted')){ ?>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata('deleted'); ?>
        </div>
    <?php } ?>
<?php echo form_open('master/addCustomer',['id'=>'customerForm']); ?>  
<div class="card">
<div class="card-header">
<h5>ADD CUSTOMER</h5>
<div class="card-header-right">
<div class="btn-group card-option">
<button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="feather icon-more-horizontal"></i>
</button>
<ul class="list-unstyled card-option dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(45px, 45px, 0px);">
<li class="dropdown-item full-card"><a href="#"><span style=""><i class="feather icon-maximize"></i> maximize</span><span style="display: none;"><i class="feather icon-minimize"></i> Restore</span></a></li>
<li class="dropdown-item minimize-card"><a href="#"><span style=""><i class="feather icon-minus"></i> collapse</span><span style="display: none;"><i class="feather icon-plus"></i> expand</span></a></li>
<li class="dropdown-item reload-card"><a href="#"><i class="feather icon-refresh-cw"></i> reload</a></li>
<li class="dropdown-item close-card"><a href="#"><i class="feather icon-trash"></i> remove</a></li>
</ul>
</div>
</div>
</div>
<div class="card-body">
<div class="row">
<div class="col-md-4">

<div class="form-group">
<label for="exampleInputEmail1">Client Name</label>
<input type="text" data-validation="required" onkeypress="return (event.charCode > 64 && 
event.charCode < 91) || even.charCode==36 ||(event.charCode > 96 && event.charCode < 123)" class="form-control" name="name" id="name" required placeholder="Enter Client Name" value="<?= set_value('name')?>">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Address</label>
<textarea name="address" data-validation="required" required class="form-control" placeholder="Enter Address"><?= set_value('address')?></textarea>
</div>
</div>
<div class="col-md-4">

<div class="form-group">
<label>Company Name</label>
<input type="text"  value="<?= set_value('company')?>" data-validation="required" class="form-control" required name="company" placeholder="Enter Company Name">
</div>
<div class="form-group">
<label for="exampleFormControlSelect1">State</label>
<select  class="form-control select2" id="state" name="state"  required>
<option selected value="">---Select State---</option>
<?php foreach($states as $state): ?>
    <option value="<?=$state['state_code']?>"><?=$state['state_name']?></option>
<?php endforeach; ?>
</select>
</div>
<div class="form-group">
<label for="exampleInputPassword1">Contact No.</label>
<input  value="<?= set_value('contact')?>" type="text" data-validation="length" data-validation-length="min10" class="form-control" required minlength="10" maxlength="10" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"  name="contact" placeholder="Enter Contact No.">
</div>
<div class="form-inline">
<button name="add" type="submit" class="btn btn-primary form-control rounded-0">ADD</button>
<button id="reset" type="reset" class="btn btn-danger form-control rounded-0">Reset</button>
</div>


</div>
<div class="col-md-4">

<div class="form-group">
<label>GST No.</label>
<input type="text"  value="<?= set_value('gst')?>" data-validation="required" required class="form-control" name="gst" placeholder="Enter GST No.">
</div>
<div class="form-group city">
<label>City</label>
<select class="form-control select2" id="city" required name="city">
<option selected value="">---Select City---</option>
</select>
<label id="loading" style="display: none;">
    Loading...
</label>
</div>
<div class="form-group">
    <label>E-mail</label>
    <form>
    <input type="email"  value="<?= set_value('email')?>" id="email" name="email" required data-validation="required email" class="form-control" placeholder="Enter E-mail">
    <span id="help-block-email" style="display: none;"></span>
</div>
<div class="alert alert-danger" style="display: none">
</div>
<div class="spinner-grow text-success" style="display: none;"></div>
<?php
     if(validation_errors())
     {
        echo "<div class='alert alert-danger'>".validation_errors()."</div>";
     } 
     if($this->session->flashdata('added'))
     {
    ?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('added'); ?>
    </div>
<?php
     }
    ?>
</div>
</div>



</div>

</div>
<?php echo form_close(); ?>
</div>
</div>
</div>
</div>

<script type="text/javascript">
    $.validate({});
</script>
<!--ADD End  -->
<!--View Start  -->
<div class="page-header">
<div class="page-block">
<div class="row align-items-center">
<div class="col-md-12">
<div class="page-header-title">
<h3 class="m-b-10"></h3>
</div>
</div>
</div>
</div>
</div>

<div class="main-body">
<div class="page-wrapper">

<div class="row">

<div class="col-sm-12">
    
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>CUSTOMER INFORMATION</h5>
<div class="card-header-right form-inline">
    <!-- <input type="text" name="char" id="search" class="form-control" placeholder="&#xF002; Search" style="font-family:Arial, FontAwesome"> -->&nbsp&nbsp&nbsp&nbsp&nbsp
<div class="btn-group card-option">
<button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="feather icon-more-horizontal"></i>
</button>
<ul class="list-unstyled card-option dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(45px, 45px, 0px);">
<li class="dropdown-item full-card"><a href="#"><span style=""><i class="feather icon-maximize"></i> maximize</span><span style="display: none;"><i class="feather icon-minimize"></i> Restore</span></a></li>
<li class="dropdown-item minimize-card"><a href="#"><span style=""><i class="feather icon-minus"></i> collapse</span><span style="display: none;"><i class="feather icon-plus"></i> expand</span></a></li>
<li class="dropdown-item reload-card"><a href="#"><i class="feather icon-refresh-cw"></i> reload</a></li>
<li class="dropdown-item close-card"><a href="#"><i class="feather icon-trash"></i> remove</a></li>
</ul>
</div>
</div>
</div>
<div class="card-body">
<div class="row">
    <table class="table" id="customer">
        <thead>
            <tr>
                <th>No.</th>
                <th>Client Name</th>
                <th>Company Name</th>
                <th>Contact No.</th>
                <th>City</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="main_body">
        </tbody>
    </table>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
<!-- View end -->
</div>
</div>
</div>
</div>

<script type="text/javascript">
    $(function getCust(){
        $.ajax({
        url: '<?=base_url('master/customerView')?>',
        dataType: 'JSON',
        type: 'POST',
        success:function(data){
            $('#main_body').html(data);
        },
        complete:function(){
            setTimeout(getCust, 2000);
        }
    });
    });
    $('.select2').select2();
    $('#state').change(function(event) {
        var state_id = $(this).val();
        if(state_id!='')
        {
            $.ajax({
                url: '<?=base_url('master/city')?>',
                type: 'POST',
                data: {state_id: state_id},
                beforeSend: function(){
                    $('#loading').show();
                },
                complete: function(){
                    $('#loading').hide();
                },
                success:function(data){
                    $('#city').html(data);
                }
            });
        }
    });
    $(document).ready(function() {
        setTimeout(function(){ $('.alert').fadeOut(); }, 3000);
        $('#name').css('textTransform', 'capitalize');
        $('#email').keyup(function(event) {
            var email = $(this).val();
            if(email!='')
            {
                $.ajax({
                    url: '<?=base_url('master/check_email')?>',
                    type: 'POST',
                    data: {email: email},
                    success:function(data){
                        if(data==1)
                        {
                            $('#help-block-email').hide();
                        }
                        else
                        {
                            $('#email').css('border-color', '#c52929');
                            $('#help-block-email').show('fast', function() {
                                $(this).css('color', '#c52929');
                               $(this).html('Email-Already Exists');
                            });
                            return false;
                        }
                    }
                });
            }
        });
    });
</script>