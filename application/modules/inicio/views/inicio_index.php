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
    <link rel="stylesheet" href="<?=  base_url()?>assets/libraries/powertour_v3.1.0/css/powertour/powertour.3.1.0.css"/> 
    <link rel="stylesheet" href="<?=  base_url()?>assets/libraries/powertour_v3.1.0/css/powertour/powertour-style-clean.css"/><!-- Styling CSS file -->
    <link rel="stylesheet" href="<?=  base_url()?>assets/libraries/powertour_v3.1.0/css/powertour/powertour-connectors.css"/> <!-- Extra styling elements CSS file -->
    <link rel="stylesheet" href="<?=  base_url()?>assets/libraries/powertour_v3.1.0/css/powertour/animate.min.css"/>          <!-- Animation core CSS file -->
    <link rel="stylesheet" href="<?=  base_url()?>assets/libraries/powertour_v3.1.0/css/powertour/powertour-mobile.css"/>     <!-- Mobile support help/example/demo -->
</head>
<body class="hero-content-dark footer-dark " >
    <section class="page-loading " style="position: absolute;top: calc(50%);bottom: 0px;left: 0px;right: 0px">
            <center>
                <i class="fa fa-spinner fa-pulse fa-3x fa-fw margin-bottom"></i>
            </center>
    </section>
    <div class="page-wrapper page-load hide">
        <div class="header-wrapper page-load hide"></div><!-- /.header-wrapper-->
        <div class="main-wrapper back-fondo">
            <div class="main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <center>
                                <br>
                            <img src="<?=  base_url()?>assets/img/logo_head.png">
                            </center>
                            <br><br>
                            <div class="company-card" style="background: white" >
                                <div class="company-card-image">  
                                    <span style="width: 100%;;padding: 8px;font-size: 15px;color: white!important;background: #02344A" class="estado-delegado">
                                        Iniciar sesión
                                    </span>
                                    <form class="form-login"><br><br>
                                        <div class="form-group text-left input-icon">
                                            <i class="fa fa-user"></i>
                                            <label for="form-login-username">Usuario</label>
                                            <input type="text" class="form-control" required="" name="txtuser">
                                        </div><!-- /.form-group -->
                                        <div class="form-group text-left input-icon">
                                            <i class="fa fa-unlock-alt"></i>
                                            <label for="form-login-password">Contraseña</label>
                                            <input type="password" class="form-control" required="" name="txtpass">
                                        </div><!-- /.form-group -->
                                        <div class="checkbox text-left">
                                            <label style="font-size: 10px!important"><input type="checkbox" checked="" > Recordarme</label>
                                            <a href="<?=  base_url()?>login/reset_pass" class="no-decoration pull-right hide" style="font-size: 10px!important;color: black;margin-top: 5px">¿Olvide mi contraseña?</a>
                                        </div><!-- /.checkbox -->
                                        <div class="form-group" style="margin-bottom: -10px">
                                            <br>
                                            <input type="hidden" name="usuario_ultimo_acceso" class="form-control">
                                            <input type="hidden" name="usuario_ultimo_acceso_hora" class="form-control">
                                            <button type="submit" class="btn btn-secondary btn-block" style="background: #02344A"> <i class="fa fa-spinner fa-spin hidden"></i> Acceder</button>
                                        </div><!-- /.form-group -->

                                    </form>
                                </div><!-- /.company-card-image -->
                            </div><!-- /.company-card -->
                        </div><!-- /.col-sm-4 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->

            </div><!-- /.main -->
        </div><!-- /.main-wrapper -->
        <div class="footer-wrapper " style="position: fixed;bottom: 60px;left: 0px;right: 0px">

        </div><!-- /.footer-wrapper -->
    </div><!-- /.page-wrapper -->   
    <script>var base_url="<?=  base_url()?>";var rol_id='<?=$_SESSION['idRol']?>';</script>
    <script src="<?=  base_url()?>assets/js/jquery.js" type="text/javascript" ></script>
 
    <script src="<?=  base_url()?>assets/js/jquery.ezmark.js" type="text/javascript"></script>
    <script src='https://www.google.com/jsapi' type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.4.3/underscore-min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/0.9.10/backbone-min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.min.js" type="text/javascript" ></script>
    
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="<?=  base_url()?>assets_dash/plugins/html5imageupload/html5imageupload.js" type="text/javascript" type="text/javascript"></script>
    <script src="<?=  base_url()?>assets/libraries/bootstrap-sass/javascripts/bootstrap/collapse.js" type="text/javascript"></script>
    <script src="<?=  base_url()?>assets/libraries/bootstrap-sass/javascripts/bootstrap/dropdown.js" type="text/javascript"></script>
    <script src="<?=  base_url()?>assets/libraries/bootstrap-sass/javascripts/bootstrap/tab.js" type="text/javascript"></script>
    <script src="<?=  base_url()?>assets/libraries/bootstrap-sass/javascripts/bootstrap/transition.js" type="text/javascript"></script>
    <script src="<?=  base_url()?>assets/libraries/bootstrap-fileinput/js/fileinput.js" type="text/javascript"></script>
    <script src="<?=  base_url()?>assets/libraries/bootstrap-fileinput/js/fileinput_locale_es.js" type="text/javascript"></script>
    <script src="<?=  base_url()?>assets_dash/plugins/bootstrap-tag/bootstrap-tagsinput.min.js" type="text/javascript"></script>
    <script src="<?=  base_url()?>assets/libraries/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="<?=  base_url()?>assets/libraries/bootstrap-select2/select2.min.js" type="text/javascript"></script>
    <script src="<?=  base_url()?>assets/libraries/bootstrap-wysiwyg/bootstrap-wysiwyg.min.js" type="text/javascript"></script>
    <script src="<?=  base_url()?>assets/libraries/cycle2/jquery.cycle2.min.js" type="text/javascript"></script>
    <script src="<?=  base_url()?>assets/libraries/cycle2/jquery.cycle2.carousel.min.js" type="text/javascript"></script>
    <script src="<?=  base_url()?>assets/libraries/countup/countup.min.js" type="text/javascript"></script>
    <script src="<?=  base_url()?>assets_dash/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="<?=  base_url()?>assets/libraries/md5.js" type="text/javascript"></script>
    <script src="<?=  base_url()?>assets/plugins/footable/dist/footable.all.min.js" type="text/javascript"></script>
    <script src="<?=  base_url()?>assets_dash/plugins/jquery-notifications/js/messenger.min.js" type="text/javascript"></script>
    <script src="<?=  base_url()?>assets_dash/plugins/jquery-notifications/js/messenger-theme-future.js" type="text/javascript"></script>	
    <script src="<?=  base_url()?>assets_dash/plugins/jquery-notifications/js/demo/location-sel.js" type="text/javascript" ></script>
    <script src="<?=  base_url()?>assets_dash/plugins/jquery-notifications/js/demo/theme-sel.js" type="text/javascript" ></script>
    <script src="<?=  base_url()?>assets_dash/plugins/jquery-notifications/js/demo/demo.js" type="text/javascript" ></script> 
    <script src="<?=  base_url()?>assets_dash/plugins/jquery-datatable/js/jquery.dataTables.min.js" type="text/javascript" ></script>
    <script src="<?=  base_url()?>assets_dash/plugins/jquery-datatable/extra/js/dataTables.tableTools.min.js" type="text/javascript" ></script>
    <script src="<?=  base_url()?>assets_dash/plugins/datatables-responsive/js/datatables.responsive.js" type="text/javascript" ></script>
    <script src="<?=  base_url()?>assets_dash/plugins/datatables-responsive/js/lodash.min.js" type="text/javascript" ></script>
    <script src="<?=  base_url()?>assets/js/jquery.numeric.js" ></script>
    <script src="<?=  base_url()?>assets_dash/plugins/jquery-inputmask/jquery.inputmask.min.js" type="text/javascript"></script>
    <script src="<?=  base_url()?>assets_dash/plugins/jquery-autonumeric/autoNumeric.js" type="text/javascript"></script>
    <script src="<?=  base_url()?>assets_dash/plugins/footable/footable.all.min.js" type="text/javascript"></script>
    <script src="<?=  base_url()?>assets/js/bootbox.min.js" type="text/javascript"></script> 
    <script src="<?=  base_url()?>assets/js/bootbox.min.js" type="text/javascript"></script> 
    <script src="<?=  base_url()?>assets/js/inicio_acciones.js" type="text/javascript" ></script>
    <script src="<?=  base_url()?>assets_dash/js/datatables_1.js" type="text/javascript"></script>
    <script src="<?=  base_url()?>assets/js/profession.js" type="text/javascript" ></script>
    <script src="<?=  base_url()?>assets/js/mensajes.js" type="text/javascript" ></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-80988033-1', 'auto');
      ga('send', 'pageview');

    </script>
   
</body>
</html>

<script src="<?=  base_url()?>assets/js/inicio.js"></script>
