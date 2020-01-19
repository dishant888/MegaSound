<!DOCTYPE html>
<html>
<head>
	<title>MegaSound|Quotation</title>
    <link rel="icon" href="<?php echo base_url()?>assets/images/DjLogo.png" type="image/x-icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/fonts/fontawesome/css/fontawesome-all.min.css">
	<!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <!-- Validation -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
	<style type="text/css">
		select { text-align-last: center; }
		.form-error{
        color:#c52929;
    }
	</style>
</head>
<body>
  
<div class="container-fluid">
	<div class="row">
	<div class="col-sm-3 p-2">
		<table class="table-sm mt-2 w-100">
			<tr>
				<td>
					<a href="#" class="page-link "><i class="fa fa-chevron-left mr-4"></i>Back to Quotations</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="#" class="page-link "><i class="fas fa-download mr-4"></i>Download</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="#" class="page-link "><i class="far fa-edit mr-4"></i>Edit</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="#" class="page-link "><i class="fa fa-times mr-4"></i>Close</a>
				</td>
			</tr>
			<tr>
				<td>
					<h5 class="font-weight-normal">Adjust Font</h5>
				</td>
			</tr>
			<tr>
				<td class="text-center">
					<form>
					<select class="form-control form-control-sm">
						<option>---Select---</option>
						<option>8px</option>
						<option>9px</option>
						<option>10px</option>
						<option>11px</option>
						<option>12px</option>
						<option>13px</option>
						<option>14px</option>
						<option>15px</option>
						<option>16px</option>
					</select>
					<input type="submit" value="Update" class="btn btn-sm rounded-0 btn-primary mt-3">
					</form>
				</td>
			</tr>
			<tr>
				<td>
					<h5 class="font-weight-normal">Adjust Height of Row</h5>
				</td>
			</tr>
			<tr>
				<td class="text-center">
					<form>
					<div class="form-group form-inline">
						<label>Row - 1:</label>
						<input type="text" class="ml-2 form-control form-control-sm" data-validation="number" data-validation-allowing="range[1;100]">
					</div>
					<div class="form-group form-inline">
						<label>Row - 2:</label>
						<input type="text" class="ml-2 form-control form-control-sm" data-validation="number" data-validation-allowing="range[1;100]">
					</div>
					<input type="submit" value="Update" class="btn btn-sm rounded-0 btn-primary">
					</form>
				</td>
			</tr>
		</table>
	</div>
	<div class="col-sm-9 p-0">
		<!--<object data="<?=base_url('quotation/generatePdf/').$id; ?>" width="100%" style="height: 100vh;" type="application/pdf">	-->
		<object data="<?=base_url('quotation/generatePdf/').$id; ?>" width="100%" style="height: 100vh;" type="application/pdf">	
		</object>
	</div>
	</div>
</div>
<script type="text/javascript">
	$.validate({});
</script>
</body>
</html>