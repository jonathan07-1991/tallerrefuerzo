<?php 

include("Basedatos.php");

if(isset($_POST["botonEnviar"])){

    $cedula = $_POST["cedula"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $edad = $_POST["edad"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];

    $operacion = new BaseDatos();

    $consulta = "INSERT INTO usuarios(cedula, nombre, apellido, edad, telefono, direccion) VALUES ('$cedula', '$nombre', '$apellido', '$edad', '$telefono', '$direccion')";

    $operacion -> alterarBaseDatos($consulta);

}


?>