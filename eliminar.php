<?php
if(!isset($_GET["id"])) exit();
$idGasolina = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("DELETE FROM tbl_articulos WHERE idGasolina = ?;");
$resultado = $sentencia->execute([$idGasolina]);
if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal";
?>