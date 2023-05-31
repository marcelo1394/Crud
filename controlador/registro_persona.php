<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["cedula"]) and !empty($_POST["correo"])) {

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $cedula = $_POST["cedula"];
        $correo = $_POST["correo"];

        $sql = $conexion->query("insert into persona(nombre,apellido,cedula,correo) values('$nombre','$apellido','$cedula','$correo')");
        if ($sql == 1) {
            echo '<div class="alert alert-success">Persona registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar persona</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Algun campo esta vacio</div>';
    } ?>
    <script>
        history.replaceState(null,null,location.pathname)
    </script>
<?php }
?>