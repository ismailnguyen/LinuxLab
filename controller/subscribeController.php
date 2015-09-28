<?php
require_once("/includes/dao.inc.php");

class AccountSubscribe extends BusinessLayer
{
	public function __construct()
	{
		parent::__construct();
	}

	public function run()
	{
		try
		{
			if(isset($_POST["subscribe"]))
			{
				$_firstname = $_POST["firstname"];
				$_lastname = $_POST["lastname"];
				$_promotion = $_POST["promotion"];
				$_email = $_POST["email"];
			 	$_password = hash('sha256', $_POST["password"]); // hash password for safe database storage

				$params = array(
								":firstname" => $_firstname,
								":lastname" => $_lastname,
								":email" => $_email,
								":password" => $_password,
								":promotion" => $_promotion
								);

				$statement = $this->m_db->prepare("SELECT * 
				
													FROM account
													
													WHERE email = ?");
													
				if($statement->execute(array($_email)))
				{
					if($statement->rowCount() == 0)
					{
						$statement = $this->m_db->prepare("INSERT INTO account (firstname, lastname, email, password, promotion) VALUES(:firstname, :lastname, :email, :password, :promotion)");
															
						if($statement && $statement->execute($params))
						{							
							// $_SESSION["user"] = $_email; // automaticaly connect after subscribe
							
							showMessage("Vous etes maintenant inscris !");
						}
					}
					else
					{
						showMessage("Utilisateur deja existant !");
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

$api = new AccountSubscribe();
return $api->run();
?>
