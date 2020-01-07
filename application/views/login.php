<!-- It's RESPONSIVE TOO! -->
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Militancia Panista de Kanasin</title>
		<meta name="author" content="https://github.com/portapipe/Login-GroceryCrud" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
		<style>
			.modal-footer {   border-top: 0px; }
		</style>
	</head>
	<body>
	<!--login form-->
	<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog">
		  <div class="modal-content">
		      <div class="modal-header">
		          <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
		          <h1 class="text-center">..:: SISTEMA ::..</h1>
		      </div>
		      <div class="modal-body">
		          <form class="form col-md-12 center-block" action="<?=base_url('index.php');?>/login/makeLogin" method="post">
		            <div class="form-group">
		              <input type="text" name="username" class="form-control input-lg" placeholder="Usuario">
		            </div>
		            <div class="form-group">
		              <input type="password" name="password" class="form-control input-lg" placeholder="Contrase&ntilde;a">
		            </div>
		            <div class="form-group">
		              <button class="btn btn-primary btn-lg btn-block" type="submit">INGRESAR</button>
		              <span class="text-center"><?php if (isset($error)) {echo "<b><span style='color:red;text-align:center;'>$error</span></b>";}?></span>
		            </div>
		          </form>
		      </div>
		      <div class="modal-footer ">
		          <div class="col-md-12">
		          <button class="btn hidden" data-dismiss="modal" aria-hidden="true">&nbsp;</button>
				  </div>
		      </div>
		  </div>
	  </div>
	</div>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
	</body>
</html>
