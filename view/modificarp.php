<?php require_once 'header.php'; ?>

        <h1>Modificar Paciente</h1>
        <br>
        <?php foreach($consulta as $datoProducto): ?>
        <form name="form1" method="POST" action="./?accion=guardarCambiosPaciente&id=<?php echo $datoProducto['numerodocumento']?>">
        <p>Numero Documento: <input type="text" name="txtnumerodocumento" value="<?php echo $datoProducto['numerodocumento'] ?>" readonly></p>
            <p>Nombre : <input type="text" name="txtnombre" value="<?php echo $datoProducto['nombre'] ?>"></p>

        <p>Apellido: <input type="text" name="txtapellido" value="<?php echo $datoProducto['apellido']?>"></p>

        <p> Tipo Documento:
                <select name="seldocumento">
                    <?php foreach($consultadocumentos as $datos): ?>
                        <option value="<?php echo $datos['idtipodoc']; ?>"><?php echo $datos['nombre']; ?></option>
                    <?php endforeach; ?>
                </select>
           </p>

        <p> Genero:
                <select name="selgenero">
                    <?php foreach($consultagenero as $datos): ?>
                        <option value="<?php echo $datos['idgenero']; ?>"><?php echo $datos['nombre']; ?></option>
                    <?php endforeach; ?>       
                </select>
           </p>

        <p>Edad: <input type="text" name="txtedad" value="<?php echo $datoProducto['edad']?>"></p>

        <p><input type="submit" name="btnguardarproducto" value="Guardar Paciente"></p>
        </form>
        <?php endforeach; ?>

        <br>
        <br>
        <br>
        <a href="./?accion=consultap">Volver</a>
<?php require_once 'footer.php'; ?>