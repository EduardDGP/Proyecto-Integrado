<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Cambiar por tu servidor de base de datos
$username = "usuario"; // Cambiar por tu nombre de usuario de la base de datos
$password = "contraseña"; // Cambiar por tu contraseña de la base de datos
$database = "nombre_base_de_datos"; // Cambiar por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Insertar datos de ejemplo en la tabla de usuarios
$sql_insert = "INSERT INTO usuarios (nombre, apellidos, telefono, correo_electronico, username, contrasena)
                VALUES ('Juan', 'Pérez', '123456789', 'juan@example.com', 'juanperez', 'password123')";
if ($conn->query($sql_insert) === TRUE) {
    echo "Datos insertados correctamente en la tabla de usuarios.<br>";
} else {
    echo "Error al insertar datos: " . $conn->error . "<br>";
}

// Consultar datos de la tabla de usuarios
$sql_select = "SELECT * FROM usuarios";
$result = $conn->query($sql_select);

if ($result->num_rows > 0) {
    // Mostrar datos de usuarios
    echo "<h2>Usuarios:</h2>";
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nombre: " . $row["nombre"] . " " . $row["apellidos"] . " - Correo electrónico: " . $row["correo_electronico"] . "<br>";
    }
} else {
    echo "No se encontraron usuarios.<br>";
}

// Actualizar datos de ejemplo en la tabla de usuarios
$sql_update = "UPDATE usuarios SET telefono='987654321' WHERE id=1";
if ($conn->query($sql_update) === TRUE) {
    echo "Datos actualizados correctamente en la tabla de usuarios.<br>";
} else {
    echo "Error al actualizar datos: " . $conn->error . "<br>";
}

// Eliminar datos de ejemplo en la tabla de usuarios
$sql_delete = "DELETE FROM usuarios WHERE id=1";
if ($conn->query($sql_delete) === TRUE) {
    echo "Datos eliminados correctamente en la tabla de usuarios.<br>";
} else {
    echo "Error al eliminar datos: " . $conn->error . "<br>";
}

// Cerrar conexión
$conn->close();
?>
