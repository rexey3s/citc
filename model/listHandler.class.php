<?php 
	class listHandler {
		private $db;
		
		public function __construct($template)
		{
			
			$this->template = $template;
		}
		
		private function getDB()
		{
			$this->db = new db();
		}
		
		private function get_article_li($article,$type)
		{
			$overview = substr($article['content'],0,200);
		$return_list .= " <li>
            	<div class='pic'>
					".
                        $this->template->asignImage('earth1.jpg',"","There are a lot of the poors out there!").
					"
                </div>
                <div class='fc-button'>
                	<a class='bt' href='".__SITE_LINK."article/".(($type=='help')?'need_help/':'intro/').$article['need_id']."'><button>More detail</button></a>
                	<a class='bt' href='".__SITE_LINK."article/".(($type=='help')?'need_help/':'intro/').$article['need_id']."/#help' title='make something to help them'><button>Want to help</button></a>
                    <a class='bt' href='". __SITE_LINK."' title='Vote cho bài này để hoàn cảnh này nhanh nhận được sự giúp đỡ'><button>+1 Vote</button></a>
                     <a class='bt' href='".__SITE_LINK."list/search_by_city/".$article['city']."' ><button>More in this area</button></a>
                
                </div>
            	<div class='overview'>
               		<a href='".__SITE_LINK."article/".(($type=='help')?'need_help/':'intro/').$article['need_id']."'><h2 class='til'>".$article['title']."</h2></a>
                    <div class='detail'>".$article['content']."</div>
                    <div class='location'><span style='color:#777'>Location:</span> ".$article['addr']."</div>
                   <div class='helping_info'>
                    	<span>Helping Fund: <b>".$article['in_fund']."</b></span>
                    	<span>Received: <b>".$article['received']."</b></span>
                    </div>
                    <div class='postTime'> ".(($type=='help' || $article['eventTime'] == '')?"":"Diễn ra vào ngày ".$article['eventTime'])." Đăng ngày ".$article['date']."</div>
                  
               	</div>               	
               	
            </li>'";
			return $return_list;
		}
		
		/*
			get the intro article
		*/
		public  function newest_article($num)
		{
			if ($null == NULL)
				$null = 30;
			$this->getDB();
			
			$result = $this->db->get_data("SELECT title,content,addr,need_id,city,in_fund,received,date FROM article WHERE needhelp = 1 ORDER BY timestamp desc",array($num));

			$return_list = '';
			foreach ($result as $article)
			{
				$return_list .= $this->get_article_li($article,'help');
			}
			
			return $return_list;
		}
		/*
			Get the articles of a userff
		*/
		public  function your_article()
		{
			if ($null == NULL)
				$null = 30;
			$this->getDB();
			$uid = $_SESSION['uid'];
			$result = $this->db->get_data("SELECT title,content,addr,need_id,city,in_fund,received,date FROM article WHERE uid = ? ORDER BY timestamp desc",array($uid));

			$return_list = '';
			foreach ($result as $article)
			{
				$return_list .= $this->get_article_li($article,'help');
			}
			
			return $return_list;
		}

		/*
			get the intro article
		*/
		public  function newest_events($num)
		{
			if ($null == NULL)
				$null = 30;
			$this->getDB();
			
			$result = $this->db->get_data("SELECT title,content,addr,need_id,city,in_fund,received,date FROM article WHERE needhelp = 1 AND beEvent = 1 ORDER BY timestamp desc",array($num));

			$return_list = '';
			foreach ($result as $article)
			{
				$return_list .= $this->get_article_li($article,'event');
			}
			
			return $return_list;
		}
		/*
			get the intro article
		*/
		public  function most_needed_article($num)
		{
			if ($null == NULL)
				$null = 30;
			$this->getDB();
			
			$result = $this->db->get_data("SELECT title,content,addr,need_id,city,in_fund,received,date FROM article WHERE needhelp = 1 ORDER BY point desc",array($num));

			$return_list = '';
			foreach ($result as $article)
			{
				$return_list .= $this->get_article_li($article,'help');
			}
			
			return $return_list;
		}
		
		/*
			get articles by city
		*/
		public  function get_article_by_city($city)
		{
			if ($null == NULL)
				$null = 30;
			$this->getDB();
			
			$result = $this->db->get_data("SELECT title,content,addr,need_id,city,in_fund,received,date FROM article WHERE city = ? ORDER BY timestamp DESC LIMIT 50",array($city));

			$return_list = '';
			foreach ($result as $article)
			{
				$return_list .= $this->get_article_li($article,'help');
			}
			
			return $return_list;
		}

		/*
			GEtting some nearest places that need help
		*/
			private function rad($x) {return $x*pi()/180;}

			private function distHaversine($p1_lat,$p1_lng,$p2_lat,$p2_lng) {
			  $R = 6371; // earth's mean radius in km
			  $dLat  = $this->rad($p2_lat - $p1_lat);
			  $dLong = $this->rad($p2_lng - $p1_lng);

			  $a = sin($dLat/2) * sin($dLat/2) +
			          cos($this->rad($p1_lat)) * cos($this->rad($p2_lat)) * sin($dLong/2) * sin($dLong/2);
			  $c = 2 * atan2(sqrt($a), sqrt(1-$a));
			  $d = $R * $c;

			  return $d;
			}
		public  function nearest_places($lat,$lng)
		{
			if ($null == NULL)
				$null = 30;
			$this->getDB();
			
			$result = $this->db->get_data("SELECT title,content,addr,need_id,city,in_fund,received,lat,lng,date FROM article ORDER BY timestamp DESC LIMIT 50",array($city));
			$return_list = '';
			foreach ($result as $article)
			{
				$article['dis'] = $this->distHaversine($lat,$lng,$article['lat'],$article[0]['lng']);
				//var_dump($this->distHaversine($lat,$lng,$article['lat'],$article['lng']));
			}
			sort($result);
			foreach ($result as $article)
			{
				$return_list .= $this->get_article_li($article,'help');
			}
			return $return_list;
		}
	}
?>