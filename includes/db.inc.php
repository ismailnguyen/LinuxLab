<?php
require_once("conf.inc.php");

class DatabaseLayer
{
    private static $m_instance = null;
    private $m_db = null;

    private function __construct()
    {
        try
        {
            $this->m_db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
			$this->m_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            throw new Exception('PDO Error: '.$e->getMessage());
        }
    }

    public static function getInstance()
    {
        if(is_null(self::$m_instance))
            self::$m_instance = new self();

        return self::$m_instance;
    }
    
    public function getDB()
    {
		return $this->m_db;
    }
}
?>
