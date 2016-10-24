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
            <li><a href="#" class="active">Detalles del proceso de renovación</a> </li>
        </ul>
        <div class="row">
            <div class="col-md-12">
                <div class="grid simple">
                    <div class="grid-body no-border"> <br>
                        <form id="registro-evento">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><strong>Detalles del médico</strong></h4><br>
                                </div>
                                <div class="col-md-4">
                                    
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Médico</label>
                                        <h4 style="margin-top: -6px"><?=$medico[0]['medico_nombre']?> <?=$medico[0]['medico_apellidos']?></h4>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Rfc</label>
                                        <h4 style="margin-top: -6px"><?=$medico[0]['medico_rfc']?> </h4>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Renovación</label>
                                        <h4 style="margin-top: -6px">En proceso</h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Nacionalidad</label>
                                        <h4 style="margin-top: -6px">N/E </h4>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Curp</label>
                                        <h4 style="margin-top: -6px">N/E </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Última Certificación</label>
                                        <h4 style="margin-top: -6px"><?=$medico[0]['medico_ultima_evaluacion']?> </h4>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Status de vigencia</label>
                                        <h4 style="margin-top: -6px"><?=$medico[0]['medico_status_vigencia']?> </h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <center>
                                    <img src="<?=  base_url()?>assets/img/medicos/<?=$medico[0]['medico_perfil']?>">
                                    </center>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><strong>Detalles de la renovación</strong></h4>
                                    <br>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Fecha de inicio</label>
                                        <h4 style="margin-top: -6px"><?=$historial_renovaciones[0]['renovacion_c_fecha_i']?> </h4>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Fecha de finalización</label>
                                        <h4 style="margin-top: -6px">No disponible </h4>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Status</label>
                                        <h4 style="margin-top: -6px"><?=$historial_renovaciones[0]['renovacion_c_status']?> </h4>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Total de puntos</label>
                                        <h4 style="margin-top: -6px">
                                        <?php 
                                            $total=$cmot_ejerce_especialidad + $cmot_actividades_docentes + $cmot_puestos_sr +
                                            $cmot_puestos + $cmot_publicaciones + $cmot_labor_asistencial + $cmot_reactivos_participacion +
                                            $cmot_asistencia_congresos + $cmot_asociaciones_cientificas;
                                            echo $total.' Puntos';
                                        ?>                                          
                                        </h4>
                                    </div>
                                    
                                </div>
                                <div class="col-md-12">
                                    <center>
                                        
                                        <button type="button" class="btn btn-secondary  btn-finalizar-prc back-imss" data-puntos="<?=$total?>" data-id="<?=$historial_renovaciones[0]['renovacion_c_id']?>" data-medico="<?=$_GET['m']?>" style="margin-top: 5px;font-weight: 100">Finalizar proceso de certificación</button>
                                    </center>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          </div>
    </div>
</div>
<?=  Modules::run('config/get_footer_admin')?>
<script src="<?=  base_url()?>assets_dash/js/medicos.js" ></script>
