<!-- procesar_registro.php -->

<?php
include 'config.php';

// Verificar si se ha enviado la información del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener la territorial seleccionada
  $territorial = $_POST["territorial"];

  // Consulta para obtener las casillas de la territorial seleccionada
  $sql = "SELECT codigo_casilla FROM Casilla WHERE nombre_territorial = '$territorial'";
  $result = $conn->query($sql);

  // Actualizar los votos de cada casilla
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $codigo_casilla = $row["codigo_casilla"];
      $numero_votos = $_POST["votos_" . $codigo_casilla]; // Obtener el número de votos de la casilla desde el formulario
      $sql_update = "UPDATE Votos SET NumeroVotos = $numero_votos WHERE codigo_casilla = $codigo_casilla";
      $conn->query($sql_update);
    }
  }

  // Redireccionar a la página de inicio
  //header("Location: index.php");
  echo '<script>window.close();</script>';
  exit();
}
?>
