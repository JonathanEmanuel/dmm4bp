<?php
    session_start();
    require_once('html/header.html');
    require_once('html/nav.html');
    require_once('conexion.php');


     $id_peli = $_GET['id_pelicula'];
     $contenido = $_POST['contenido'];
     $id_usuario = $_SESSION['id_usuario'];


   /*   $mensaje = 'Comentario Guardado';
     require_once('html/mensaje.html'); */
     


     // Guardar en la Base de datos
    $sql = "INSERT INTO Comentarios(contenido, id_peli, id_usuario)
            VALUES('$contenido', $id_peli, $id_usuario)";
    // Ejecuto la consulta
    mysqli_query($conexion, $sql);

    header('Location: detalles.php?id_pelicula='.$id_peli);
?>
<main>

</main>
<?php
    require_once('html/footer.html');

?>