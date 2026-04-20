<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Catálogo</title>

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
    align-items: center;
    justify-content: space-between;
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
    object-fit: cover;
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

.search-box button {
    padding: 10px;
    background: #0d6efd;
    border: none;
    color: white;
    border-radius: 5px;
    cursor: pointer;
}

/* NAV */
.nav {
    margin-top: 10px;
    display: flex;
    justify-content: space-around;
}

.nav a {
    background: #2a1bd6;
    color: white;
    padding: 10px 15px;
    text-decoration: none;
    border-radius: 5px;
    transition: 0.3s;
}

.nav a:hover {
    background: #0d6efd;
}

/* PRODUCTOS */
.productos {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    padding: 20px;
}

.producto {
    background: #1a0dab;
    color: white;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
}

.producto img {
    width: 100%;
    height: 150px;
    object-fit: cover;
    border-radius: 10px;
}

/* FOOTER */
.footer {
    background: #1a0dab;
    color: white;
    display: flex;
    justify-content: space-around;
    padding: 20px;
}

.footer div {
    background: #2a1bd6;
    padding: 15px;
    border-radius: 10px;
}
</style>

</head>

<body>

<!-- HEADER -->
<div class="header">
    <div class="top-bar">

        <!-- LOGO -->
        <div class="logo">
            <img src="img/porio.png" alt="Logo">
            
            </form>
        </div>

        <!-- BUSCADOR -->
        <div class="search-box">
            <form action="buscar.php" method="GET">
                <input type="text" name="q" placeholder="Buscar productos...">
                <button type="submit">Buscar</button>
            </form>
        </div>

        <!-- ANUNCIO -->
        <div>
            <a href="anuncios.php" style="color:white;">Anuncio</a>
        </div>

    </div>

    <!-- NAV -->
    <div class="nav">
        <a href="categorias.php">Categorías</a>
        <a href="descuentos.php" style="color: white; background-color: green; padding: 10px 15px; text-decoration: none; border-radius: 5px;">
  Descuentos
</a>
        <a href="mejor_calificados.php">Mejor calificados</a>
        <a href="cuenta.php">Gestión de cuenta</a>
        <?php if(isset($_SESSION['usuario'])): ?>
    <a href="logout.php">Cerrar sesión</a>
<?php else: ?>
    <a href="login.php">Ingresar</a>
<?php endif; ?>
        <a href="carrito.php">Carrito</a>
    </div>
</div>

<!-- PRODUCTOS -->
<div class="productos">

    <div class="producto">
        <img src="img/producto1.jpg">
        <h3>Producto 1</h3>
        <p>$50.000</p>
    </div>

    <div class="producto">
        <img src="img/producto2.jpg">
        <h3>Producto 2</h3>
        <p>$80.000</p>
    </div>

    <div class="producto">
        <img src="img/producto3.jpg">
        <h3>Producto 3</h3>
        <p>$120.000</p>
    </div>

    <div class="producto">
        <img src="img/producto4.jpg">
        <h3>Producto 4</h3>
        <p>$35.000</p>
    </div>

</div>

</body>
</html>