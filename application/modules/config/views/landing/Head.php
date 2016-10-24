<?php if("https://".$_SERVER['HTTP_HOST']=='https://www.cmot.com.mx'){?>
<script>location.replace('https://cmot.org.mx/');</script>
 <?php }?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="Consejo Mexicano de  Ortopedia y Traumatología A.C." />
    <meta name="keywords" content="CMOT,cmot,Consejo Mexicano de  Ortopedia y Traumatología A.C.,Certificación">
    <title>Consejo Mexicano de  Ortopedia y Traumatología A.C.</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="<?=  base_url()?>assets/img/logo_head.png">
    <!--Estilos Generales--->
    <link href="<?=  base_url()?>assets/fonts/profession/style.css" rel="stylesheet" type="text/css">  
    <link href="<?=  base_url()?>assets/css/profession-blue-cyan.css" rel="stylesheet" type="text/css" id="style-primary">
    <link href="<?=  base_url()?>assets/libraries/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">   
    <link href="<?=  base_url()?>assets/rs-plugin/css/settings.css" rel="stylesheet"  media="screen" /> <!--rev slider-->
    <link href="<?=  base_url()?>assets/libraries/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <link href="<?=  base_url()?>assets/libraries/bootstrap-select2/select2.min.css" rel="stylesheet" type="text/css">
    <link href="<?=  base_url()?>assets_dash/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css" />
    <link href="<?=  base_url()?>assets/libraries/bootstrap-fileinput/css/fileinput.min.css" rel="stylesheet" type="text/css">
    <link href="<?=  base_url()?>assets/libraries/bootstrap-wysiwyg/bootstrap-wysiwyg.min.css" rel="stylesheet" type="text/css">
    <link href="<?=  base_url()?>assets_dash/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
    <link href="<?=  base_url()?>assets_dash/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="<?=  base_url()?>assets_dash/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
    <link href="<?=  base_url()?>assets_dash/plugins/footable/footable.core.css" rel="stylesheet" type="text/css"/>
    <link href="<?=  base_url()?>assets/css/pagination.css" rel="stylesheet" type="text/css"/>
    <link href="<?=  base_url()?>assets_dash/plugins/bootstrap-tag/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
    <!--Notificaciones-->
    <link href="<?=  base_url()?>assets_dash/plugins/jquery-notifications/css/messenger.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="<?=  base_url()?>assets_dash/plugins/jquery-notifications/css/messenger-theme-flat.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="<?=  base_url()?>assets_dash/plugins/jquery-notifications/css/location-sel.css" rel="stylesheet" type="text/css" media="screen"/>
    <!--html5imageupload--->
    <link href="<?=  base_url()?>assets_dash/plugins/html5imageupload/html5imageupload.css" rel="stylesheet" type="text/css"/>
    <link href="<?=  base_url()?>assets_dash/plugins/html5imageupload/demo.html5imageupload.css" rel="stylesheet" type="text/css"/>
    
    <!--showbizpro-->
    <link href="<?=  base_url()?>assets/libraries/carousel/css/owl.theme.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="<?=  base_url()?>assets/libraries/carousel/css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="<?=  base_url()?>assets/showbizpro/css/settings.css" rel="stylesheet" type="text/css" media="screen"/>
    <!--Bootstrap Toggle-->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <!--Layered Popups-->
    <link href="<?=  base_url()?>popups/css/style.css?ver=3.53" rel="stylesheet"> 
    <link href="<?=  base_url()?>popups/css/animate.min.css?ver=3.53" rel="stylesheet"> 
    <link href="<?=  base_url()?>popups/css/perfect-scrollbar-0.4.6.min.css?ver=3.53" rel="stylesheet">
    <!-- POWERTOUR -->
    
    <link rel="stylesheet" href="<?=  base_url()?>assets/libraries/powertour_v3.1.0/css/powertour/powertour.3.1.0.css"/> 
    <link rel="stylesheet" href="<?=  base_url()?>assets/libraries/powertour_v3.1.0/css/powertour/powertour-style-clean.css"/><!-- Styling CSS file -->
    <link rel="stylesheet" href="<?=  base_url()?>assets/libraries/powertour_v3.1.0/css/powertour/powertour-connectors.css"/> <!-- Extra styling elements CSS file -->
    <link rel="stylesheet" href="<?=  base_url()?>assets/libraries/powertour_v3.1.0/css/powertour/animate.min.css"/>          <!-- Animation core CSS file -->
    <link rel="stylesheet" href="<?=  base_url()?>assets/libraries/powertour_v3.1.0/css/powertour/powertour-mobile.css"/>     <!-- Mobile support help/example/demo -->
</head>
<body class="hero-content-dark footer-dark layout-boxed" style="background: white">
    <section class="page-loading " style="position: absolute;top: calc(50%);bottom: 0px;left: 0px;right: 0px">
            <center>
                <i class="fa fa-spinner fa-pulse fa-3x fa-fw margin-bottom"></i>
            </center>
    </section>
    <div class="page-wrapper page-load hide">
        <div class="header-wrapper page-load hide">
        <div class="header load-page-header" style="display: none">
            <div class="header-top " style="padding: 0px 0px;">
                <div class="container">
                    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".header-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div><!-- /.container -->
            </div><!-- /.header-top -->
            <div class="header-bottom menu-static" >
                <div class="container">
                    <ul class="header-nav nav nav-pills collapse pull-left" >
                        <li>
                            <img src="<?=  base_url()?>assets/img/logo_bajo.png" style="float: left;width:130px;margin-top: 0px;margin-right: 20px">
                    
                        </li>
                    </ul>
                    <ul class="header-nav nav nav-pills collapse pull-right" >
                        <li class="active">
                            <a href="<?=  base_url()?>" style="font-size: 13px!important">Inicio</a>
                        </li>
                        <li style="float: right!important">
                            <a href="#" style="font-size: 13px!important">Mi Perfil <i class="fa fa-chevron-down"></i></a>

                            <ul class="sub-menu" >
                                <li><a href="#" style="font-size: 12px!important;line-height: 1.5">Cerrar Sesión</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>