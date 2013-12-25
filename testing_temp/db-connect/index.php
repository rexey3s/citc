<?php
	$inc_path = $_SERVER['DOCUMENT_ROOT'];
	require_once($inc_path."/lib/neo4jphp.phar");
	$client = new Everyman\Neo4j\Client();
	var_dump($client);
?>