<?php require_once('header.php');?>


<div class="container">
	<div class="row py-5">
		<div class="col-md-4"></div>
		<div class="col-md-4 py-5">

			

			<div class="card px-5  shadow-lg bg-light">

				
				

				<form action="login.php" method="post" class="pb-4">
					<h3 class="pt-4 text-secondary card-title text-center font1">Musicacv<hr></h3>
					<?php 
						if(isset($_GET['erro'])){?>

							<p class="text-center alert alert-danger"><small class="text-danger  text-sm">error, credênciais inválido</small></p>
				<?php 

					}
				?>
					<div class="input-group">
						<input type="text" class="form-control font1" placeholder="Nome de utilizador" name="nome"required>
					</div>

					<div class="input-group py-3">
						<input type="password" class="form-control font1" placeholder="Password" name="password" required>
					</div>

					<div class="input-group py-3 px-5 font1">
						
						<input type="submit" class="form-control btn btn-dark btn-md w-50" value="Entrar">
					</div>
				</form>









			</div>
			

		</div>
		<div class="col-md-4"></div>

	</div>
</div>





<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>