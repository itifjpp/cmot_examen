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
            <li><a href="#" class="">Medicos</a> </li>
            <li><a href="#" class="active">Tabalador Puntos</a> </li>
        </ul>
        <div class="row-fluid">
            <div class="col-md-8 col-md-offset-2">
                <div class="span12">
                    <div class="grid simple ">
                        <div class="grid-title">
                            <h4>Tabulador de puntos</h4>
                            <a href="" class="hidden">
                                <button class="btn btn-cons pull-right back-imss">Agregar</button>
                            </a>
                        </div>
                        <div class="grid-body ">
                            <table class="table table-hover table-condensed" id="example">
                                <thead>
                                    <tr>

                                        <th style="width:auto">Nombre</th>
                                        <th style="width: auto;" class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($Gestion as $g):?>
                                    <tr id="<?=$g['tabulador_id']?>">
                                        <td class="v-align-middle"><?=$g['tabulador_nombre']?> </td>
                                        <td class="text-center">
                                            <a href="<?=  base_url()?>admin/tabulador_config?t=<?=$g['tabulador_id']?>" >
                                                <i class="fa fa-pencil-square-o tip icono-acciones pointer" data-original-title="Configuración de Puntos"></i>
                                            </a>
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
</div>
<?=  Modules::run('config/get_footer_admin')?>
<script src="<?=  base_url()?>assets_dash/js/medicos.js" ></script>
<script>
$(document).ready(function(e){
    $('body .DTTT,#example_length,.dataTables_filter').hide();
})
</script>
