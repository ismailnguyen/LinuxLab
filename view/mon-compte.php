<?php
include("/controller/loginController.php");
include("/controller/subscribeController.php");

if(isset($_SESSION["user"]))
	include("/view/compte/signed.php"); //page to show if user is signed in
else
	include("/view/compte/unsigned.php"); //page to show for visitors
?>