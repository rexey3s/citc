<?php

Class listController Extends baseController {

    public function index() {
		  $this->registry->template->show("404");
		  
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
	
	public function some_places_need_help()
	{
		$this->check_login();

		$getList = new listHandler($this->registry->template);
		$content_list =  $getList->newest_article(30);
		$this->registry->template->content_list = $content_list;
		$this->registry->template->list_til = "SOME PLACES NEED HELP";
		
		$this->registry->template->show("list");
	}
	
	public function most_needed_help()
	{
		$this->check_login();
		
		$getList = new listHandler($this->registry->template);
		$content_list =  $getList->most_needed_article(30);
		$this->registry->template->content_list = $content_list;
		$this->registry->template->list_til = "MOST NEEDED HELP";
		
		$this->registry->template->show("list");
	}
	public function help_someone_near_you()
	{
		$this->check_login();
		
		$getList = new listHandler($this->registry->template);
		$content_list =  $getList->most_needed_article(30);
		$this->registry->template->loadAjax = 'nearestPosition';
		$this->registry->template->content_list = '<div id="loading"></div>';
		$this->registry->template->list_til = "SOMEONE NEAR YOU NEED HELP";
		
		$this->registry->template->show("list");
	}
	public function find_someone_need_help()
	{
		$this->check_login();
		
		$getList = new listHandler($this->registry->template);
		$content_list =  $getList->newest_article(30);
		$this->registry->template->location_filter = true;
		$this->registry->template->content_list = $content_list;
		$this->registry->template->list_til = "SOME PLACES NEED HELP";
		
		$this->registry->template->show("list");
	}
	public function charity_events()
	{
		$this->check_login();
		
		$getList = new listHandler($this->registry->template);
		$content_list =  $getList->newest_events(30);
		$this->registry->template->content_list = $content_list;
		$this->registry->template->list_til = "SOME EVENTS YOU CAN JOIN";
		
		$this->registry->template->show("list");
	}

	public function search_by_city()
	{
		if ($this->registry->url_addition_vars)
		{
			$city = urldecode($this->registry->url_addition_vars[0]);
			if ($city != NULL)
			{
				$getList = new listHandler($this->registry->template);
				$return_list = $getList->get_article_by_city($city);
				$this->registry->template->content_list = $return_list;
				$this->registry->template->list_til = "SOME PLACES AROUND THERE";
			
				$this->registry->template->show("list");
			}
		}
		else
		{
			$this->registry->template->show("404");
		}
	}
	
	/*
		ajax functions 
	*/
			// -------- get articles by city
	public function nearest_places(){
		if (isset($_POST['lat'],$_POST['lng']))
		{
			$getList = new listHandler($this->registry->template);
			$return_list = $getList->nearest_places($_POST['lat'],$_POST['lng']);
			echo $return_list;
		
		}
	}
	public function get_article_by_city()
	{
		
		if (isset($_POST['city']))
			$getList = new listHandler($this->registry->template);
			$return_list = $getList->get_article_by_city($_POST['city']);
			echo $return_list;
		}
	
	}

	
