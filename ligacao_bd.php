<?php




try{

    $host="sql105.epizy.com";
    $db="epiz_28042686_cvmusic";    
    $user="epiz_28042686";
    $pass="0KwLKzFqac";

    
   
$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);



}catch(PDOException $e){

	echo $e->getMessage();
    echo "<br>";
    $nome="Rui";
    echo '$nome';
}


?>