<?php

Class Registry {

 /*
 * @the vars array
 * @access private
 */
 private $vars = array();


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

 /**
 *
 * @get variables
 *
 * @param mixed $index
 *
 * @return mixed
 *
 */
 public function __get($index)
 {
	if (isset($this->vars[$index]))
	{
		return $this->vars[$index];
	}
	else
	{
		return NULL;
		trigger_error("Variabe ".$index." is not existed in Registry");
	}
}

 /*
 *
 * Add more variables from url
 *
 *	
 */

 public $url_addition_vars = array();
 public function set_addition_vars($value)
 {
	$this->url_addition_vars[] = $value;
 }
 
 public function get_addition_vars()
 {
	return $this->url_addition_vars;	
 }
 
}

?>
