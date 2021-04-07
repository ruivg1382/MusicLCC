<?php

require_once('ligacao_bd.php');

$nome=$_POST['nome'];
$password=$_POST['password'];


 $stmt=$conn->prepare("SELECT * FROM utilizador where nome='$nome' AND senha='$password'");
 
 $stmt->execute();


 $result=$stmt->fetchAll(PDO::FETCH_ASSOC);

 if($result){

 	 session_start(); 

	$_SESSION['nome']=$_POST['nome'];

 	header("location:painel_administracao.php?");


 }else{

 	header('location:log_admin.php?erro');
 }

 /*foreach($result as $row) {

 	echo $row['nome'];
 	echo $row['senha'];


 }*/

?>