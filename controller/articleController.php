<?php

Class articleController Extends baseController {

    public function index() {
			if ($this->registry->url_addition_vars)
			{
				$article_id = $this->registry->url_addition_vars[0];
				$getArticle = new getArticle();
				$this->registry->template->article_content = $getArticle->getArticle($article_id);
				
				$this->check_login();
				//show template
				$this->registry->template->show("article");
			}
			else
			{
				$this->registry->template->show("404");
			}
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

	/*
		Getting intro article content
	*/
	public function intro() {
		//var_dump($this->registry->url_addition_vars);
		if ($this->registry->url_addition_vars)
		{
			$article_id = $this->registry->url_addition_vars[0];
			$getArticle = new getArticle();
			$this->registry->template->article_content = $getArticle->getIntro($article_id);
			
			$this->check_login();
			//show template
			$this->registry->template->show("article");
		}
		else
		{
		  	$this->registry->template->show("404");
		}
		
		
	}
	
	/*
		get need help article content
	*/
	public function need_help() {
		if ($this->registry->url_addition_vars)
			{
				$article_id = $this->registry->url_addition_vars[0];
				$getArticle = new getArticle();
				$this->registry->template->article_content = $getArticle->getArticle($article_id);
				
				$this->check_login();
				//show template
				$this->registry->template->show("article");
			}
			else
			{
				$this->registry->template->show("404");
			}	
	}
	
	
}
