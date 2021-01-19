<?php 

require_once("./db.php");
$db_connection=FunctionName();



$query=$db_connection->prepare("
SELECT *,use.data FROM `use` 
inner  JOIN itmes ON id_ites = itmes.id 
");
$query->execute();
$nw=$query->fetchAll(PDO::FETCH_ASSOC);

print_r($nw);
?>
