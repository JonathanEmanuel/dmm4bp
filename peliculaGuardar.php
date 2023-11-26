<?php
    session_start();
    // Recibo los datos del formulario
    require_once('conexion.php');
    require_once('html/header.html');
    require_once('html/nav.html');

    // Recibo las variables y luego ejecuto la Consulta SQL
    if( isset($_POST['nombre'] ) && isset($_POST['detalle'] )  ) {

        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];

        $foto_tmp = $_FILES['foto']['tmp_name'];
        $foto_nombre = $_FILES['foto']['name'];
        $foto_url = "images/$foto_nombre";

        move_uploaded_file($foto_tmp, $foto_url);


        $poster_tmp = $_FILES['poster']['tmp_name'];
        $poster_nombre = $_FILES['poster']['name'];
        $poster_url = "images/$poster_nombre";
        move_uploaded_file($poster_tmp, $poster_url);


        if(  $_SESSION['id_rol'] == 1){

            $sql = "INSERT INTO pelis(nombre, foto, poster, detalle)
            VALUES('$nombre', '$foto_url', '$poster_url', '$detalle')";
    
    
            // Ejecuto la consulta
            mysqli_query($conexion, $sql);

            $mensaje = 'Peli Publicada';
            require_once('html/mensaje.html');
        } else {
            $mensaje = 'No tenes permisos para publciar Pelis :(';
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