<?php 
 function FunctionName()
{

$host="localhost";
$user="root";
$pass="";
$dbname="data";
$option      = array(
PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8',
);
$dsn= "mysql:host=$host;dbname=$dbname";
try{

$connect_db=new PDO($dsn,$user,$pass,$option);
$connect_db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e){

echo "filed" . $e->getMessage();
echo "filed" . $e->getMessage();

}
return $connect_db;

}