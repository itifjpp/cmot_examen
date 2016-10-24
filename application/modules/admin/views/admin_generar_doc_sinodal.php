<?php ob_start(); ?>
<page style="">
    <page_header>

    </page_header>
    <page_footer>

        <div style="text-align: center;">
            Página [[page_cu]]/[[page_nb]]<br>
            <!--CONTRATO DE ADQUISICION PARA PERSONA FISICA MAYOR OK-->
        </div>
    </page_footer>
    <img src="<?=  base_url()?>assets/img/cmot_back.png" style="position: absolute;width: 100%;z-index: -10000;margin-top: -20px;height: 100%">
    <div style="margin-top: 140px;font-size: 20px;font-weight: 200;width: 100%;margin-right: 20px;position: absolute">
        <div style="text-align:center;margin-right: 30px;line-height: 1.5;font-size: 15px;font-family: arial, sans-serif;color: #3870C1">
            Asignación de médico Sinodal al médico en proceso
        </div>
        <div style="top: 80px;font-size: 15px;margin-left: 30px;">
            <b style="">Médico en proceso</b><br><br>
        </div>
        <div style="margin-left: 30px;font-size: 13px;font-weight: 100;line-height: 1.5;text-align: justify">
            <b style="">I. DATOS GENERALES:</b><br><br>
            <div style="position: absolute;left: 20px;top: 90px;">
                <img src="<?=  base_url()?>assets/img/medicos/<?=$medico[0]['medico_perfil']?>" style="width: 128px;height: 128px;">
            </div>
            <div style="position: absolute;left: 200px;top: 80px">
                <b>NOMBRE COMPLETO:</b> <?=$medico[0]['medico_nombre']?> <?=$medico[0]['medico_apellidos']?><br>
                <b>EDAD:</b> <?=$medico[0]['medico_edad']?> AÑOS. <b>SEXO:</b> <?=$medico[0]['medico_genero']?>. <b>NACIONALIDAD: </b><?=$medico[0]['medico_nacionalidad']?>. <b>ESTADO CIVIL:</b> <?=$medico[0]['medico_estado_civil']?><br>
                <b>CURP: </b><?=$medico[0]['medico_curp']?>. <b>RFC:</b> <?=$medico[0]['medico_rfc']?>. <b>EMAIL:</b> <?=$medico[0]['medico_email']?> <br>
                <b>ESTADO:</b> <?=$medico[0]['estado_nombre']?>. <b>TEL. CEL.: </b><?=$medico[0]['medico_telefono']?>. <b>TEL. LOCAL:</b> 31334234234. <b>DGP:</b><?=$medico[0]['medico_dgp']?><br>
                <b>REG. SSA:</b> <?=$medico[0]['medico_reg_ssa']?>. <b>CED. ESPECIALIDAD: </b> <?=$medico[0]['medico_cedulae']?><br>
                <b>DOMICILIO FISCAL: </b><?=$medico[0]['medico_df_direccion']?>. <b>CP:</b> <?=$medico[0]['medico_df_cp']?><br>
                <b>IDIOMAS: </b> <?=$medico[0]['medico_idiomas']?><br><br>
            </div>
            <b style="position: absolute;top: 300px;left: 20px">
                &nbsp;&nbsp;Médico Sinodal<br>
                I.DATOS GENERALES:</b><br><br>
            <div style="position: absolute;left: 20px;top: 350px;">
                <img src="<?=  base_url()?>assets/img/medicos/<?=$sinodal[0]['medico_perfil']?>" style="width: 128px;height: 128px;">
            </div>
            <div style="position: absolute;left: 200px;top: 350px">
                <b>NOMBRE COMPLETO:</b> <?=$sinodal[0]['medico_nombre']?> <?=$sinodal[0]['medico_apellidos']?><br>
                <b>EDAD:</b> <?=$sinodal[0]['medico_edad']?> AÑOS. <b>SEXO:</b> <?=$sinodal[0]['medico_genero']?>. <b>NACIONALIDAD: </b><?=$sinodal[0]['medico_nacionalidad']?>. <b>ESTADO CIVIL:</b> <?=$medico[0]['medico_estado_civil']?><br>
                <b>CURP: </b><?=$sinodal[0]['medico_curp']?>. <b>RFC:</b> <?=$sinodal[0]['medico_rfc']?>. <b>EMAIL:</b> <?=$sinodal[0]['medico_email']?> <br>
                <b>ESTADO:</b> <?=$sinodal[0]['estado_nombre']?>. <b>TEL. CEL.: </b><?=$sinodal[0]['medico_telefono']?>. <b>TEL. LOCAL:</b> 31334234234. <b>DGP:</b><?=$medico[0]['medico_dgp']?><br>
                <b>REG. SSA:</b> <?=$medico[0]['medico_reg_ssa']?>. <b>CED. ESPECIALIDAD: </b> <?=$medico[0]['medico_cedulae']?><br>
                <b>DOMICILIO FISCAL: </b><?=$medico[0]['medico_df_direccion']?>. <b>CP:</b> <?=$medico[0]['medico_df_cp']?><br>
                <b>IDIOMAS: </b> <?=$medico[0]['medico_idiomas']?><br><br> 
            </div>
        </div>
    </div>

</page>
<?php 
    $html=  ob_get_clean();
    $pdf=new HTML2PDF('P','A4','fr','UTF-8');
    $pdf->writeHTML($html);
    $pdf->pdf->IncludeJS('print(TRUE)');
    $pdf->Output('Asignación médico sinodal.pdf');
?>