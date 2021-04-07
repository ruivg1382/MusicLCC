<?php require_once('header.php'); ?>


<div class="container my-5">
    <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">

            <form action="#" method="post">
                <input type="post" name="txt_pesquisa">
                <input type="submit" value="Buscar">
            </form>
            
            <div class="my-3">
            <iframe width="560" height="315" src="<?php echo @$_POST['txt_pesquisa'];?>/" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
            </div>
            <hr>
            
            <iframe width="560" height="315" src="https://www.youtube.com/embed/3FcXBAC6-KI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>




            </div>
            <div class="col-md-2"></div>
    </div>
</div>

<div class="fixed-bottom pt-2 fundo-rodape mb-0">


  <br><p class="text-center texto-negrito font1">
  <strong> Copyright &copy; <?=date('Y');?>. CvMusic. All right reserved. design e Concepção by <a href="#" class="text-dark">Rui Veiga</a> . </strong>
     
   </p>
  
</div>






<?php require_once('footer.php');?>

