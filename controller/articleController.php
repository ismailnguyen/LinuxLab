<?php
require_once("/includes/dao.inc.php");

class Article extends BusinessLayer
{
	public function __construct()
	{
		parent::__construct();
		return (int) $this->count();
	}

	public function run()
	{
		try
		{
			if(isset($_POST["add_article"]))
			{
				$_id_account = user("id_account");
				$_title = $_POST["title"];
				$_content = $_POST["content"];
				$_created_date = date("Y-m-d H:i:s");

				$params = array(
								":id_account" => $_id_account,
								":title" => $_title,
								":content" => $_content,
								":created_date" => $_created_date
								);

				$statement = $this->m_db->prepare("INSERT INTO article (id_account, title, content, created_date) VALUES(:id_account, :title, :content, :created_date)");

				if($statement && $statement->execute($params))
				{
					showMessage("Votre article a bien &eacute;t&eacute; soumis");
				}
			}
			
			if(isset($_GET["news"]))
			{
				$_limit = isset($_GET["max"]) ? (int) $_GET["max"] : 10;
				$_offset = isset($_GET["page"]) ? (int) ($_GET["page"]-1)*$_limit : 0;
				
				$query = "SELECT *
							FROM article";
				
				if(!empty($_GET["news"]))
					$query .= " WHERE id_article = ".(int) $_GET["news"];
				
				$query .= " ORDER BY id_article DESC
							LIMIT :offset, :limit";
				
				$statement = $this->m_db->prepare($query);
				
				$statement->bindParam(':offset', $_offset, PDO::PARAM_INT);
				$statement->bindParam(':limit', $_limit, PDO::PARAM_INT);
				
				if($statement && $statement->execute())
				{
					return $statement->fetchAll(PDO::FETCH_ASSOC);
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
	
	public function count()
	{
		try
		{					
			$statement = $this->m_db->prepare("SELECT COUNT(1)
												FROM article");
			
			if($statement && $statement->execute())
			{
				return (int) $statement->fetch()[0];
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

$api = new Article();
return $api->run();
?>
