<?php
$page = "home"; //default page

$pages = array("home" => "Accueil",
				"news" => "News",
				"tutos" => "Tutos",
				"wiki" => "Wiki",
				"projets" => "Projets Labo",
				"scripts" => "Scripts",
				"distributions" => "Distributions",
				"contact" => "Nous contacter"
				);

foreach($pages as $path => $name)
	if(isset($_GET[$path]))
		$page = $path;


if(isset($_GET["projets"]) && !empty($_GET["projets"]))
	$page = "projets/".$_GET["projets"];

if(isset($_GET["tutos"]) && !empty($_GET["tutos"]))
	$page = "tutos/".$_GET["tutos"];

if(isset($_GET["news"]) && !empty($_GET["news"]))
	$page = "news/".$_GET["news"];

if(isset($_GET["scripts"]) && !empty($_GET["scripts"]))
	$page = "scripts/".$_GET["scripts"];

if(isset($_GET["distributions"]) && !empty($_GET["distributions"]))
	$page = "distributions/".$_GET["distributions"];


$page = "view/".$page.".php";

if(!is_file($page))
$page = "view/error/404.php";

	
include("view/header.php");
include($page);
include("view/footer.php");
?>