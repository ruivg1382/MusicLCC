<?php require_once('header.php'); ?>



<div class="container">

<div class="row">
		<div class="col-md-4 col-sm-12">
			<form action="" class="my-5">
				<div class="form-group">
					<input type="text" name="nome" placeholder="Digite o seu nome aqui" class="form-control" required>
				</div>
				<div class="form-group">
					<input type="text" name="morada" placeholder="Digite a sua morada" class="form-control" required>
				</div>
				<div class="form-group">
					<input type="tel" name="telefone" placeholder="Telefone" class="form-control" required>
				</div>

				<div class="form-group">
					<input type="tel" name="email" placeholder="Email (opcional)" class="form-control" >
				</div>

				<div class="form-group">
				   <textarea name="" id="" cols="30" rows="5" class="form-control">
				   	
				   </textarea>
				</div>
				<div class="form-group text-right">
					<input type="submit" value="Enviar" class="btn btn-dark">
				</div>
			</form>
		</div>

         <div class="col-md-4 col-sm-12">
         	
                <div class="my-5 text-center">	
         		<a href="https://www.facebook.com/CvMusic-114036324067542" target="_blank" class="btn btn-primary btn-sm my-3">
         			Facebook
         		</a>
         		<a href="#" class="btn btn-danger btn-sm my-3"  onclick="alert('Estará disponivel em breve') ">
         			Youtube
         		</a>
         		<a href="#" class="btn btn-success btn-sm my-3"  onclick="alert('Estará disponivel brevemente')">
         			WhatsApp
         		</a>
         		</div>
         			
         	

         	
         </div>
	</div>


<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/pt_PT/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="114036324067542"
  theme_color="#E0A800"
  logged_in_greeting="Olá, Quer falar connosco?"
  logged_out_greeting="Olá, Quer falar connosco?">
      </div>

	
</div>







<?php

require_once('footer.php');

?>