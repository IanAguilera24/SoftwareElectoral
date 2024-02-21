<!-- get_total_votos.php -->
<?php
include 'config.php'; // Incluir archivo de configuración para la conexión a la base de datos

// Consulta SQL para obtener la suma de todos los votos de todas las casillas
$sql = "SELECT SUM(NumeroVotos) AS total_votos FROM Votos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  echo $row["total_votos"];
} else {
  echo "0"; // En caso de que no haya registros de votos
}

$conn->close(); // Cerrar la conexión a la base de datos
?>
