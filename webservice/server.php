<?php
      require_once "conexao.php";
      require_once "lib/nusoap.php";
  
  $soap = new soap_server;
  
  $soap->configureWSDL('Mackenzie Dúvidas', 'http://mackenzie.br/av1/webservice/');
  
  $soap->wsdl->schemaTargetNamespace = 'http://mackenzie.br/av1/webservice/';

	$soap->register(
		'createDuvida',
            array('nome' => 'xsd:string','email' => 'xsd:string','duvida' => 'xsd:string'),
            array('ok' => 'xsd:int'),
            'http://mackenzie.br/av1/webservice/',
            null,
            null,
            null,
            'Cria um novo registro em banco de dúvidas para ser respondido por email.'
            
	);
	
	$soap->register(
		'readDuvida',
            array('id' => 'xsd:int'),
            array('id' => 'xsd:int','nome' => 'xsd:string','email' => 'xsd:string','duvida' => 'xsd:string'),
            'http://mackenzie.br/av1/webservice/',
            null,
            null,
            null,
            'Recupera uma dúvida específica pelo ID.'
	);
	
      $soap->register(
		'readAllDuvida',
            array('todas' => 'xsd:string'),
            array('id' => 'xsd:int','nome' => 'xsd:string','email' => 'xsd:string','duvida' => 'xsd:string'),
            'http://mackenzie.br/av1/webservice/',
            null,
            null,
            null,
            'Recupera todas as dúvidas'
	);
      
	$soap->register(
		'updateDuvida',
            array('id' => 'xsd:int','nome' => 'xsd:string','email' => 'xsd:string','duvida' => 'xsd:string'),
            array('ok' => 'xsd:int'),
            'http://mackenzie.br/av1/webservice/',
            null,
            null,
            null,
            'Atualiza uma dúvida específica pelo ID.'
	);
	
	$soap->register(
		'deleteDuvida',
            array('id' => 'xsd:int'),
            array('ok' => 'xsd:int'),
            'http://mackenzie.br/av1/webservice/',
            null,
            null,
            null,
            'Exclui uma dúvida específica enviando o ID.'
	);
 
function createDuvida($nome, $email, $duvida){
            $con = conectar();
		$sql = "INSERT INTO duvidas (nome, email, duvida) VALUES (null, '".$nome."', '".$email."', '".$duvida."')";
		$result = mysqli_query($con,$sql);
		return $result;
}

function readDuvida($id){
            $con = conectar();
		$sql = "SELECT * FROM duvidas WHERE id='".$id."'";
		$result = mysqli_query($con,$sql);
		return $result;
}

function readAllDuvida($id){
            $con = conectar();
		$sql = "select * from duvidas";
		$result = mysqli_query($con,$sql);
				
		$duvidas = array();
		
		$linha = mysqli_fetch_assoc($result);
		$total = mysqli_num_rows($result);
				
		$i =0;
		if($total > 0) {
              while ($row = mysqli_fetch_assoc($result)){
                  $produtos[++$i] = $row;
              }
		}
		return $produtos;
}

function updateDuvida($id, $nome, $email, $duvida){
            $con = conectar();
            $sql =  "UPDATE duvidas SET nome='".$nome."', email='".$email."', duvida='".$duvida."' WHERE id=".$id;
		$result = mysqli_query($con,$sql);
		return $result;
}

function deleteDuvida($id){
            $con = conectar();
		$sql = "DELETE FROM duvidas WHERE id='".$id."'";
		$result = mysqli_query($con,$sql);
		return $result;
}

$soap->service(isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '');
?>