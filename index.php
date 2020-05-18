<?php include('./config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Projeto 01</title>
	<link href="<?php echo INCLUDE_PATH; ?>estilos/all.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH; ?>estilos/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="palavras-chave">
	<meta name="description" content="Descrição do meu website">
	<meta charset="utf-8" />
</head>
<body>

	<base base="<?php echo INCLUDE_PATH; ?>"/>

	<?php 
		
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';

		switch ($url) {
			case 'depoimentos':
				echo '<target target="depoimentos" />';
				break;
			
			case 'servicos':
				echo '<target target="servicos" />';
				break;
		}
	 ?>

	 <?php new Email(); ?>

	<header>
		<div class="center">
			<div class="logo left"><a href="./">Logomarca</a></div><!--logo-->
			<nav class="desktop right">
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			<nav class="mobile right">
				<div class="botao-menu-mobile">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</div><!--center-->
	</header>

	<div class="container-principal">
		
		<?php 

			if (file_exists('./pages/'.$url.'.php')) {
				include('./pages/'.$url.'.php');
			} else {
				if ($url != 'depoimentos' && $url != 'servicos') {
					$pagina404 = true;
					include('./pages/404.php');
				} else{
					include('./pages/home.php');
				}
			}

		 ?>

	</div>

	<footer <?php if (isset($pagina404) && $pagina404) echo 'class = "fixed"'; ?>>
		<div class="center">
			<p>Todos os direitos reservados!</p>
		</div>
	</footer>

	<script src="<?php echo INCLUDE_PATH; ?>node_modules/jquery/dist/jquery.js"></script>
	<script src="<?php echo INCLUDE_PATH ?>javascript/constants.js"></script>

	 <script src="http://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4"></script>
	 <script src="<?php echo INCLUDE_PATH ?>javascript/map.js"></script>

	<script src="<?php echo INCLUDE_PATH; ?>javascript/scripts.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>javascript/slider.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>javascript/exemplo.js"></script>

</body>
</html>