<?php

 /*** Turn error reporting on ***/
 error_reporting(E_ALL);

 /*** Include functions ***/
 require_once('functions.php');
 
 /*** Include error handler ***/
 require_once('includes/error_handler.php');

 /*** configuration ***/
 require_once('config.php');
	
 /*** define the site path ***/
 $site_path = realpath(dirname(__FILE__));
 define ('__SITE_PATH', $site_path);
 
 /*** include the init.php file ***/
 include 'includes/init.php';

 /*** load the router ***/
 $registry->router = new router($registry);

 /*** set the controller path ***/
 $registry->router->setPath (__SITE_PATH . '/controller');

 /*** load up the template ***/
 $registry->template = new template($registry);

 /*** load the corresponding controller ***/
 $registry->router->loader();

?>
