<?php

 /*** include the controller class ***/
 include __SITE_PATH . '/classes/' . 'controller_base.class.php';

 /*** include the registry class ***/
 include __SITE_PATH . '/classes/' . 'registry.class.php';

 /*** include the router class ***/
 include __SITE_PATH . '/classes/' . 'router.class.php';

 /*** include the template class ***/
 include __SITE_PATH . '/classes/' . 'template.class.php';

 /*** auto load model classes ***/
    function __autoload($class_name) {
    $filename = strtolower($class_name) . '.class.php';
    $file = __SITE_PATH . '/model/' . $filename;

    if (file_exists($file) == false)
    {
        return false;
    }
  include ($file);
}

 /*** a new registry object ***/
 $registry = new registry;

 /*** add db to registry ***/
  $registry->db = new db();
  
?>
