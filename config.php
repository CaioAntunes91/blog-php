<?php 

	define('INCLUDE_PATH', 'http://localhost/Danki_Code_Projeto1/');
	
	$autoload = function($class) {
		if ($class == 'Email') {
			include('./classes/phpmailer/PHPMailerAutoload.php');
		};
		include('./classes/'.$class.'.php');// Por que a variável INCLUDE_PATH não pode ser utilizada aqui?f
	};// $autoload = function() é igual à function autoload()

	spl_autoload_register($autoload);

 ?>