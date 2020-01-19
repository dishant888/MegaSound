<?php 
$segment=$this->uri->segment(3);
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
<h3 class="m-b-10">Boats</h3>
</div>
<div class="row">
<?php if($segment==''){ ?>
<div class="col-sm-5">
    <div class="card">
<div class="card-header">
<h5>ADD BOAT</h5>
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
        <?php echo form_open('master/addBoat'); ?>
        <div class="form-group">
            <label>Boat Name</label>
            <input type="text" value="<?=set_value('boat')?>" name="boat" data-validation="required" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Boat Cost</label>
            <input type="text" value="<?=set_value('boat')?>" name="boat_cost" data-validation="required" class="form-control" required>
        </div>
        <div class="form-group">
            <br>
            <button type="submit" name="add" class="btn btn-primary rounded-0">ADD</button> 
        </div>
        <?php echo form_close(); ?>
        <?php if($this->session->flashdata('added')){ ?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('added'); ?></div>
        <?php } ?>
        <?php if($this->session->flashdata('error')){ ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
        <?php } ?>
        <?php if($this->session->flashdata('deleted')){ ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('deleted'); ?></div>
        <?php } ?>
        <?php if(validation_errors()) {?>
            <div class="alert alert-danger"><?php echo validation_errors(); ?></div>
        <?php } ?>
    </div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script type="text/javascript">
    $.validate({});
    $('.select2').select2();
</script>
</div>

</div>

</div>
</div>
<!-- Add End -->
<?php }else{ ?>
<!-- Edit Start -->
<div class="col-sm-5">
    <div class="card">
<div class="card-header">
<h5>EDIT BOAT</h5>
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
        <?php echo form_open('master/addBoat/'.base64_encode($details['id'])); ?>
        <div class="form-group">
            <label>Boat Name</label>
            <input type="text" value="<?=$details['name']?>" name="boat" data-validation="required" class="form-control" required>
<<<<<<< HEAD
        </div>
        <div class="form-group">
            <label>Boat Cost</label>
            <input type="text" value="<?=$details['boat_cost']?>" name="boat_cost" data-validation="required" class="form-control" required>
=======
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
        </div>
        <div class="form-group">
            <br>
            <a href="<?=base_url('master/boat')?>" class="btn btn-primary rounded-0">Back</a>
            <button class="btn btn-success rounded-0" type="submit" name="edit">Save</button>
            <a href="<?=base_url('master/deleteBoat/')?><?=base64_encode($details['id'])?>" onclick="return confirm('Are you sure?')" data-toggle="tooltip" data-placement="top" class="btn btn-danger rounded-0" data-original-title="Delete">Delete</a>
        </div>
        <?php echo form_close(); ?>
        <?php if($this->session->flashdata('updated')){ ?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('updated'); ?></div>
        <?php } ?>
        <?php if($this->session->flashdata('error')){ ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
        <?php } ?>
        <?php if(validation_errors()) {?>
            <div class="alert alert-danger"><?php echo validation_errors(); ?></div>
        <?php } ?>
    </div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script type="text/javascript">
    $.validate();
</script>
</div>

</div>

</div>
</div>
<!-- Edit End -->
<?php } ?>
<!-- View Start -->
<div class="col-sm-7">
    <div class="card">
<div class="card-header">
<h5>BOAT LIST</h5>
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
    <table class="table table-striped" id="boat">
        <thead>
            <tr>
                <th>No.</th>
                <th>NAME</th>
                <th>ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=0; foreach($boats as $boat): ?>
                <tr>
                    <td><?=++$i?></td>
                    <td><?=$boat['name']?></td>
                    <td>
                        <a href="<?=base_url('master/boat/')?><?=base64_encode($boat['id'])?>" data-toggle="tooltip" data-placement="top" class="text-success" data-original-title="Edit"><i class='fas fa-pencil-alt'></i></a>
                        &nbsp&nbsp&nbsp&nbsp&nbsp
                        <a href="<?=base_url('master/deleteBoat/')?><?=base64_encode($boat['id'])?>" onclick="return confirm('Are you sure?')" data-toggle="tooltip" data-placement="top" class="text-danger" data-original-title="Delete"><i class='fas fa-times'></i></a>
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $('#boat').DataTable({
            "scrollY":        "240px",
        "scrollCollapse": true,
        });
    </script>