<?php

$bdd = new PDO('mysql:host=infodb2;dbname=lesbats1u_projettutoré2;charset=utf8', 'lesbats1u_appli', '31610587');

$titre = $_POST['titre'];
$idann = $_POST['niveau'];
$image = $_POST['image'];
$desc = $_POST['desc'];
$liblang = $_POST['dom'];


$req = $bdd->prepare('SELECT id_lang from LANGAGE WHERE lib_lang = ?');
$req->execute(array($liblang));
$res = $req->fetch();
$idlang = $res['id_lang'];


$reqd = $bdd->prepare('INSERT INTO PDETAIL(titre,id_groupauth,id_year,nom_image,descr_proj,id_lang) VALUES (:titre,:ag,:idy,:image,:dscr,:lang)');
$reqd->execute(array(
  'titre' => $titre,
  'ag' => 2,
  'idy' => $idann,
  'image' => $image,
  'dscr' => $desc,
  'lang' => $idlang));



?>
