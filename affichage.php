<!DOCTYPE html>
<html>
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
				<a href="./index.html">Accueil</a>
				<a href="./A1.html">Premiere Année</a>
				<a href="./A2.html">Seconde Année</a>
				<a href="./AS.html">Année Speciale</a>
				<a href="./SQL.html">Recherche</a>
			</nav>
		</article>


    <?php
    $bdd = new PDO('mysql:host=infodb2;dbname=lesbats1u_projettutoré2;charset=utf8', 'lesbats1u_appli', '31610587');
    $req = $bdd->prepare("SELECT titre,lib_lang,lib_ann ,descr_proj FROM PDETAIL,LANGAGE,ANNEE WHERE id_year = id_ann AND PDETAIL.id_lang = LANGAGE.id_lang AND id = ?");
    $req->execute(array($_GET['id']));
    $res = $req->fetch();
     ?>
	</header>
	<div class="contour">
		<br />
		<h2 id="titre"><?php echo $res['titre']; ?></h2>
		<h3 id="domaine">Projet de <?php echo $res['lib_lang']; ?> </h3>
		<h3 id="etude">Effectué par des  <?php echo $res['lib_ann']; ?> </h3>
		<p> <?php echo $res['descr_proj']; ?></p>
	</div>


</body>
</html>
