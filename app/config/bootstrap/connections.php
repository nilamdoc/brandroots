<?php
use lithium\data\Connections;

 Connections::add('default', array(
 	'type' => CONNECTION_TYPE,
 	'host' => array(CONNECTION,
		),
//	'replicaSet' => true,
 	'database' => CONNECTION_DB,
	'login' => CONNECTION_USER,
	'password' => CONNECTION_PASS,	
//	'setSlaveOkay' => true,
//	'readPreference' => Mongo::RP_NEAREST	
 ));
?>