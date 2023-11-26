<?php
    session_start();
    // Este archivo recibe las variables y consulta en la base de datos si el email y el password son iguales
    require_once('conexion.php');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id_usuario, email, id_rol
            FROM usuarios
            WHERE email = '$email' AND password = '$password'";
    // Ejecuto la consulta
    $resultado = mysqli_query($conexion, $sql);
    $array = mysqli_fetch_assoc( $resultado);

    if( $array ){
        $id_usuario = $array['id_usuario'];
        $email = $array['email'];
        $id_rol = $array['id_rol'];
        echo("<h2> Bienvenido $email </h2>");
        echo("<h2> Rol $id_rol </h2>");
        echo("<h2> Id $id_usuario </h2>");
        // Seteo los datos de la sesión
        $_SESSION['email'] = $email;
        $_SESSION['id_usuario'] = $id_usuario;
        $_SESSION['id_rol'] = $id_rol;
        // 
        header('Location: index.php');
        
    } else {
        echo("<h2> Usuario o Contraseña invalidos </h2>");
    }
    
?>