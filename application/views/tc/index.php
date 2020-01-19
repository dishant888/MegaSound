<?php 
$segment=$this->uri->segment(3);
 ?>
 <style type="text/css">
     ul{
        list-style-type: none;
        display: inline-flex;
     }
 </style>
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
<h3 class="m-b-10">Terms & Conditions</h3>
</div>
</div>
</div>
</div>
</div>

<div class="main-body">
<div class="page-wrapper">

<div class="row">
<?php if($segment==''){ ?>
<div class="col-sm-12">
    <?php if($this->session->flashdata('deleted')){ ?>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata('deleted'); ?>
        </div>
    <?php } ?>
<?php echo form_open('master/addTerms'); ?>  
<div class="card">
<div class="card-header">
<h5><?php echo $segment==''?'ADD TERMS & CONDITIONS':'EDIT TERMS & CONDITIONS'; ?></h5>
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
    <div class="col-sm-12">
        <?php if($this->session->flashdata('added')) {?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('added'); ?></div>
        <?php } ?>
        <?php if($this->session->flashdata('error')) {?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
        <?php } ?>
        <?php if(validation_errors()) {?>
            <div class="alert alert-danger"><?php echo validation_errors(); ?></div>
        <?php } ?>
        <div class="form-group">
            <label>Description</label>
            <textarea data-validation="required" class="form-control" name="term"></textarea>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group text-center">
            <button type="submit" name="add" class="btn btn-primary w-25 rounded-0">ADD</button>
        </div>
    </div>
</div>

</div>

</div>
<?php echo form_close(); ?>
</div>
<?php }else{ ?>
   <div class="col-sm-12">
    <?php if($this->session->flashdata('deleted')){ ?>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata('deleted'); ?>
        </div>
    <?php } ?>
<?php echo form_open('master/addTerms/'.base64_encode($details['id'])); ?>  
<div class="card">
<div class="card-header">
<h5><?php echo $segment==''?'ADD TERMS & CONDITIONS':'EDIT TERMS & CONDITIONS'; ?></h5>
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
    <div class="col-sm-12">
        <?php if($this->session->flashdata('updated')) {?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('updated'); ?></div>
        <?php } ?>
        <?php if($this->session->flashdata('error')) {?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
        <?php } ?>
        <?php if(validation_errors()) {?>
            <div class="alert alert-danger"><?php echo validation_errors(); ?></div>
        <?php } ?>
        <div class="form-group">
            <label>Description</label>
            <textarea data-validation="required" class="form-control" name="term"><?=$details['description']?></textarea>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group text-center">
            <a href="<?=base_url('master/terms')?>" class="btn btn-primary rounded-0">Back</a>
            <button type="submit" name="add" class="btn btn-success rounded-0">SAVE</button>
            <a href="<?=base_url('master/deleteTerms/')?><?=base64_encode($details['id'])?>" onclick="return confirm('Are you sure?')" data-placement="top" class="btn btn-danger rounded-0" data-original-title="Delete">Delete</a>
        </div>
    </div>
</div>

</div>

</div>
<?php echo form_close(); ?>
</div>
<?php } ?>
</div>
</div>
</div>

<script type="text/javascript">
    $.validate({});
</script>

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
  
<div class="card">
<div class="card-header">
<h5>TERMS & CONDITIONS LIST</h5>
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
    <?php foreach($terms as $term): ?>
        <div class="col-sm-4 offset-sm-1 p-3 border mb-5">
            <?=substr($term['description'],0,300);echo strlen($term['description'])>300?'...':''?>
            <ul class="float-right">
            <li><a href="<?=base_url('master/terms/')?><?=base64_encode($term['id'])?>" data-toggle="tooltip" data-placement="top" class="text-success " data-original-title="Edit"><i class='fas fa-pencil-alt'></i></a>&nbsp&nbsp&nbsp </li>
            <li><a href="<?=base_url('master/deleteTerms/')?><?=base64_encode($term['id'])?>" onclick="return confirm('Are you sure?')" data-toggle="tooltip" data-placement="top" class="text-danger" data-original-title="Delete"><i class='fas fa-times'></i></a></li></ul>
        </div>
    <?php endforeach; ?>
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