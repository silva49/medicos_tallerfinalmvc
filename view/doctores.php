<?php require_once 'header.php'; ?>



        <h1>Opcion  Medico</h1>
        <br>
        <form name="form1" method="POST" action="index.php?accion=guardarmedicos">
        <p>Numero Documento: <input type="tex" name="txtnumerodocumento"></p>
            <p>Nombre: <input type="tex" name="txtnombre"></p>
        <p> Tipo Documento:
        <select name="seldocumento">
                    <option value="">Selecione...</option>
                    <?php foreach($consulta as $datos): ?>

<option value="<?php echo $datos['idtipodoc']; ?>"><?php echo $datos['nombre']; ?></option>

<?php endforeach; ?>
                    
                </select>
           </p>
            <p><input type="submit" name="btnguardar" value="Guardar"></p>
           
                
        </form>

        <br>
        <h1>Medicos Registrados</h1>
        <table>
            <thead>
                <tr>
                    <th>Tipo Documento</th>
                    <th>Numero Documento</th>
                    <th>Nombre</th>
                    <th>Modificar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($consultamedicos as $dato):?>                
                <tr>
                    <td><?php echo $dato['tipodoc'];?></td>
                    <td><?php echo $dato['numerodocumento'];?></td>
                    <td><?php echo $dato['nombre'];?></td>
                    <td><a href="./?accion=modificardoc&id=<?php echo $dato['numerodocumento'];?>">Modificar</a></td>
                    
                </tr>
                <?php endforeach;?>
            </tbody>
           
        </table>

        <br>
        <br>
        <br>
        <a href="./">Volver</a>




 <?php require_once 'footer.php'; ?>