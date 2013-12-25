<?php

Class indexController Extends baseController {
  	private function check_login()
    {
    	//Login handler
					$login = new login();
			    	session_start();
			    	if (isset($_POST['login']) && isset($_POST['email']) && isset($_POST['pass']))
			    	{
			    		$login = $login->login($_POST['email'],$_POST['pass']);
		    			$this->registry->template->uid = $_SESSION['uid'];
		    			$this->registry->template->username = $_SESSION['name'];
			    	}
			    	else
			    	{
			    		$is_login = $login->checkLogin();
			    		if ($is_login) {
			    			$this->registry->template->uid = $_SESSION['uid'];
			    			$this->registry->template->username = $_SESSION['name'];
			    		}
			    	}

			    	//---------------
    }
	
    public function index() {
		 $this->check_login();
		
		  $this->registry->template->show("homePage");
    }
}
