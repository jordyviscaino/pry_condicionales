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

        $hoy = new DateTime();
        
        $fecha_nacimiento = new DateTime($edad);
        
       $edad_actual = $fecha_nacimiento->diff($hoy)->y;

       //capturar el valor del candidato seleccionado y usar un switch para mostrar el nombre del candidato
       $nombres_candidato='';
        switch ($candidato) {
            case '1':
                $nombres_candidato = "LUISA GONZALES";
                break;
            case '2':
                $nombres_candidato = "ANDREA GONZALES";
                break;
            case '3':
                $nombres_candidato = "DANIEL NOBOA";
                break;
            case '4':
                $nombres_candidato = "LEONIDAS IZA";
                break;
            default:
                $candidato = "Candidato no seleccionado";
        }
    }
    ?>

    <div class="container py-5">
    <?php 
        if ($edad_actual >= 18){
    ?>
        <div class="alert alert-success" role="alert">
          <h4 class="alert-heading">Usted es mayor de edad</h4>
          <p></p>
          <p class="mb-0">Su voto es: <?php echo $nombres_candidato ?></p>
        </div>
     <?php
        } else {?>

        <div class="alert alert-danger" role="alert">
          <h4 class="alert-heading">Usted NO es mayor de edad</h4>
          <p></p>
          <p class="mb-0">Su edad es: <?php echo $edad_actual ?> años</p>
        </div>


        <?php } ?>
    </div>
    <script src="../bootstrap-5.3.5-dist/js/bootstrap.bundle.min.js"> </script>
</body>

</html>