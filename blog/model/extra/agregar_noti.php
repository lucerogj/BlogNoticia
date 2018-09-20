<?php 
require_once '../database.php';
$pdo = Database::Conectar();
//guardo la noticia
$sql = "INSERT INTO Noticias (Titulo, Contenido, Tipo) VALUES (?, ?, ?)";
$pdo->prepare($sql)->execute(array($_POST['VTitulo'],$_POST['VContenido'],$_POST['VTipo']));
//Obtengo el id 
$sql1 = "SELECT MAX(Id) AS Id FROM noticias";
$query = $pdo->prepare($sql1);
$query->execute();
$row = $query->fetch();
   
echo $row['Id']."-".$_POST['VTitulo'];
?>