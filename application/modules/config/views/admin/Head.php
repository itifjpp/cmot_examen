<?php error_reporting(E_ERROR); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Consejo Mexicano de  Ortopedia y Traumatología A.C.</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="Concanaco Servytur " />
        <meta content="" name="bienTICS" />
        <link href="<?=  base_url()?>assets_dash/plugins/bootstrap-tag/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
        <link href="<?=  base_url()?>assets_dash/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css"/>
        <link href="<?=  base_url()?>assets_dash/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css"/>
        <link href="<?=  base_url()?>assets_dash/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css" />
        <link href="<?=  base_url()?>assets_dash/plugins/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
        <link href="<?=  base_url()?>assets_dash/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" type="text/css" />
        <link href="<?=  base_url()?>assets_dash/plugins/boostrap-clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?=  base_url()?>assets_dash/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?=  base_url()?>assets_dash/plugins/jquery-notifications/css/messenger.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?=  base_url()?>assets_dash/plugins/jquery-notifications/css/messenger-theme-flat.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?=  base_url()?>assets_dash/plugins/jquery-notifications/css/location-sel.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?=  base_url()?>assets_dash/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?=  base_url()?>assets_dash/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
        <link href="<?=  base_url()?>assets/libraries/bootstrap-fileinput/css/fileinput.min.css" rel="stylesheet" type="text/css">
        <link href="<?=  base_url()?>assets_dash/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?=  base_url()?>assets_dash/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?=  base_url()?>assets_dash/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?=  base_url()?>assets_dash/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css"/>
        <link href="<?=  base_url()?>assets_dash/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?=  base_url()?>assets_dash/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?=  base_url()?>assets_dash/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="<?=  base_url()?>assets_dash/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?=  base_url()?>assets_dash/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
        <link href="<?=  base_url()?>assets_dash/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
        <link href="<?=  base_url()?>assets_dash/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?=  base_url()?>assets_dash/css/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="<?=  base_url()?>assets_dash/plugins/footable/footable.core.css" rel="stylesheet" type="text/css"/>
        <link href="<?=  base_url()?>assets/css/pagination.css" rel="stylesheet" type="text/css"/>
        <link href="<?=  base_url()?>assets_dash/plugins/html5imageupload/html5imageupload.css" rel="stylesheet" type="text/css"/>
        <link href="<?=  base_url()?>assets_dash/plugins/html5imageupload/demo.html5imageupload.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" type="image/x-icon" href="<?=  base_url()?>assets/img/logo_head.png">
    </head>
    <body class="">
        <div class="header navbar navbar-inverse "> 
            <div class="navbar-inner">
                <div class="header-seperation" style="background: #02344A"> 
                    <ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">	
                         <li class="dropdown"> 
                             <a id="main-menu-toggle" href="#main-menu"  class="" >
                                 <div class="iconset top-menu-toggle-white"></div> 
                             </a> 
                         </li>		 
                    </ul>
                    <center>
                    <a href="<?=  base_url()?>admin/">
                        <h4 class="semi-bold text-white" style="margin-top: 10px;font-size: 12px">Consejo Mexicano de  Ortopedia y Traumatología A.C.</h4>
                    </a>
                    </center>
                    <ul class="nav pull-right notifcation-center">	
                        <li class="dropdown" id="portrait-chat-toggler" style="display:none"> 
                            <a href="#sidr" class="chat-menu-toggle"> 
                                <div class="iconset top-chat-white "></div> 
                            </a>
                        </li>        
                    </ul>
                </div>
                <div class="header-quick-nav" > 
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="pull-left">
                        <ul class="nav quick-section">
                            <li class="quicklinks"> 
                                <a href="#" class="" id="layout-condensed-toggle" >
                                    <div class="iconset top-menu-toggle-dark"></div>
                                </a> 
                            </li>
                        </ul>
                        <ul class="nav quick-section">
                            <li class="quicklinks"> 
                                <a class="time" style="color: black">
                                    <b class="hora"></b>    <b class="pointer-time"> : </b> 
                                    <b class="minuto"></b>  <b class="pointer-time"> : </b>
                                    <b class="segundo"></b> 
                                </a>
                            </li>
                            <li class="quicklinks"> <span class="h-seperate"></span></li>
                            <li class="quicklinks"> 
                                <a class="fecha" style="color: black;font-weight: 600"></a> 
                            </li>
                        </ul>
                    </div>
                    <div class="pull-right"> 
                        <div class="chat-toggler">	
                            <a href="#" class="dropdown-toggle"  data-placement="bottom"  data-content='' data-toggle="dropdown" data-original-title="Notifications">
                                <div class="user-details"> 
                                        <div class="username">
                                                Bienvenido <span class="bold">Administrador</span>									
                                        </div>						
                                </div> 
                                &nbsp;&nbsp;
                            </a>	
                            <div class="profile-pic"> 
                                <img src="<?=  base_url()?>assets/img/perfiles/default.png"  width="35" height="35" /> 
                            </div>       			
                        </div>
                        <ul class="nav quick-section ">
                            <li class="quicklinks"> 
                                <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">						
                                        <div class="iconset top-settings-dark "></div> 	
                                </a>
                                <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">               
                                    <li>
                                        <a href="<?=  base_url()?>config/CerrarSesion">
                                            <i class="fa fa-power-off"></i>&nbsp;&nbsp;Cerrar Sesión
                                        </a>
                                    </li>
                                </ul>
                            </li> 
                            <li class="quicklinks"> <span class="h-seperate"></span></li> 
                        </ul>
                    </div>
                </div> 
            </div>
        </div>
        <div class="page-container row-fluid" >
            <div class="page-sidebar" id="main-menu"> 
                <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper" style="background: #02344A"> 
                    <div class="user-info-wrapper profile-wrapper">
                        <center>
                            <div class="profile-pic " style="width: 100%">
                                <img src="<?=  base_url()?>assets_dash/img/logo_bajo.png" style="width: 100%;margin-top: 30px">
                            </div>
                        </center>
                    </div>
                    <br><br>
                    <ul>	
                        <li class="start active "> 
                            <a href="<?=  base_url()?>admin"> 
                                <i class="fa fa-home"></i> 
                                <span class="title">Inicio</span> 
                                <span class="selected"></span> 
                            </a> 
                        </li>
                        <li class=""> <a href="javascript:;"> 
                                <i class="fa fa-pencil-square-o fa-2x color-white"></i> 
                                <span class="title color-white">Examen</span> <span class="arrow "></span> </a>
                            <ul class="sub-menu">
                                <li> 
                                    <a href="<?=  base_url()?>admin/casosclinicos"> 
                                        <i class="fa fa-pencil-square-o color-white"></i>
                                        <span class="title color-white">Casos Clínicos</span> 
                                    </a> 
                                </li>
                                <li> 
                                    <a href="<?=  base_url()?>admin/resultados"> 
                                        <i class="fa fa-check-square-o color-white"></i>
                                        <span class="title color-white">Resultados</span> 
                                    </a> 
                                </li>
                            </ul>
                        </li>

                    </ul>
                    <br><br>
                    <div class="footer-widget" style="">
                        <div class="progress transparent progress-small no-radius no-margin">
                            <div data-percentage="100" class=" animate-progress-bar" >

                            </div>
                        </div>
                        <div class="pull-right">
                            <div class="details-status">
                                <span data-animation-duration="560" data-value="" class="animate-number" style="text-align: center;width: 100%"></span>&nbsp;&nbsp;&nbsp;Sitio desarrollado por <b style="color: white">bienTICS</b>&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
  