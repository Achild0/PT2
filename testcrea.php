<!DOCTYPE html>
<html>
<header>
<?php
include("testlogin.php");

$bdd = new PDO('mysql:host=infodb2;dbname=lesbats1u_projettutoré2;charset=utf8', 'lesbats1u_appli', '31610587');
$req = $bdd->prepare("SELECT lib_ann FROM ANNEE");
$radio = $bdd->prepare("SELECT lib_lang FROM LANGAGE");
$req->execute();
$radio->execute();

$it = 0;
?>

<h2>Création d'un projet</h2>

<form method="post" action="creation.php">
	<fieldset>
		<legend>Informations obligatoires</legend>
		<p>
			<label for="titre">Titre : </label><br/><input id="titre" name="titre" type="text" required>
		</p>


			<p>Domaines : </p>
			<?php while ($rdonn = $radio->fetch()) { ?>
			<input type="radio" name="dom" id=<?php echo $rdonn['lib_lang'];?> value=<?php echo $rdonn['lib_lang'];?> /> <label for=<?php echo $rdonn['lib_lang'];?>> <?php echo $rdonn['lib_lang'];?> </label><br />
			<?php  }
			$radio->closeCursor();?>
		<p>
			<label for="niveau"> Niveau : </label>
			<select name="niveau" id="niveau">
				<?php while ($donnee = $req->fetch())
				{
					$it = $it +1;
					?>
				<option value=<?php echo $it ?>><?php echo $donnee['lib_ann'];?></option>
				<?php  }
				$req->closeCursor(); ?>
			</select>
		</p>

		<p>
			<label for="date">Date de rendu : </label><br/><input id="date" name="date" type="date" value="2017/06/18" >
		</p>
	</fieldset>
	<br />
	<fieldset>
		<legend>Options</legend>
		<p>
			<label for="image">Url d'une image personnalisée : </label><br />
			<input type="url" name="image" id="image" />
		</p>

		<p>
			<label for="desc">Commentaires / Description du projet : </label><br />
			<textarea name="desc" id="desc" rows="8" cols="100"></textarea>
		</p>
	</fieldset>
	<br />
	<input type="submit" value="Créer" />

</form>



</header>
</html>
