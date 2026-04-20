<?php

session_start();
include("conexion.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios 
WHERE email='$email' AND password='$password'";

$resultado = $conn->query($sql);

if($resultado->num_rows > 0){

    $usuario = $resultado->fetch_assoc();

    $_SESSION['usuario'] = $usuario['nombre'];
    $_SESSION['rol'] = $usuario['rol'];
    $_SESSION['id_usuario'] = $usuario['id_usuario'];

    header("Location: catalogo.php");

}else{

    echo "Usuario o contraseña incorrectos";

}

?>