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
    <form action="public/php/calcular.php" method="POST">
      <div class="form-group">
        <label for="txt_num1">Numero 1</label>
        <input type="number" class="form-control" id="txt_num1" placeholder="Ingrese numero 1" name="txt_num1" required>
      </div>
      <hr>
      <div class="form-group">
        <label for="txt_num2">Numero 2</label>
        <input type="number" class="form-control" id="txt_num2" placeholder="Ingrese numero 2" name="txt_num2" required>
      </div>
      <hr>
      <div class="form-check">
        <label class="form-check-label" for="exampleCheck1">Operaciones</label>
        <select class="form-select" id="txt_operaciones" name="txt_operaciones" required>
          <option value="" disabled selected>Seleccione su operacion</option>
          <option value="1">SUMA</option>
          <option value="2">RESTA</option>
          <option value="3">MULTIPLICACION</option>
          <option value="4">DIVISION</option>
        </select>
      </div>
      <hr>
      <button type="submit" class="btn btn-primary">Votar</button>
    </form>
  </div>
  <script src="./public/bootstrap-5.3.5-dist/js/bootstrap.bundle.js"></script>
</body>

</html>