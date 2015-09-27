<?php
if(isset($_GET["logout"]))
	session_destroy();

function showMessage($message)
{
	echo "<script>alert('".$message."');</script>";
}

function user($param)
{
	return $_SESSION["user"][$param];
}

if(isset($_POST["contact"]))
{
	$dest	= "admin@esgi-linuxlab.fr";
	
	$name = htmlspecialchars($_POST["name"]); 
	$subject = htmlspecialchars($_POST["subject"])." (Message de ".$name." depuis LinuxLab)";
	$mail = htmlspecialchars($_POST["email"]);
	
	$message = $_POST["message"];
	$message = nl2br($message);
	$message = htmlspecialchars($message);
	
	$f = (mail ($dest, $subject, $message, "From:".$mail)) ? "Mail was sent" : "Error, try again"; 

	showMessage($f);
}
?>
