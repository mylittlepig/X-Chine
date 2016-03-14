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
        	<div>
        		<form action="result_inscription.php" method="post">
        			<p>Login: <input type="text" name="login" required/>*</p>
        			<p>Nom: <input type="text" name="nom" placeholder="NOM" required/>*</p>
        			<p>Prénom: <input type="text" name="prenom" placeholder="Prénom" required/>*</p>
        			<p>Email: <input type="email" name="email" placeholder="@polytechnique.edu" required>*</p>
        			<p>Genre: 
        				<input type="radio" name="genre" value="female" checked="checked"> Female
        				<input type="radio" name="genre" value="male"> Male
        			</p>
        			<p>Promotion:   X<input type="number" name="promotion" placeholder="2014" required>*</p>
        			<p>Présentation:<br><textarea name="presentation" rows="5" cols="40"></textarea></p>
        			<p>Mot de Passe: <input type="password" name="mdp" required>*</p>
        			<p>Confirmation: <input type="password" name="mdp2" required>*</p>
        			<p><input type="submit" value="submit"></p>
        		</form>
        	</div>	
        </div>
        
    </body>
</html>