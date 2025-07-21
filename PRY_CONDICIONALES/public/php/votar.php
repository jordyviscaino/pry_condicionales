<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema votacionP</title>
    <link rel="stylesheet" href="../bootstrap-5.3.5-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos_v.css">
</head>

<body>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $cedula = $_POST['txt_cedula'];
        $edad = $_POST['txt_edad'];
        $candidato = $_POST['txt_candidato'];


        echo "Datos recibidos.";
    }
    ?>
    <script src="../bootstrap-5.3.5-dist/js/bootstrap.bundle.min.js"> </script>
</body>

</html>