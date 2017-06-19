<!DOCTYPE html>
<html>
<head> 
 	<meta charset="UTF-8" /> 
 	<title> Recherche </title> 
	<link rel="stylesheet" media="screen and (min-width: 721px)" href="Projet-style1.css" />
	<link rel="stylesheet" media="screen and (max-width: 720px)" href="Projet-style1p.css" />
	<meta name="viewport" content="width=max-device-width, initial-scale=1"  />
	<link rel="icon" href="favicon.ico" />
	<style>
	body {background-color: #444444;}
	input {margin-bottom: 10px;}
	h3 {text-decoration: underline;}
	</style>
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



<div class="contour">
	
	<div class="corps">	

<form method="post" action="recherche.php">

	<h3> Recherche de projets </h3>
	
    <p>
        <h3 >Titre :</h3><input type="text" name="titre" />
    </p>
    <p>
       <h3> Domaines :</h3>
       <input type="checkbox" name="web" id="web" /> <label for="web">Web</label><br />
       <input type="checkbox" name="mobile" id="mobile" /> <label for="mobile">Mobile</label><br />
       <input type="checkbox" name="reseau" id="reseau" /> <label for="reseau">Réseau</label><br />
       <input type="checkbox" name="logiciel" id="logiciel" /> <label for="logiciel">Logiciel</label>
    </p>
    <p>
		<h3> Niveau :</h3>
		<select name="niveau" id="niveau">
           <option value="1A">1ère Année</option>
           <option value="2A">2ème Année</option>
           <option value="AS">Année Spéciale</option>
       </select>
    </p>
	<p>
		<h3>Années :</h3>
		<p> Année de départ :<p>
		<input type="date" name="dated">
		<p> Année de fin :<p>
		<input type="date" name="dated">
	</p>
	
	<input type="submit" value="Rechercher" />

</form>
	</div>	
</div>
</body>
</html>