<?php
require_once('header.php');

 require_once('ligacao_bd.php');?>

 
 <div class="container">    

    <div class="row">
    <div class="col-md-3 col-sm-3"></div>
    <div class="col-md-6 col-sm-6 my-3">
    <form action="musica_search.php" method="post">
       <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nome da musica ou artista" aria-label="Pesquise por nome da musica ou artista" aria-describedby="button-addon2" name="search_music">
  
          <input class="btn btn-primary" type="submit" id="button-addon2" value="pesquisar"><hr>
      </div>
     </form>

    </div>
    <div class="col-md-3 col-sm-3"></div>
    </div>

   
    

        <div class="row">  

       


        

            <?php

                $stmt=$conn->prepare("SELECT * FROM musica WHERE genero='funana' order by id_musica desc");
 
                $stmt->execute();


                $result=$stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach($result as $row) {?>
            
            

            
            <div class="col-md-4 col-sm-12  px-2 my-3 card shadow-lg mx-auto"> 
                <div class=" ">
                    <div class="my-2">
                        <span class="text-center">
                          <p><img src="foto/<?=$row['foto'];?>"  alt="" class=" card-img-top img-thumbnail w-50"></p>
                        </span>
                          <p class="text-center"><small >Nome de Artista: <?=$row['artista'];?></small></p>
                       
                        </small>
                    </div>

                       <div class="text-center">
                        <audio controls>
                            <source src="upload/<?=$row['arquivo'];?>" type="audio/ogg">
                            <source src="horse.mp3" type="audio/mpeg">
                             Your browser does not support the audio tag.
                        </audio>
                    </div>
                
                
                       <div class="text-center text-dark">
                        <p><small>Tema: <strong class="text-muted text-center"><?=$row['titulo'];?></strong></small></p></div>
                       <div class="text-center">
                        <a href="upload/<?=$row['arquivo'];?>"  class="btn btn-warning btn-sm text-center mb-2" target="_blank"><i class="fa fa-eye" aria-hidden="true" ></i>  Visualizar </a>
                        <a href="upload/<?=$row['arquivo'];?>" download="true" class="btn btn-primary btn-sm text-center mb-2"><i class="fa fa-download" aria-hidden="true"></i>  download</a></div>

                          
                </div>
                </a>


             </div>

             <?php

         }
        ?>

        
  
 





  </div>








  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>