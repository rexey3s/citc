<?php 
	
	class db {
		
		private $db_host = DB_HOST;
		private $db_user = DB_USER;
		private $db_pass = DB_PASS;
		private $db_name = DB_NAME;
		private $db = null;
		
		public function __construct()
		{
			$this->db = new PDO("mysql:host=".$this->db_host.";dbname=".$this->db_name.";charset=utf8", $this->db_user, $this->db_pass);
			$this->db->exec("set names utf8");		
		}
		
		public function get_data($query, $param = array())
		{
			$db_action = $this->db->prepare($query);
			$db_action->execute($param);
			return $db_action->fetchAll(PDO::FETCH_ASSOC);
		}
		
		public function put_data($query, $param = array())
		{
			try {
			$result = $this->db->prepare($query);
			 $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
			return $result->execute($param);
		}
		
		public function get_insert_id()
		{
			return $this->db->lastInsertId();
		}
	}
?>