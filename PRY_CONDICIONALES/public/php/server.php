<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Edad PHP</title>
    <link rel="stylesheet" href="../bootstrap-5.3.5-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos_v.css">
</head>

<body>
    <div class="">
        <h1 class="text-center py-4">Resultados</h1>
        <div class="mb-4">
            <?php

            $prod1 = intval($_GET['pr1']);
            $prod2 = intval($_GET['pr2']);
            $total = $prod1 + $prod2;
            $total2 = $prod1 - $prod2;
            $total3 = $prod1 * $prod2;
            $total4 = $prod1 / $prod2;
            ?>
            
            <div class="container">

                <?php
                echo "<p style='color:black; font-size:30px; font-weight:bold; text-align:center; margin-top:20px;'>SUMA<p>
                    <p style='color:info; font-size:20px; font-weight:bold; text-align:center; margin-top:20px;'>$total<p>
                    <hr class='my-4'>
                    <p style='color:black; font-size:30px; font-weight:bold; text-align:center; margin-top:20px;'>RESTA<p>
                    <p style='color:info; font-size:20px; font-weight:bold; text-align:center; margin-top:20px;'>$total2<p>
                    <hr class='my-4'>
                    <p style='color:black; font-size:30px; font-weight:bold; text-align:center; margin-top:20px;'>MULTIPLICACION<p>
                    <p style='color:info; font-size:20px; font-weight:bold; text-align:center; margin-top:20px;'>$total3<p>
                    <hr class='my-4'>
                    <p style='color:black; font-size:30px; font-weight:bold; text-align:center; margin-top:20px;'>DIVISION<p>
                    <p style='color: info; font-size:20px; font-weight:bold; text-align:center; margin-top:20px;'>$total4<p>
                    ";
                ?>
            <a href="/PRY_NEGOCIO/index.html" class="btn btn-primary btn-lg">Volver</a>

    </div>


</body>

</html>