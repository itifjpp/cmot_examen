
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
 
    <link href="<?=  base_url()?>assets/css/examen.css" rel="stylesheet">
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
                        <li style="float: right!important" class="">
                            <a href="#" style="font-size: 13px!important"><?=$info[0]['medico_nombre']?> <?=$info[0]['medico_apellidos']?><i class="fa fa-chevron-down"></i></a>

                            <ul class="sub-menu" >
                                <li><a href="<?=  base_url()?>config/CerrarSesion" style="font-size: 12px!important;line-height: 1.5">Cerrar Sesión</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main-wrapper back-fondo">
        <div class="main">
            <div class="container">
                <?php if(!empty($preg)){?>
                <div class="row ">
                    <div class="col-md-6 col-md-offset-3 text-center content-exam hide">
                        <h3>Caso Clínico: <?=$casoclinico[0]['casoclinico_nombre']?></h3>
                    </div>
                    <div class="col-sm-12 content-exam">
                        <div class="row">
                            <div class="start-exam">
                                    <h4 class="text-center ">Para iniciar el examen dar click en el numero de preguntas</h4><br><br><br>
                                    <center>
                                        <button class="btn btn-success btn-start-exam" type="button">Iniciar Evaluación</button><br><br><br><br><br><br><br>
                                    </center>
                            </div>
                            <div class="col-md-6 col-centered " style="float: none;margin: auto">
                                <input type="hidden" name="usuario_id" value="<?=  base64_decode($_GET['u'])?>">
                                <input type="hidden" name="usuario_rfc" value="<?=$info[0]['medico_rfc']?>">
                                <input type="hidden" name="casoclinico_id" value="<?=$_GET['cc']?>">
                                <?= $examen?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 content-exam hide">
                        <center>
                            <ul class="pagination">
                                <?php 
                                foreach ($preg as $preg){
                                    $i++; 
                                
                                ?>
                                <li><a href="#" class="pregunta_click check_pregunta_ok<?=$preg['pregunta_id']?> " data-pregunta="<?=$preg['pregunta_id']?>"><?=$i?></a></li>
                                <?php }?>
                                <li>
                                    <a href="#" class="pregunta_click tip" data-pregunta="btn01111"  data-original-title="Guardar Evaluación">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </li>
                            </ul>
                        </center>
                        <input type="hidden" value="<?=$i?>" name="total_preguntas">
                    </div>
                    <div class="col-md-8 col-md-offset-2 text-center ver-resultados hide">
                        <h4>Caso Clínico Evaluado Correctamente Click en le SIguiente Enlace para Volver A los Casos Clínicos</h4>
                        <center>
                            <a href="<?=  base_url()?>inicio/casosclinicos?u=<?=$_GET['u']?>&r=<?=$_GET['r']?>">
                                <button class="btn btn-success">Regresar</button>
                            </a>
                        </center>
                    </div>
                </div><!-- /.row -->
                <?php }else{?>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div style="margin-top: 60px;margin-bottom: 60px;color: #F35958!important">
                            <h2>Exámen de Evaluación NO Disponible</h2>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div><!-- /.container -->
        </div><!-- /.main -->
    </div><!-- /.main-wrapper -->
<?=  Modules::run('config/get_footer')?>
<script>
  $(document).ready(function(e){
//        window.onbeforeunload = function (e) {
//               var e = e || window.event;
//               if (e) {
//                 e.returnValue = 'SI CIERRE LA EL NAVEGADOR SE PERDERAN TODOS LOS DATOS, ¿DESEA CONTINUAR?';
//               }
//        }
        $('body .zoom_img_pregunta').elevateZoom({
            constrainType:"height", 
            constrainSize:274, 
            zoomType: "lens", 
            ontainLensZoom: true, 
            gallery:'gallery_01', 
            cursor: 'pointer', 
            galleryActiveClass: "active"});   
  })    
</script>
<script src="<?=  base_url()?>assets/js/inicio.js"></script>
<script src="<?=  base_url()?>assets/js/examen.js"></script>
<script src="<?=  base_url()?>assets/plugins/elevatezoom-master/jquery.elevatezoom.js"></script>
