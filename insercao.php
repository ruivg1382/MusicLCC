<?php

    require_once('ligacao_bd.php');


    $genero=$_POST['genero'];

     echo $titulo=$_POST['titulo'];
     echo $descricao=$_POST['descricao'];
    
     echo $artista=$_POST['artista'];
     
     echo "<br>";




      $msg = false;

  if( isset($_FILES['arquivo'])  and isset($_FILES['foto'])){

    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
    $extensao2 = strtolower(substr($_FILES['foto']['name'],-4));

    $novo_nome = md5(time()) . $extensao;
   
    $novo_nome2 = md5(time()) .'.jpg'; //define o nome do arquivo

    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
    $diretorio2 = "foto/";

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
    move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio2.$novo_nome2);

     var_dump($novo_nome);
   
     $res=$conn->query("INSERT INTO musica
      Values(null,'$genero','$titulo','$descricao','$artista','$novo_nome','$novo_nome2')");


     header('location:painel_administracao.php');


}












?>