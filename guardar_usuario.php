<?php

include("conexion.php");

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];
$rol = $_POST['rol'];
#Agregar datos telefono y dirección
$sql = "INSERT INTO usuarios (nombre,email,password,rol)
VALUES ('$nombre','$email','$password','$rol')";

if($conn->query($sql)){
    echo "Usuario registrado correctamente";
}else{
    echo "Error: " . $conn->error;
}

?>