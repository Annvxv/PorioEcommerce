<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ayuda</title>

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f2f2f2;
}

/* HEADER */
.header {
    background: #1a0dab;
    color: white;
    padding: 15px;
}

.top-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    display: flex;
    align-items: center;
    gap: 10px;
}

.logo img {
    width: 50px;
    height: 50px;
    background: white;
    border-radius: 5px;
}

/* BUSCADOR */
.search-box input {
    padding: 10px;
    width: 300px;
    border-radius: 5px;
    border: none;
}

/* MENU */
.menu {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-top: 10px;
}

.menu a {
    background: #2a1bd6;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
}

.menu a:hover {
    background: #0d6efd;
}

/* LAYOUT */
.container {
    display: flex;
    padding: 20px;
}

/* SIDEBAR */
.sidebar {
    width: 20%;
}

.sidebar a {
    display: block;
    background: #1a0dab;
    color: white;
    padding: 10px;
    margin-bottom: 10px;
    text-decoration: none;
    border-radius: 5px;
    text-align: center;
}

.sidebar a:hover {
    background: #0d6efd;
}

/* CONTENIDO */
.content {
    width: 55%;
    text-align: center;
}

.content-box {
    background: #1a0dab;
    color: white;
    height: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
}

/* DERECHA */
.right {
    width: 25%;
    padding-left: 20px;
}

.destacado {
    color: red;
    font-weight: bold;
    font-size: 22px;
    margin-bottom: 20px;
}

.info {
    font-size: 16px;
    line-height: 1.5;
}
</style>

</head>

<body>

<!-- HEADER -->
<div class="header">
    <div class="top-bar">

        <div class="logo">
            <img src="img/porio.png">
            <h2>LOGO</h2>
        </div>

        <div class="search-box">
            <input type="text" placeholder="Buscar...">
        </div>

        <div>
            <a href="anuncios.php" style="color:white;">Anuncio</a>
        </div>

    </div>

    <div class="menu">
        <a href="cuenta.php">Gestión de cuenta</a>

        <?php if(isset($_SESSION['usuario'])): ?>
            <a href="logout.php">Cerrar sesión</a>
        <?php else: ?>
            <a href="login.php">Ingresar</a>
        <?php endif; ?>

        <a href="carrito.php">Carrito</a>
    </div>
</div>

<!-- CONTENIDO -->
<div class="container">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <a href="#">Artículo de ayuda 1</a>
        <a href="#">Artículo de ayuda 2</a>
        <a href="#">Artículo de ayuda 3</a>
    </div>

    <!-- CONTENIDO CENTRAL -->
    <div class="content">
        <h2>ARTÍCULO DE AYUDA DETALLADO</h2>

        <div class="content-box">
            TEXTO / IMG
        </div>
    </div>

    <!-- DERECHA -->
    <div class="right">
        

        <div class="info">
            Aquí se encuentran políticas e información sobre compras,
            envíos, devoluciones y uso de la plataforma.
        </div>
    </div>

</div>

</body>
</html>