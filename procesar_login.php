<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Consulta para verificar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE nombre_usuario = '$usuario' AND contrasena = '$contrasena'";
    $resultado = $conn->query($sql);

    if ($resultado) {
        // Verificar si se encontró algún usuario con las credenciales proporcionadas
        if ($resultado->num_rows == 1) {
            // Usuario autenticado correctamente
            // Iniciar sesión o establecer alguna cookie de sesión.
            // Redirigir al usuario a la página de inicio o algún otro lugar apropiado.
            header("Location: Inicio.php");
            exit();
        } else {
            // Usuario o contraseña incorrectos, mostrar un mensaje de error.
            echo "Usuario o contraseña incorrectos. Por favor, intenta de nuevo.";
        }
    } else {
        // Error en la consulta SQL
        echo "Error al ejecutar la consulta: " . $conn->error;
    }
}
?>
