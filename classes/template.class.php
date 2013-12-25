<?php

Class Template {

/*
 * @the registry
 * @access private
 */
private $registry;

/*
 * @Variables array
 * @access private
 */
private $vars = array();

/**
 *
 * @constructor
 *
 * @access public
 *
 * @return void
 *
 */
function __construct($registry) {
	$this->registry = $registry;

}


 /**
 *
 * @set undefined vars
 *
 * @param string $index
 *
 * @param mixed $value
 *
 * @return void
 *
 */
 public function __set($index, $value)
 {
        $this->vars[$index] = $value;
 }

/*
	Load js file and css file function
*/
function loadStyle($name)
{
	$path = __SITE_LINK . 'views' . '/css/' . $name . '.css';
	echo '<link href="'.$path.'" rel="stylesheet" type="text/css" />';
}
/*
	Load js file and css file function
*/
function loadScript($name)
{
	$path = __SITE_LINK . 'views' . '/js/' . $name . '.js';
	echo '<script type="text/javascript" src="'.$path.'"></script>';
}

/*
	Load image files
*/
function loadImage($name, $title, $alt, $addData)
{
	$path = __SITE_LINK . 'views' . '/images/' . $name;
	echo '<img src="'.$path.'" title="'.((isset($title))?$title:'').'" alt="'.((isset($alt))?$alt:'').'" '.((isset($addData))?$addData:'').' />';
}
function asignImage($name, $title, $alt, $addData)
{
	$path = __SITE_LINK . 'views' . '/images/' . $name;
	return '<img src="'.$path.'" title="'.((isset($title))?$title:'').'" alt="'.((isset($alt))?$alt:'').'" '.((isset($addData))?$addData:'').' />';
}
function show($name) {
	$path = __SITE_PATH . '/views' . '/' . $name . '.php';
	if (file_exists($path) == false)
	{
		throw new Exception('Template not found in '. $path);
		return false;
	}

	// Load variables
	foreach ($this->vars as $key => $value)
	{
		$$key = $value;
	}
	
	include ($path);               
}




}

?>
