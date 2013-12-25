<?php

class router {
 /*
 * @the registry
 */
 private $registry;

 /*
 * @the controller path
 */
 private $path;

 private $args = array();

 public $file;

 public $controller;

 public $action; 

 function __construct($registry) {
        $this->registry = $registry;
 }

 /**
 *
 * @set controller directory path
 *
 * @param string $path
 *
 * @return void
 *
 */
 function setPath($path) {

	/*** check if path i sa directory ***/
	if (is_dir($path) == false)
	{
		throw new Exception ('Invalid controller path: `' . $path . '`');
	}
	/*** set the path ***/
 	$this->path = $path;
}


 /**
 *
 * @load the controller
 *
 * @access public
 *
 * @return void
 *
 */
 public function loader()
 {
	/*** check the route ***/
	$this->getController();

	/*** if the file is not there diaf ***/
	if (is_readable($this->file) == false)
	{
		$this->file = $this->path.'/error404.php';
                $this->controller = 'error404';
	}

	/*** include the controller ***/
	include $this->file;

	/*** a new controller class instance ***/
	$class = $this->controller . 'Controller';
	
	$controller = new $class($this->registry);
	
	/*** check if the action is callable ***/
	if (is_callable(array($controller, $this->action)) == false)
	{
		$action = 'index';
	}
	else
	{
		$action = $this->action;
	}
	/*** run the action ***/
	$controller->$action();
	
 }


 /**
 *
 * @get the controller
 *
 * @access private
 *
 * @return void
 *
 */
private function getController() {

	/*** get the route from the url ***/
	$route = (empty($_GET['req'])) ? '' : $_GET['req'];

	if (empty($route))
	{
		$route = 'index';
	}
	else
	{
		/*** get the parts of the route ***/
		$parts = explode('/', $route);
		$this->controller = $parts[0];
		if(isset( $parts[1]))
		{
			$this->action = $parts[1];
		}
		
		/***
			get addition variables
			EX: blogs/view/images/mygallery/
			controller->blog
			action->view
			addition_url_vars = array('images', 'mygallery');
			NOTE: Handlig these variables is up to the controller manager
		***/
		for ($i = 2; $i<count($parts); $i++)
		{
			$this->registry->set_addition_vars($parts[$i]);
		}
	}

	/*** 
		get name of real controller
	***/
	if (!empty($this->controller))
	{
		$datas = simplexml_load_file($this->path.'/controllers.xml')
			or die('cannot load controller names file');
		$datas = $datas->children();
		foreach ($datas->controllers->children() as $a)
		{
			if ($a->title == $this->controller)
			{
				
				$this->controller = (string)$a->controller;
				break;
			}			
		}
		/***
		Get name of real action
		***/
		if (!empty($this->action))
		{
			foreach ($datas->actions->children() as $ac)
			{							
				if ((string)$ac->controller == $this->controller)
				{		
					if ($ac->title == $this->action)
					{
					
						$this->action = (string)$ac->action;
						break;
					}
				}			
			}
		}
	}
	
	
	/***
		Get controller with url is controller name
	***/
	if (empty($this->controller))
	{
		$this->controller = 'index';
	}
	/*** Get action ***/
	if (empty($this->action))
	{
		$this->action = 'index';
	}

	
	
	/*** set the file path ***/
	$this->file = $this->path .'/'. $this->controller . 'Controller.php';
}


}

?>
