<?php 

ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

if (isset($_POST['guardar'])){
    require_once("config.php");

    $config = new Config();

    $config-> setNombre($_POST['nombre']);
    $config-> setDescripcion($_POST['descripcion']);
    $config-> setImagen($_POST['imagen']);
    $config-> insertDatos();

    echo "<script> alert('Los datos fueron guardados satisfactoriamente');document.location='facturacion.php'</script>"; 
}

?>