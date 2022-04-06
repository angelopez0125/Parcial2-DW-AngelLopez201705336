<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo_form.css')?>">
    <title>Actualizar Vehiculos</title>
</head>
<body>
    <h1 align="center">Actualizar Vehiculos</h1>

    <form action="<?=base_url('modificarVehiculo')?>" method="get">
        <label for="txtCodigo">Código:</label>
        <input type="text" name="txtCodigo" value="<?=$vehiculo['cod_vehiculo']?>" readonly>
        <br>
        <label for="txtPlaca">No. de Placa:</label>
        <input type="text" name="txtPlaca" value="<?=$vehiculo['placa']?>">
        <br>
        <label for="txtMarca">Marca:</label>
        <input type="text" name="txtMarca" value="<?=$vehiculo['marca']?>">
        <br>
        <label for="txtModelo">Modelo:</label>
        <input type="text" name="txtModelo" value="<?=$vehiculo['modelo']?>">
        <br>
        <label for="txtFecha">Fecha de Fabricación:</label>
        <input type="text" name="txtFecha" value="<?=$vehiculo['fecha_fabricacion']?>">
        <br>
        <input type="submit" name="btnEnviar" value="Guardar datos">

    </form>
</body>
</html>