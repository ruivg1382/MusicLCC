<?php

session_start();

require_once('ligacao_bd.php');

$id=$_GET['id'];
echo $id;

$query=$conn->query("Delete from musica where id_musica='$id'");

header('location:painel_administracao.php');


session_close();





 ?>