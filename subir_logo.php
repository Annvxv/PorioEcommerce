<?php
if(isset($_FILES['logo'])){
    $ruta = "uploads/logo.png";
    move_uploaded_file($_FILES['logo']['tmp_name'], $ruta);
}

header("Location: catalogo.php");
?>