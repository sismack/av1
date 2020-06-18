<?php
      include_once('Mysql.php');
      require_once "lib/nusoap.php";
  
  $soap = new soap_server;
  $mysql = new MySQL('host', 'user', 'password', 'database');
  
  $soap->configureWSDL('Mackenzie Mensagens', 'http://mackenzie.br/av1/webservice/');
  
  $soap->wsdl->schemaTargetNamespace = 'http://mackenzie.br/av1/webservice/';

	$soap->register(
		'createMensagem',
            array('nome' => 'xsd:string','email' => 'xsd:string','mensagem' => 'xsd:string','opcao' => 'xsd:string'),
            array('id' => 'xsd:int'),
            'http://mackenzie.br/av1/webservice/',
            null,
            null,
            null,
            'Cria um novo registro em banco de mensgens para ser respondido por email.'
            
	);
	
	$soap->register(
		'readMensagem',
            array('id' => 'xsd:int'),
            array('id' => 'xsd:int','nome' => 'xsd:string','email' => 'xsd:string','mensagem' => 'xsd:string','opcao' => 'xsd:string'),
            'http://mackenzie.br/av1/webservice/',
            null,
            null,
            null,
            'Recupera uma mensagem específica pelo ID.'
	);
	
      $soap->register(
		'readAllMensagem',
            array('todas' => 'xsd:string'),
            array('id' => 'xsd:int','nome' => 'xsd:string','email' => 'xsd:string','mensagem' => 'xsd:string','opcao' => 'xsd:string'),
            'http://mackenzie.br/av1/webservice/',
            null,
            null,
            null,
            'Recupera todas as mensagens'
	);
      
	$soap->register(
		'updateMensagem',
            array('id' => 'xsd:int','nome' => 'xsd:string','email' => 'xsd:string','mensagem' => 'xsd:string','opcao' => 'xsd:string'),
            array('ok' => 'xsd:boolean'),
            'http://mackenzie.br/av1/webservice/',
            null,
            null,
            null,
            'Atualiza uma mensagem específica pelo ID.'
	);
	
	$soap->register(
		'deleteMensagem',
            array('id' => 'xsd:int'),
            array('ok' => 'xsd:boolean'),
            'http://mackenzie.br/av1/webservice/',
            null,
            null,
            null,
            'Exclui uma mensagem específica enviando o ID.'
	);
 
function createMensagem($nome, $email, $mensagem, $opcao){
           try{
      		$mysql->insert('mensagens', array('nome' => $nome, 'email' => $email, 'mensagem' => $mensagem, 'opcao' => $opcao));
      		$result = $mysql->insert_id(); 
      	}catch(Exception $e){
      		echo 'Erro: ', $e->getMessage();
      	}
            
		return $result;
}

function readMensagem($id){
            try{
      		$post = $mysql->where('id', $id)->get('mensagens');
      		$return = ($post);
      	}catch(Exception $e){
      		echo 'Erro: ', $e->getMessage();
      	}
}

function readAllMensagem($id){
            try{
      		$posts = $mysql->get('mensagens');
      	      $qtde = $mysql->num_rows();
      	}catch(Exception $e){
      		echo 'Erro: ', $e->getMessage();
      	}
            
            return $result;
}

function updateMensagem($id, $nome, $email, $mensagem, $opcao){
            try{
      		$result = $mysql->where('id', $id)->update('mensagens',array('nome' => $nome, 'email' => $email, 'mensagem' => $mensagem, 'opcao' => $opcao));
      	}catch(Exception $e){
      		echo 'Erro: ', $e->getMessage();
      	}
            return $result;
}

function deleteMensagem($id){
            try{
		   $result = $mysql->where('id', $id)->delete('mensagens');
      	}catch(Exception $e){
      	   echo 'Erro: ', $e->getMessage();
      	}
		return $result;
}

$soap->service(isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '');
?>