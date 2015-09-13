<!DOCTYPE HTML>
<html>
<head>
<title>LinuxLab | ESGI</title>
<link href="resources/css/bootstrap.css" rel="stylesheet" type="text/css" />
<script src="resources/js/jquery.min.js"></script>
<link href="resources/css/style.css" rel="stylesheet" type="text/css" />
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
     
