<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

/* DATOS DE EJEMPLO (luego los conectas a BD) */
$usuario = $_SESSION['usuario'];
$email = "usuario@email.com";
$telefono = "3001234567";
$direccion = "Calle 123 #45-67";
$foto = "img/user.png";
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gestión de cuenta</title>

<style>
body {
    margin: 0;
    font-family: Arial;
    background: #f2f2f2;
}

/* CONTENEDOR */
.container {
    width: 90%;
    margin: 20px auto;
}

/* SECCIONES */
.card {
    background: white;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 10px;
}

/* FILAS */
.row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}

/* INPUTS */
input {
    padding: 10px;
    width: 60%;
    border-radius: 5px;
    border: 1px solid #ccc;
}

/* BOTONES */
.btn {
    background: #1a0dab;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn:hover {
    background: #0d6efd;
}

/* FOTO */
.foto {
    width: 80px;
    height: 80px;
    border-radius: 10px;
    object-fit: cover;
}

/* TITULO ROJO */
.destacado {
    color: red;
    font-weight: bold;
    text-align: right;
}
</style>

</head>

<body>

<div class="container">

    <div class="destacado">
       
    </div>

    <!-- PERFIL -->
    <div class="card">

        <div class="row">
            <div>
                <label>Foto de usuario</label><br>
                <input type="file">
            </div>

            <img src="<?php echo $foto; ?>" class="foto">
        </div>

        <div class="row">
            <input type="text" value="<?php echo $usuario; ?>">
            <button class="btn">Guardar nombre</button>
        </div>

    </div>

    <!-- INFO -->
    <div class="card">

        <div class="row">
            <div>
                <strong>Email</strong><br>
                <?php echo $email; ?>
            </div>
            <button class="btn">Editar</button>
        </div>

        <div class="row">
            <div>
                <strong>Número de teléfono</strong><br>
                <?php echo $telefono; ?>
            </div>
            <button class="btn">Editar / Añadir</button>
        </div>

        <div class="row">
            <div>
                <strong>Dirección</strong><br>
                <?php echo $direccion; ?>
            </div>
            <button class="btn">Editar</button>
        </div>

    </div>

    <!-- BOTON -->
    <a href="catalogo.php" class="btn">Volver al catálogo</a>
    <a href="logout.php" class="btn">Cerrar sesión</a>

</div>

</body>
</html>