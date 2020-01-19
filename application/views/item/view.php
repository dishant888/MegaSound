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
<h3 class="m-b-10"><?=$segment=='viewItem'?'View':'Edit'?> Item</h3>
</div>
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
    <?php if($this->session->flashdata('added')){ ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('added'); ?>
        </div>
    <?php } ?>
    <?php if($this->session->flashdata('updated')){ ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('updated'); ?>
        </div>
    <?php } ?>
    <?php if(validation_errors()){ ?>
        <div class="alert alert-danger">
            <?php echo validation_errors(); ?>
        </div>
    <?php } ?>


<?php echo form_open('master/addItem/'.base64_encode($details['id'])) ?>	
<div class="card" style="height: auto;">
<div class="card-header">
<h5>Item Information</h5>
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


    <div class="col-sm-4">

        <div class="form-group">
            <label>Item Name</label>
            <input type="text" id="item" name="item" required data-validation='required'  class="form-control" value="<?=$details['item_name']?>" <?=$segment=='viewItem'?'readonly':''?>>
        </div>
        <div class="form-group">
            <label>Cost (per day)</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text" id="validationTooltipUsernamePrepend">Rs.</span>
                </div>
            <input onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" type="text" id="cost" name="cost" required data-validation="required" class="form-control" value="<?=$details['cost']?>" <?=$segment=='viewItem'?'readonly':''?>>
            </div>
        </div>
        <div class="form-group text-center form-inline"><br>
        	<?php if($segment=='viewItem'){ ?>
        	<a href="<?=base_url('master/editItem/')?><?=base64_encode($details['id'])?>" class="btn btn-success rounded-0">Edit</a>    
		<a onclick="return confirm('Are you sure?')" href="<?=base_url('master/deleteItem/').base64_encode($details['id'])?>" class="btn btn-danger rounded-0">Delete</a>
		<a href="<?=base_url('master/item')?>" class="btn btn-primary rounded-0">Back</a>
        <?php }else{ ?>
        	<button id="add" class="btn btn-success rounded-0">Save</button>
        	<a onclick="return confirm('Are you sure?')" href="<?=base_url('master/deleteItem/').base64_encode($details['id'])?>" class="btn btn-danger rounded-0">Delete</a>
		<a href="<?=base_url('master/item')?>" class="btn btn-primary rounded-0">Back</a>
        <?php } ?>
        </div>

    </div>
    <div class="col-sm-4">
        
        <div class="form-group">
            <label>Brand</label>
            <?php if($segment=='viewItem'){ ?>
            <input type="text" value="<?=$details['brand_name']?>" class="form-control">
            	<?php }else{ ?>
            <select class="select2" id="brand" name="brand" required>
                <?php foreach($brands as $brand): ?>
                    <option <?=$details['brand_id']==$brand['id']?'selected':''?> value="<?=$brand['id']?>"><?=$brand['brand_name']?></option>
            <?php endforeach; ?>
            </select>
             <?php } ?>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea <?=$segment=='viewItem'?'readonly':''?> name="description" required class="form-control" data-validation='required' id="description"><?=$details['description']?></textarea>
        </div>

    </div>
    <div class="col-sm-4">
        
        <div class="form-group">
            <label>Category</label>
            	<?php if($segment=='viewItem'){ ?>
            <input type="text" value="<?=$details['category_name']?>" class="form-control">
            	<?php }else{ ?>
            		<select class="select2" id="category" name="category" required>
                <?php foreach($categories as $category): if($category['parent_id']!=0){ ?>
                    <option <?=$details['category_id']==$category['id']?'selected':''?> value="<?=$category['id']?>"><?=$category['category_name']?></option>
                <?php }endforeach; ?>
            </select>
        <?php } ?>
        </div>

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
    $('#item').css('textTransform', 'capitalize');
    $('.select2').select2();
</script>

