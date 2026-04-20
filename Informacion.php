<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Información de la compañía</title>

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

/* LOGO */
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

/* BOTONES */
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

/* CONTENIDO */
.container {
    padding: 30px;
}

/* SECCIONES */
.section {
    display: flex;
    justify-content: space-between;
    margin-top: 30px;
    gap: 20px;
}

.box {
    background: #1a0dab;
    color: white;
    width: 22%;
    height: 150px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
    text-align: center;
}

/* TITULOS */
.titulo {
    font-size: 20px;
    margin-top: 20px;
}

/* TEXTO ROJO */
.destacado {
    color: red;
    font-size: 22px;
    font-weight: bold;
    text-align: right;
}
</style>

</head>

<body>

<!-- HEADER -->
<div class="header">
    <div class="top-bar">

        <!-- LOGO -->
        <div
         class="logo">

            <img src="img/porio.png">
            <h2>LOGO</h2>
        </div>

        <!-- BUSCADOR -->
        <div class="search-box">
            <input type="text" placeholder="Buscar...">
        </div>

        <!-- ANUNCIO -->
        <div>
            <a href="anuncios.php" style="color:white;">Anuncio</a>
        </div>

    </div>

    <!-- MENU -->
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

    

    <!-- SECCION 1 -->
    <div class="titulo">¿Qué es PORIO?</div>
    <div class="section">
        <div class="box">TEXTO</div>
        
    </div>

    <!-- SECCION 2 -->
    <div class="titulo" style="text-align: center;">Nuestros valores</div>
    <div class="section">
        <div class="box">TEXTO</div>
        <div class="box">TEXTO</div>
        <div class="box">TEXTO</div>
        <div class="box">TEXTO</div>
    </div>

</div>

</body>
</html>