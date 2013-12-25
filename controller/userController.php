<?php

Class userController Extends baseController {

    public function index() {
		
    		$this->post_article();
    }

    public function post_article()
    {
		

		$is_login = $this->check_login();
		if (isset($_POST['post_new_article']))
		{
			$articleHandler = new articleHandler();
			if ($articleHandler->addArticle())
			{
				$this->registry->template->addArticleSuccess = true;
			}
			else
				$this->registry->template->addArticleSuccess = false;
		}
		
		
		if ($is_login)
		{
			$this->registry->template->show("userPostArticle");    
    	}
    	else
    	{
    		$this->registry->template->show("userLogin");
    	}

    }

    public function your_article()
    {
		

		$this->check_login();

		$getList = new listHandler($this->registry->template);
		$content_list =  $getList->your_article();
		$this->registry->template->content_list = $content_list;
		$this->registry->template->list_til = "YOUR ARTICLES";
		
		$this->registry->template->show("list");

    }
	
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
			    		return true;
			    	}
			    	else
			    	{
			    		$is_login = $login->checkLogin();
			    		if ($is_login) {
			    			$this->registry->template->uid = $_SESSION['uid'];
			    			$this->registry->template->username = $_SESSION['name'];
			    			return true;
			    		}
			    		else
			    			return false;
			    	}
			    	return false;

			    	//---------------
    	}

	public function logout()
	{
		if (!isset($_SESSION))
			session_start();
		unset($_SESSION['uid']);
		unset($_SESSION['name']);	
		header('Location: '.__SITE_LINK);
	}
	
}
