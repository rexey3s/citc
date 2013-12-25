<?php 
	class articleHandler {
		private $db;
		private $template;
		
		public function __construct()
		{	
		}
		
		private function getDB()
		{
			$this->db = new db();
		}
		
		/*
			get the intro article
		*/
		public  function addArticle()
		{
			$this->getDB();
			
			$title = $_POST['title'];
			$content = $_POST['content'];
			$date = date("d-m-y h:m:i");
			$addr = $_POST['addr'];
			$city = $_POST['city'];
			$beEvent = $_POST['beEvent'];

			$lat = $_POST['lat'];
			$lng = $_POST['lng'];
			$id = substr(sha1(time()),0,64);
			$uid = $_SESSION['uid'];
			$timestamp = time();
			$eventTime = $_POST['eventTime'];

			$result = $this->db->put_data("INSERT INTO article (title,content,date,addr,city,lat,lng,need_id,uid,timestamp,beEvent,eventTime) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)",array($title,$content,$date,$addr,$city,$lat,$lng,$id,$uid,$timestamp,$beEvent,$eventTime));
			if ($result)
				return true;
			else
				return false;
		}
	}
?>