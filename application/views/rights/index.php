<style type="text/css">
  .disabled{
    pointer-events: none;
    opacity: 0.5;
  }
</style>
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
<h5>User Rights</h5>
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
    <?php echo form_open('admin/addRights'); ?>
   <div class="row">
     <div class="col-sm-4 offset-4">
      <div class="form-group">
       <select class="form-control" name="admin" id="user">
         <option value="0">---Select---</option>
         <?php foreach($admins as $admin): ?>
          <option value="<?=$admin->id?>"><?=$admin->username?></option>
         <?php endforeach; ?>
       </select>
      </div>
     </div>
     <div class="col-sm-4 offset-4 err" style="display: none; color: red">
      select user 
     </div>
     <div id="loading" style="position: absolute; top: 50%; z-index: 3; left: 50%; transform: translate(-50%,-50%); display: none;" ><div class="spinner-border"></div></div>
        <div class="col-sm-12 table-responsive disabled" id="content">
          <div class="col-sm-3">
            <input type="checkbox" name="all" id="rowchkall">Check All
          </div><br>
          <?php  foreach($parents as $parent): ?>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th colspan="4"><?=$parent->name?></th>
                </tr>
              </thead> 
              <tbody>
                <tr>
                <?php $i=0; foreach($childs as $child): if($child->parent_id==$parent->id){
                $i++; ?>
                  <?php if($i<4){ ?>
                    <td><input type="checkbox" name="<?="user_rights[".$child->id."][menu_id]"?>" value="<?=$child->id?>" class="mr-3 rowchk"><?=$child->name?></td>
                  <?php }else{ ?>
                    <td><input type="checkbox" name="<?="user_rights[".$child->id."][menu_id]"?>" value="<?=$child->id?>" class="mr-3 rowchk"><?=$child->name?></td></tr>
                  <?php $i=0; } ?>
                <?php  } endforeach; ?>
              </tbody>
            </table><br>
          <?php endforeach; ?>
          <div class="col-sm-4 offset-4 text-center">
            <div class="form-group">
              <input type="submit" name="add" class="btn btn-primary">
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
<script type="text/javascript">
$(document).ready(function() {
  
  $("#rowchkall").change(function(){
    if($(this).is(':checked')){
        $("input.rowchk[type=checkbox]").each(function() {
            $(this).attr('checked',true);
        });
    }else{
        $("input.rowchk[type=checkbox]").each(function() {
            $(this).attr('checked', false);
        });
    } 
});
  $('#user').on('change',function(event) {
        var val=$(this).val();
        if(val==0){
          $('#content').addClass('disabled');
          $('.err').show();
          $('#loading').fadeOut('fast');
           $("input.rowchk[type=checkbox]").each(function() {
            $(this).attr('checked', false);
        });
        }else{
          $('#content').removeClass('disabled');
          $('.err').hide();
            $.ajax({
              url: '<?=base_url('admin/getRights')?>',
              type: 'POST',
              dataType: 'json',
              data: {admin_id: val},
              beforeSend:function(){
                $('#content').addClass('disabled');
                $('#loading').fadeIn('fast');
              },
              success:function(data){
                  $('#loading').fadeOut('fast');
                  $('#content').removeClass('disabled');
                $("input.rowchk[type=checkbox]").each(function(){
                    $(this).attr('checked',false);
                  });
                $.each(data, function(index, val) {
                  //console.log(this.menu_id);
                  var menu_id=this.menu_id;
                  $("input.rowchk[type=checkbox]").each(function() {
                    if(menu_id==$(this).val())
                     $(this).attr('checked',true);

                  });
                });
              }
            });
            
        }
  });
});
</script>
<!--  -->