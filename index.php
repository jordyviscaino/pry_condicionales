<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Condicionales</title>
    <link rel="stylesheet" href="./public/bootstrap-5.3.5-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/estilos_v.css">
</head>

<body>
    <h1 class="text-center py-4">Condicionales - Votacion</h1>

    <div class="container">
        <form action="public/php/votar.php" method="POST">

  <div class="form-group">
    <label for="exampleInputEmail1">Cedula</label>
    <input type="text" class="form-control" id="txt_cedula" placeholder="Ingrese su cedula" name="txt_cedula" required>
  </div>
  <hr>
  <div class="form-group">
    <label for="exampleInputPassword1">Edad</label>
    <input type="date" class="form-control" id="txt_edad" placeholder="Edad" name="txt_edad" required>
  </div>
   <hr>
  <div class="form-check">
    <label class="form-check-label" for="exampleCheck1">Candidato</label>
    <select class="form-select" id="txt_candidato" name="txt_candidato" required>
      <option value="" disabled selected>Seleccione un candidato</option>
      <option value="1">LUISA GONZALES</option>
      <option value="2">ANDREA GONZALES</option>
      <option value="3">DANIEL NOBOA </option>
      <option value="3">LEONIDAS IZA</option>
    </select>   
  </div>
  <hr>
  <button type="submit" class="btn btn-primary">Votar</button>
</form>
    </div>
    <script src="./public/bootstrap-5.3.5-dist/js/bootstrap.bundle.js"></script>
</body>

</html>