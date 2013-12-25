<?php 
	class login {
		private $db;
		
		public function __construct()
		{
			
		}
		
		private function getDB()
		{
			$this->db = new db();
		}
		
		public  function checkLogin()
		{
			if (!isset($_SESSION))
			{
				session_start();
			}
			if (isset($_SESSION['uid']))
			{
				return true;
			}
			else
				{
					return false;
				}

		}
		
		public function login($email,$password)
		{
			$this->getDB();
			$pass = sha1('alittle'.$password.'help');
			$result = $this->db->get_data("SELECT uid,name FROM user WHERE email = ? AND password = ?",array($email,$pass));
			if ($result)
			{
				if (!isset($_SESSION))
				{
					session_start();
				}
				$_SESSION['uid'] = $result[0]['uid'];
				$_SESSION['name'] = $result[0]['name'];
				return true;
			}
			else
				return false;
		}

		public function logout()
		{
			unset($_SESSION['uid']);
		}
	}
?>