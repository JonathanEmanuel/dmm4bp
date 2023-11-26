<?php
    require_once('conexion.php');
    require_once('html/header.html');
    require_once('html/nav.html');

?>

<main class="container">
    <h2>REgistro</h2>
    <form action="usuarioGuardar.php" method="post">
        <label for="">Nombre</label>
        <input name="nombre" type="text" require>

        <label for="">Email</label>
        <input name="email" type="email" require>

        <label for="">Contraseña</label>
        <input name="clave1" type="password" require>


        <label for="">Repita la contraseña</label>
        <input name="clave2" type="password" require>

        <button type="submit">Registrarme</button>
    </form>
</main>

<?php
    require_once('html/footer.html');

?>