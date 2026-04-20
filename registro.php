<!DOCTYPE html>
<html>
<head>
<title>Registro</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="form-container">

<h2>Registro</h2>

<form action="guardar_usuario.php" method="POST">

<input type="text" name="nombre" placeholder="Nombre" required>

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Contraseña" required>

<select name="rol">
<option value="cliente">Cliente</option>
<option value="vendedor">Vendedor</option>
<option value="admin">Admin</option>
</select>

<button type="submit">Registrarse</button>

</form>

<a href="login.php">Iniciar sesión</a>

</div>

</body>
</html>