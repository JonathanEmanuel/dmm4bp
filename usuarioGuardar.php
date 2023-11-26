<?php
    require_once('conexion.php');
    require_once('html/header.html');
    require_once('html/nav.html');
    require_once('conexion.php');

    // Recibo las variables y luego ejecuto la Consulta SQL
    if( isset($_POST['nombre'] ) && isset($_POST['email'] ) && isset($_POST['clave1'] )  && isset($_POST['clave2'] )  ) {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $clave1 = $_POST['clave1'];
        $clave2 = $_POST['clave2'];
        $id_rol = 2;
        
        if( $clave1 == $clave2){

            $sql = "INSERT INTO usuarios(nombre, password, email, id_rol)
            VALUES('$nombre', '$clave1', '$email', $id_rol)";
    
    
            // Ejecuto la consulta
            mysqli_query($conexion, $sql);

            $mensaje = 'Felicitaciones! ya sos miembro de nuestra comunidad';
            require_once('html/mensaje.html');
        } else {
            $mensaje = 'Las claves no son iguales';
            require_once('html/mensaje.html');
        }

    } else {
        header('Location: index.php');
    }



?>
<main>

</main>


<?php
    require_once('html/footer.html');

?>