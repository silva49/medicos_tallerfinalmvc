<?php require_once 'header.php'; ?>



        <h1>Consultar Pacientes</h1>
        <br>
       
                
        </form>
        <br>
        <table>
            <thead>
                <tr>
                    <th>Tipo Documento</th>
                    <th>Numero Documento</th>
                    <th>Nombre</th>
                    <th>Genero</th>
                    <th>Edad</th>
                    <th>Modificar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($consultapacientes as $dato):?>                
                <tr>
                    <td><?php echo $dato['tipodoc'];?></td>
                    <td><?php echo $dato['numerodocumento'];?></td>
                    <td><?php echo $dato['nombre'] . " " . $dato['apellido'];?></td>
                    <td><?php echo $dato['tipogenero'];?></td>
                    <td><?php echo $dato['edad'];?></td>
                   

                    <td><a href="./?accion=modificarp&id=<?php echo $dato['numerodocumento'];?>">Modificar</a></td>
                    
                </tr>
                <?php endforeach;?>
            </tbody>
            
        </table>

        <br>
        <br>
        <br>
        <a href="./?accion=paciente">Regresar a Paciente</a>
        <br>
        <a href="./">Menu Principal</a>





 <?php require_once 'footer.php'; ?>
 