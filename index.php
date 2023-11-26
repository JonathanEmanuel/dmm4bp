<?php
    session_start();

    require_once('conexion.php');
    require_once('html/header.html');
    require_once('html/nav.html');
    // Escribo la consulta
    $sql = "SELECT id_peli, nombre, foto
            FROM pelis";
    // Ejecuto la consulta
    $resultado = mysqli_query($conexion, $sql);
?>
<main>
<div class="row">
<?php
     
    while(  $array = mysqli_fetch_assoc( $resultado)   ){
        $id_peli = $array['id_peli'];
        $titulo = $array['nombre'];
        $poster = $array['foto'];
        echo( "<div class='card'>
                <div class='card-img'>
                    <img src='$poster' alt='$titulo'>
                </div>
                <h4>$titulo</h4>
                <a href='detalles.php?id_pelicula=$id_peli' class='btn'> Ver Peli </a>
              </div>
            " );
    } 

?>
</div>

</main>
<?php
    require_once('html/footer.html');
?>
