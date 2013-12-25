<?php 
	class signup {
		private $db;
		
		public function __construct()
		{
			
		}
		
		private function getDB()
		{
			$this->db = new db();
		}
		
		public  function addUser()
		{
			$this->getDB();
			//Phần này chỉ làm tạm nên chưa có phần check field và lọc rõ ràng
			//Phiên bản chính có thể cập nhật sau
			if ($_POST['email'] == $_POST['emailconfirm'] && $_POST['pass'] == $_POST['passconfirm'])
			{
				$pass = sha1('alittle'.$_POST['pass'].'help');	
				$email = $_POST['email'];
				$name = $_POST['name'];
				$userType = $_POST['userType'];
				$timestamp = date('d-m-y h:i:s');
				$result = $this->db->put_data("INSERT INTO user (email, password, name, userType, timestamp) VALUES (?,?,?,?,?)",array($email,$pass,$name,$userType,$timestamp));	
				if ($result) return true;
				else
					return false;
			}
			return false;
			
		}
	}
?>