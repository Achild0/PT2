<!DOCTYPE html>
<html>
<header>
	<script>
		function login(){
		var symbols = ["*","+","/","|",":","<",">","?","!"];
		var ite = 0;
		if(document.getElementById("pseudo").value=="" || document.getElementById("mdp").value==""){
			window.alert("Veuillez rentrer votre pseudo et votre mot de passe.");
		}
		else {
			for(ite;ite < (symbols.length);ite++){
				if(document.getElementById("pseudo").value.indexOf(symbols[ite])!=-1){
					window.alert("Votre pseudo contient un ou des symboles interdits.");
				}
				if(document.getElementById("mdp").value.indexOf(symbols[ite])!=-1){
					window.alert("Votre mot de passe contient un ou des symboles interdits.");
				}
			}
			document.getElementById("login").submit();
		}
	}

		/*function disconn(){
			$.get("disconnect.php");
			window.alert("Vous êtes déconnecté");
		}*/
	</script>

	<?php
	if (!isset($_POST['mdp']) or (isset($_SESSION['id'])))
	{ ?>
		<h2>TEST LOGIN</h2>


		<form id="login" method="post" action="testlogin.php">
			<p>
				<label for="pseudo">Pseudo :</label><br></br><input id="pseudo" name="pseudo" type="text">
			</p>
			<p>
				<label for="mdp">Mot de passe :</label><br></br><input id="mdp" name="mdp" type="password">
			</p>

			<button type="button" onclick="login()">Connexion</button>

		</form>
	<?php
	}
	else {
	  $pseudo = $_POST['pseudo'];
	  $pass = sha1($_POST['mdp']);
	  $bdd = new PDO('mysql:host=infodb2;dbname=lesbats1u_projettutoré2;charset=utf8', 'lesbats1u_appli', '31610587');
	  $req = $bdd->prepare('SELECT id from ID WHERE pseudo = :pseudo AND pass = :pass');
	  $req->execute(array(
	    'pseudo' => $pseudo,
	    'pass' => $pass));
	  $res = $req->fetch();

	  if (!$res)
	  {
	    echo "Une erreur est survenue lors de la requete !";
	  }
	  else {
	    session_start();
	    $_SESSION['id'] = $res['id'];
	    $_SESSION['pseudo'] = $pseudo;
	    $id = $res['id'];
	    echo "$pseudo </br>";
			?>
				<button  type="button" onclick="disconn()">Deconnecter</button>
			<?php
	  }
	 }
	?>


</header>
</html>
