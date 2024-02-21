<?php
include 'config.php'; // Incluir archivo de configuración para la conexión a la base de datos

// Consulta SQL para obtener los datos del histograma (porcentaje de votantes de cada territorial)
$sql_histogram_data = "SELECT nombre_territorial, SUM(NumeroVotos) AS num_votantes FROM Votos GROUP BY nombre_territorial";
$result_histogram_data = $conn->query($sql_histogram_data);

$data = array(
    'territoriales' => array(), // Array para almacenar los nombres de las territoriales
    'votantes' => array() // Array para almacenar el número de votantes de cada territorial
);

if ($result_histogram_data->num_rows > 0) {
    while ($row = $result_histogram_data->fetch_assoc()) {
        $data['territoriales'][] = $row["nombre_territorial"]; // Agregar nombre de territorial al array de etiquetas
        $data['votantes'][] = (int) $row["num_votantes"]; // Agregar número de votantes al array de valores
    }
}

$conn->close(); // Cerrar la conexión a la base de datos

// Convertir el array PHP a formato JSON y enviarlo como respuesta
echo json_encode($data);
?>
