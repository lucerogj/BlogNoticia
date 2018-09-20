<?php
function listado_Noticias($Tipo){
$pdo = Database::Conectar();
    $dbSelect =  $pdo->prepare("SELECT * FROM Noticias WHERE Tipo = $Tipo");
    $dbSelect -> setFetchMode(PDO::FETCH_ASSOC);  
    $dbSelect -> execute();
  
 	while ($row = $dbSelect->fetch()){
		echo '"'.$row["Id"].'-'.$row["Titulo"].'",';
	}
}




?>