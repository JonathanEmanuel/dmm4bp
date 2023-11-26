<?php
    require_once('conexion.php');
    require_once('html/header.html');
    require_once('html/nav.html');


    if( ! isset( $_GET['id_pelicula']) ) {
        header('Location: index.php');
    }

    // Leo la variable de la URL
    $id_peli = $_GET['id_pelicula'];

    // Escribo la consulta
    $sql = "SELECT id_peli, nombre, foto, poster, detalle
            FROM pelis
            WHERE id_peli = $id_peli";
    // Ejecuto la consulta
    $resultado = mysqli_query($conexion, $sql);
    $array = mysqli_fetch_assoc( $resultado);
    $nombre = $array['nombre'];
    $detalle = $array['detalle'];
    $poster = $array['poster'];

    // Traigo de la base los comentarios
    $sqlComentarios = "SELECT id_comentario, contenido, c.id_usuario, u.nombre
                       FROM comentarios c
                       INNER JOIN usuarios u ON u.id_usuario = c.id_usuario
                       WHERE id_peli = $id_peli";
    
    $resultadoComentarios = mysqli_query($conexion, $sqlComentarios);

?>
<main>
    <div class="row">
        <div class="col">
            <div class="detalle">
                    <h2> <?php echo($nombre); ?></h2>
                    <img src="<?php echo($poster);?>" alt="Poster">
                    <hr>
                    <p> <?php echo($detalle); ?> </p>
            </div>
        </div>
    
        <div class="col">
            <h2>Comentarios</h2>

            <div class="comentarios">

            <?php
                while(  $arrayComentario = mysqli_fetch_assoc( $resultadoComentarios)   ){
                    $id_comentario = $arrayComentario['id_comentario'];
                    $contenido = $arrayComentario['contenido'];
                    $id_usuario = $arrayComentario['id_usuario'];
                    $nombre = $arrayComentario['nombre'];

                    
                    echo("<p> <strong>$nombre: </strong> $contenido</p>" );
                }
            ?>
                
        


            </div>

            <hr>
            
            <form action="comentarioGuardar.php?id_pelicula=<?php echo($id_peli);?>" method="post">
                <label for="">Comentario</label>

                <textarea name="contenido" cols="30" rows="10"></textarea>
                <button type="submit">Publicar</button>
            </form>

        </div>
    </div>


</main>

