<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo.css')?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Vehiculos</title>
</head>
<body>
    <div class="contenedor">
    <h1 align="center">Vehiculos</h1>
    <a href="<?=base_url('ver_formulario_nuevo_vehiculo')?>">
        <span class="material-icons">person_add</span>
    </a>
    
    <?php
        
    ?>
    <table>
        <thead>
            <tr class="encabezado_tabla">
                <th>Código Vehículo</th>
                <th>Placa</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Fecha de Fabricación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                
                $no_fila=0;
                foreach($misVehiculos as $datos):
                    $no_fila=$no_fila+1; //$no_fila++;
                    if($no_fila%2==0){
                        echo "<tr class='fila_par'>";
                    }else{
                        echo "<tr class='fila_impar'>";
                    }
                ?>
            
                <td><?php echo $datos['cod_vehiculo']; ?></td>
                <td><?=$datos['placa']; ?></td>
                <td><?=$datos['marca']; ?></td>
                <td><?=$datos['modelo']; ?></td>
                <td><?=$datos['fecha_fabricacion']; ?></td>
                <td>
                    <a href="<?=base_url('frm_modificar_vehiculo/'.$datos['cod_vehiculo'])?>">
                        <span class="material-icons">edit</span>Actualizar
                    </a>
                     
                    <a href="<?=base_url('eliminar_vehiculo/'.$datos['cod_vehiculo'])?>">
                        <span class="material-icons">delete</span>Eliminar
                    </a> 
                </td>
            </tr>
                <?php
                endforeach;
                
            ?>
            
        </tbody>
    </table>

    </div>
</body>
</html>