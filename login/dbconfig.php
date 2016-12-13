<?php

	$DB_HOST = 'gg-219291.mysql.binero.se';
	$DB_USER = '219291_ow20538';
	$DB_PASS = 'Sommar16';
	$DB_NAME = '219291-gg';
	
	try{
		$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	
