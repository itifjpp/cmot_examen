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
            <li><a href="#" class="active">Delegados y comisionados</a></li>
        </ul>
        <div class="row-fluid">
            <div class="span12 table-data">
                <div class="grid simple ">
                    <div class="grid-title">
                        <h4>Gestión de Delegados y comisionados</h4>
                        <a href="<?=  base_url()?>admin/agregar_delegados_comisionados?a=add&dc=0">
                            <button class="btn btn-cons pull-right back-imss">Agregar</button>
                        </a>
                    </div>
                    <div class="grid-body ">
                        <table class="table table-hover table-condensed " id="example">
                            <thead>
                                <tr>
                                    <th style="width:40%">Delegación</th>
                                    <th style="width:auto">Responsable</th>
                                    
                                    <th style="width:auto">Estado</th> 
                                    <th style="width: auto;">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Gestion as $g):?>
                                <tr id="<?=$g['del_id']?>">
                                    <td class="v-align-middle"><?=$g['del_delegacion']?> </td>
                                    <td class="v-align-middle"><?=$g['del_nombre']?> </td>
                                    <td class="v-align-middle"><?=$g['estado_nombre']?></td>
                                    <td class="v-align-middle">
                                        <a href="<?=  base_url()?>admin/agregar_delegados_comisionados?a=edit&dc=<?=$g['del_id']?>">
                                            <i class="fa fa-pencil icono-acciones"></i>
                                        </a>
                                        &nbsp;
                                        <i class="fa fa-trash-o delete-del-com icono-acciones pointer" data-id="<?=$g['del_id']?>"></i>
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
<script src="<?=  base_url()?>assets_dash/js/delegados_comisionados.js" ></script>
