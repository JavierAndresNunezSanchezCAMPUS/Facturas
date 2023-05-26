<?php 

ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

require_once("config.php");

$del = new Config();

if (isset($_GET['id']) && isset($_GET['req'])){
    if ($_GET['req'] == "delete"){
        $del -> setId($_GET['id']);
        $del ->delete();
        echo "<script>alert('Factura borrada satisfactoriamente'); document.location='facturacion.php'</script>";
    };
}

?>