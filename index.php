<!DOCTYPE html> 
<html lang="fr"> 
 	<head> 
 		<meta charset="UTF-8" /> 
 		<title> DUT Informatique </title> 
		<link rel="stylesheet" media="screen and (min-width: 721px)" href="Projet-style1.css" />
		<link rel="stylesheet" media="screen and (max-width: 720px)" href="Projet-style1p.css" />
		<meta name="viewport" content="width=max-device-width, initial-scale=1"  />
		<link rel="icon" href="favicon.ico" />

 	</head> 
<body>
	<header>
		<article class="barre">
			<nav>
				<a href="./index.php">Accueil</a>
				<a href="./A1.php">Premiere Année</a>
				<a href="./A2.php">Seconde Année</a>
				<a href="./AS.php">Année Speciale</a>
				<a href="./SQL.php">Recherche</a>
			</nav>
		</article>
	</header>
		
	<section class="contour">
		
		<section class="corps">
			<h1 class="corps"> <img src="images/logosmall.png"> Accueil </h1> 
	
			
				<?php

			$bdd = new PDO('mysql:host=infodb2;dbname=lesbats1u_projettutoré2;charset=utf8', 'lesbats1u_appli', '31610587');
			$req = $bdd->prepare('SELECT id,titre,nom_image,lib_lang FROM PDETAIL,LANGAGE WHERE PDETAIL.id_lang = LANGAGE.id_lang');
			$req->execute();
			$result = $req->fetch();
			if (!$result)
			{
				echo "Aucune donnée";
			}
      else {
			while($donnes = $req->fetch())
			{
		?>
		
    <a href=<?php echo "'affichage.php?id=".$donnes['id']."'"; ?> >
		<article>
			<img class="imgproj" src="<?php echo $donnes['nom_image'];?>"/>
			<p class="titreproj"> <?php echo $donnes['titre'];?> </p>
			<p class="soustitreproj"> <?php echo $donnes['lib_lang'];?> </p>
		</article>
  </a>
		<?php
		}
			$req->closeCursor();
       }
		?>

				
		</section>
		
	</section>
		
	<section class="contourfooter">
		
		<section class="corpsfooter">
			
			<footer>
				<section class="footergauche">
					<a class="local" href="#">Retour en haut de page</a>
					<a class="local" href="./Accueil.html">Retour a l'accueil</a>
				</section>
					
				<section class="footerdroite">
					<a class="lien" href="./Accueil.html"> Université de Lorraine</a>
					<a class="lien" href="./Accueil.html"> Département Info</a>
					<a class="lien" href="./Accueil.html"> Guilde de l'AEDI</a>
					<a class="lien" href="./Accueil.html"> Page FB de Mme. Spengler</a>
				</section>
			</footer>
	
		</section>
	
	</section>

	
</body>