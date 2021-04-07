<?php session_start(); 

$_SESSION['nome'];



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logo.jpg" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">


    <title>Musicacv</title>

    <script src="https://cdn.tiny.cloud/1/w1zei71euvw0dq3f6m57yi3adu0tcqhnq8lp64dtxdlzuwvg/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  </head>
  <body class="bg-warning">

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg fixed-top">
  <a class="navbar-brand" href="log_admin.php"><img src="img/logo.jpg" class="logo" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

   <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active px-5">
        <a class="nav-link text-dark" href="#todasPubicacoes">
          <img src="img/on.png" class="online" alt=""> <strong>User:</strong><em> <?=$_SESSION['nome'];?></em><span class="sr-only"></span></a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link text-dark" href="#publicar"><strong>upload music</strong><span class="sr-only"></span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link text-dark" href="#todasPubicacoes"><strong>All music</strong><span class="sr-only"></span></a>
      </li>

      


      <li class="nav-item active">
        <a class="nav-link font1 px-5 text-danger" href="index.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Sair</a>
      </li>

      

      
      
     


    </ul>



  </div>

</nav>

<div class="container">





  

    <!-- entrando no painel administrativo II -->

    <div class="row">
      <div class="col-md-2">

      
        
      </div>
      <div class="col-md-8 py-5 px-5 my-5 card" id="publicar">

         <div class="text-center"><img src="img/logotipo.png"></div>
         <span class="text-danger"><strong>*</strong> Campos Obrigatórios.</span> 


        <form action="insercao.php" method="POST" enctype="multipart/form-data">
           <div class="form-group">
             <label for="exampleFormControlSelect1" class="text-dark">
             <strong><span class="text-danger">*</span>Seleccione o genero musical</strong></label>
                 <select class="form-control" id="exampleFormControlSelect1" name="genero">
                     <option value="kizomba">Kizomba</option>
                     <option value="hiphop">Hip Hop</option>
                     <option value="afrouse">Afro House</option>
                     <option value="funana">Funáná</option>
                     <option value="outros">outros</option>
                 </select>
            </div>

            <div class="form-group">
              
            </div>

            <div class="form-group p-2">
              <label for="titulo" class="text-info"><strong><span class="text-dark">*</span>Título da musica</strong></label>
              <input type="text" name="titulo" placeholder="titulo da musica" class="form-control">
            </div>

            

            <div class="form-group">
                <label for="exampleFormControlFile1" class="text-dark"><strong><span class="text-danger">*</span>upload music</strong></label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="arquivo" required>
            </div>

            <!-- Carregar Foto de Artista -->

            <div class="form-group">
                <label for="exampleFormControlFile2" class="text-dark"><strong><span class="text-danger">*</span>upload Foto</strong></label>
                <input type="file" class="form-control-file" id="exampleFormControlFile2" name="foto" required>
            </div>


            

            <div class="form-group p-2">
              <label for="descricao" class="text-dark"><strong><span class="text-danger">*</span>Descrição</strong></label>
              <textarea name="descricao" id="descricao" cols="5" rows="3" class="form-control" required>
                
              </textarea>
            </div>

            <div class="form-group"> 
              <label class="text-dark" for="autor"><strong>Artista:</strong></label>
              <input type="text" class="form-control" placeholder="Nome de Artista" id="autor" name="artista"   required>
            </div>

            <div class="form-group p-2 text-right">

              <span class="text-right"><input type="submit" value="Carregar musica" class="btn btn-dark" onclick="alert('Clique em Ok, para confirmar a execução da operação.')"></span>
            </div>
          
        </form>
        
      </div>
      <div class="col-md-2 p-2">

      <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v8.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="105826911286156"
  logged_in_greeting="Olá! Alguma Dúvida?"
  logged_out_greeting="Olá! Alguma Dúvida?">
      </div>

      </div>
    </div>



    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8 pt-5 card" >

        <?php 
          require_once('ligacao_bd.php');

          $autor=$_SESSION['nome'];

          $stmt=$conn->prepare("SELECT * FROM musica");
          $stmt->execute();
          $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
          

        
        ?>

        <h3 class="text-center">Minhas publicações</h3>

        <table class="table table-striped" id="todasPubicacoes">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Título</th>
     
      <th scope="col">Artista</th>
      <th scope="col">Apagar</th>
      
    </tr>
  </thead>
  <tbody>
    <?php  foreach($result as $row){ ?>

    <tr>
      <td><?=$row['id_musica'];?></td>
      <td><?=$row['titulo'];?></td>
      
      <td><?=$row['artista'];?></td>
      <td><a href="apagar_dados.php?id=<?=$row['id_musica'];?>" class="btn btn-danger btn-sm">
       <i class="fa fa-trash">delete</i></a></td>
      
    <?php } ?>

  </tbody>
</table>
        
      </div>
      <div class="col-md-2"></div>
    </div>

























  

</div>

<!--
    <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>

  -->


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

