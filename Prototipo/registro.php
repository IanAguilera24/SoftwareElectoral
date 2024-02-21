<!-- registro.php -->

<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Registro de Votos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="text-white" style="background-color: #333;">

<div class="container">
  <div class="row">
    <div class="col-12 d-flex justify-content-center">
      <h2>Registro de Votos</h2>
    </div>
    <div class="col-12">
    <form id="registroForm" action="procesar_registro.php" method="post">
      <label for="territorial">Territorial:</label>
      <select class="form-select" name="territorial" id="territorial">
        <?php
        // Consulta para obtener las territoriales de la base de datos
        $sql = "SELECT nombre FROM Territorial";
        $result = $conn->query($sql);

        // Mostrar las opciones en el menú desplegable
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<option value='" . $row["nombre"] . "'>" . $row["nombre"] . "</option>";
          }
        } else {
          echo "<option value=''>No hay territoriales registradas</option>";
        }
        ?>
      </select>
      <br><br>

      <!-- Espacio para el formulario de votos -->
      <div id="form-votos"></div>

      <input class="btn text-white" style="background-color:#574AE2;" type="submit" value="Continuar">
   
    </div>
  </div>
</div>

<script>
// Función para cargar el formulario de votos cuando se selecciona una territorial
document.getElementById('territorial').addEventListener('change', function() {
  var territorial = this.value;
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('form-votos').innerHTML = this.responseText;
    }
  };
  xhr.open('GET', 'get_casillas.php?territorial=' + territorial, true);
  xhr.send();
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
