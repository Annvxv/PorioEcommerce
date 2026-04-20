<?php
session_start();

/* CONEXIÓN A BD */
$conn = new mysqli("localhost", "root", "", "ecommerce");

if ($conn->connect_error) {
    die("Error de conexión");
}

/* OBTENER BÚSQUEDA */
$busqueda = $_GET['q'] ?? '';

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Resultados</title>
<style>
body { font-family: Arial; background: #f2f2f2; }
.container { padding: 20px; }

.producto {
    background: #1a0dab;
    color: white;
    padding: 15px;
    margin: 10px;
    border-radius: 10px;
    display: inline-block;
    width: 200px;
}
</style>
</head>

<body>

<div class="container">

<h2>Resultados para: "<?php echo htmlspecialchars($busqueda); ?>"</h2>

<?php

/* CONSULTA */
$sql = "SELECT * FROM productos WHERE nombre LIKE ?";
$stmt = $conn->prepare($sql);
$like = "%" . $busqueda . "%";
$stmt->bind_param("s", $like);
$stmt->execute();

$result = $stmt->get_result();

/* MOSTRAR RESULTADOS */
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='producto'>";
        echo "<h3>" . $row['nombre'] . "</h3>";
        echo "<p>$" . $row['precio'] . "</p>";
        echo "</div>";
    }
} else {
    echo "<p>No se encontraron productos</p>";
}

?>

<br><br>
<a href="catalogo.php">Volver</a>

</div>

</body>
</html>