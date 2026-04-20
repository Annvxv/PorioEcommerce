<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

$usuario = $_SESSION['usuario'];
$rol = $_SESSION['rol'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Principal | Ecommerce</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #0d6efd, #5dade2);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background: white;
            color: #333;
            width: 90%;
            max-width: 500px;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
            text-align: center;
        }

        h1 {
            color: #0d6efd;
            margin-bottom: 10px;
        }

        h2 {
            color: #555;
            font-size: 20px;
            margin-bottom: 20px;
        }

        .panel {
            background: #eaf4ff;
            border-left: 5px solid #0d6efd;
            padding: 15px;
            margin: 20px 0;
            border-radius: 10px;
            font-weight: bold;
        }

        .btn-logout {
            display: inline-block;
            text-decoration: none;
            background: #0d6efd;
            color: white;
            padding: 12px 25px;
            border-radius: 10px;
            transition: 0.3s;
            font-weight: bold;
        }

        .btn-logout:hover {
            background: #084298;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Bienvenido, <?php echo $usuario; ?> 👋</h1>
    <h2>Rol: <?php echo ucfirst($rol); ?></h2>

    <?php
    if ($rol == "admin") {
        echo "<div class='panel'>⚙️ Panel de administrador</div>";
    }

    if ($rol == "vendedor") {
        echo "<div class='panel'>🛒 Panel de vendedor</div>";
    }

    if ($rol == "cliente") {
        echo "<div class='panel'>👤 Panel de cliente</div>";
    }
    ?>

    <a href="logout.php" class="btn-logout">Cerrar sesión</a>
</div>

</body>
</html>