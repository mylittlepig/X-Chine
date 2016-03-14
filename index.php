<!DOCTYPE html>
<html>
    <head>
        <title>X-Chine, Ecole Polytechnique, Palaiseau</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/blueimp-gallery.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
        <link href="css/style.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/code.js"></script>
        <script src="js/jquery.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
        	<div class="row">
        		<div class="col-md-10"><img src="photos/logo.jpeg" class="img-rounded" alt="Logo" height="100" width="150"></div>
        		<div class="col-md-2"><img src="photos/china.jpg" class="img-rounded" alt="china" height="100" width="150" align="top"></div>
<!--         		<div class="col-md-2"><img src="photos/chinadragon.gif" class="img-rounded" alt="dragon" height="75" width="120" align="left"></div> -->
        	</div>
        	<div class="row">
        		<div class="col-md-1" style="border:1px; padding:5px;margin:5px"><a href="#" class="text-primary">Accueil</a></div>
        		<div class="col-md-1" style="border:1px; padding:5px;margin:5px"><a href="#" class="text-primary">Événements</a></div>
        		<div class="col-md-1" style="border:1px; padding:5px;margin:5px"><a href="information.php" class="text-primary">Informations</a></div>
        		<div class="col-md-1" style="border:1px; padding:5px;margin:5px"><a href="annuaires.php" class="text-primary">Annuaires</a></div>
        		<div class="col-md-1" style="border:1px; padding:5px;margin:5px"><a href="#" class="text-primary">Échange</a></div>
        		<div class="col-md-1" style="border:1px; padding:5px;margin:5px"><a href="#" class="text-primary">About us</a></div>
        		<div class="col-md-4" style="border:1px; padding:5px;margin:5px">
        			<?php
  					if(isset($_POST["login"]) && $_POST["login"] != "" && isset($_POST["mdp"]) && isset($_POST["mdp"]) != "") {

  					} else {
  					?>
        			<form action="index.php?todo=login" method="post">
        				Login:<input type="text" name="login" size="12" required/>
        				Mot de passe:<input type="text" name="mdp" size="12" required/>
        				<input type="submit" value="Valider"/>
        			</form>
        			<?php 
  					}
  					?>
        		</div>
        		<div class="col-md-1" style="border:1px; padding:5px;margin:5px">
        		<a href="#" class="text-danger">Oublié?</a>
        		<a href="inscription.php" class="text-success">S'inscrire</a>
        		</div>
        	</div>
       	    <div id="blueimp-gallery-carousel" class="blueimp-gallery blueimp-gallery-carousel">
        	<div class="slides"></div>
        	<h3 class="title"></h3>
        	<a class="prev">‹</a>
        	<a class="next">›</a>
        	<a class="play-pause"></a>
        	<ol class="indicator"></ol>
        	</div>
        	<br>
        	<div id="links">
            	<a href="photos/chinaquest.jpg" title="Quest">
<!--       			  <img src="photos/chinaquest.jpg" alt="Quest"> -->
    			</a>
    			<a href="photos/greatwall.jpg" title="Great Wall">
<!--         			<img src="photos/greatwall.jpg" alt="Great Wall"> -->
    			</a>
    			<a href="photos/beijingopera.jpg" title="Beijing Opera">
<!--         			<img src="photos/beijingopera.jpg" alt="Beijing Opera"> -->
    			</a>
        	</div>


        </div>




		<script src="js/blueimp-helper.js"></script>
		<script src="js/blueimp-gallery.min.js"></script>
		<script>
		blueimp.Gallery(
			    document.getElementById('links').getElementsByTagName('a'),
			    {
			        container: '#blueimp-gallery-carousel',
			        carousel: true
			    }
			);
		</script>
    </body>



</html>