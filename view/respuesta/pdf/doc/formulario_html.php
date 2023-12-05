<page backtop="10mm" backbottom="10mm" backleft="20mm" backright="20mm">
    <page_header>
        <table style="width: 100%; border: solid 1px black;">
            <tr>
                <td style="text-align: left;    width: 33%">Listado de Actividad</td>
                <td style="text-align: center;    width: 34%">DEV PHP 2023</td>
                <td style="text-align: right;    width: 33%"><?php echo date('d/m/Y'); ?></td>
            </tr>
        </table>
    </page_header>
    <page_footer>
        <table style="width: 100%; border: solid 1px black;">
            <tr>
                <td style="text-align: left;    width: 50%">Leng. Prog. III</td>
                <td style="text-align: right;    width: 50%">página [[page_cu]]/[[page_nb]]</td>
            </tr>
        </table>
    </page_footer>

    <br><br>
    
    <table style="width: 70%;border: solid 1px #5544DD; border-collapse: collapse" align="center">
        <thead>
            <tr>
                <th style="width: 5%; text-align: left; border: solid 1px #900C3F; background: #900C3F; color: #FFFFFF;"><span style="color: #FFFFFF;">NRO.</span></th>
                <th style="width: 25%; text-align: left; border: solid 1px #900C3F; background: #900C3F; color: #FFFFFF;"><span style="color: #FFFFFF;">OTROS DATOS</span></th>
                <th style="width: 30%; text-align: left; border: solid 1px #900C3F; background: #900C3F; color: #FFFFFF;"><span style="color: #FFFFFF;">MENSAJE</span></th>
                <th style="width: 8%; text-align: left; border: solid 1px #900C3F; background: #900C3F; color: #FFFFFF;"><span style="color: #FFFFFF;">FECHA</span></th>
                <th style="width: 30%; text-align: left; border: solid 1px #900C3F; background: #900C3F; color: #FFFFFF;"><span style="color: #FFFFFF;">CARRERAS</span></th>
                <th style="width: 30%; text-align: left; border: solid 1px #900C3F; background: #900C3F; color: #FFFFFF;"><span style="color: #FFFFFF;">SECCIONES</span></th>
                <th style="width: 30%; text-align: left; border: solid 1px #900C3F; background: #900C3F; color: #FFFFFF;"><span style="color: #FFFFFF;">TIPO DE CONSULTA</span></th>
                <th style="width: 30%; text-align: left; border: solid 1px #900C3F; background: #900C3F; color: #FFFFFF;"><span style="color: #FFFFFF;">USUARIO</span></th>
            </tr>
        </thead>
        <tbody>
                <?php
                foreach ($rows as $row) {
                ?>
                        <tr>
                            <td style="width: 10%; text-align: left; border: solid 1px #900C3F">
                                    <?=$row['id'] ?>
                            </td>
                            <td style="width: 45%; text-align: left; border: solid 1px #900C3F">
                                    <?=$row['otros_datos'] ?>
                            </td>
                            <td style="width: 45%; text-align: left; border: solid 1px #900C3F">
                                    <?=$row['mensaje'] ?>
                            </td>
                            <td style="width: 45%; text-align: left; border: solid 1px #900C3F">
                                <?=$row['fecha']?>
                            </td>
                            <td style="width: 45%; text-align: left; border: solid 1px #900C3F">
                                <?=$row['idcarreras']?>
                            </td>
                            <td style="width: 45%; text-align: left; border: solid 1px #900C3F">
                                <?=$row['id_secciones']?>
                            </td>
                            <td style="width: 45%; text-align: left; border: solid 1px #900C3F">
                                <?=$row['id_tipo']?>
                            </td>
                            <td style="width: 45%; text-align: left; border: solid 1px #900C3F">
                                <?=$row['id_user']?>
                            </td>
                        </tr>
                <?php
                }
                ?>
        </tbody>
        <!-- <tfoot>
            <tr>
                <th style="width: 30%; text-align: left; border: solid 1px #900C3F; background: #CCFFCC">Fin del reporte</th>
                <th style="width: 30%; text-align: left; border: solid 1px #900C3F; background: #CCFFCC">Gracias!</th>
            </tr>
        </tfoot> -->
    </table>   
</page>
