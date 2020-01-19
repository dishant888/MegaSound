	 <!--<script src="<?php echo base_url()?>assets/js/vendor-all.min.js"></script> -->
    <script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/pcoded.min.js"></script>
    
    <!-- Date Picker -->
        <script src="<?= base_url(); ?>assets/js/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/moment/min/moment.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript" src="<?=base_url('dist/js/jquery.smartWizard.min.js')?>"></script>
    <script type="text/javascript">
    	$(document).ready(function() {
            //$('.select2').select2();
                $('.datepicker').datepicker();
    		$('.fixed-button').remove();
    		setTimeout(function(){ $('.alert').fadeOut(); }, 3000);
    	});
    </script>
    
</body>
</html>
