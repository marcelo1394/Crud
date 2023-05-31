<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["cedula"]) and !empty($_POST["correo"])) {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $cedula = $_POST["cedula"];
        $correo = $_POST["correo"];
        $sql = $conexion->query("update persona set nombre='$nombre',apellido='$apellido',cedula=$cedula,correo='$correo' where idpersona=$id");
        if ($sql == 1) {
            header("location:index.php");

        } else {
            echo "<div class='alert alert-danger'>Error al modificar persona</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>campos vacios</div>";
    }
}
?>