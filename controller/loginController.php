<?php
require_once("/includes/dao.inc.php");

class AccountLogin extends BusinessLayer
{
	public function __construct()
	{
		parent::__construct();
	}

	public function run()
	{
		try
		{
			if(isset($_POST["login"]))
	    	{
				$_email = $_POST["email"];
			 	$_password = hash('sha256', $_POST["password"]); // hash password for safe database storage

				$params = array(
								":email" => $_email,
								":password" => $_password
								);

				$statement = $this->m_db->prepare("SELECT *
													
													FROM account
													
													WHERE email = :email
														AND password = :password");
														
				if($statement->execute($params))
				{
					if($statement->rowCount() == 1)
					{
						$_SESSION["user"] = $statement->fetch(PDO::FETCH_ASSOC);
					}
					else
					{
						showMessage("La combinaison email/mot de passe est incorrecte.");
					}
				}
			}
		}
		catch(PDOException $e)
		{
			if(DEBUG) showMessage($e->getMessage());
		}
		catch(Exception $e)
		{
			if(DEBUG) showMessage($e->getMessage());
		}
	}
}

$api = new AccountLogin();
$api->run();
?>
