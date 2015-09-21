<!DOCTYPE HTML>
<html>
<head>
<title>LinuxLab | ESGI</title>
<link href="resources/css/bootstrap.css" rel="stylesheet" type="text/css" />
<script src="resources/js/jquery.min.js"></script>
<link href="resources/css/style.css" rel="stylesheet" type="text/css" />
<link rel="apple-touch-icon" size="57x57" href="resources/images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" size="60x60" href="resources/images/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" size="72x72" href="resources/images/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" size="76x76" href="resources/images/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" size="114x114" href="resources/images/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" size="120x120" href="resources/images/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" size="144x144" href="resources/images/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" size="152x152" href="resources/images/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" size="180x180" href="resources/images/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" size="192x192"  href="resources/images/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" size="32x32" href="resources/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" size="96x96" href="resources/images/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" size="16x16" href="resources/images/favicon/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
<script src="resources/js/easyResponsiveTabs.js" type="text/javascript"></script>
<script src="resources/js/responsive-nav.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any width like 600px
			fit: true   // 100% fit in a container
		});
	});
</script>	
</head>
<body>
	<div class="wrapper">
		 <div class="header">
	       <div class="container header_top">
				<div class="logo">
				  <a href="?"><img src="resources/images/logo.png" alt=""></a>
				</div>
		  		<div class="menu">
					<a class="toggleMenu" href="#"><img src="resources/images/nav_icon.png" alt="" /> </a>
					<ul class="nav" id="nav">
						<?php
						foreach($pages as $path => $name)
						{
							echo '<li';
							if(isset($_GET[$path])) echo ' class="current"';
							echo '>';
							echo '<a href="?'.$path.'">';
							echo $name;
							echo '</a></li>';
						}
						?>				
						<div class="clearfix"></div>
					</ul>
					
				</div>							
	  			<div class="clearfix"> </div>
			 </div>
		</div>
	</div>
     
