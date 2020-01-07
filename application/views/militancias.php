<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="Cheche Pech">
<meta name="owner" content="Cheche Pech">
<meta name="robots" content="index, follow">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- [if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif] -->
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css"/>
<!-- Title -->
<title>Militantes Panistas de Kanasin</title>
<?php
foreach ($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach;?>
</head>
<body>
	<div class="container-fluid">
		<div class="grid">
			<div class="col-12">

<header>
	<nav class="navbar">
		<input class="menu-toggle" type="checkbox" id="menu">
    <label class="burger-btn" for="menu">
        <span class="burger-icon"></span>
    </label>
		<a class="link text-brand" href="<?php echo base_url();?>">MILITANCIA</a>
		<div class="navbar-content">
			<a href='<?php echo site_url('/militancia/militantes') ?>'>MILITANTES</a>			
		</div>
		<div class="navbar-end">
			<a href='<?php echo site_url('/login/logout') ?>'>SALIR</a>
		</div>
	</nav>
</header>
<!-- /header -->
			

	 <!-- Table -->
	 	<div class="text-center">
	 		<h1>MILITANTES</h1>
	 	</div>
    	<div>
           	<?php echo $output; ?>
    	</div>
    <!-- End Table -->

			<footer>
				<div class="vertical-center">
					<p class="text-center">Copyright 2019 - Design &amp; Development by <a href="https://www.facebook.com/reyezpech" target="_blank">Cheche Pech</a></p>
				</div>
			</footer>
    <?php foreach ($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach;?>
    </div></div></div>
</body>
</html>