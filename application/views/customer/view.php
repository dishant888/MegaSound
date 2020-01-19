<?php 
$segment=$this->uri->segment(2);
 ?>
<div class="pcoded-main-container">
<div class="pcoded-wrapper">
<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="page-header">
<div class="page-block">
<div class="row align-items-center">
<div class="col-md-12">
<div class="page-header-title">
<h3 class="m-b-10"><?=$segment=='customerView'?'View':'Edit'?> Customer</h3>
</div>
</div>
</div>
</div>
</div>

<div class="main-body">
<div class="page-wrapper">

<div class="row">

<div class="col-sm-12">
<?php echo form_open('master/addCustomer/'.base64_encode($details['id'])) ?>	
<div class="card" style="height: auto;">
<div class="card-header">
<h5>Customer Information</h5>
<div class="card-header-right">
<div class="btn-group card-option">
<button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="feather icon-more-horizontal"></i>
</button>
<ul class="list-unstyled card-option dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(45px, 45px, 0px);">
<li class="dropdown-item full-card"><a href="#!"><span style=""><i class="feather icon-maximize"></i> maximize</span><span style="display: none;"><i class="feather icon-minimize"></i> Restore</span></a></li>
<li class="dropdown-item minimize-card"><a href="#!"><span style=""><i class="feather icon-minus"></i> collapse</span><span style="display: none;"><i class="feather icon-plus"></i> expand</span></a></li>
<li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
<li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
</ul>
</div>
</div>
</div>

<div class="card-body">
<div class="row">
	<!-- 1st Row -->
<div class="col-md-4">
	<div class="form-group">
		<label>Name:</label>
		<input type="text" onkeypress="return (event.charCode > 64 && 
event.charCode < 91)|| even.charCode==36  || (event.charCode > 96 && event.charCode < 123)" data-validation="required" id="name" name="name" class="form-control" <?=$segment=='customerView'?'readonly':''?> value="<?=$details['name']?>" required>
	</div>
	<div class="form-group">
		<label>Address:</label>
		<textarea class="form-control" data-validation="required" required name="address"<?=$segment=='customerView'?'readonly':''?>><?=$details['address']?></textarea>
	</div>
</div>
	<!-- 2nd Row -->
<div class="col-sm-4">
	<div class="form-group">
		<label>Company:</label>
		<input type="text" data-validation="required" name="company" class="form-control"<?=$segment=='customerView'?'readonly':''?> value="<?=$details['company']?>" required>
	</div>
	<div class="form-group">
		<label>State:</label>
		<?php 
		if($segment=='customerView')
		{ ?>
		<input readonly type="text" name="state" class="form-control" value="<?=$details['state']?>"required>
<?php }	else{ ?>
		<select class="form-control select2" id="state"required name="state">
		<option value="">---Select State---</option>
<?php foreach($states as $state): if($state['state_code']==$details['state_code']){ ?>
    <option selected value="<?=$state['state_code']?>"><?=$state['state_name']?></option>
<?php }else{ ?>
    <option value="<?=$state['state_code']?>"><?=$state['state_name']?></option>
<?php }endforeach; ?>
		</select>
	<?php } ?>
	</div>
	<div class="form-group">
		<label>Contact:</label>
		<input type="text" data-validation="length" data-validation-length="min10" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="10" name="contact" class="form-control"<?=$segment=='customerView'?'readonly':''?> value="<?=$details['contact']?>"required>
	</div>
</div>
	<!-- 3rd Row -->
<div class="col-sm-4">
	<div class="form-group">
		<label>GST:</label>
		<input type="text" data-validation="required" name="gst" class="form-control"<?=$segment=='customerView'?'readonly':''?> value="<?=$details['gst']?>"required>
	</div>
	<div class="form-group">
		<label>City:</label>
		<?php 
		if($segment=='customerView')
		{ ?>
		<input readonly type="text" name="city" class="form-control" value="<?=$details['city']?>">
<?php }	else{ ?>
		<select class="form-control select2" id="city"required name="city">
			

		</select>
		<label id="loading" style="display: none;">
    	Loading...
		</label>
	<?php } ?>
	</div>
	<div class="form-group">
		<label>E-mail:</label>
		<input type="email" data-validation="required email" name="email" class="form-control"<?=$segment=='customerView'?'readonly':''?> value="<?=$details['email']?>" required>
	</div>
</div>
<!-- 2nd Col -->
<div class="col-sm-8">
	<?php if($segment=='customerView'){ ?>
		<a href="<?=base_url('master/customer')?>" class="btn btn-primary rounded-0"></i>Back</a>
		<a href="<?=base_url('master/customerEdit/')?><?=base64_encode($details['id'])?>" class="btn btn-success rounded-0">Edit</a>
		<a onclick="return confirm('Are you sure?')" href="<?=base_url('master/customerDelete/').base64_encode($details['id'])?>" class="btn btn-danger rounded-0">Delete</a>
	<?php }else{ ?>
		<a href="<?=base_url('master/customer')?>" class="btn btn-primary rounded-0">Back</a>
		<button class="btn btn-success rounded-0" type="submit" name="edit">Save</button>
		<a onclick="return confirm('Are you sure?')" href="<?=base_url('master/customerDelete/').base64_encode($details['id'])?>" class="btn btn-danger rounded-0">Delete</a>
	<?php } ?>
</div>
<div class="col-sm-4">
	<?php
	 if(validation_errors())
	 {
	 	echo "<div class='alert alert-danger'>".validation_errors()."</div>";
	 } 
	 if($this->session->flashdata('updated'))
	 {
	?>
	<div class="alert alert-success">
		<?php echo $this->session->flashdata('updated'); ?>
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
</div>
</div>
</div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script type="text/javascript">
    $.validate({});
</script>
<script type="text/javascript">
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
        var state_id = <?= (!empty($details['state_code']))?$details['state_code']:''; ?>;
        if(state_id != '')
        {
        	$.ajax({
                url: '<?=base_url('master/city/')?><?=$details['city_code']?>',
                type: 'POST',
                data: {state_id: state_id},
                success:function(data){
                    $('#city').html(data);
                }
            });
        }
        $('#name').css('textTransform', 'capitalize');
	});
</script>
