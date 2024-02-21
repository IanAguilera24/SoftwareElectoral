<!-- get_casillas.php -->

<?php
include 'config.php';

// Verificar si se ha enviado la información del formulario
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  // Obtener la territorial seleccionada
  $territorial = $_GET["territorial"];

  // Consulta para obtener las casillas de la territorial seleccionada
  $sql = "SELECT codigo_casilla FROM Casilla WHERE nombre_territorial = '$territorial'";
  $result = $conn->query($sql);

  // Generar el formulario de votos
  if ($result->num_rows > 0) {
    echo "<h3>Votos por casilla:</h3>";
    while($row = $result->fetch_assoc()) {
      echo "<label for='votos_" . $row["codigo_casilla"] . "'>Casilla " . $row["codigo_casilla"] . ":</label>";
      echo "<input type='number' name='votos_" . $row["codigo_casilla"] . "' id='votos_" . $row["codigo_casilla"] . "'><br>";
    }
  } else {
    echo "No hay casillas registradas para esta territorial.";
  }
}
?>
