<?php require_once 'view/header.php'; ?>
<h2>Opcion historial Medico</h2>
<form name="form1" method="POST" action="./?accion=guardarHistorial">
<p>Paciente: 
        <select name="selpaciente">
            <option value="">Seleccione...</option>
            <?php foreach($consultaPacientes as $datos): ?>
                <option value="<?php echo $datos['numerodocumento']; ?>"><?php echo $datos['nombre'] . " " . $datos['apellido']; ?></option>
            <?php endforeach; ?>
        </select>
</p>
<p>Doctor: 
        <select name="seldoctor">
            <option value="">Seleccione...</option>
            <?php foreach($consultaDoctores as $datosDoc): ?>
                <option value="<?php echo $datosDoc['numerodocumento']; ?>"><?php echo $datosDoc['nombre']; ?></option>
            <?php endforeach; ?>
        </select>
</p>
<p>Observaciones: <input type="text" style="width : 300px; heigth : 500px" name="txtobservaciones"></p>
<p>Fecha: <input type="text" name="txtfecha"> (AAAA-MM-DD).</p>
<p><input type="submit" name="btnguardarhistorial" value="Guardar Historial"></p>
<h3>Historial guardado</h3>
<table>
    <thead>
        <tr>
            <th>Tipo documento</th>
            <th>Número documento</th>
            <th>Nombre completo</th>
        </tr>
    </thead>
   
</table>
<br>
<a href="./">Volver</a>
</form>
<?php require_once 'view/footer.php'; ?>