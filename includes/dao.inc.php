<?php
include("/includes/db.inc.php");

class BusinessLayer
{
	public $m_db = null; //PDO Instance

    public function __construct()
    {
		try
		{
			$this->m_db = DatabaseLayer::getInstance()->getDB();
		}
		catch(Exception $e)
		{
			if(DEBUG) showMessage($e->getMessage());
		}
    }
}
?>
