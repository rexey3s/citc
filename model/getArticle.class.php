<?php 
	class getArticle {
		private $db;
		
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
		public  function getIntro($id)
		{
			$this->getDB();
			
			$result = $this->db->get_data("SELECT title,content,in_fund,received FROM article WHERE need_id = ? AND needHelp = '0'",array($id));
			$article_info = $result[0];
			$return_article = '<h2 class="til">'.$article_info['title'].'</h2>'.$article_info['content'];
			
			return $return_article;
		}
		/*
			get the helping article
		*/
		public  function getArticle($id)
		{
			$this->getDB();
				
			$result = $this->db->get_data("SELECT title,content,in_fund,received,addr,beEvent FROM article WHERE need_id = ? AND needHelp = '1'",array($id));
			$article_info = $result[0];
			$return_article = '<h2 class="til">'.$article_info['title'].'</h2>'.$article_info['content'].'
				<h3 style="color:#444">Location: '.$article_info['addr'].'</h3>
				<h3 class="donate_fund" style="color:#555">
					Donation:
					<span>Helping fund: <b>'.$article_info['in_fund'].'</b> </span>
					<span>Received: <b>'.$article_info['in_fund'].'</b></span></h3>
				<div class="location"></div>
				 
<div class="fb-share-button" data-href="http://developers.facebook.com/docs/plugins/" data-width="180" style="width:180px;height:50px" data-type="button"></div>
				<h3 class="help">Helping : 
					'.(($article_info['beEvent']==1)?'<button>JOIN</button>':'0').'
					<button>DONATE</button>
					<button>YOU CAN CONTACT DIRECTLY</button>
				</h3>
			';
			
			return $return_article;
		}
	}
?>