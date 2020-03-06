<?php require_once 'header.php'; ?>



        <h1>Opcion Pacientes</h1>
        <br>
        <form name="form1" method="POST" action="index.php?accion=guardarpacientes">
            <p>Nombre: <input type="tex" name="txtnombre"></p>
            <p>Apellido: <input type="tex" name="txtapellido"></p>
            <p> Tipo Documento:
                <select name="seldocumento">
                    <option value="">Selecione...</option>
                    <?php foreach($consulta as $datos): ?>

<option value="<?php echo $datos['idtipodoc']; ?>"><?php echo $datos['nombre']; ?></option>

<?php endforeach; ?>
                    
                </select>
           </p>
            <p>Numero Documento: <input type="text" name="txtnumerodocumento"></p>
            <p> Genero:
                <select name="selgenero">
                    <option value="">Selecione...</option>
                    <?php foreach($consultagenero as $datos): ?>

<option value="<?php echo $datos['idgenero']; ?>"><?php echo $datos['nombre']; ?></option>

<?php endforeach; ?>
                    
                </select>
           </p>
            <p>Edad: <input type="text" name="txtedad"></p>
            <p><input type="submit" name="btnguardarpacientes" value="Guardar"></p>
                
        </form>
        <br>
      
            

        <br>
        <br>
        <br>
        <tbody>
                
                   

                    
                    <td><a href="./?accion=consultap">Consulta Pacientes</a></td>
                </tr>
                
            </tbody>
        <br>
        <a href="./">Volver</a>




 <?php require_once 'footer.php'; ?>