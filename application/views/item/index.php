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
<h3 class="m-b-10">Items</h3>
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
<?php echo form_open('master/addItem',['id'=>'itemForm']); ?>  
<div class="card">
<div class="card-header">
<h5>ADD ITEM</h5>
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

    <div class="col-sm-4">

        <div class="form-group">
            <label>Item Name</label>
            <input type="text" id="item" name="item" required data-validation='required'  class="form-control">
        </div>
        <div class="form-group">
            <label>Cost (per day)</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text" id="validationTooltipUsernamePrepend">Rs.</span>
                </div>
            <input onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" type="text" id="cost" name="cost" data required data-validation="required" class="form-control">
            </div>
        </div>
        <div class="form-group text-center"><br>
            <button name="add" id="add" type="submit" class="btn btn-primary w-50 form-control rounded-0">ADD</button>
        </div>

    </div>
    <div class="col-sm-4">
        
        <div class="form-group">
            <label>Select Brand</label>
            <select class="select2" id="brand" name="brand" required>
                <option value=0 selected>---Select Brand---</option>
                <?php foreach($brands as $brand): ?>
                    <option value="<?=$brand['id']?>"><?=$brand['brand_name']?></option>
            <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" required class="form-control" data-validation='required' id="description"></textarea>
        </div>

    </div>
    <div class="col-sm-4">
        
        <div class="form-group">
            <label>Select Category</label>
            <select class="select2" id="category" name="category" required>
                <option value=0 selected>---Select Category---</option>
                <?php foreach($categories as $category): if($category['parent_id']!=0){ ?>
                    <option value="<?=$category['id']?>"><?=$category['category_name']?></option>
                <?php }endforeach; ?>
            </select>
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

<script type="text/javascript">
    $.validate();
    $('.select2').select2();
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
<h5>ITEM LIST</h5>
<div class="card-header-right form-inline">
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
       <table id="items" class="table">
           <thead>
               <tr>
                   <th>No.</th>
                   <th>ITEM NAME</th>
                   <th>COST</th>
                   <th>DESCRIPTION</th>
                   <th>ACTIONS</th>
               </tr>
           </thead>
           <tbody>
               <?php $i=0; foreach($items as $item): ?>
               <tr>
                   <td><?=++$i?></td>
                   <td><?=$item['item_name']?></td>
                   <td><?=$item['cost']?></td>
                   <td><?=wordwrap($item['description'],50,"<br>",true)?></td>
                   <td>
                    <a href="<?=base_url('master/viewItem/').base64_encode($item['id'])?>" class='text-primary' data-toggle="tooltip" data-original-title="View" data-placement="top"><i class='fas fa-eye'></i></a>&nbsp&nbsp&nbsp
                       <a href="<?=base_url('master/editItem/')?><?=base64_encode($item['id'])?>" data-toggle="tooltip" data-placement="top" class="text-success" data-original-title="Edit"><i class='fas fa-pencil-alt'></i></a>
                        &nbsp&nbsp&nbsp
                        <a href="<?=base_url('master/deleteItem/')?><?=base64_encode($item['id'])?>" onclick="return confirm('Are you sure?')" data-toggle="tooltip" data-placement="top" class="text-danger" data-original-title="Delete"><i class='fas fa-times'></i></a>
                   </td>
               </tr>
               <?php endforeach; ?>
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
</div>
<!-- View end -->
</div>
</div>
</div>
</div>
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $('#items').DataTable({
            "scrollY":        "340px",
        "scrollCollapse": true,
        });
    </script>
<script type="text/javascript">
    $('#item').css('textTransform', 'capitalize');
</script>