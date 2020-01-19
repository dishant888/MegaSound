<!DOCTYPE html>
<html lang="en">

<head>
    <title>MegaSound | <?=$title?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content=""/>

    <!-- Favicon icon -->
    <link rel="icon" href="<?php echo base_url()?>assets/images/DjLogo.png" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/custom.css">
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <!-- Validation -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?= base_url();?>assets/js/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/js/bootstrap-daterangepicker/daterangepicker.css">
    <!-- Custom JS -->
    <!--<script type="text/javascript" src="<?=base_url('assets/js/custom.js')?>"></script>-->
    <!-- Select2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<style type="text/css">
    .form-error{
        color:#c52929;
    }
    .pcoded-content{
        padding-top: 0px;
    }
    .pcoded-header{
        height: 5px;
    }
</style>
  <script type="text/javascript">
      $(document).ready(function() {
        function darkmode(){
            $('#theme').text('Dark Theme: On');
            $('#mainNav').removeClass('menu-light');
            $('#switch-1').attr('checked', 'checked');
            localStorage.setItem("mode", "dark");
        }
        function nodark(){
            $('#theme').text('Dark Theme: Off');
            $('#mainNav').addClass('menu-light');
            localStorage.setItem("mode", "light");
        }

        if(localStorage.getItem("mode")=="dark")
             darkmode();
        else
            nodark();

          $('#switch-1').change(function(event) {
            if ($(this).prop('checked'))
            {
                darkmode();
            }
            else
            {
                nodark();
            }
            });
      });
  </script>

</head>

<body>

<style>
        /* Absolute Center Spinner */
.loading {
  position: fixed;
  z-index: 999;
  height: 2em;
  width: 2em;
  overflow: show;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

/* Transparent Overlay */
.loading:before {
  content: '';
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
    background: radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0, .8));

  background: -webkit-radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0,.8));
}

/* :not(:required) hides these rules from IE9 and below */
.loading:not(:required) {
  /* hide "loading..." text */
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.loading:not(:required):after {
  content: '';
  display: block;
  font-size: 10px;
  width: 1em;
  height: 1em;
  margin-top: -0.5em;
  -webkit-animation: spinner 1500ms infinite linear;
  -moz-animation: spinner 1500ms infinite linear;
  -ms-animation: spinner 1500ms infinite linear;
  -o-animation: spinner 1500ms infinite linear;
  animation: spinner 1500ms infinite linear;
  border-radius: 0.5em;
  -webkit-box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
}

/* Animation */

@-webkit-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-moz-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-o-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
    </style>
    
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
    <div class="loading" style="display:none;">Loading&#8230;</div>
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar icon-colored" id="mainNav">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="<?php echo base_url('admin')?>" class="b-brand">
                    <!-- <div class="b-bg">
                        <i class="feather icon-trending-up"></i>
                    </div> -->
                    <div class="">
                        <img src="<?php echo base_url('assets/images/v2.jpg')?>" height='40' width='40'>
                    </div>
                    <span class="b-title">Mega Sound</span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item <?= ($this->uri->segment(1))=='admin'?'active':'';?>">
                        <a href="<?php echo base_url('admin') ?>" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>
<?php 
$this->db->select(['menus.parent_id as parent_id','menus.controller as active']);
$this->db->group_by('menus.parent_id');
$this->db->join('menus','menus.id=user_rights.menu_id');
$this->db->where('user_rights.admin_id',$this->session->userdata('id'));
$query=$this->db->get('user_rights');
$results=$query->result_array();

foreach ($results as $result) {
    $this->db->select(['menus.name as parent_name','menus.id']);
    $this->db->where('id',$result['parent_id']);
    $query2=$this->db->get('menus');
    $parents=$query2->result_array();
    foreach ($parents as $parent) {
?>
<li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu <?= ($this->uri->segment(1))==$result['active']?'active pcoded-trigger':'';?>">
<a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="fas fa-compact-disc"></i></span><span class="pcoded-mtext"><?=$parent['parent_name']?></span></a>

<ul class="pcoded-submenu">
<?php 
$this->db->select(['menus.parent_id','menus.name','menus.controller','menus.action']);
$this->db->join('menus','menus.id=user_rights.menu_id');
$this->db->where('user_rights.admin_id',$this->session->userdata('id'));
$query3=$this->db->get('user_rights');
$childs=$query3->result_array();
foreach ($childs as $child) {
    if($child['parent_id']==$parent['id'])
    {
 ?>
<li class="<?= ($this->uri->segment(2))==$child['action']?'active':'';?>">
    <a href="<?=base_url().$child['controller'].'/',$child['action']?>"><?=$child['name']?></a>
</li>
<?php 
    }
}
 ?>
</ul>

</li>
<?php
    }
}
 ?>                    
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="<?php echo base_url('login') ?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-log-out"></i></span><span class="pcoded-mtext">LOGOUT</span></a>
                    </li>
                </ul>
                <br><br>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
<<<<<<< HEAD
    <!--<header class="navbar pcoded-header navbar-expand-lg navbar-light" style="padding: 0px">-->
    <!--    <div class="m-header">-->
    <!--        <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>-->
    <!--        <a href="#" class="b-brand">-->
    <!--               <div class="bg-info rounded">-->
    <!--                    <img src="<?php echo base_url()?>assets/images/DjLogo.png" height='40' width='40'>-->
    <!--                </div>-->
    <!--               <span class="b-title">Mega Sound</span>-->
    <!--           </a>-->
    <!--    </div>-->
    <!--    <a class="mobile-menu" id="mobile-header" href="javascript:">-->
    <!--        <i class="feather icon-more-horizontal"></i>-->
    <!--    </a>-->
    <!--    <div class="collapse navbar-collapse">-->
    <!--        <ul class="navbar-nav mr-auto">-->
    <!--            <li><a href="javascript:" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a></li>-->
    <!--            <li class="nav-item">-->
                    <!-- Search Box -->
                    <!-- <div class="main-search">
    <!--                    <div class="input-group">-->
    <!--                        <input type="text" id="m-search" class="form-control" placeholder="Search . . .">-->
    <!--                        <a href="javascript:" class="input-group-append search-close">-->
    <!--                            <i class="feather icon-x input-group-text"></i>-->
    <!--                        </a>-->
    <!--                        <span class="input-group-append search-btn btn btn-primary">-->
    <!--                            <i class="feather icon-search input-group-text"></i>-->
    <!--                        </span>-->
    <!--                    </div>-->
    <!--                </div> -->-->
    <!--            </li>-->
    <!--            <li class="nav-item">-->
    <!--                <div class="form-group">-->
    <!--                <div class="switch d-inline m-r-10">-->
    <!--                <input type="checkbox" id="switch-1">-->
    <!--                <label for="switch-1" class="cr"></label>-->
    <!--                </div>-->
    <!--                <label id="theme"></label>-->
    <!--                </div>-->
    <!--            </li>-->
    <!--        </ul>-->
    <!--        <ul class="navbar-nav ml-auto">-->
    <!--            <li>-->
    <!--                <div class="dropdown drp-user">-->
    <!--                    <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">-->
    <!--                        <i class="icon feather icon-settings"></i>-->
    <!--                    </a>-->
    <!--                    <div class="dropdown-menu dropdown-menu-right profile-notification">-->
    <!--                        <div class="pro-head">-->
    <!--                            <img src="<?=base_url()?>assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">-->
    <!--                            <span>Admin</span>-->
    <!--                            <a href="<?php echo base_url('login') ?>" class="dud-logout" title="Logout">-->
    <!--                                <i class="feather icon-log-out"></i>-->
    <!--                            </a>-->
    <!--                        </div>-->
                            <!-- <ul class="pro-body">
    <!--                            <li><a href="javascript:" class="dropdown-item"><i class="feather icon-settings"></i> Settings</a></li>-->
    <!--                        </ul> -->-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </li>-->
    <!--        </ul>-->
    <!--    </div>-->
    <!--</header>-->
=======
    <header class="navbar pcoded-header navbar-expand-lg navbar-light" style="padding: 0px">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="#" class="b-brand">
                   <div class="bg-info rounded">
                        <img src="<?php echo base_url()?>assets/images/DjLogo.png" height='40' width='40'>
                    </div>
                   <span class="b-title">Mega Sound</span>
               </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <!-- <li><a href="javascript:" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a></li>
                <li class="nav-item"> -->
                </li>
                <li class="nav-item">
                    <!-- <div class="form-group">
                    <div class="switch d-inline m-r-10">
                    <input type="checkbox" id="switch-1">
                    <label for="switch-1" class="cr"></label>
                    </div>
                    <label id="theme"></label>
                    </div> -->
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
               <!--  <li>
                    <div class="dropdown drp-user">
                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="<?=base_url()?>assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                                <span>Admin</span>
                                <a href="<?php echo base_url('login') ?>" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                             <ul class="pro-body">
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-settings"></i> Settings</a></li>
                           </ul>
                        </div>
                    </div>
                </li> -->
            </ul>
        </div>
    </header>
>>>>>>> 51c2a53ed369bb9a18f39c3eb745958e98fc213c
    <!-- [ Header ] end -->
                    <!-- Search Box
                     <div class="main-search">
                     <div class="input-group">
                            <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                            <a href="javascript:" class="input-group-append search-close">
                                <i class="feather icon-x input-group-text"></i>
                            </a>
                            <span class="input-group-append search-btn btn btn-primary">
                                <i class="feather icon-search input-group-text"></i>
                            </span>
                        </div>
                   </div> -->