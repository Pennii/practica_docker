<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Pagina de practica de docker</h1>
    <?php
    try {
        $conexion = new PDO('mysql:host=mysql_serverr;dbname=PRACTICA', 'root', 'clave');
    } catch (\Throwable $th) {
        echo $th->getMessage();
    }

    $usuario = $conexion->query("select * from ejemplo");

    var_dump($usuario->fetch(PDO::FETCH_ASSOC)); ?>
</body>

</html>
