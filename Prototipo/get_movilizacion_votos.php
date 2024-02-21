<!-- get_movilizacion_votos.php -->
<?php
include 'config.php'; // Incluir archivo de configuración para la conexión a la base de datos

// Consulta SQL para obtener los porcentajes de votantes de cada territorial
$sql_porcentajes_votantes = "SELECT nombre_territorial, SUM(NumeroVotos) AS num_votantes, (SUM(NumeroVotos) / (SELECT SUM(NumeroVotos) FROM Votos)) * 100 AS porcentaje_votantes FROM Votos GROUP BY nombre_territorial";
$result_porcentajes_votantes = $conn->query($sql_porcentajes_votantes);

if ($result_porcentajes_votantes->num_rows > 0) {
    while ($row = $result_porcentajes_votantes->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nombre_territorial"] . "</td>";
        echo "<td>" . $row["num_votantes"] . "</td>";
        echo "<td>" . $row["porcentaje_votantes"] . "%</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
$conn->close(); // Cerrar la conexión a la base de datos
?>
