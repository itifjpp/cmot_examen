<?=  Modules::run('config/get_head_admin')?>
<div class="page-content"> 
<div class="clearfix"></div>
    <div class="content page-loading">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <center>
                    <i class="fa fa-spinner fa-4x fa-spin"></i>
                </center>
            </div>
        </div>
    </div>
    <div class="content page-load hide"> 
        <ul class="breadcrumb">
            <li><p>Inicio</p></li>
            <li><a href="<?=  base_url()?>admin/medicos_tipo?t=c" >Medicos Certificados</a> </li>
            <li><a href="#" class="active">Detalles del médico</a> </li>
        </ul>
        <div class="row">
            <div class="col-md-12">
                <div class="grid simple">
                    <div class="grid-body no-border"> 
                            <div class="row">
                                <div class="col-md-12"><h5 class="semi-bold">Datos Personales</h5><br></div>
                                <div class="col-md-9">
                                    
                                    <div class="col-md-4">
                                        <div class="form-group" style="margin-top: -10px">
                                            <label class="form-label semi-bold">Médico Certificado</label>
                                            <h4 style="margin-top: -6px"><?=$medico[0]['medico_nombre']?> <?=$medico[0]['medico_apellidos']?></h4>
                                        </div>
                                        <div class="form-group" style="margin-top: -10px">
                                            <label class="form-label semi-bold">Fecha de nacimiento</label>
                                            <h4 style="margin-top: -6px"><?php if($medico[0]['medico_fecha_nac']!=''){echo $medico[0]['medico_fecha_nac'];}else{echo 'N/E';}?></h4>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group" style="margin-top: -10px">
                                            <label class="form-label semi-bold">Nacionalidad</label>
                                            <h4 style="margin-top: -6px"><?php if($medico[0]['medico_nacionalidad']!=''){echo $medico[0]['medico_nacionalidad'];}else{echo 'N/E';}?> </h4>
                                        </div>
                                        <div class="form-group" style="margin-top: -10px">
                                            <label class="form-label semi-bold">Curp</label>
                                            <h4 style="margin-top: -6px"><?php if($medico[0]['medico_curp']!=''){echo $medico[0]['medico_curp'];}else{echo 'N/E';}?></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group" style="margin-top: -10px">
                                            <label class="form-label semi-bold">Rfc</label>
                                            <h4 style="margin-top: -6px"><?=$medico[0]['medico_rfc']?> </h4>
                                        </div>
                                        <div class="form-group" style="margin-top: -10px">
                                            <label class="form-label semi-bold">Registro</label>
                                            <h4 style="margin-top: -6px"><?=$medico[0]['medico_registro']?> </h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <hr>
                                        <div class="col-md-12">
                                            <h5 class="semi-bold">Datos Profesionales</h5><br>
                                            <div class="form-group" style="margin-top: -10px">
                                                <label class="form-label semi-bold">Cédula Profesional:</label>
                                                <h4 style="margin-top: -6px"><?php if($medico[0]['medico_cedulap']!=''){echo $medico[0]['medico_cedulap'];}else{echo 'N/E';}?> </h4>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group" style="margin-top: -10px">
                                                <label class="form-label semi-bold">Fecha de Certificación:</label>
                                                <h4 style="margin-top: -6px"><?=$medico[0]['medico_ultima_evaluacion']?> </h4>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group" style="margin-top: -10px">
                                                <label class="form-label semi-bold">Vigencia de Certificación:</label>
                                                <h4 style="margin-top: -6px"><?=date('Y/m/d',  strtotime(str_replace('/', '/', $medico[0]['medico_ultima_evaluacion']).'+5 year'))?> </h4>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group" style="margin-top: -10px">
                                                <label class="form-label semi-bold">Status de Certificación:</label>
                                                <?php if($medico[0]['medico_status_vigencia']=='Vigente'){?>
                                                <span class="label label-success">Vigente</span>
                                                <?php }else{?>
                                                <span class="label label-important">NO Vigente</span>
                                                <?php }?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <hr>
                                        <div class="col-md-12">
                                            <h5 class="semi-bold">Datos de Contacto</h5><br>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group" style="margin-top: -10px">
                                                <label class="form-label semi-bold">Dirección:</label>
                                                <h4 style="margin-top: -6px"><?=$medico[0]['medico_direccion']?> </h4>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group" style="margin-top: -10px">
                                                <label class="form-label semi-bold">Email:</label>
                                                <h4 style="margin-top: -6px"><?=$medico[0]['medico_email']?> </h4>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group" style="margin-top: -10px">
                                                <label class="form-label semi-bold">Telefono Móvil:</label>
                                                <h4 style="margin-top: -6px"><?php if($medico[0]['medico_telefono']!=''){echo $medico[0]['medico_telefono'];}else{echo 'N/E';}?> </h4>
                                            </div>  
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group" style="margin-top: -10px">
                                                <label class="form-label semi-bold">Telefono de Casa:</label>
                                                <h4 style="margin-top: -6px"><?php if($medico[0]['medico_telefono_casa']!=''){echo $medico[0]['medico_telefono_casa'];}else{echo 'N/E';}?> </h4>
                                            </div>  
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group" style="margin-top: -10px">
                                                <label class="form-label semi-bold">Telefono de Consultorio:</label>
                                                <h4 style="margin-top: -6px"><?php if($medico[0]['medico_telefono_consultorio']!=''){echo $medico[0]['medico_telefono_consultorio'];}else{echo 'N/E';}?> </h4>
                                            </div>  
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <center>
                                        <?php 
                                        if(file_exists('assets/img/medicos/'.$medico[0]['medico_perfil'])){
                                            $img=  base_url().'assets/img/medicos/'.$medico[0]['medico_perfil'];
                                        }else{
                                            $img=  base_url().'assets/img/medicos/default.png';
                                        }
                                                
                                                
                                        ?>
                                        <img src="<?=$img?>" style="width: 100%"><br><br>
                                        <a href="<?=  base_url()?>medico/<?=$medico[0]['medico_url']?>" target="_blank">
                                            <button class="btn btn-primary btn-block"><i class="fa fa-user-md"></i> Ver Perfil Público</button>
                                        </a>
                                        <br><br>
                                        <a href="<?=  base_url()?>admin/renovar_certificacion?medico=<?=$medico[0]['medico_id']?>">
                                            <button class="btn btn-info btn-block"><i class="fa fa-user-md"></i> Renovar Certificación</button>
                                        </a>
                                        <br><br>
                                        <button class="btn btn-success btn-block btn-enviar-datos" data-email="<?=$medico[0]['medico_email']?>" data-rfc="<?=$medico[0]['medico_rfc']?>" data-medico="<?=$medico[0]['medico_id']?>" data-registro="<?=$medico[0]['medico_registro']?>">Enviar Datos de Acceso</button>
                                    </center>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                                <div class="col-md-12">
                                    <h5 class="semi-bold">Otros Datos de Interes</h5><br>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Idiomas:</label>
                                        <h4 style="margin-top: -6px"><?php if($medico[0]['medico_idiomas']!=''){echo $medico[0]['medico_idiomas'];}else{echo 'Español';}?> </h4>
                                    </div> 
                                    <div class="form-group text-justify" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Biografía:</label>
                                        <h4 style="margin-top: -6px"><?php if($medico[0]['medico_biografia']!=''){echo $medico[0]['medico_biografia'];}else{echo 'N/E';}?> </h4>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-top: 0px">
                                        <label class="form-label semi-bold">Envio de email de notificación de renovaciones de certificación</label>
                                        <h4>
                                            <?php if($medico[0]['medico_email_renovacion']==''){?>
                                            NO Configurado
                                            <?php }else{?>
                                            <?=$medico[0]['medico_email_renovacion']?>
                                            <?php } ?>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
</div>
<?=  Modules::run('config/get_footer_admin')?>
<script src="<?=  base_url()?>assets_dash/js/medicos.js" ></script>
