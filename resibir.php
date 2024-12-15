<?php
session_start();

// Conexión a la base de datos
$servername = "localhost"; // Cambia esto si tu servidor es diferente
$username = "root"; // Cambia esto por tu usuario de base de datos
$password = ""; // Cambia esto por tu contraseña de base de datos
$dbname = "login_register_db"; // Cambia esto por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si se han enviado datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['_replyto']);
   
    // Insertar datos en la tabla contacto
    $sql = "INSERT INTO resibir (email) VALUES ('$email')";

    if ($conn->query($sql) === TRUE) {
        echo '
        <script>
        alert("mensaje enviado correctamente");
        window.location = "index.php";
    </script> 
    ';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Cerrar conexión
$conn->close();
?>