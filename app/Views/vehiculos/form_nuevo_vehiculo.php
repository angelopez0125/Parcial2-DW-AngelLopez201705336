<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo_form.css')?>">
    <title>Nuevo Vehiculo</title>
</head>
<body>
    <h1 align="center">Nuevo Vehiculo</h1>
    <form action="<?=base_url('guardarVehiculo')?>" method="get">
        <label for="txtCodigo">Código:</label>
        <input type="text" name="txtCodigo" placeholder="Ingrese Código">
        <br>
        <label for="txtPlaca">Placa:</label>
        <input type="text" name="txtPlaca" placeholder="Ingrese No. de Placa">
        <br>
        <label for="txtMarca">Marca:</label>
        <input type="text" name="txtMarca" placeholder="Ingrese Marca">
        <br>
        <label for="txtModelo">Modelo:</label>
        <input type="text" name="txtModelo" placeholder="Ingrese el Modelo">
        <br>
        <label for="txtFecha">Fecha de Fabricación:</label>
        <input type="text" name="txtFecha" placeholder="Ingrese Fecha de Fabricación">
        <br>
        <input type="submit" name="btnEnviar" value="Guardar datos">

    </form>
</body>
</html>