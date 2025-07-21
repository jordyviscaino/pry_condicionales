<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema calculos</title>
    <link rel="stylesheet" href="../bootstrap-5.3.5-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos_v.css">
</head>

<body>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numero1 = intval($_POST['txt_num1']);
        $numero2 = intval($_POST['txt_num2']);
        $operadores = $_POST['txt_operaciones'];
        $resultado = 0;
        $nombres_operacion = '';
        switch ($operadores) {
            case '1':
                $resultado = $numero1 + $numero2;
                $nombres_operacion = "SUMA";
                break;
            case '2':
                $resultado = $numero1 - $numero2;
                $nombres_operacion = "RESTA";
                break;
            case '3':
                $resultado = $numero1 * $numero2;
                $nombres_operacion = "MULTIPLICACION";
                break;
            case '4':
                if ($numero2 != 0) {
                    $resultado = $numero1 / $numero2;
                    $nombres_operacion = "DIVISION";
                } else {
                    $resultado = "Error: División por cero";
                    $nombres_operacion = "DIVISION";
                }
                break;
            default:
                $nombres_operacion = "Operacion no seleccionada";
        }
    }
    ?>

    <div class="container py-5">

        <h2 class="text-center">CALCULOS</h2>
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">El resultado de la <?php echo $nombres_operacion ?> entre <?php echo $numero1 ?> y <?php echo $numero2 ?></h4>

            <p> es </p>
            <p class="mb-0 text-black text-center"> <?php echo $resultado ?></p>
        </div>

    </div>
    <script src="../bootstrap-5.3.5-dist/js/bootstrap.bundle.min.js"> </script>
</body>

</html>