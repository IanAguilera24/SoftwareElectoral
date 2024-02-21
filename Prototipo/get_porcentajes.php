<!-- get_porcentajes.php -->
<?php
include 'config.php'; // Incluir archivo de configuración para la conexión a la base de datos

// Consulta SQL para obtener el total de votos de todas las territoriales
$sql_total_votos = "SELECT SUM(NumeroVotos) AS total_votos FROM Votos";
$result_total_votos = $conn->query($sql_total_votos);
$row_total_votos = $result_total_votos->fetch_assoc();
$total_votos = $row_total_votos["total_votos"];

// Consulta SQL para obtener los porcentajes de votos de cada territorial
$sql_porcentajes = "SELECT nombre_territorial, SUM(NumeroVotos) AS total_territorial FROM Votos GROUP BY nombre_territorial";
$result_porcentajes = $conn->query($sql_porcentajes);

if ($result_porcentajes->num_rows > 0) {
  while ($row_porcentajes = $result_porcentajes->fetch_assoc()) {
    $nombre_territorial = $row_porcentajes["nombre_territorial"];
    $total_territorial = $row_porcentajes["total_territorial"];
    $porcentaje = ($total_territorial / $total_votos) * 100;
    $color_class = "w3-purple"; // Asignamos un color por defecto
    if ($porcentaje <= 20) {
        $color_class = "w3-purple";
    } elseif ($porcentaje <= 40) {
        $color_class = "w3-blue";
    } elseif ($porcentaje <= 60) {
        $color_class = "w3-yellow";
    } elseif ($porcentaje <= 80) {
        $color_class = "w3-green";
    } else {
        $color_class = "w3-blue";
    }
    echo "<p>$nombre_territorial: <span class='$color_class'></span></p>";
    echo "<div class='w3-light-grey' style='height: 30px;'>";
    echo "<div class='w3-container $color_class' style='width: $porcentaje%; height: 30px;'>$porcentaje%</div>";
    echo "</div>";
  }
} else {
  echo "No hay datos de votos disponibles.";
}

$conn->close(); // Cerrar la conexión a la base de datos
?>
