<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title?></title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>

    <!-- Favicon icon -->
    <link rel="icon" href="<?php echo base_url()?>assets/images/DjLogo.png" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
    <!-- Custom css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom.css')?>">
    <!-- Jquery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- Custom JS -->
    <script type="text/javascript" src="<?=base_url('assets/js/custom.js')?>"></script>
</head>
<body>
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="card" style="background-color: #000000;">
                <div class="card-body text-center" style="padding-top: 0">
                    <div class="">
                <img src="<?=base_url('assets/images/h2.jpg')?>" height='150' width='300'>
            </div>
                    <div class="form-group mb-3">
                            <label class="float-left">Username:</label>
                        <input type="text" class="form-control" placeholder="Username" id="username">
                    </div>
                    <div class="form-group mb-4">
                        <label class="float-left">Password:</label>
                        <input type="password" class="form-control" placeholder="password" id="password">
                    </div>
                    
                    <button style="background-color: #CE0000" class="form-control btn btn-primary shadow-2 mb-4 text-white" id="submit">Login</button>
                    <div class="alert alert-danger" style="display: none;">
                    </div>
                    <div id="loading" style="display: none;">
                        <div class="spinner-border mr-1"></div>Please wait...
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#submit').click(function(event) {
            var username = $('#username').val();
            var password = $('#password').val();
            if(username==''||password=='')
            {
                $('.alert-danger').slideDown('fast', function() {
                    $(this).html('<center>Fill all Fields</center>')
                });
            }
            else
            {
                $('.alert-danger').slideUp('fast');
                $.ajax({
                    url: '<?php echo base_url('login/check')?>',
                    type: 'POST',
                    data: {username: username, password: password},
                    beforeSend:function(){
                        $('#loading').slideDown('fast');
                    },
                    success:function(data){
                        if(data==0)
                        {
                            $('#loading').slideUp('fast');
                            $('.alert-danger').slideDown('fast', function() {
                                $(this).html('<center>Invalid Credentials</center>');
                            });
                        }
                        else
                        {
                            location.href=data;
                        }
                    }
                });
                
            }
        });
    });
</script>
    <!-- Required Js -->
<script src="<?php echo base_url()?>assets/js/vendor-all.min.js"></script>
	<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
