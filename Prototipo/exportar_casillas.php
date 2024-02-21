<?php
// Incluir el archivo de configuración para la conexión a la base de datos
require_once 'config.php';

// Consulta SQL para obtener los datos de las casillas con los votos y la territorial correspondiente
$sql = "SELECT Casilla.codigo_casilla, Territorial.nombre AS nombre_territorial, Votos.NumeroVotos
        FROM Casilla
        INNER JOIN Territorial ON Casilla.nombre_territorial = Territorial.nombre
        LEFT JOIN Votos ON Casilla.codigo_casilla = Votos.codigo_casilla";

$result = $conn->query($sql);

// Nombre del archivo CSV y cabeceras
$filename = 'datos_votos_por_casilla.csv';
$header = "Código Casilla,Nombre Territorial,Número de Votos\n";

// Abrir el archivo CSV en modo escritura
$fp = fopen('php://output', 'w');

// Escribir las cabeceras en el archivo CSV
fprintf($fp, chr(0xEF).chr(0xBB).chr(0xBF)); // Codificación UTF-8 para Excel
fwrite($fp, $header);

// Escribir los datos de las casillas y votos en el archivo CSV
while ($row = $result->fetch_assoc()) {
    fputcsv($fp, $row);
}

// Cerrar el archivo CSV
fclose($fp);

// Descargar el archivo CSV
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $filename . '"');
exit();
?>
