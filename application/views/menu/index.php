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
<!-- View Start -->
<div class="col-sm-12">
    <div class="card">
<div class="card-header">
<h5></h5>
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
        <div class="alert alert-success"><?=$this->session->flashdata('added');?></div>
    <?php } ?>
    <?php echo form_open('admin/addMenu'); ?>
   <div class="row">
       <div class="col-sm-4">
           <div class="form-group">
               <label>Name:</label>
               <input type="text" name="name" required data-validation='required' class="form-control">
           </div>
       </div>
       <div class="col-sm-4">
           <div class="form-group">
               <label>Parent:</label>
               <select class="form-control" name="parent">
                   <option value="0">Default[parent]</option>
                   <?php foreach($parents as $parent):if($parent->parent_id==0){ ?>
                    <option value="<?=$parent->id?>"><?=$parent->name?></option>
                   <?php } endforeach; ?>
               </select>
           </div>
       </div>
       <div class="col-sm-4">
           <div class="form-group">
               <label>Controller:</label>
               <input type="text" name="controller" class="form-control">
           </div>
       </div>
       <div class="col-sm-4">
           <div class="form-group">
               <label>Action:</label>
               <input type="text" name="action" class="form-control">
           </div>
       </div>
       <div class="col-sm-4">
           <div class="form-group">
               <input type="submit" name="add" class="btn btn-success mt-4">
           </div>
       </div>
   </div>
   <?php echo form_close(); ?>
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
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script type="text/javascript">
    $.validate({});
</script>