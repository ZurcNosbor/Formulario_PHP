<?php

//CONEXÃO COM O BANCO DE DADOS


	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASS', 'coco');
	define('BASE', 'atv_int');

	$conn = new MySQLi(HOST,USER,PASS,BASE);

	
?>