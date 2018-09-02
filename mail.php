<!DOCTYPE html>
<html>
<head>
	<title>Fale Conosco</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 	<form action="mail_send.php" method="post">
      	<div class="card text-white bg-danger mb-3 mx-auto" id="card" style="max-width: 18rem;">
	  		<div class="card-header">Fale Conosco</div>
	  		<div class="card-body">
			    <label for="nome">Nome</label>
			    <input required type="text" class="form-control" id="name" name="nome" placeholder="Nome e Sobrenome"><br>
				<label for="email">Endereço de E-mail</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="exemplo@email.com"><br>
			    <label for="mensagem">Mensagem</label>
    			<textarea required class="form-control" id="msg" type="text" name="mensagem" rows="3"></textarea><br>
    			<div>
    				<button type="submit" class="btn btn-light" style="width: 150px">Enviar</button>
    				<button type="button" class="btn btn-dark" id="cancel" onclick="cancelar()">cancelar</button>
    			</div><br>
    			<img src="files/extfile/logo.png" class="lm-5">

	  		</div>
		</div>
    </form>
	<?php
		if(isset($_GET['recebidoComSucesso'])) {
			$isSend = $_GET['recebidoComSucesso'];
	?>
		<div class="alert alert-success" role="alert">
  			Recebido com sucesso! Te enviaremos um e-mail no endereço informado! Obrigado por entrar em contato :) 
		</div> 
	<?php		
		}
	?>
	<script>
		function cancelar() {
			window.close();
		}
	</script>
</body>
</html>