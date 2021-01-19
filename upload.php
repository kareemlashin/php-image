<?php 

require_once("./db.php");
$db_connection=FunctionName();

if (isset($_POST["multi"])) {
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$city=$_POST["city"];
$file=$_FILES["file"];
$file_name=$file["name"];
$file_path=$file["tmp_name"];
$file_error=$file["error"];
if ($file_error ==0 ) {
$dest_file="upload/" . $file_name;
move_uploaded_file($file_path,$dest_file);
}

$query=$db_connection->prepare("
INSERT INTO `images`(`name`, `email`, `password`, `city`, `pic`) VALUES (:name,:email,:password,:city,:pic)
");
$query->bindValue(":name",$name);
$query->bindValue(":email",$email);
$query->bindValue(":password",$password);
$query->bindValue(":city",$city);
$query->bindValue(":pic",$dest_file);
$query->execute();
}else{
          echo "please enter";
}
?>
