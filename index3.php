
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Recuperar Senha</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="css/global.css" type="text/css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container-fluid bg1">
	<a class="btv btn-info" href="index.php">Voltar</a>
	<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-12"></div>
		<div class="col-md-4 col-sm-4 col-xs-12">
			<!--inicio-->
				<form class="form-conatiner3" method="POST" action="recuperacao.php">
					<center><h2 class="fonte configcollor">Recuperação de senha</h2></center>
  
  <div class="form-group">
    <label for="email" class="configcollor">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
  </div>
  
  
  <button type="submit" class="btncad btn-info btn-block">Enviar solicitação</button><br>
 
</form>

			<!--fim-->
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12"></div>
	</div>
</div>


</body>
</html>