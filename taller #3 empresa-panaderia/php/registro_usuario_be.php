<?php

  include 'conexion_be.php';

  //verificacion de datos
  if ($_SEVER["REQUEST_METHOD"] = "POST"){
    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contransena'];

//validar campos no vacios
if (empty($nombre_completo) || empty($correo) || empty($usuario) || empty($contrasena)) {
    echo '
    <script>
        alert("Por favor, complete todos los campos obligatorios.");
        window.location = "../register.php"; // Redirigir a la página de inicio
    </script>
';
exit();
}
    //encriptamiento de contraseña
    $contrasena = hash('sha512', $contrasena);

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
                VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";

    //verificar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
           <script>
               alert("este correo ya se encuentra registrado, intenta con uno diferente");
               window.location = "../register.php";
           </script>
        ';
        exit();

    }

    //verificar que el usuario no se repita en la base de datos
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
           <script>
               alert("este usuario ya se encuentra registrado, intenta con uno diferente");
               window.location = "../register.php";
           </script>
        ';
        exit();

    }

    


    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("se juisioso y entrega todo");
                window.location = "../register.php";
            </script>
        ';
    }else{
        echo'
            <script>
              alert("porque no te unes");
              window.location = "../register.php";
            </script>
        ';
        
    }

    mysqli_close($conexion);


}




?>