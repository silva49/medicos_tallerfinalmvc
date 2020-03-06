<?php require_once 'header.php'; ?>

        <h1>Modificar Medico</h1>
        <br>
        <?php foreach($consulta as $datoProducto): ?>
        <form name="form1" method="POST" action="./?accion=guardarcambiosmedico&id=<?php echo $datoProducto['numerodocumento']?>">
        <p>Numero Documento: <input type="text" name="txtnumerodocumento" value="<?php echo $datoProducto['numerodocumento'] ?>" readonly></p>
            <p>Nombre : <input type="text" name="txtnombre" value="<?php echo $datoProducto['nombre'] ?>"></p>
        
        <p><input type="submit" name="btnguardar" value="Guardar Cambio"></p>
        </form>
        <?php endforeach; ?>

        <br>
        <br>
        <br>
        <a href="./?accion=doctores">Volver</a>
<?php require_once 'footer.php'; ?>