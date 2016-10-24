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
            <li><a href="#" class="">Configuración</a> </li>
            <li><a href="#" class="active">Cursos</a> </li>
        </ul>
        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple ">
                    <div class="grid-title">
                        <h4>Gestión de Cursos </h4>
                        <a href="<?=  base_url()?>admin/agregar_curso?a=add&c=0">
                            <button class="btn btn-cons pull-right back-imss">Agregar Curso</button>
                        </a>
                    </div>
                    <div class="grid-body ">
                        <table class="table table-hover table-condensed" id="example">
                            <thead>
                                <tr>
                                    <th style="width:auto">Curso</th>
                                    <th style="width:auto">Lugar</th>
                                    <th style="width:auto" >Fecha</th>
                                    <th style="width: auto;" class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Gestion as $g):?>
                                <tr id="<?=$g['curso_id']?>">
                                    <td class="v-align-middle"><?=$g['curso_nombre']?> </td>
                                    <td class="v-align-middle"><span class="muted"><?=$g['curso_lugar']?></span></td>
                                    <td><span class="muted"><?=$g['curso_fecha']?></span></td>
                                    <td class="text-center">

                                        <a href="<?=  base_url()?>admin/agregar_curso?a=edit&c=<?=$g['curso_id']?>" >
                                            <i class="fa fa-pencil tip icono-acciones" data-original-title="Editar Curso"></i>
                                        </a>&nbsp;
                                        <i class="fa fa-trash-o del-curso pointer tip icono-acciones" data-original-title="Eliminar Curso" data-id="<?=$g['curso_id']?>"></i>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?=  Modules::run('config/get_footer_admin')?>
<script src="<?=  base_url()?>assets_dash/js/cursos.js" ></script>
