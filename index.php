<?php
$_page = "home"; //default page

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
		$_page = $path;

include("view/header.php");
include("view/".$_page.".php");
include("view/footer.php");
?>