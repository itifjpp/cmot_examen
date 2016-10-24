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
            <li><a href="<?=  base_url()?>admin/medicos_tipo?t=p" >Medicos en proceso de certificación</a> </li>
            <li><a href="#" class="active">Detalles del médico</a> </li>
        </ul>
        <div class="row">
            <div class="col-md-12">
                <div class="grid simple">
                    <div class="grid-body no-border"> <br>
                        <form id="registro-evento">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Médico</label>
                                        <h4 style="margin-top: -6px"><?=$medico[0]['medico_nombre']?> <?=$medico[0]['medico_apellidos']?></h4>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Fecha de nacimiento</label>
                                        <h4 style="margin-top: -6px"><?=$medico[0]['medico_fecha_nac']?> </h4>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Rfc</label>
                                        <h4 style="margin-top: -6px"><?=$medico[0]['medico_rfc']?> </h4>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Médicos Certificados</label>
                                        <h4 style="margin-top: -6px">
                                            <?php foreach ($medicos_certificados as $value) {
                                                echo $value['medico_titulo'].' '.$value['medico_nombre'].' '.$value['medico_apellidos'];
                                            }?>
                                        </h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Nacionalidad</label>
                                        <h4 style="margin-top: -6px"><?=$medico[0]['medico_nacionalidad']?> </h4>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Curp</label>
                                        <h4 style="margin-top: -6px"><?=$medico[0]['medico_curp']?> </h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Sexo</label>
                                        <h4 style="margin-top: -6px"><?=$medico[0]['medico_genero']?> </h4>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Telefono movil</label>
                                        <h4 style="margin-top: -6px"><?=$medico[0]['medico_telefono']?> </h4>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Estado donde se presentara el examen</label>
                                        <h4 style="margin-top: -6px"><?=$estado_examen[0]['estado_nombre']?> </h4>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <h4 class="semi-bold">Domicilio Particular</h4>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Dirección</label>
                                        <h4 style="margin-top: -6px"><?=$medico[0]['medico_dp_direccion']?> </h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Estado</label>
                                        <h4 style="margin-top: -6px"><?=$medico[0]['medico_dp_estado']?> </h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Codigo postal</label>
                                        <h4 style="margin-top: -6px"><?=$medico[0]['medico_dp_cp']?> </h4>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <h4 class="semi-bold">Domicilio Fiscal</h4>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Dirección</label>
                                        <h4 style="margin-top: -6px"><?=$medico[0]['medico_df_direccion']?> </h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Estado</label>
                                        <h4 style="margin-top: -6px"><?=$medico[0]['medico_df_estado']?> </h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Codigo postal</label>
                                        <h4 style="margin-top: -6px"><?=$medico[0]['medico_df_cp']?> </h4>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <h4 class="semi-bold">Datos profesionales</h4>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Cédula Profesional</label>
                                        <h4 style="margin-top: -6px"><?=$medico[0]['medico_cedulap']?> </h4>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Cédula Especialidad</label>
                                        <h4 style="margin-top: -6px"><?=$medico[0]['medico_cedulae']?> </h4>
                                    </div>
                                </div>
                            </div>
                            <h4 class="semi-bold">Información curricular</h4>
                            <br>
                            <?php if($curriculum[0]['curriculum_nombre']!=''){?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Nombre</label>
                                        <h4 style="margin-top: -6px"><?=$curriculum[0]['curriculum_nombre']?> </h4>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Domicilio de consultorio (en caso de tenerlo)</label>
                                        <h4 style="margin-top: -6px"><?=$curriculum[0]['curriculum_domicilio']?> </h4>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Universidad en la que realizó la Carrera de Médico Cirujano y fecha en que se tituló:</label>
                                        <h4 style="margin-top: -6px"><?=$curriculum[0]['curriculum_universidad']?> </h4>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Dirección</label>
                                        <h4 style="margin-top: -6px"><?=$curriculum[0]['curriculum_direccion']?> </h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Correo electrónico</label>
                                        <h4 style="margin-top: -6px"><?=$curriculum[0]['curriculum_email']?> </h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Tel. y Lada</label>
                                        <h4 style="margin-top: -6px"><?=$curriculum[0]['curriculum_tel_lada']?> </h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Tel. Móvil</label>
                                        <h4 style="margin-top: -6px"><?=$curriculum[0]['curriculum_telefono']?> </h4>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Fecha de inicio y terminación de Residencia y Cursos Universitarios, especificando si han sido relacionados con la Ortopedia, la Traumatología o con ambas áreas:</label>
                                        <h4 style="margin-top: -6px"><?=$curriculum[0]['curriculum_descripcion']?> </h4>
                                    </div>
                                </div>
                            </div>
                            <?php } else{?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Información incompleta</label>
                                        
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                            <br>
                            <h4 class="semi-bold">Hospital de residencia</h4>
                            <br>
                            <?php if(!empty($residencia)){?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Estado donde realizo la residencia</label>
                                        <h4 style="margin-top: -6px"><?=$residencia[0]['estado_nombre']?> </h4>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Período</label>
                                        <h4 style="margin-top: -6px"><?=$residencia[0]['residencia_periodo']?> </h4>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Hospital en el que realizó la Residencia</label>
                                        <h4 style="margin-top: -6px"><?=$residencia[0]['hospital_nombre']?>, <?=$residencia[0]['hospital_lugar']?> </h4>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Dirección</label>
                                        <h4 style="margin-top: -6px"><?=$residencia[0]['residencia_direccion']?> </h4>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Teléfono con clave lada</label>
                                        <h4 style="margin-top: -6px"><?=$residencia[0]['residencia_telefono']?> </h4>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Nombre del Profesor Titular</label>
                                        <h4 style="margin-top: -6px"><?=$residencia[0]['residencia_profesor']?></h4>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Nombre del Jefe de Enseñanza</label>
                                        <h4 style="margin-top: -6px"><?=$residencia[0]['residencia_jefe']?></h4>
                                    </div>
                                </div>
                            </div>
                            <?php }else{?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label semi-bold">Información incompleta</label>
                                        
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </form>
                    </div>
                </div>
            </div>
          </div>
    </div>
</div>
<?=  Modules::run('config/get_footer_admin')?>
<script src="<?=  base_url()?>assets_dash/js/eventos.js" ></script>
