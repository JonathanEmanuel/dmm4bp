<?php
    require_once('conexion.php');
    require_once('html/header.html');
    require_once('html/nav.html');

?>
<main>
<form action="peliculaGuardar.php" method="post" enctype="multipart/form-data">
    <label for="">Nombre</label>
    <input name="nombre" type="text">

    <label for="">Foto</label>
    <input name="foto" type="file">

    
    <label for="">Foto Poster</label>
    <input name="poster" type="file">

    
    <label for="">Detalle</label>
    <textarea name="detalle" cols="30" rows="4"></textarea>

    <button type="submit">Publicar</button>

</form>
</main>

<?php
    require_once('html/footer.html');
?>