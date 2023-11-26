<?php
    require_once('conexion.php');
    require_once('html/header.html');
    require_once('html/nav.html');
?>
<main>
    <h2> Login</h2>
    <form class="card" method="post" action="usuarioValidar.php">
        <label for="">Email</label>
        <input name="email" type="email" >

        <label for="">Contraseña</label>
        <input name="password" type="password">

        <button type="submit">Login</button>
    </form>

</main>